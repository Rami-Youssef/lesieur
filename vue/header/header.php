<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        nav{
            display: flex;
            align-items: center;
            justify-content: space-evenly;
            background-color: #0a0c10;
            height: 100px;
            opacity: 1;
        }
        nav a{
            color: white;
            font-size: 20px;
            text-decoration: none;
            transition: all 0.3s ease-in-out;
        }
        .Menu{
            width: 20%;
            display: flex;
            justify-content: space-between ;
        }
        .image img{
            width: 200px;
        }
        .sign{
            width: 20%;
            display: flex;
            justify-content: space-between ;
        }
        nav a:hover{
            color: rgb(154, 18, 18);
        }
    </style>
</head>
<body>
    <nav>
        <div class="Menu">
            <a href="../menu/Home.php">Home</a> 
            <a href="../List/List-E.php">List</a>
        </div>
        <div class="image" >
            <img src="../headerfooter/header/log.png" alt="">
        </div>
        <div class="sign">
            <a href="../Login-A/Login-A.php">Sign-In</a>
            <a href="../inscription/inscription.php">Sign-Up</a>
        </div>
    </nav>
</body>
</html>