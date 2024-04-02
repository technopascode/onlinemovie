<?php
session_start();
include 'dbh.php';

// Fetch all movies from the database
$sql = "SELECT * FROM movies";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Delete Movies - Admin Panel</title>
    <link rel="stylesheet" href="user.css" type="text/css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
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
        <h1>Delete Movies</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>Poster</th>
                    <th>Title</th>
                    <th>Release Year</th>
                    <th>Genre</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                    <td><img src="uploads/<?php echo $row['imgpath']; ?>" width="100" height="150" alt="<?
                        echo $row['title']; ?>"></td>
                        <td><?php echo $row['title']; ?></td>
                        <td><?php echo $row['release_year']; ?></td>
                        <td><?php echo $row['genre_name']; ?></td>
                        <td>
                            <form action="delete-control.php" method="POST">
                                <input type="hidden" name="movie_id" value="<?php echo $row['mid']; ?>">
                                <button type="submit" class="btn btn-danger" name="delete">Delete</button>
                            </form>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
    <br>
  <br>
  <br>
  <br>
  <br>
  <br>
    <footer class="page-footer font-small blue fixed-bottom">
        <div class="text-center py-3">©2024 Copyright: <a href="#">jair & Migi & Kayleigh</a></div>
    </footer>
</body>
</html>
