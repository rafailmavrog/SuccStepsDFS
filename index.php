<?php
include('login.php'); // Includes Login Script

if(isset($_SESSION['login_user'])){
header("location: profile.php");
}

?>
<!DOCTYPE html>
<html>
<head>
<title>SuccSteps | Σύνδεση Συνεργάτη</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<div id="main">
<center><img src="img/logo.png">
<h1>Salon Management System</h1></center>
<div id="login">
<h2>Σύνδεση Συνεργάτη</h2>
<br>
<form action="" method="post">
<label>ΑΦΜ :</label>
<input id="username" name="username" placeholder="πχ. 111111111" type="text">
<br><br>
<label>Κωδικός Πρόσβασης :</label>
<input id="password" name="password" placeholder="******" type="password">
<br>
<br>
<input name="submit" type="submit" value=" Login ">
<span><?php echo $error; ?></span>
</form>
</div>
</div>
</body>
</html>