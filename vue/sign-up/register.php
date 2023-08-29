<?php
    
    $conn=mysqli_connect("localhost","root","","lesieur");
    if(!$conn){
        die("error found" . mysqli_connect_error());
    }

    $nom = $_POST["nom"];
    $prenom = $_POST["prenom"];
    $username = $_POST["username"];
    $email = $_POST["Email"];
    $password = md5($_POST["password"]); 
    $conf_password = md5($_POST["conf_password"]);
    $tel=$_POST["tel"];
    if($conf_password!==$password){
        echo "password doesn t match";
    }
    $query="insert into users(nom,prenom,username,email,password,tel) vallues($nom,$prenom,$username, $email,$password,$tel)";
    $result = mysqli_query($conn, $sql);