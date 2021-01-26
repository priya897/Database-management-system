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
 


$Fname =  mysqli_real_escape_string($link, $_POST['Fname']);
$Minit= mysqli_real_escape_string($link, $_POST['Minit']);
$Lname	= mysqli_real_escape_string($link, $_POST['Lname']);
$Bdate	= mysqli_real_escape_string($link, $_POST['Bdate']);
$Address	= mysqli_real_escape_string($link, $_POST['Address']);
$Gender	= mysqli_real_escape_string($link, $_POST['Gender']);
$Salary	= mysqli_real_escape_string($link, $_POST['Salary']);
$Super_ssn	= mysqli_real_escape_string($link, $_POST['Super_ssn']);
$Dno	= mysqli_real_escape_string($link, $_POST['Dno']);
$education	= mysqli_real_escape_string($link, $_POST['education']);
$branch	= mysqli_real_escape_string($link, $_POST['branch']);
$mob_no= mysqli_real_escape_string($link, $_POST['mob_no']);

 
// Attempt insert query execution
$sql = "INSERT INTO EMPLOYEE(Fname, Minit, Lname, Ssn, Bdate, Address, Gender, Salary, Super_ssn, Dno, education, branch, mob_no) VALUES ('$Fname', '$Minit', '$Lname','$Ssn','$Bdate','$Address','$Gender','$Salary','$Super_ssn','$Dno','$education','$branch','$mob_no')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// Close connection
mysqli_close($link);
?>