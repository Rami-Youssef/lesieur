<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "lesieur";

  $conn = mysqli_connect($servername, $username, $password, $dbname);

  $nom = $_POST["nom"];
  $description = $_POST["description"];
  $prix = $_POST["prix"];

  if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
    $upload_dir = "../images/";
    $upload_path = $upload_dir . basename($_FILES["image"]["name"]);

    $imageFileType = strtolower(pathinfo($upload_path,PATHINFO_EXTENSION));
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
    } else {
      if (move_uploaded_file($_FILES["image"]["tmp_name"], $upload_path)) {
        $query = "INSERT INTO produit(nom, description, prix, url_image) VALUES('$nom', '$description', '$prix', '$upload_path')";
        $result = mysqli_query($conn, $query);
        if ($result) {
          header("Location: ../list/list-E.php");
        } else {
          echo "Error inserting data into database.". mysqli_error($conn);;
        }
      } else {
        echo "Error uploading image.";
      }
    }
  } else {
    $query = "INSERT INTO produit(nom, description, prix) VALUES('$nom', '$description', $prix)";
    $result = mysqli_query($conn, $query);
    if ($result) {
      header("Location: ../list/list-E.php");
    } else {
      echo "Error inserting data into database.";
    }
  }

  mysqli_close($conn);
}

?>

