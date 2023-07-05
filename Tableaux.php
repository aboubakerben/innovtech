<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Ajouter des tableaux et des listes dans votre site web">
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
        <li><a href="introHTML.html">structurer votre page web</a></li>
        <li><a href="titre.php">Organiser votre texte dans votre site web</a></li>
        <li><a href="lien.php">Ajouter des liens et des buttons dans votre site web</a></li>
        <li><a href="image.php">Inserer des images et des videos dans votre site web</a></li>
        <li><a href="Tableaux.php">Ajouter des tableaux et des listes dans votre site web</a></li>
        <li><a href="form.html">Integrer votre Formulaires dans votre site web</a></li>
        <li><a href="introHTML.html">Lancer votre site web en ligne</a></li>
    </ul>
    <!-- fin Liste de cours -->
    <!-- Debut du titre-->
    <div class="tete">
        <span class="titr">Ajouter des tableaux et des listes dans votre site web</span>
        <img class="img-db" src="img/icon-html.png" alt="Tableaux">
    </div>
    <div class="content">
        <span class="content-html">Pour présenter les donnés d une manière efficace et bien organiser dans son site web ,  nous avons besoin du tableaux et des listes . car ces deux éléments structuraux essentiels pour présentation du contenu d une manière lisible et flexible .</span>
        <h1>Cree un tableaux dans votre site web<i class='icon bx bx-chevron-right'></i></h1>
        <div class="open">
        <span class="content-html">Généralement , Un tableau est composé de lignes et de colonnes qui forment les cellules du tableau , Alors pour cree un tableau nous a vons besoin de la balise :</span>
        <h3 class="content-html">< table > ..... < / table > : ces balises signifie le debut et la fin du tabeaux . </h3>
        <h3 class="content-html">< caption >......< / caption > : titre du tableau</h3>
        <h3 class="content-html">< TR > ........ < / TR > : [Table Row] définition des lignes du tableau</h3>
        <h3 class="content-html">< TH > ........ < / TH > : [Table head] définition des cellules de l’entête du tableau</h3>
        <h3 class="content-html">< TD > ........ < / TD > : [Table DATA] définition des cellules</h3>
        <h2 class="titre">Example :</h2>
        <!-- Titre de page-->
         <!-- start code -->
         <pre class="code">
                    <code>
                        &lt;table <span>border="1"</span> <span>cellpadding="10"</span> >
                            &lt;<span>caption</span>> Horaire de travail pour un agent &lt;/caption>
                                &lt;<span>tr</span>>
                                    &lt;<span>th</span>>N&lt;/<span >th</span>>
                                    &lt;<span>th</span>>Poste&lt;/<span>th</span>>
                                    &lt;<span>th</span>>charge horaire&lt;/<span>th</span>>
                                &lt;/<span>tr</span>>

                                &lt;<span">tr</span>>
                                    &lt;<span>th</span>>1&lt;/<span>th</span>>
                                    &lt;<span>th</span>>Agent de practice&lt;/<span>th</span>>
                                    &lt;<span>th</span>>48&lt;/<span>th</span>>
                                &lt;/<span>tr</span>>

                                &lt;<span>tr</span>>
                                    &lt;<span>th</span>>2&lt;/<span>th</span>>
                                    &lt;<span>th</span>>Agent voiturelle&lt;/<span>th</span>>
                                    &lt;<span>th</span>>50&lt;/<span >th</span>>
                                &lt;/<span>tr</span>>
                        &lt;/table>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Resultat</h2>
        <img class="image" src="img/outtable.png" alt="">
        <span class="content-html">Vous voyez ce tableaux ci dessous , il le manque quelque chose , ah son cadre du tableaux . Pour insérer une bordure de cadre nous avons d un attribut border</span>
        <!-- Titre de page-->
        <h2 class="titre">Example</h2>
         <!-- start code -->
         <pre class="code">
                    <code>
                        &lt;<span>table</span> <span>border="1"</span>>
                            &lt;caption> Horaire de travail pour un agent &lt;/caption>
                                &lt;<span>tr</span>>
                                    &lt;<span>th</span>>N&lt;/<span>th</span>>
                                    &lt;<span>th</span>>Poste&lt;/<span>th</span>>
                                    &lt;<span>th</span>>charge horaire&lt;/<span>th</span>>
                                &lt;/<span>tr</span>>

                                &lt;<span>tr</span>>
                                    &lt;<span>th</span>>1&lt;/<span>th</span>>
                                    &lt;<span>th</span>>Agent de practice&lt;/<span>th</span>>
                                    &lt;<span>th</span>>48&lt;/<span>th</span>>
                                &lt;/<span>tr</span>>

                                &lt;<span>tr</span>>
                                    &lt;<span>th</span>>2&lt;/<span>th</span>>
                                    &lt;<span>th</span>>Agent voiturelle&lt;/<span>th</span>>
                                    &lt;<span>th</span>>50&lt;/<span>th</span>>
                                &lt;/<span>tr</span>>
                        &lt;/<spantable</span>>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Resultat</h2>
        <img class="image" src="img/outborder.png" alt="">
        <span class="content-html">Vous voyez ce tableaux ci dessous , il le manque quelque chose , ah un espacedans les cellules du tableaux . Pour mettre de l'espace entre les cellules nous avons d un attribut cellspacing</span>
        <h2 class="titre">Example</h2>
         <!-- start code -->
         <pre class="code">
                    <code>
                        &lt;table <span>border="1"</span> <span>cellspacing="10"</span> >
                            &lt;caption> Horaire de travail pour un agent &lt;/caption>
                                &lt;<span >tr</span>>
                                    &lt;<span>th</span>>N&lt;/<span>th</span>>
                                    &lt;<span>th</span>>Poste&lt;/<span>th</span>>
                                    &lt;<span>th</span>>charge horaire&lt;/<span>th</span>>
                                &lt;/<span>tr</span>>

                                &lt;<span>tr</span>>
                                    &lt;<span>th</span>>1&lt;/<span>th</span>>
                                    &lt;<span>th</span>>Agent de practice&lt;/<span>th</span>>
                                    &lt;<span>th</span>>48&lt;/<span>th</span>>
                                &lt;/<span>tr</span>>

                                &lt;<span>tr</span>>
                                    &lt;<span>th</span>>2&lt;/<span>th</span>>
                                    &lt;<span>th</span>>Agent voiturelle&lt;/<span>th</span>>
                                    &lt;<span>th</span>>50&lt;/<span>th</span>>
                                &lt;/<span>tr</span>>
                        &lt;/table>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Resultat</h2>
        <img class="image" src="img/outspacing.png" alt="">
        <span class="content-html">Vous voyez ce tableaux ci dessous , il le manque quelque chose , ah il manque de l espace a l interieur des cellules. Pour insérer de l'espace entre le bord et le contenu nous avons d un attribut cellpadding</span>
        <h2 class="titre">Example : </h2>
        <!-- start code -->
        <pre class="code">
                    <code>
                        &lt;table <span>border="1"</span> <span>cellpadding="10"</span> >
                            &lt;caption> Horaire de travail pour un agent &lt;/caption>
                                &lt;<span>tr</span>>
                                    &lt;<span>th</span>>N&lt;/<span>th</span>>
                                    &lt;<span>th</span>>Poste&lt;/<span>th</span>>
                                    &lt;<span>th</span>>charge horaire&lt;/<span>th</span>>
                                &lt;/<span>tr</span>>

                                &lt;<span>tr</span>>
                                    &lt;<span>th</span>>1&lt;/<span>th</span>>
                                    &lt;<span>th</span>>Agent de practice&lt;/<span>th</span>>
                                    &lt;<span>th</span>>48&lt;/<span>th</span>>
                                &lt;/<span>tr</span>>

                                &lt;<span>tr</span>>
                                    &lt;<span>th</span>>2&lt;/<span>th</span>>
                                    &lt;<span>th</span>>Agent voiturelle&lt;/<span>th</span>>
                                    &lt;<span>th</span>>50&lt;/<span>th</span>>
                                &lt;/<span>tr</span>>
                        &lt;/table>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Resultat</h2>
        <img class="image" src="img/tabout.png" alt="">
        <!-- debut ingrer des video dans votre page web -->
        </div>
        <h1>Cree des listes dans votre site web<i class='icon bx bx-chevron-right'></i></h1>
        <span class="content-html">Généralement pour lister des donnes en langague html , il faut savoire que les listes sont ordonner ou non si les listes sont ordonner alors nous avons besoin de l element < ol> sinon nous avons besoin de l element < ul > , mais chaque element de la liste est inclut dans une balise < li ></span>
        <h2 class="titre">Example : Pour les liste ordonner</h2>
         <!-- start code -->
         <pre class="code">
                    <code>
                                &lt;<span>ol</span>>
                                    &lt;<span>li</span>>Nom&lt;/<span>li</span>>
                                    &lt;<span>li</span>>Prenom&lt;/<span>li</span>>
                                    &lt;<span>li</span>>Diplome&lt;/<span>li</span>>
                                &lt;/<span>ol</span>>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Resultat</h2>
        <img class="image" src="img/outordonner.png" alt="">
        <!-- liste non ordonner -->
        <h2 class="titre">Example : Pour les liste non ordonner</h2>
        <!-- start code -->
        <pre class="code">
                    <code>
                                &lt;<span>ul</span>>
                                    &lt;<span>li</span>>Nom&lt;/<span>li</span>>
                                    &lt;<span>li</span>>Prenom&lt;/<span>li</span>>
                                    &lt;<span>li</span>>Diplome&lt;/<span>li</span>>
                                &lt;/<span>ul</span>>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Resultat</h2>
        <img class="image" src="img/outnotorder.png" alt="">
        <!-- fin ingrer des video dans votre page web -->  
    </div>
        <a class="pass" href="form.php">j ai terminer ce cours et je passe a l autre</a>
<!-- Fin du titre-->
<!-- Debut de footer-->
<?php 
    include("footer.php");
?>
<!-- Fin de footer-->
<!-- javascript -->
<script src="js/index.js"></script>
<script src="js/toggle.js"></script>
</body>
</html>