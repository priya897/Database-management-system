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
 


$pid =  mysqli_real_escape_string($link, $_POST['pid']);
$pname= mysqli_real_escape_string($link, $_POST['pname']);
$cost	= mysqli_real_escape_string($link, $_POST['cost']);
$qty	= mysqli_real_escape_string($link, $_POST['qty']);

 
// Attempt insert query execution
$sql = "INSERT INTO MILKPRODUCTS(pid, pname, cost, qty) VALUES ('$pid'', '$pname', '$cost','$qty')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>