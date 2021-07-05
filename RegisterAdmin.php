<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div id="id01" class="modal">
        <?php
include "includes/header.php";
?>
        <form class="modal-content animate" style=" background: linear-gradient(to bottom,lightblue,#EEEEEE,orange);" action="RegisterAdmin.php" method="post">
        <h3 style="text-align:center;font-family:courier;color:green;padding:10px;">Register New System Admin</h3>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="passwd" required>

                <label for="psw"><b>Retype Password</b></label>
                <input type="password" placeholder="Retype Password" name="con_passwd" required>
                <button type="submit" name="add">Add</button>

            </div>
        </form>
    </div>

</body>

</html>
