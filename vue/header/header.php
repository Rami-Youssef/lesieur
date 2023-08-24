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
        .slash{
            color: white;
            font-size: 20px;
        }
        nav a{
            color: white;
            font-size: 20px;
            text-decoration: none;
            transition: all 0.5s ease-in-out;
        }
        .Menu{
            width: 20%;
            display: flex;
            justify-content: space-between ;
        }
        .image img{
            width: 50%;
        }
        @keyframes rotation {
            from {
                transform: rotate(0deg);
            }
            to {
                transform: rotate(360deg);
            }
}
        .image img:hover{
            animation: rotation 2s  linear;
        }
        .sign{
            width: 20%;
            display: flex;
            justify-content: space-between ;
        }
        nav a:hover{
            color: rgb(154, 18, 18);
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <nav>
        <div class="Menu">
            <a href="">Catalog</a>
        </div>
        <div class="image" >
            <a href=""><img src="lesieur.svg" alt=""></a>
        </div>
        <div class="sign">
            <a href="">Sign-In</a>
            <a href="">Sign-Up</a>
        </div>
    </nav>
</body>
</html>