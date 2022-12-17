<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
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
    <h2 class="text-center"> Doctor List</h2>
  </div>
   <div style="margin-left:5%; margin-right:5%; margin-top:50px; margin-bottom:50px;">
   <table class="table table-striped table-bordered table-hover">
        <thead class="table-primary">
        <tr>
          <th scope="col"> SerialID </th>
          <th scope="col">Name</th>
          <th scope="col">Email</th>
          <th scope="col">Number</th>
          <th scope="col"> Department</th>
          <th scope="col">Operation</th>
        </tr>
        </thead>
        <tbody>
        <?php 


            require_once("DBconnect.php");
            $sql = "SELECT * FROM doctorinfo";
            $result = mysqli_query($conn, $sql);
            if(mysqli_num_rows($result) > 0){
            
            while($row = mysqli_fetch_array($result)){
            
        ?>
              <tr>
                <th scope="row"><?php echo $row[0]; ?></th>
                <td><?php echo $row[1]; ?></td>
                <td><?php echo $row[2] ?></td>
                <td><?php echo $row[3] ?> </td>
                <td><?php echo $row[4] ?> </td>
                <td><?php ?> 
       
                <form action="delete.php" method="post">
                  <input type="hidden" name="Name" value="<?php echo $row['Name']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger">Delete</button>
                </form>
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
    <div class="text-center">
      <p>
        <a href="insert_doc_info.php" class ="btn btn-info ">Add Doctors </a>
        <a href="Admin_portal.php" class="btn btn-info">Previous Page </a>
      </p>
 </div>
    
</section>





<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<head>
</body>
</html>
















