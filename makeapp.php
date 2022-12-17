<?php
$conn= mysqli_connect('localhost', 'root');

if($conn){
	echo "Connection successful";
}
else{
	echo "No connection";
}
mysqli_select_db($conn, 'health_ms');
$Name= $_POST['Name'];
$Number= $_POST['Number'];
$Email= $_POST['Email'];
$Doctor= $_POST['Doctor'];

$query = " insert into patientinfo (Name, Number, Email, Doctor)
values('$Name', '$Number', '$Email', '$Doctor')";

echo"$query";

mysqli_query($conn, $query);

header('location: index.php');
?>
