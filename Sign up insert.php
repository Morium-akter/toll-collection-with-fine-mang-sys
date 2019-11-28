<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "toll");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$Vehicle_no = mysqli_real_escape_string($link, $_REQUEST['Vehicle_no']);
$Bridge_no = mysqli_real_escape_string($link, $_REQUEST['Bridge_no']);
$Vehicle_type = mysqli_real_escape_string($link, $_REQUEST['Vehicle_type']);
//$Driver_name = mysqli_real_escape_string($link, $_REQUEST['Driver_name']);
$Deposit_amount = mysqli_real_escape_string($link, $_REQUEST['Deposit_amount']);
$Date = mysqli_real_escape_string($link, $_REQUEST['Date']);


// attempt insert query execution
$sql = "INSERT INTO bridge_1 (Vehicle_no, Bridge_no, Vehicle_type, Deposit_amount, Date) VALUES ('$Vehicle_no', '$Bridge_no', '$Vehicle_type', '$Deposit_amount','$Date')";
if(mysqli_query($link, $sql)){
	
    include("Deduct form.php");
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>