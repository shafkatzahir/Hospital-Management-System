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
$Date= $_POST['Date'];
$Time= $_POST['Time'];
$Doctor= $_POST['Doctor'];

$query = " insert into appointmentinfo (Name, Date, Time, Doctor)
values('$Name', '$Date', '$Time', '$Doctor')";

echo"$query";

mysqli_query($conn, $query);

header('location: appinfo_list.php');
?>
