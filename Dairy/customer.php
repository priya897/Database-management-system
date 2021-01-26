<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "root", "dairy");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
	echo "connectd";
}
 


$cid =  mysqli_real_escape_string($link, $_POST['cid']);
$mobno= mysqli_real_escape_string($link, $_POST['mobno']);
$purchase_date	= mysqli_real_escape_string($link, $_POST['purchase_date']);
$custumer_name	= mysqli_real_escape_string($link, $_POST['custumer_name']);

 
// Attempt insert query execution
$sql = "INSERT INTO CUSTUMER(cid, mobno, purchase_date, custumer_name) VALUES ('$cid'', '$mobno', '$purchase_date','$custumer_name')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>