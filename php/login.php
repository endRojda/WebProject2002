<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = $_POST["name"];
    $password = $_POST["password"];

    $dogru_email = "g231210028@sakarya.edu.tr";
    $dogru_sifre = "g231210028";

    if ($email === $dogru_email && $password === $dogru_sifre) {
        echo "<h2>Hoşgeldiniz <strong>$password</strong></h2>";
        echo "<p>Giriş başarılı.</p>";
    } else {
        echo "<p style='color:red;'>Kullanıcı adı veya şifre hatalı. Giriş sayfasına yönlendiriliyorsunuz...</p>";
        header("refresh:2; url=../login.html");
        exit();
    }
} else {
    header("Location: ../login.html");
    exit();
}
?>
