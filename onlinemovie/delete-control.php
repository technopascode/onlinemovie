<?php
session_start();

// Check if the user is authorized (e.g., admin)
if ($_SESSION['id'] !== 1) {
    // Redirect unauthorized users to the homepage or another suitable page
    header("Location: homepage.php");
    exit;
}

include 'dbh.php';

if (isset($_POST['movie_id'])) {
    // Retrieve the movie ID from the POST request
    $movieId = $_POST['movie_id'];

    // Fetch the movie details along with the genre name
    $sql = "SELECT m.mid, m.title, m.release_year, g.name AS genre_name, m.imgpath 
            FROM movies m 
            LEFT JOIN genres g ON m.genre_id = g.id
            WHERE m.mid = '$movieId'";
    $result = mysqli_query($conn, $sql);

    // Check if the query was successful and fetch the movie details
    if ($result && mysqli_num_rows($result) > 0) {
        $movie = mysqli_fetch_assoc($result);

        // Delete the movie record from the database
        $sql_delete = "DELETE FROM movies WHERE mid = '$movieId'";
        mysqli_query($conn, $sql_delete);

        // Delete the movie poster from the server
        $imagePath = "uploads/" . $movie['imgpath'];
        unlink($imagePath);

        // Redirect the user to a suitable page after deletion
        header("Location: homepage.php");
        exit;
    } else {
        // Handle the case where the movie ID was not found
        echo "Movie not found.";
    }
} else {
    // Handle the case where movie ID was not provided
    echo "Movie ID not provided.";
}
?>
