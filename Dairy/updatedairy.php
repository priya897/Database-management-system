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
 


$Dname =  mysqli_real_escape_string($link, $_POST['Dname']);
$Dnumber= mysqli_real_escape_string($link, $_POST['Dnumber']);
$Mgr_ssn	= mysqli_real_escape_string($link, $_POST['Mgr_ssn']);
$Mgr_start_date	= mysqli_real_escape_string($link, $_POST['Mgr_start_date']);
$NO_OF_EMPLOYEES	= mysqli_real_escape_string($link, $_POST['NO_OF_EMPLOYEES']);
$EDname =  mysqli_real_escape_string($link, $_POST['EDname']);

 
// Attempt insert query execution
$sql = "UPDATE DAIRY SET Dname="'$Dname', Dno='$Dnumber', Mgr_ssn='$Mgr_ssn', Mgr_start_date='$Mgr_start_date', NO_OF_EMPLOYEES='$NO_OF_EMPLOYEES' WHERE Dnumber='$EDnumber';
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>