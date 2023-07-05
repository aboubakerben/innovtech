<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOX CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- link file css-->
    <link rel="stylesheet" href="css/TutoHTML.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img//logohead.PNG">
</head>
<body>
    <!-- header section starts -->
    <header>
        <!-- menu -->
        <i class='bx bx-menu' id="menu"></i>
        <!-- Logo -->
        <a href="" class="logo"><span>INNOVTECH</span></a>
        <!-- navigation-->
        <nav class="navbar">
            <a href="index.php">Accueil</a>
            <a href="Tutoriel.php">Tutoriel</a>
            <a href="project.php">Projects</a>
            <a href="blog.php">Blog</a>
        </nav>
        <!-- icons -->
        <div class="icons">
            <i class='bx bx-search-alt-2' id="search"></i>
        </div>
        <!-- search -->
        <div class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here ...">
            <label for="search-bar" class='bx bx-search-alt-2'></label>
        </div>
    </header>
    <!-- header section end-->
    <!-- Debut HTML TUTO SECTION-->
        <section class="tutoHTML">
            <!-- Objectif du HTML5-->
            <div class="objectif">
                <h1 class="titre">Apprendre le langague HTML5</h1>
                <h2 class="sous-titre">Objectif de HTML5</h2>
                <p class="paragraph">L HTML5 est un langague de balisage qui nous permet de  bien structurer notre site web ansi que de cree notre propre contenu de notre page web . c ' est un langague primordiale pour cree des sites web car tout les sites web que vous voyer on etait cree et structurer par html et avec d'autre langague du web , voici un example dun page cree par html5</p>
            </div>
            <a href="introHTML.php">
                <div class="lecon">
                    <img class="image" src="img/icon-html.png" alt="">
                    <div class="card-content">
                        <h1 class="N-lecon">Leçon 1</h1>
                        <a href="" class="lien-lecon">Introduction a HTML 5</a>
                        <p class="Description">dans cette introduction , on va decouvrire ensemble les outils de travail pour cree une page web . et des information sur ce langague de balisage</a></p>
                    </div>  
                </div>
            </a>
            <a href="titre.php">
                <div class="lecon">
                    <img class="image" src="img/icon-html.png" alt="">
                    <div class="card-content">
                        <h1 class="N-lecon">Leçon 2</h1>
                        <a href="" class="lien-lecon">structurer votre page web</a>
                        <p class="Description">dans cette introduction , on va decouvrire ensemble les outils de travail pour cree une page web . et des information sur ce langague de balisage</a></p>
                    </div>  
                </div>
            </a>
            <a href="titre.php">
                <div class="lecon">
                    <img class="image" src="img/icon-html.png" alt="">
                    <div class="card-content">
                        <h1 class="N-lecon">Leçon 3</h1>
                        <a href="" class="lien-lecon">Organiser votre texte dans votre site web</a>
                        <p class="Description">dans cette introduction , on va decouvrire ensemble les outils de travail pour cree une page web . et des information sur ce langague de balisage</a></p>
                    </div>  
                </div>
            </a>
            <a href="lien.php">
                <div class="lecon">
                    <img class="image" src="img/icon-html.png" alt="">
                    <div class="card-content">
                        <h1 class="N-lecon">Leçon 4</h1>
                        <a href="" class="lien-lecon">Ajouter des liens et des buttons dans votre site web</a>
                        <p class="Description">dans cette introduction , on va decouvrire ensemble les outils de travail pour cree une page web . et des information sur ce langague de balisage</a></p>
                    </div>  
                </div>
            </a>
            <a href="image.php">
                <div class="lecon">
                    <img class="image" src="img/icon-html.png" alt="">
                    <div class="card-content">
                        <h1 class="N-lecon">Leçon 5</h1>
                        <a href="" class="lien-lecon">Inserer des images et des videos dans votre site web</a>
                        <p class="Description">dans cette introduction , on va decouvrire ensemble les outils de travail pour cree une page web . et des information sur ce langague de balisage</a></p>
                    </div>  
                </div>
            </a>
            <a href="Tableaux.php">
                <div class="lecon">
                    <img class="image" src="img/icon-html.png" alt="">
                    <div class="card-content">
                        <h1 class="N-lecon">Leçon 6</h1>
                        <a href="" class="lien-lecon">Ajouter des tableaux et des listes dans votre site web</a>
                        <p class="Description">dans cette introduction , on va decouvrire ensemble les outils de travail pour cree une page web . et des information sur ce langague de balisage</a></p>
                    </div>  
                </div>
            </a>
            <a href="form.php">
                <div class="lecon">
                    <img class="image" src="img/icon-html.png" alt="">
                    <div class="card-content">
                        <h1 class="N-lecon">Leçon 7</h1>
                        <a href="" class="lien-lecon">Integrer votre Formulaires dans votre site web</a>
                        <p class="Description">dans cette introduction , on va decouvrire ensemble les outils de travail pour cree une page web . et des information sur ce langague de balisage</a></p>
                    </div>  
                </div>
            </a>
            <a href="introHTML.php">
                <div class="lecon">
                    <img class="image" src="img/icon-html.png" alt="">
                    <div class="card-content">
                        <h1 class="N-lecon">Leçon 8</h1>
                        <a href="" class="lien-lecon">Lancer votre site web en ligne</a>
                        <p class="Description">dans cette introduction , on va decouvrire ensemble les outils de travail pour cree une page web . et des information sur ce langague de balisage</a></p>
                    </div>  
                </div>
            </a>
        </section>
    <!-- Fin HTML TUTO SECTION-->
    <!-- Debut de footer-->
    <?php 
        include("footer.php");
    ?>
    <!-- Fin de footer-->
<!-- link file javascript -->
    <script src="js/index.js"></script>
</body>
</html>
