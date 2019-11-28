<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "toll");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 $Vehicle_no = mysqli_real_escape_string($link, $_REQUEST['Vehicle_no']);
$Tk = mysqli_real_escape_string($link, $_REQUEST['Tk']);
$sql= "UPDATE bridge_1 SET Tk='$Tk' WHERE  Vehicle_no='$Vehicle_no'";
//$sql = "SELECT Deposit_amount FROM bridge_1";

//$result = mysqli_query($link,"SELECT * FROM bridge_1");

//while($row = mysqli_fetch_array($result)) {

             //$m=$row['Deposit_amount'] ; 
			 //$n=$row['Due'] ; 
                //}
//$Deposit_amount=$m-$Tk; 
//if($Deposit_amount<0)
//{
            
			//$Due=$Deposit_amount;;
               // $sql2 = "UPDATE bridge_1 SET Due='$Due' WHERE  Vehicle_no='$Vehicle_no'";
				//if(mysqli_query($link, $sql2)){
				//include("Home_1.php");
			//}
					//$Deposit_amount=0;
//}	
 
//$sql = "UPDATE bridge_1 SET Deposit_amount='$Deposit_amount' WHERE  Vehicle_no='$Vehicle_no'";


if(mysqli_query($link, $sql)){
    include("Deduct1 insert.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>