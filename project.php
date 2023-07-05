<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Apprenez le developpement web en creant des projets">
    <!-- BOX CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <!-- link file css-->
    <link rel="stylesheet" href="css/project.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img/logohead.PNG">
    <style>
        .project{
            margin-top:80px;
        }
        .project h1{
            display:flex;
            justify-content:flex-start;
            font-size:40px;
            padding:40px 0px 40px 43px;
        }
        .title{
            color:white;
            display:flex;
            justify-content:center;
        }
        .paragraph{
            color:white;
        }
        .photo{
            object-fit:cover;
        }
        .tech a{
            color:black;
        }
        .tech a:hover{
            color:#7451eb;
        }
        .create_project{
            margin-top:-70px;
            border:0px;
        }
    </style>
</head>
<body>
    <!-- header section starts -->
    <?php 
        include("header.php");
    ?>
    <!-- header section end-->
    <!-- debut Cree vos project -->
    <section class="project">
        <h1 class="create_project">Projects : Développement Web</h1>
        <!-- Project create -->
        <div class="create-app">
                <div class="app">
                        <img class="photo" src="img/Dev.png" alt="Devlopeur">
                        <h2 class="title-project">Site Personnel</h2>
                        <h3>Langague de programmation</h3>
                        <div class="tech">
                            <a href="TutoHTML.html">HTML5</a>
                            <a href="">CSS3</a>
                            <a href="">Javascript</a>
                        </div>
                        <div class="button">
                            <a href="code-project1.php">Code Source</a>
                            <a href="portefolio.html" target="blank">Voir le site</a>
                        </div>
                </div>
                <div class="app">
                        <img class="photo" src="img/Parfum.png" alt="Parfum">
                        <h2 class="title-project">Site de Parfum </h2>
                        <h3>Langague de programmation</h3>
                        <div class="tech">
                            <a href="TutoHTML.html">HTML5</a>
                            <a href="">CSS3</a>
                            <a href="">Javascript</a>
                        </div>
                        <div class="button">
                            <a href="code-project2.php">Code Source</a>
                            <a href="Parfum/Parfum.html" target="_blank">Voir le site</a>
                        </div>
                </div>
                <div class="app">
                        <img class="photo" src="img/inscription.png" alt="">
                        <h2 class="title-project">Formulaire de inscription</h2>
                        <h3>Langague de programmation</h3>
                        <div class="tech">
                            <a href="TutoHTML.html">HTML5</a>
                            <a href="">CSS3</a>
                        </div>
                        <div class="button">
                            <a href="codeP3.php">Code Source</a>
                            <a href="form/index.html">Voir le site</a>
                        </div>
                </div>
        </div>

        <div class="create-app">
                <div class="app">
                        <img class="photo" src="img/Devjs.png" alt="Devlopeur">
                        <h2 class="title-project">5 Projects : DOM JS</h2>
                        <h3>Langague de programmation</h3>
                        <div class="tech">
                            <a href="">Javascript</a>
                        </div>
                        <div class="button">
                            <a href="code-project1.php">Code Source</a>
                            <a href="portefolio.html" target="blank">Voir le site</a>
                        </div>
                </div>
                <div class="app">
                        <img class="photo" src="img/phps.jpg" alt="PHP">
                        <h2 class="title-project">Projects : Back end </h2>
                        <h3>Langague de programmation</h3>
                        <div class="tech">
                            <a href="TutoHTML.html">PHP</a>
                            <a href="">MYSQL</a>
                            <a href="">SQL : language de requete</a>
                        </div>
                        <div class="button">
                            <a href="code-project2.php">Code Source</a>
                            <a href="Parfum/Parfum.html" target="_blank">Voir le site</a>
                        </div>
                </div>
                <div class="app">
                        <img class="photo" src="img/Bootstrap.png" alt="">
                        <h2 class="title-project">Projects : Bootstrap</h2>
                        <h3>Langague de programmation</h3>
                        <div class="tech">
                            <a href="TutoHTML.html">HTML5</a>
                            <a href="">CSS3</a>
                            <a href="">Bootstrap 3</a>
                        </div>
                        <div class="button">
                            <a href="codeP3.php">Code Source</a>
                            <a href="form/index.html">Voir le site</a>
                        </div>
                </div>
        </div>
    </section>
    <!-- Fin Cree vos project -->
    <!-- Debut de footer-->
    <?php 
        include("footer.php");
    ?>
    <!-- Fin de footer-->
<!-- javascript -->
<script src="js/index.js"></script>
</body>
</html>