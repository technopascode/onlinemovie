<?php
session_start();

if ($_SESSION['id'] !== 1) {
    header("Location: homepage.php");
    exit;
}

include 'dbh.php';

if (isset($_POST['update'])) {
    $title = $_POST['title'];
    $release_year = $_POST['release_year'];
    $genre = $_POST['genre'];
    $runtime = $_POST['runtime'];
    $description = $_POST['description'];

    // Upload image
    $target_image = "uploads/" . basename($_FILES['image']['name']);
    move_uploaded_file($_FILES['image']['tmp_name'], $target_image);

    // Upload video
    $target_video = "video-uploads/" . basename($_FILES['video']['name']);
    move_uploaded_file($_FILES['video']['tmp_name'], $target_video);

    // Check if the genre exists in the genres table
    $checkGenreQuery = "SELECT id FROM genres WHERE name = '$genre'";
    $genreResult = mysqli_query($conn, $checkGenreQuery);

    if (mysqli_num_rows($genreResult) > 0) {
        // Genre exists, get the genre ID
        $genreRow = mysqli_fetch_assoc($genreResult);
        $genreId = $genreRow['id'];
    } else {
        // Genre doesn't exist, insert it into the genres table
        $insertGenreQuery = "INSERT INTO genres (name) VALUES ('$genre')";
        mysqli_query($conn, $insertGenreQuery);
        $genreId = mysqli_insert_id($conn);
    }

    // Insert/update movie details into the database
    $sql = "INSERT INTO movies (title, release_year, genre_id, runtime, description, imgpath, videopath) 
            VALUES ('$title', '$release_year', '$genreId', '$runtime', '$description', '$target_image', '$target_video')";
    mysqli_query($conn, $sql);

    header("Location: admin.php"); // Redirect to admin page after updating
    exit;
}
?>
