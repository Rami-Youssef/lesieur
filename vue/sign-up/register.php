<?php
    
    $conn=mysqli_connect("localhost","root","","lesieur");
    if(!$conn){
        die("error found" . mysqli_connect_error());
    }

    $nom = mysqli_real_escape_string($conn, $_POST["nom"]);
$prenom = mysqli_real_escape_string($conn, $_POST["prenom"]);
$username = mysqli_real_escape_string($conn, $_POST["username"]);
$email = mysqli_real_escape_string($conn, $_POST["Email"]);
$password = md5($_POST["password"]);
$tel = mysqli_real_escape_string($conn, $_POST["tel"]);

$query = "INSERT INTO users (nom, prenom, username, email, password, tel) VALUES ('$nom', '$prenom', '$username', '$email', '$password', '$tel')";

if (mysqli_query($conn, $query)) {
    header("Location: ../sign-in/sign-in.php");
    exit();
} else {
    echo "error: " . mysqli_error($conn);
}

    