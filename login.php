<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    $validUsername = "yusnaprimakara";
    $validPassword = "2101020023";

    if ($username === $validUsername && $password === $validPassword) {
        header("Location: index.html");
        exit();
    } else {
        echo "Login gagal. Silakan coba lagi.";
}
}
?>