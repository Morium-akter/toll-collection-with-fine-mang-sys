<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "toll");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}

 //$Vehicle_no = mysqli_real_escape_string($link, $_REQUEST['Vehicle_no']);
//$Tk = mysqli_real_escape_string($link, $_REQUEST['Tk']);
//$sql= "UPDATE bridge_1 SET Tk='$Tk' WHERE  Vehicle_no='$Vehicle_no'";
//$sql = "SELECT Deposit_amount FROM bridge_1";

$result = mysqli_query($link,"SELECT * FROM bridge_1");

while($row = mysqli_fetch_array($result)) {
             $v=$row['Vehicle_no'] ;
			 $t=$row['Tk'] ;
             $m=$row['Deposit_amount'] ; 
			 $n=$row['Due'] ;  
                }
		//$s=$m-$t; 
		$Deposit_amount=$m-$t;
		if($Deposit_amount>0){
			//$s=$Due;
			$Due=0;
		$sql = "UPDATE bridge_1 SET  Due='$Due',Deposit_amount='$Deposit_amount' WHERE  Vehicle_no='$Vehicle_no'";
		}
if($Deposit_amount<0)
{
           // include("Deduct2 insert.php");
        $p=$Deposit_amount;
		//$q=$n;
			$Due=-($p);
			$Deposit_amount=0;
			$sql = "UPDATE bridge_1 SET Due='$Due',Deposit_amount='$Deposit_amount' WHERE  Vehicle_no='$Vehicle_no'";
			 //include("Deduct2 insert.php");
					
}	
 //$result1 = mysqli_query($link,"SELECT * FROM temporary");

//while($row = mysqli_fetch_array($result1)) {
             //$a=$row['No'] ;
			  //$b=$row['Due'] ;
                //}
	//if($Deposit_amount>0||$Deposit_amount==0){
		//$sql = "UPDATE temporary SET Due='$Due',Deposit_amount='$Deposit_amount' WHERE  No='1'";
	//}


if(mysqli_query($link, $sql)){
    include("home_1.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>