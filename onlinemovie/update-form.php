<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Update Movie - Admin Panel</title>
  <link rel="stylesheet" href="user.css" type="text/css">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <style>
    /* Adjust styles as needed */
    footer {
      position: fixed;
      bottom: 0;
      width: 100%;
      background-color: #f8f9fa; /* Change to your desired background color */
    }
  </style>
</head>
<body>
  <header>
    <div class="container-fluid">
      <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <a href="homepage.php" class="navbar-brand"> <img src="images/logo.png" alt=""> </a>
        <span class="navbar-text">CinephileHub</span>
        <ul class="navbar-nav">
          <li class="nav-item"> <a href="homepage.php" class="nav-link"> Home </a> </li>
          <li class="nav-item"> <a href="logout.php" class="nav-link"> Logout</a> </li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="container mt-5">
    <h1>Update Movie</h1>
    <form action="update-control.php" method="POST">
      <div class="form-group">
        <label for="mname">Movie Name</label>
        <input type="text" class="form-control" id="mname" name="mname" value="">
      </div>
      <div class="form-group">
        <label for="release">Release Year</label>
        <input type="text" class="form-control" id="release" name="release" value="">
      </div>
      <div class="form-group">
        <label for="genre">Genre</label>
        <input type="text" class="form-control" id="genre" name="genre" value="">
      </div>
      <div class="form-group">
        <label for="rtime">Runtime (minutes)</label>
        <input type="number" class="form-control" id="rtime" name="rtime" value="">
      </div>
      <div class="form-group">
        <label for="desc">Description</label>
        <input type="text" class="form-control" id="desc" name="desc" value="">
      </div>
      <div class="form-group">
        <label for="image">Upload Image</label>
        <input type="file" class="form-control-file" id="image" name="image">
      </div>
      <div class="form-group">
        <label for="video">Upload Video</label>
        <input type="file" class="form-control-file" id="video" name="video">
      </div>
      <button type="submit" class="btn btn-primary">Update</button>
      <a href="homepage.php" class="btn btn-secondary">Cancel</a>
    </form>
  </div>
  <br>
  <br>
  <br>
  <br>
  <br>
  <br>
  <footer class="page-footer font-small blue">
    <div class="text-center py-3">©2024 Copyright: <a href="#">jair & Migi & Kayleigh</a></div>
  </footer>
</body>
</html>
