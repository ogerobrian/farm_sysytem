<?php
include "config.php";
session_start();
include "backend.php";
// check if user is logged in
if(!isset($_SESSION['ID'])){
   // header("location:login.php");
}
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/dashboard_v.css">
    <link rel="stylesheet" href="css/menu_view.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" href="css/openstores.css">


</head>

<body>
    <!-- side bar added here to apper in all pages -->
    <div class="sidebar">
        <a class="active" href="#fms">
            <h2 style="text-align:center;font-family:courier;color:green;">FMS</h2>
        </a>

        <div class="sidenav">
            <button class="dropdown-btn">Stores
                <i class="fa fa-caret-down"></i>
            </button>
            <div class="dropdown-container">
                <!-- php to fetch store names from DB -->
                <?php
$query = mysqli_query($conn,"SELECT * FROM stores") 
or mysqli_error ("Error in query!!");

while($row = mysqli_fetch_array($query))
{ 
?>
                <a href="OpenStore.php ?open=<?php echo $row['store_name']; ?>"><?php echo $row["store_name"];?></a>
                <?php
}
?>
            </div>

        </div>
        <?php include "menu.php"; ?>
    </div>
    <!-- end of header -->

    <div class="content">
        <h1 style="text-align:center;font-family:courier;color:orange;">Farm Management System</h1>