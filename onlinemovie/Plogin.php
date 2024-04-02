<?php
  session_start();
  include 'dbh.php';




    $username =  $_POST['username'];
    $password =  $_POST['passwd'];



    $sql = "SELECT * FROM user1 WHERE username = '$username' AND password = '$password' ";

    $result = $conn->query($sql);

    if(!$row = $result->fetch_assoc()) {
      echo "incorrect username or password";
    }else {

        $_SESSION['id'] = $row['id'];
        header("Location: homepage.php");
      }

    

?>
