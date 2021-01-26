<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password)  +5
120*/
$link = mysqli_connect("localhost", "root", "root", "dairy");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
else
{
	echo "connectd";
}
 


$Dnumber=  mysqli_real_escape_string($link, $_POST['Dnumber']);
$Dlocation= mysqli_real_escape_string($link, $_POST['Dlocation']);

$EDnumber=  mysqli_real_escape_string($link, $_POST['EDnumber']);


 
// Attempt insert query execution
$sql = "UPDATE DAIRYLOCATION SET Dnumber='$Dnumber', Dlocation='$Dlocation' WHERE Dnumber='$EDnumber";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>