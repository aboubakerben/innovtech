<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Boxicons CSS -->
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="connexion.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img/logohead.PNG">
</head>
<body>
    <form   action="traitement.php" method="post">
        <h1 class="logo">INNOVTECH</h1>

        <div class="inputs">
            <!-- username -->
            <div class="username">
                <label for="user" class='bx bx-user'></label>
                <input id="user" type="text" placeholder="Nom Utilisateur" name="user" autocomplete="off">
            </div>
            <!-- mots de passe -->
            <div class="passeword">
                <label for="pass" class='bx bx-lock-alt'></label>
                <input id="pass" type="password" placeholder="Mots de passe" name="pass" autocomplete="off">
            </div>
            <!-- button -->
            <button type="submit" name="envoie">Se connecter</button>
            <a href="" class="remember">Oublier le mot de passe</a>
            <p>Vous n'avez pas de compte sur innovtech <a href="inscriptio.php" class="remember">Inscrivez vous</a></p>
        </div>
    </form>
</body>
</html>