<?php
include 'dbh.php';
if (isset($_POST['submit'])) {
    $text = strtolower($_POST['textoption']);
    $person = $_SESSION['id'];

    switch ($_POST['option']) {
        case '1':
            $found = "SELECT * FROM movies WHERE title LIKE '%$text%'";
            break;
        case '2':
            $found = "SELECT m.*, g.name AS genre_name
                      FROM movies m
                      LEFT JOIN genres g ON m.genre_id = g.id
                      WHERE g.name LIKE '%$text%'";
            break;
        case '3':
            $found = "SELECT * FROM movies WHERE release_year LIKE '%$text%'";
            break;
        default:
            $found = "SELECT * FROM movies WHERE title LIKE '%$text%'";
            break;
    }

    $display = mysqli_query($conn, $found);

    // die(print_r($final = mysqli_fetch_assoc($display)));

    start:
    $i = 0;
    echo "<div class='row'>";
    while ($final = mysqli_fetch_assoc($display)) {
        echo "<form action='movie.php' method='POST'>";
        echo "<div class='col'>";
        echo "<img src='uploads/" . $final['imgpath'] . "' height='250' width='200' style='margin-top: 30px;margin-left:30px;margin-right:20px;' />";
        echo "<div class='noob'>";
        echo "<input type='submit' name='submit' class='btn btn-success' style='display:inline;width:200px;margin-left:20px;margin-right:20px;' value='".ucwords($final['title'])."'/>";
        echo "</div>";
        echo "</div>";
        echo "</form>";
        if ($i == 4) {
            echo "</div>";
            goto start;
        }
        $i++;
    }
    echo "</div>";
}
?>
