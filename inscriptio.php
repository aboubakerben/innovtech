<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/inscritpion.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img//logohead.PNG">
    <style>
        label{
            font-size: 30px;
        }
        input{
            font-size: 20px;
        }
        form{
            padding:0px 45px;
            border-radius:0px;
            height:100vh;
        }
        .title{
            display:flex;
            justify-content:center;
            align-items:center;
            padding:-40px 0px;
        }
        .signup{
            font-size:30px;
        }
    </style>
</head>
<body>
    <div class="login">
            <img class="image" src="img/inscrire.jpg" alt="">
            <form  method="post" action="signup.php">
                <div class="title">
                <h1 class="logo">INNOVTECH</h1>
                <span class="signup">INSCRIPTION</span>
                </div>
                <div class="inputs">
                    <!-- username -->
                    <div class="username">
                        <label for="email"></label>
                        <input id="email" type="email" placeholder="Email" name="email">
                    </div>
                    <!-- mots de passe -->
                    <div class="passeword">
                        <label for="Nom"></label>
                        <input id="Nom" name="nom" type="text" placeholder="Nom et Prenom">
                    </div>
                    <!-- mots de passe -->
                    <div class="passeword">
                        <label for="pass"></label>
                        <input id="pass" name="pass" type="password" placeholder="Nouveau mot de passe">
                    </div>
                    <!-- mots de passe -->
                    <div class="passeword">
                        <label for="Prenom"></label>
                        <input id="Prenom" name="newpass" type="password" placeholder="Comfirmer le nouveau mot de passe">
                    </div>

                    <!-- button -->
                    <button type="submit" name="envoie">S' inscrire</button>
                </div>
            </form>
        </div>
</body>
</html>