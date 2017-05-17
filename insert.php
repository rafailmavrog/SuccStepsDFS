<?php
/* Attempt MySQL server connection. Assuming you are running MySQL

server with default setting (user 'root' with no password) */

$link = mysqli_connect("localhost", "root", "", "ss_db");

// Escape user inputs for security

$eponimia = mysqli_real_escape_string($link, $_REQUEST['eponimia']);

$name = mysqli_real_escape_string($link, $_REQUEST['name']);

$surname = mysqli_real_escape_string($link, $_REQUEST['surname']);

$tax_office = mysqli_real_escape_string($link, $_REQUEST['tax_office']);

$tel = mysqli_real_escape_string($link, $_REQUEST['tel']);

$mobile = mysqli_real_escape_string($link, $_REQUEST['mobile']);

$email = mysqli_real_escape_string($link, $_REQUEST['email']);

$vat_number = mysqli_real_escape_string($link, $_REQUEST['vat_number']);

$password = mysqli_real_escape_string($link, $_REQUEST['password']);

//Attempt insert query execution
$sql = "INSERT INTO partners (eponimia, name, surname, tax_office, tel, mobile, email, vat_number, password) VALUES ('$eponimia', '$name', '$surname', '$tax_office', '$tel', '$mobile', '$email', '$vat_number', '$password')";
if(mysqli_query($link, $sql)){
	echo "Καταχώρηση επιτυχής.";
}else{
	echo "ΣΦΑΛΜΑ: Δεν υπάρχει σύνδεση στην βάση δεδομένων" . mysqli_error($link);
}
//Close connection
mysqli_close($link)

?>