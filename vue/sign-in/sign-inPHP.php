<?php
        $conn = mysqli_connect("localhost", "root", "", "lesieur");

        $Email = $_POST['email'];
        $password =$_POST['password'];

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        if (empty($_POST['email']) || empty($_POST['password'])) {
            echo 'Please enter a username and password.';
        } else {
            $query = "SELECT * FROM users WHERE email='$Email' AND password=MD5('$password')";

            $result = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($result);
            $count = mysqli_num_rows($result);
            if ($count == 1) {
            $_SESSION['id_Membre'] = $row['id'];

            if ($row['admin'] == 1) {
                header("Location: ../../admin/main/main.php");
            } else {
                echo "user";
            }
            exit();
            } else {
            echo 'Invalid Email or password.';
            }
        }
        }

    ?>