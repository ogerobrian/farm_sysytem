<?php
include "includes/header.php";

?>
<form class="modal-content animate" style=" background: linear-gradient(to bottom,lightblue,#EEEEEE,orange);"
    action="login.php" method="post">

    <div class="container">
        <label for="uname"><b>Username</b></label>
        <input type="text" placeholder="Enter Username" name="username" required>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="passwd" required>

        <button type="submit" name="login">Login</button>

    </div>
</form>
<?php
   include "includes/footer.php";
   ?>