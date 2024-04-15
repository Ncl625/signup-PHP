<?php
    include("connect.php");
    if(isset($_POST['submit'])){
        $name=$_POST['name'];
        $email=$_POST['email'];
        $username=$_POST['user'];
        $password=$_POST['pass'];
        $cpassword=$_POST['cpass'];

        if($password!=$cpassword){
           echo "<h1>Password must match</h1>"; 

        }
        else{

            $sql = "INSERT INTO user(name, email, username, password) VALUES('$name', '$email', '$username', '$password')";
            $result = mysqli_query($conn, $sql);
            header("Location: http://localhost/userlogin/index.php");

        } 

    }



?>