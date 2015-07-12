<?php

$servername = "localhost";
$username = "root";
$password = "code4good";
$dbname = "jpmc11";
// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$user=$_POST['email'];
$pass =$_POST['password'];
$type=$_POST['elecRating'];
$sql="select password from user_details where email like $user";
$result = $conn->query($sql);
//echo $count;

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
       // echo "child " . $row["cost_child"]. " employment : " . $row["employment_increase"]. " " . $row["employment_increase"]. "<br>";
       
        $test1=$row["password"];
                                    
}}
echo "Database".$test1;
echo "User".$pass;
echo "Username".$user;

	session_start();
	$_SESSION["username"]=$user ;
	if($type=="PRINCIPAL")
	header('Location: principal.php');
		else
header('Location: hhf.php');
			



?>