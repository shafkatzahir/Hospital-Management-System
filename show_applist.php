<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="css/style.css" rel="stylesheet"/> 

  
<body>


<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003366;">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hospital Management</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">

         <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
        <li class="nav-item">
          <a class="nav-link" href="Admin_login.php">Logout</a>
        </li>         
      </ul>
    </div>
  </div>
</nav>
 <div class="py-5">
    <h2 class="text-center"> Patient Request</h2>
  </div>
   <div style="margin-left:5%; margin-right:5%; margin-top:50px; margin-bottom:50px;">
   <table class="table table-striped table-bordered table-hover">
        <thead class="table-primary">
        <tr>

          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Number</th>
          <th scope="col"> Doctor</th>
          <th scope="col">Operation</th>
        </tr>
        </thead>
        <tbody>
        <?php 


            require_once("DBconnect.php");
            $sql = "SELECT * FROM patientinfo";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
            
            while($row = mysqli_fetch_array($result)){
            
        ?>
              <tr>
                <td><?php echo $row[0]; ?></td>
                <td><?php echo $row[1] ?></td>
                <td><?php echo $row[2] ?> </td>
                <td><?php echo $row[3] ?> </td>
                <td><?php ?> 
       
                <div class="col-md-1"> <a href="show_applist.php"><i class="fa fa-check" aria-hidden="true"></i></a></div>

                </td>

                </tr>
            <?php 
            }         
            }
            ?>
            </tbody>
      </table>
     </div>

      
    </div>
      
    </div>
   <!--  <div class="text-center">
      <p>
        <a href="insert_doc_info.php" class ="btn btn-info ">Add Doctors </a>
        <a href="Admin_portal.php" class="btn btn-info">Home Page </a>
      </p>
 </div> -->
    
</section>
<section>
  <div class="py-5">
    <h2 class="text-center">Appointment</h2>
  </div>

<div class="w-50 m-auto">
  <form action="confirmapp.php" method="post">
    <div class= "form-group">
    </div>
    <div class= "form-group">
      <label >Patient Name</label>
      <input type="text" name="Name" autocomplete="off" class="form-control">
    </div>
    <div class= "form-group">
      <label >Date</label>
      <input type="date" name="Date" autocomplete="off" class="form-control">
    </div>
    <div class= "form-group">
      <label >Time</label>
      <input type="text" name="Time" autocomplete="off" class="form-control">
    </div>
    <div>
      <p></p>
    </div>    

    <div class= "form-group">
      <label >Doctor</label>
      <select name="Doctor" class="form-control">
        <option disabled selected>-- Select Doctor --</option>
        <?php
          require_once("DBconnect.php");
          $sql = "SELECT Name FROM doctorinfo";
          $result = mysqli_query($conn, $sql);
          
          while($data = mysqli_fetch_array($result)){
            echo "<option value='". $data['Name'] ."'>" .$data['Name'] ."</option>"; 
                } 
        ?> 
        </select> 
    </div>

    
    <button type="submit" class="btn btn-info">Submit</button>

</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<head>
</body>
</html>
















