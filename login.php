<?php
include "includes/header.php";
?>
<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/login.css">
</head>

<body>
    <div id="id01" class="modal">

        <form class="modal-content animate" style=" background: linear-gradient(to bottom,lightblue,#EEEEEE);">
            <div class="imgcontainer">
            </div>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="uname" required>

                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="psw" required>

                <button type="submit">Login</button>

            </div>
        </form>
    </div>

</body>

</html>
