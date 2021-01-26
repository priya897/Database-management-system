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
$pid= mysqli_real_escape_string($link, $_POST['pid']);
$issue_date	= mysqli_real_escape_string($link, $_POST['issue_date']);
$no_of_items	= mysqli_real_escape_string($link, $_POST['no_of_items']);

 
// Attempt insert query execution
$sql = "INSERT INTO BILL(cid, pid, issue_date, no_of_items) VALUES ('$cid'', '$pid', '$issue_date','$no_of_items')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>