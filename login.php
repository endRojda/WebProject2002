 <!-- login.php -->
<?php
  $username = $_POST['username'];
  $password = $_POST['password'];
  if ($username === "b1812100001@sakarya.edu.tr" && $password === "b1812100001") {
    echo "Hoşgeldiniz $password";
  } else {
    header("Location: login.html");
  }
?>