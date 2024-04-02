<?php
session_start();
if (isset($_POST['upload'])) {
    include 'dbh.php';
    $targetvid = "video-uploads/" . basename($_FILES['video']['name']);
    $target = "uploads/" . basename($_FILES['image']['name']);
    $name = strtolower($_POST['mname']);
    $rdate = $_POST['release'];
    $genre = strtolower($_POST['genre']);
    $rtime = $_POST['rtime'];
    $desc = $_POST['desc'];
    $image = $_FILES['image']['name'];
    $video = $_FILES['video']['name'];

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

    $sql = "INSERT INTO movies (title, release_year, genre_id, runtime, description, imgpath, videopath) VALUES('$name','$rdate','$genreId','$rtime','$desc','$image','$video')";
    mysqli_query($conn, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target) && move_uploaded_file($_FILES['video']['tmp_name'], $targetvid)) {
        header("Location: homepage.php");
    } else {
        echo "error uploading";
    }
}
?>