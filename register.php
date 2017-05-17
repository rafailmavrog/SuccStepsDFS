<?php
?>
<html>
<head>
<title> SuccSteps Registration</title>
<link href="style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="css/bootstrap.min.css">
<script src="js/bootstrap.min.js"></script>
</head>
<body>
<center><img src="img/logo.png">
<h1>Καταχώρηση Στοιχείων Επιχείρησης</h1></center>
<hr>
<div id="main">
<form action="insert.php" method="post">
<label>Επωνυμία Επιχείρησης:</label>
<input id="eponimia" name="eponimia" placeholder="SuccSteps AE" type="text">
<br><br>
<label>Όνομα:</label>
<input id="name" name="name" placeholder="Γιώργος" type="text">
<br><br>
<label>Επίθετο:</label>
<input id="surname" name="surname" placeholder="Παπαδόπουλος" type="text">
<br><br>
<label>ΑΦΜ:</label>
<input id="vat_number" name="vat_number" placeholder="111111111" type="text" >
<br><br>
<label>ΔΟΥ:</label>
<input id="tax_office" name="tax_office" placeholder="Α' ΑΘΗΝΩΝ" type="text">
<br><br>
<label>Σταθερό Τηλέφωνο:</label>
<input id="tel" name="tel" placeholder="2101234567" type="text">
<br><br>
<label>Κινητό Τηλέφωνο:</label>
<input id="mobile" name="mobile" placeholder="6912345678" type="text">
<br><br>
<label>Email:</label>
<input id="email" name="email" placeholder="example@hotmail.com" type="text">
<br><br>
<label>Κωδικός Πρόσβασης :</label>
<input id="password" name="password" placeholder="**********" type="password">
<br><br>
<input name="submit" type="submit" value="Καταχώρηση">
</form>
</div>
</body>
</html>