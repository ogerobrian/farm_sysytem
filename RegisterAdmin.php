<?php
 include "includes/header.php";					
?>



        <form class="modal-content animate" style=" background: linear-gradient(to bottom,lightblue,#EEEEEE,orange);" action="RegisterAdmin.php" method="post">
        <h3 style="text-align:center;font-family:courier;color:green;padding:10px;">Register New System Admin</h3>

            <div class="container">
                <label for="uname"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" name="username" required>
                <select name="user_type" style="background-color:tomato;width:100%;">
        <option value="">Select User Type</option>

        <?php
				    $query = mysqli_query($conn,"SELECT * FROM user_type") 
					or mysqli_error ("Error in query!!");
					
					while($row = mysqli_fetch_array($query))
					{
						echo "<option value='".$row["user_type"]."'>".$row["user_type"]."</option>";
					}
				?>

        </select><br>
                <label for="psw"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" name="passwd" required>

                <label for="psw"><b>Retype Password</b></label>
                <input type="password" placeholder="Retype Password" name="con_passwd" required>
                <button type="submit" name="add">Add</button>

            </div>
        </form>

    <?php
 include "includes/footer.php";					
?>