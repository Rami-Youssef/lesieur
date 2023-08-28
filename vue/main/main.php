<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        main{
            background-image: url('wall.jpg');
            background-size: cover;
        }
        h1,h2 {
            margin: 0px;
            padding: 20px;
            color:#13493a ;
        }
        .title{
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
        }
        .contsilider{}
        
    </style>
</head>
<body>
    <?php
        include '../header/header.php';
    ?>
    <main>
        <div class="title">
            <h1>Découvrez Lesieur :</h1>
            <h2>Des Délices Pleins de Saveurs Vous Attendent !</h2>
        </div>
        <div class="contsilider">
            <?php
            include 'slider.php';
            ?>
        </div>
       
    </main>
    <?php
        include '../footer/footer.php';
    ?>
</body>
</html>