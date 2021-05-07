<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
    font-family: "Lato", sans-serif;
}

.sidenav {
    height: relative;
    width: 300px;
    position: relative;
    z-index: 1;
    top: 0;
    left: 0;
    background-color: #337ab7;
    overflow-x: hidden;
    padding-top: 20px;
    margin-top: 160px;
    vertical-align: center;
    color: #FFF;
}

.sidenav a {
    padding: 10px 8px 10px 16px;
    text-decoration: none;
    font-size: 25px;
    color: #FFF;
    display: block;
}

.sidenav a:hover {
    color: #000;
}

.main {
    margin-left: 300px; /* Same as the width of the sidenav */
    font-size: 28px; /* Increased text to enable scrolling */
    padding: 0px 10px;
    text-align: center;
}

.sidenav h3 {
    font-weight: bold;
    color: white;
    font-family: "Lato", sans-serif;
    margin-left: 16px;
    width:200px;
    margin-bottom: 5px; 
}

.sidenav img {
    margin-left: 400px;
    margin-top: 300px;
    margin-right: 100px;
}

@media screen and (max-height: 450px) {
    .sidenav {padding-top: 15px;}
    .sidenav a {font-size: 18px;}
}
.main-cont{
    display: flex;
}
.sidenav-cont{
    width: 50%;
}
.admin-cont{
    width: 50%;
    display: flex;
    justify-content: center;
    align-items: end;
}
.admin-img{
    width: 300px;
    height: 300px;
}
</style>
</head>
<body>
    <div class="main-cont">
    <div class="sidenav-cont">
        <div class="sidenav">
            <h3><u>ACTIONS</u></h3>
            <a href="admin-add-product.php">Add product</a>
            <a href="admin-delete-product.php">Delete product</a>
            <a href="admin-delete-review.php">Remove reviews</a>
            <a href="admin-rate-product.php">Rate a product</a>
        </div>
        </div>
        <div class="admin-cont">
            <img class="admin-img" src="../images/admin.png" alt="">
        </div>
    </div>
</body>
</html> 
