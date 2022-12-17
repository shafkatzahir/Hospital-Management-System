<?php
$conn= mysqli_connect('localhost', 'root');

if($conn){
	echo "Connection successful";
}
else{
	echo "No connection";
}
mysqli_select_db($conn, 'health_ms');
$PName= $_POST['PName'];
$Age= $_POST['Age'];
$medication= $_POST['medication'];
$tests= $_POST['tests'];
$next_date= $_POST['next_date'];

$query = " insert into prescription (PName, Age, medication, tests, next_date)
values('$PName', '$Age', '$medication', '$tests', '$next_date')";

echo"$query";

mysqli_query($conn, $query);

header('location: index.php');
?>
