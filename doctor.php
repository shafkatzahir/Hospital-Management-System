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
          <a class="nav-link" href="index.php">Logout</a>
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
    <h2 class="text-center">Prescription</h2>
  </div>

<div class="w-50 m-auto">
	<form action="docinfo.php" method="post">
		<div class= "form-group">
		</div>
		<div class= "form-group">
			<label >Patient Name</label>
			<input type="text" name="PName" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Age</label>
			<input type="text" name="Age" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Medication</label>
			<input type="text" name="medication" autocomplete="off" class="form-control">
		</div>
		<div class= "form-group">
			<label >Test</label>
			<input type="text" name="tests" autocomplete="off" class="form-control">
		</div>
    <div class= "form-group">
      <label >Next Appointment</label>
      <input type="date" name="next_date" autocomplete="off" class="form-control">
    </div>
   
		<button type="submit" class="btn btn-info">Submit</button>






</div>
</form>
</div>
</body>
</head>
</html>
