<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ajouter des liens et des buttons dans votre site web">
    <!-- BOX CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- link file css-->
    <link rel="stylesheet" href="css/lien.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img//logohead.PNG">
    <style>
         .content{
            margin-top:4rem;
         }
         pre{
            border-radius:10px;
            background-color:#2d2d2d;
            color:white;
            line-height:3rem;
            font-size:25px;
            margin:20px 0px;
        }
         .content h1{
            background-color: #f5f5f5;
            padding:20px;
            margin-top:30px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }
        .content > h1 > .icon{
            font-size:40px;
            border-radius:50%;
            cursor:pointer;
        }
        .image{
            border:2px solid black;
            border-radius:5px;
        }
        footer{
            background-color:#f5f5f5;
            border:none;
        }
        .img-db{
            border:1px solid red;
        }
    </style>
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
         <!-- debut Liste de cours -->
         <ul class="liste">
            <h2>Apprendre Le HTML5</h2>
            <li><a href="introHTML.php">Introduction de HTML5</a></li>
            <li><a href="introHTML.php">structurer votre page web</a></li>
            <li><a href="titre.php">Organiser votre texte dans votre site web</a></li>
            <li><a href="lien.php">Ajouter des liens et des buttons dans votre site web</a></li>
            <li><a href="image.php">Inserer des images et des videos dans votre site web</a></li>
            <li><a href="Tableaux.php">Ajouter des tableaux et des listes dans votre site web</a></li>
            <li><a href="form.php">Integrer votre Formulaires dans votre site web</a></li>
            <li><a href="heberger.php">Lancer votre site web en ligne</a></li>
        </ul>
        <!-- fin Liste de cours -->
    <!-- debut des lien et buttons -->
    <div class="tete">
        <span class="titr">Ajouter des liens et des buttons dans votre page web</span>
        <img class="img-db" src="img/icon-html.png" alt="">
    </div>
    <div class="content">
        <span class="content-html">
            Les liens et les boutons sont des éléments essentiels d'une page web car ils permettent aux utilisateurs de naviguer d'une page à l'autre et d'interagir avec le contenu de la page. Sans ces éléments, il serait très difficile de naviguer sur le web.
        </span>
        <!-- debut cree des liens dans votre site web -->
        <h1>Creer des liens dans votre site web<i class='icon bx bx-chevron-right'></i></h1>
        <p class="content-html">Généralement pour crée un lien, nous avons besoin de la balise < a >, cette balise est une balise pair qui contient un attribut Href ou on met le lien de la page ou bien du site que on veut diriger vers lui .</p>
        <p class="content-html">Prenons en cas d’exemple, on veut créer un lien vers le site Wikipédia</p>
        <h2 class="titre">Example :</h2>
        <!-- start code -->
            <pre class="code">
                <code>
                    &lt; !-- Lien  -- >
                    </span>&lt;<span>a <span style=""> href="https://fr.wikipedia.org" </span></span>>Wikipédia&lt;/<span>a</span>>
                </code>
            </pre>
        <!-- end code-->
        <p class="content-html">Comment vous voyez pour accéder a un site web ou bien une page web il faut mettre son chemin a l intérieure de Href.</p>
        <h2 class="titre">Resultat :</h2>
        <img class="image" src="img/outlien.png" alt="">
        <h1>Les types des liens .<i class='icon bx bx-chevron-right'></i></h1>
        <h3 class="titre">Il existe deux types des liens dans une page web.</h3>
        <p style="margin:10px 0px ;" class="content-html">
           <b> 1 - Les liens externes :</b>sont des liens qui pointent sur des pages ou bien sites externes.
        </p>
        <p class="content-html">Vous voyez le lien que on a crée au-dessus , ce type de lien que on a crée est un lien externe .</p>
        <p style="margin:10px 0px ;" class="content-html">
            <b>2 - Les liens internes :</b>sont des liens qui pointent sur des pages qui sont internes.
        </p>
        <p style="margin:10px 0px ;" class="content-html">Dans chaque site web, on trouve des liens internes qui nous permet de naviguer entre les pages et qui nous donnent aussi à notre site web une flexibilité .par exemple ce lien si dessous est un lien interne qui nous dirige vers une page qui est dans notre site web .</p>
        <h2 class="titre">Example :</h2>
        <!-- start code -->
        <pre class="code">
                <code>
                    &lt; !-- Lien  -- >
                    </span>&lt;<span>a <span> href="Tutoriel.html" </span></span>>Tutoriel&lt;/<span>a</span>>
                </code>
            </pre>
        <!-- end code-->
        <h2 class="titre">Resultat :</h2>
        <video class="image" src="img/lien.mp4" loop autoplay muted></video>
        <!-- fin cree des liens dans votre site web -->
        <!-- Debut cree des button dans votre site-->
        <h1>Cree des buttons dans votre site web<i class='icon bx bx-chevron-right'></i></h1>
        <p class="content-html">Généralement pour crée un button, nous avons besoin de la balise < button>, cette balise est une balise pair qui contient un attribut valeur ou on met la valeur submit pour envoyer les donnes a la base de donne.</p>
        <p class="content-html">Prenons en cas d’exemple, on veut créer un button pour transmettre les donnes</p>
        <!-- Fin cree des button dans votre site-->
        <img class="image" src="img/connect.png" alt="">
        <p class="content-html">Vous voyez le button qui est dans le formulaire au dessus , ce dernier est coder par la balise <<code>button</code>> avec une type submit et une valeur se connecter , la mission de ce button est de envoyer les donnes vers la base de donne pour verifier si les donne existe ou pas  </p>
        <h2 class="titre">Example : </h2>
        <!-- start code -->
        <pre class="code">
                <code>
                    &lt; !-- button  -- >
                    </span>&lt;<span>button<span> type="submit"</span></span>>Envoyer&lt;/<span>/button</span>>
                </code>
            </pre>
        <!-- end code-->
        <h2 class="titre">Résultat :</h2>
        <video class="image" src="img/button.mp4" loop autoplay muted></video>
    </div>
    <!-- fin des lien et buttons -->
    <a class="pass" href="image.php">j ai terminer ce cours et je passe a l autre</a>
<!-- Fin du titre-->
<!-- debut footer -->
    <?php 
        include("footer.php");
    ?>
<!-- fin footer -->
<!-- javascript -->
<script src="js/index.js"></script>
</body>
</html>