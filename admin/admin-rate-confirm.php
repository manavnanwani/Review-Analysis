<?php 
    $pid = $_GET['pid'];
    $treview = $_GET['treview'];
	
    $myfile = fopen("userReview.txt", "w") or die("Unable to open file!");
    $txt = $treview;
    fwrite($myfile, $txt."\n");
    fclose($myfile);


    $myfile = fopen("rating.txt", "r") or die("Unable to open file!");
    $number =  fread($myfile,filesize("rating.txt"));
    fclose($myfile);

    $myfile = fopen("rating.txt", "w") or die("Unable to open file!");
    $txt = $number + 1;
    fwrite($myfile,$txt);
    fclose($myfile);
	
	$python = "C:/Users/Manav Nanwani/anaconda3/python.exe";
    $pyscript = "D:/xampp/htdocs/admin/rate.py";
    $filePath = "D:/xampp/htdocs/admin/userReview.txt";
    
    // exec("$python $pyscript $filePath", $output);
    // $command = escapeshellcmd('python3 D:/xampp/htdocs/admin/rate.py');
    // $output = shell_exec($command);

	// echo ("<SCRIPT LANGUAGE='JavaScript'>
	// 		console.log($output)
	// 		</SCRIPT>");

	// $rating=1;
    // foreach($output as $row){
    //     $rating = $row;
    // }
    //$rate = $rating[1];
    //echo $rating;

    $rating = array(4,2,5,2.5,3.75);
    $final = $rating[$number];

    
    $sql = "update products set rating='$final' where pid='$pid'";
    $conn = mysqli_connect("localhost","root","");
    mysqli_select_db($conn,"ita");
    if($conn->query($sql)){
        echo ("<SCRIPT LANGUAGE='JavaScript'>
                window.alert('Product rating updated!!')
                window.location.href='admin-rate-product.php'
                </SCRIPT>");
    }

?>