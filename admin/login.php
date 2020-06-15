<?php
session_start();
?>

<!DOCTYPE HTML>
<html>
<head>
    <title>Login Form</title>
    <meta charset="UTF-8" />
    <meta name="Designer" content="PremiumPixels.com">
    <meta name="Author" content="$hekh@r d-Ziner, CSSJUNTION.com">
    <link rel="stylesheet" type="text/css" href="css/reset.css">
    <link rel="stylesheet" type="text/css" href="css/structure.css">
</head>

<body>
<form class="box login" method="post" action="login.php">
    <fieldset class="boxBody">
        <label>Email:</label>
        <input type="text" tabindex="1" name="email" placeholder="Enter Your Email" required>
        <label>Password:</label>
        <input type="password" tabindex="2" name="pass" placeholder="Enter Your Password" required>
    </fieldset>
    <footer>
        <input type="submit" name="submit" class="btnLogin" value="Login" tabindex="4">
    </footer>
</form>

</body>
</html>
<?php
include '../libs/database.php';
include '../libs/config.php';
include '../functions.php';
$db = new database();
 if(isset($_POST['submit'])){
     $email = mysqli_real_escape_string($db->link, $_POST['email']);
     $pass = mysqli_real_escape_string($db->link, $_POST['pass']);
     $query = "SELECT * FROM admin WHERE email = '$email' AND password = '$pass'";
     $run = $db->select($query);
     if($run->num_rows > 0){
         $_SESSION['email'] = $email;
         header("location:index.php");
     }else{
         echo "UnSuccessfull";
     }
 }
?>