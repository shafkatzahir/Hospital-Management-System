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
        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="index.php">Login</a>
        </li>
        
         
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
  </div>
</nav>
<div class="py-5">
    <h2 class="text-center">Appointment</h2>
  </div>

<div class="w-50 m-auto">
	<form action="makeapp.php" method="post">
		<div class= "form-group">
		</div>
		<div class= "form-group">
			<label >Patient Name</label>
			<input type="text" name="Name" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Email</label>
			<input type="text" name="Email" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Number</label>
			<input type="text" name="Number" autocomplete="off" class="form-control">
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






</div>
</form>
</div>
</body>
</head>
</html>
