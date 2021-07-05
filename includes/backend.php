<?php
    // login block
    if(isset($_POST['login'])){
        $username=$_POST['username'];
        $passwd=$_POST['passwd'];
        $query = mysqli_query($conn,"SELECT * FROM farm_admins WHERE username='$username' and passwd='$passwd'");
        $result = mysqli_num_rows($query);
		if($result>0)
		{
			$row = mysqli_fetch_assoc($query);
			$_SESSION["ID"] = $row["admin_id"]; 
			$_SESSION["USERNAME"] = $row["username"];
			
            header("location:dashboard.php");
		}
		else
		{
			echo "<h1>Login Filed</h1>";
		}
    }

    // add admin block
    if(isset($_POST['add'])){

        $username=$_POST['username'];
        $passwd=md5($_POST['passwd']);
        $con_passwd=md5($_POST['con_passwd']);

        // check if passwords match
        if($passwd==$con_passwd){

            // check if admin username already taken
            $sql_result = mysqli_query($conn,"SELECT * FROM farm_admins WHERE username='$username'");
            $admin_check= mysqli_num_rows($sql_result);

            if($admin_check==0){
                $insert_query =mysqli_query($conn,"INSERT INTO farm_admins VALUES (0,'$username','$passwd')");
                if($insert_query){
                    header("location:dashboard.php");
                }
            }
            else{
                echo "<script>alert('User Name Taken Try a unique one...');</script>";
            }
        }
        else{
            echo "<script>alert('Passwords not matching');</script>";
            
        }
        
    }

?>