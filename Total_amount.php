<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "toll");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$result = mysqli_query($link,"SELECT * FROM bridge_1");

while($row = mysqli_fetch_array($result)) {
             $v=$row['Vehicle_no'] ;
			 $t=$row['Tk'] ;
             $m=$row['Deposit_amount'] ; 
			 $n=$row['Due'] ;  
			 $p=$row['Total_amnt'] ;
			 $o=$row['Vehicle_type'] ;
                }
				$result1 = mysqli_query($link,"SELECT * FROM price");
            if($o=='car'){
                while($row = mysqli_fetch_array($result1)) {

			   $j=$row['car'];
 
            }
			if($n>0){
			$s=$n*0.2;
			$Total_amnt=$n+$j+$s;
			$sql = "UPDATE bridge_1 SET Total_amnt='$Total_amnt' WHERE  Vehicle_no='$v'";
			}
			if($n==0){
			$Total_amnt=$j;
		   $sql = "UPDATE bridge_1 SET Total_amnt='$Total_amnt' WHERE  Vehicle_no='$v'"; 
			}
         }

		    
		  if($o=='bus'){
                while($row = mysqli_fetch_array($result1)) {

			   $j=$row['bus'];
 
            }
			if($n>0){
			$s=$n*0.2;
			$Total_amnt=$n+$j+$s;}
			$Total_amnt=$j;
		   $sql = "UPDATE bridge_1 SET Total_amnt='$Total_amnt' WHERE  Vehicle_no='$v'"; 
         } 
	 if($o=='track'){
                while($row = mysqli_fetch_array($result1)) {

			   $j=$row['track'];
 
            }
			if($n>0){
			$s=$n*0.2;
			$Total_amnt=$n+$j+$s;}
			$Total_amnt=$j;
		   $sql = "UPDATE bridge_1 SET Total_amnt='$Total_amnt' WHERE  Vehicle_no='$v'"; 
      } 
	if($o=='bike'){
                while($row = mysqli_fetch_array($result1)) {

			   $j=$row['bike'];
 
            }
			if($n>0){
			$s=$n*0.2;
			$Total_amnt=$n+$j+$s;}
			$Total_amnt=$j;
		   $sql = "UPDATE bridge_1 SET Total_amnt='$Total_amnt' WHERE  Vehicle_no='$v'"; 
         } 
	if($o=='CNG'){
                while($row = mysqli_fetch_array($result1)) {

			   $j=$row['CNG'];
 
            }
			if($n>0){
			$s=$n*0.2;
			$Total_amnt=$n+$j+$s;}
			$Total_amnt=$j;
		   $sql = "UPDATE bridge_1 SET Total_amnt='$Total_amnt' WHERE  Vehicle_no='$v'"; 
         } 
if($o=='others'){
                while($row = mysqli_fetch_array($result1)) {

			   $j=$row['others'];
 
            }
			if($n>0){
			$s=$n*0.2;
			$Total_amnt=$n+$j+$s;}
			$Total_amnt=$j;
		   $sql = "UPDATE bridge_1 SET Total_amnt='$Total_amnt' WHERE  Vehicle_no='$v'"; 
         } 



if(mysqli_query($link, $sql)){
    include("login_search.php");
} else {
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>