<!DOCTYPE html>
<html>
<head>
  <title></title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link href="css/style.css" rel="stylesheet"/> 

  
<body>

<nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #003366;">>
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Hospital Management System</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item ">
          <a class="nav-link " aria-current="page" href="index.php">Home</a>
        </li>
        
         
      </ul>
      <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search">
      <button class="btn btn-outline-info my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
  </div>
</nav>

<body>
  <div class="py-5">
    <h2 class="text-center">Admin Login</h2>
  </div>
</body>
<div class="w-50 m-auto">
  <form action="Admin_info.php" method="post">
    <div class= "form-group">
    </div>
    <div class= "form-group">
      <label >Admin Name</label>
      <input type="text" name="Name" autocomplete="off" class="form-control">
    </div>
    <div class= "form-group">
      <label >Admin Password</label>
      <input type="text" name="Password" autocomplete="off" class="form-control">
    </div>
    <button type="submit" class="btn btn-info">Login</button>






</div>
</form>
</div>
</body>
</head>
</html>

