<?php
require_once('dbconnect.php');

if(isset($_POST['delete_btn']))
{
    $Name = $_POST['Name'];

    $query = "DELETE FROM appointmentinfo WHERE Name='$Name' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        header('Location: appinfo_list.php'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: Admin_portal.php'); 
    }    
}
?>