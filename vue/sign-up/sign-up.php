<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign-up</title>
    <link rel="icon" href="..\main\Lesieur-Square.svg">
    <style>
        main{
    background-image: url("../main/wall.jpg");
    background-size: cover;
    height: 600px;
    display: flex;
    align-items: center;
    justify-content: center;
}
main fieldset{
    color: #006547;
    height: 600px;
    display: flex;
    flex-direction: column;
    justify-content: space-evenly;
    align-items: center;
    font-size: 30px;
    font-weight: bolder;
}
main input{
    background-color: rgba(37, 36, 36, 0.351);
    width: 100%;
    border-radius: 5%;
    height: 40px;
    border: none;
}
main fieldset{
    border: none;
    width: 500px;
}
main #button{
    display: flex;
    justify-content: space-evenly;
    width: 50%;
    margin-top: 20px;
}
main .button{
    color: white;
    background-color: #006547;
}
main .button:hover{
    background-color: #13493a;
}
main input:hover{
    background-color: rgba(37, 36, 36, 0.716);
    transition: all 0.3s ease-in;
    border: none;
}
#emailError{
    color: red;
    font-size: 20px;
}
::placeholder{
    color: white;
    opacity: 1;
    text-align: center;
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
        <form action="register.php" method="post">
            <fieldset>
                <h3>Créer un compte</h3>
                <div>
                    <input type="text" name="nom" placeholder="Nom" required>
                </div>
                <div>
                    <input type="text" name="prenom" placeholder="Prénom" required>
                </div>
                <div>
                    <input type="text" name="username" placeholder="Username" required>
                </div>
                <div>
                    <input type="email" name="Email" placeholder="Email" required>
                    <div id="emailError"></div>
                </div>
                <div>
                    <input type="password" name="password" placeholder="mot-de-passe" required>

                </div>
                <div>
                    <input type="tel" name="tel" placeholder="Telephone" required>
                </div>
        
                <div id="button">
                    <input type="submit" value="SIGN-UP" class="button">
                </div>
            </fieldset>
        </form>
    </main>
    <?php
        include '../footer/footer.php';
    ?>
</body>
</html>