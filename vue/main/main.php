<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Groupe Lesieur Cristal - Leader agro-industriel au Maroc "project"</title>
    <link rel="icon" href="..\main\Lesieur-Square.svg">
    <style>
        main{
            background-image: url('wall.jpg');
            background-size: repeat;
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
  
   body::-webkit-scrollbar-thumb {
    background-color: #006547;

     
   }
        body::-webkit-scrollbar {
            background-color: whitesmoke;
           width: 10px;
        }

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