<!DOCTYPE html>
<html lang="en">
    <?php include("connect.php"); ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>
<link rel="stylesheet" type="text/css" href="style1.css">
<body>
    <div id="form">
        <h1> Sign Up</h1>
        <form name= "form" action="signup.php" method="POST">
        <label>Full Name</label>
        <input type="text" id="name" name="name"> </br></br>
        <label>Email</label>
        <input type="email" id="email" name="email"> </br></br>
        <label>Username</label>
        <input type="text" id="user" name="user"> </br></br>
        <label>Password</label>
        <input type="password" id="pass" name="pass"> </br></br>    
        <label>Confirm Password</label>
        <input type="password" id="cpass" name="cpass"> </br></br>
        <input type="submit" id="btn" value="Sign Up" name="submit">
        


        </form>
    </div>    
    
</body>
</html>