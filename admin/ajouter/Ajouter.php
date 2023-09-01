<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="ajouter.css">
    <style>
        input[type="file"] {
  border: none;
  background-color: rgba(37, 36, 36, 0.351);
  padding: 10px;
  border-radius: 5px;
  font-size: 16px;
  color: white;
  width: 100%;
  margin-top: 10px;
}

input[type="file"]:hover {
  background-color: rgba(37, 36, 36, 0.716);
  cursor: pointer;
  
}

input[type="file"]::-webkit-file-upload-button {
  background-color: #0a0c10;
  color: #fff;
  border-radius: 5px;
  padding: 10px;
  border: none;
  font-size: 16px;
  cursor: pointer;
  transition: all 0.3s ease;
}

input[type="file"]::-webkit-file-upload-button:hover {
    background-color: rgba(10, 12, 16, 0.9);}

    </style>
</head>
<body>
    <?php
    include_once('..\header\header.php')
    ?>  
    <main>
    <form action="AjouterPHP.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <h3>Ajouter Un produit</h3>
            <div>
                <input name="nom" type="text" placeholder="nom du produit" required>
            </div>
            <div>
                <input name="description" type="text" placeholder="description" required>
            </div>
            <div>
                <input name="prix" type="text" placeholder="prix d'article" required>
            </div>
            <div>
                <input name="image" type="file" accept="image/*" class="show">
            </div>
            <div id="button">
                <input type="submit" value="AJOUTER" class="button">
            </div>
        </fieldset>
    </form>
</main>

    <?php
    include_once('..\footer\footer.php')
    ?>
</body>
</html>