<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inserer des images et des videos dans votre site web">
    <!-- BOX CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- link file css-->
    <link rel="stylesheet" href="css/titre.css">
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
        .imag{
            height:500px;
            border:2px solid black;
            border-radius:5px;
            width:100%;
        }
        .image{
            border:2px solid black;
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
    <!-- debut du header -->
    <?php 
        include("header.php");
    ?>
    <!-- header section end-->
    <!-- debut Liste de cours -->
    <ul class="liste">
        <h2>Apprendre Le HTML5</h2>
        <li><a href="introHTML.html">Introduction de HTML5</a></li>
        <li><a href="introHTML.html">structurer votre page web</a></li>
        <li><a href="titre.html">Organiser votre texte dans votre site web</a></li>
        <li><a href="lien.html">Ajouter des liens et des buttons dans votre site web</a></li>
        <li><a href="image.html">Inserer des images et des videos dans votre site web</a></li>
        <li><a href="Tableaux.html">Ajouter des tableaux et des listes dans votre site web</a></li>
        <li><a href="form.html">Integrer votre Formulaires dans votre site web</a></li>
        <li><a href="introHTML.html">Lancer votre site web en ligne</a></li>
    </ul>
    <!-- fin Liste de cours -->
    <!-- Debut du titre-->
    <div class="tete">
        <span class="titr">Inserer des images et des videos dans votre site web</span>
        <img class="img-db" src="img/icon-html.png" alt="image">
    </div>
    <div class="content">
        <span class="content-html">Les images et les vidéos sont une excellente façon d’attirer des visiteurs sur votre site Web . car ces dernière éléments comportent beaucoup d'avantages dans l’optimisation des moteurs de recherche .  aussi il y a d autre avantage comme son site web va être consultez par plusieurs personne .</span>
        <h1>Inserez des images a votre site web<i class='icon bx bx-chevron-right'></i></h1>
        <span class="content-html">Généralement pour crée une image, nous avons besoin de la balise < img >, cette balise est une balise pair qui contient un attribut src ou on met le nom de l image avec son extension  et aussi on mets un alt qui contient le nom de l image si la balise n est pas executer .</span>
        <h2 class="titre">Example :</h2>
        <span class="content-html">Prenons le cas si l image est executer</span>
         <!-- start code -->
         <pre class="code">
                <code>
                    &lt; !-- image -- >
                    </span>&lt;<span>img<span> src="img/plage.jpg" </span><span style="">alt="image de la plage"</span></span>>
                </code>
            </pre>
        <!-- end code-->
        <h2 class="titre">Resultat :</h2>
        <img class="imag" src="img/plage.jpg" alt="">
        <span class="content-html">Si vous avez une erreur dans votre image</span>
        <p class="content-html">Ajoutons un e pour faire une erreur</p>
        <!-- Titre de page-->
        <!-- start code -->
        <pre class="code">
                <code>
                    &lt; !-- image -- >
                    </span>&lt;<span>img<span style=""> src="img/plagee.jpg" </span><span style="">alt="image de la plage"</span></span>>
                </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Voila le resutat comme vous voyer si l image n est pas afficher la phrase dans l attribut alt s affiche</h2>
        <img  class="image" src="img/outerreur.png" alt="">
        <!-- debut ingrer des video dans votre page web -->
        <h1>Inserez des videos a votre site web<i class='icon bx bx-chevron-right'></i></h1>
        <span class="content-html">Généralement pour crée une video , nous avons besoin de la  balise < video > cette balise contient l'attribut control afin que les visiteurs du site Web puissent contrôler les options vidéo , c est une balise pair qui contient a l interieur une balise < source > , cette balise contient deux attribut comme l attribut src qui contient le chemin de la video et le type qui decrit le type de la video .</span>
        <h2 class="titre">Example :</h2>
        <!-- start code -->
        <pre class="code">
                <code>
                    &lt; !-- Video-- >
                     &lt;<span>video <span>width="320"</span><span>height="240"</span></span>>
                            &lt;<span>source<span>  src="vid-1.mp4" </span><span>alt="video/ogg"</span></span>>
                     &lt;/<span>video</span>></span>
                </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Resultat :</h2>
        <video class="vid-1" width="950" height="440" controls>
            <source src="img/nature.mp4" type=video/ogg>
        </video>
        <!-- fin ingrer des video dans votre page web -->  
    </div>
        <a class="pass" href="Tableaux.php">j ai terminer ce cours et je passe a l autre</a>
<!-- Fin du titre-->
<!-- Debut de footer-->
 <?php
    include("footer.php");
 ?>
<!-- Fin de footer-->
<!-- javascript -->
<script src="js/index.js"></script>
</body>
</html>