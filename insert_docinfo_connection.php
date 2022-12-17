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
$Email= $_POST['Email'];
$Number= $_POST['Number'];
$Department= $_POST['Department'];

$query = " insert into doctorinfo (Name, Email, Number, Department)
values('$Name', '$Email', '$Number', '$Department')";

echo"$query";

mysqli_query($conn, $query);

header('location: show_doclist.php');
?>
