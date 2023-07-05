<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOX CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- link file css-->
    <link rel="stylesheet" href="css/titre.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img//logohead.PNG">
    <style>
        .html{
            margin:0rem 0px 0px 3rem;
        }
        .content{
             margin-top:4rem;
        }
        .icon{
            transform:rotate(90deg);
            cursor:pointer;
        }
        .content-html{
            display:block;
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
        .run{
            padding:10px 20px;
            border-radius:5px;
            cursor:pointer;
            z-index:-2;
        }
        .execute{
            border-radius:10px;
            background-color:#f5f5f5;
            color:black;
            font-size:15px;
            height:360px;
            width:900px;
            border:2px solid black;
            margin:0px 0px 20px 0px;
            padding:20px;
            z-index:2;
        }
        .titre{
            margin:20px 0px;
        }
        .output{
           border:2px solid #7451eb;
           margin-top:300px;
        }
        footer{
            background-color:#f5f5f5;
            border:none;
        }
        .img-db{
           border:1px solid red;
        }
        .code{
            font-size:23px;
            line-height:4rem;
        }
        .vid-txt{
            width:100%;
            border:2px solid black;
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
     <ul class="class liste">
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
        <span class="titr">Organiser votre texte dans une page web</span>
        <img class="img-db" src="img/icon-html.png" alt="">
    </div>
    <div class="content">
        <span class="content-html">
        Supposant qu'on veut créer un article ou bien un blog, alors la première des choses c'est que nous avons besoin des titres et des paragraphes pour bien organisez notre article ou bien notre blog. Cette structure a beaucoup d'avantage que ça soit au niveau du lecteur ou bien au niveau des moteurs de recherche ou bien les personnes malvoyantes.
            <br><b> Au niveau du lecteur </b>  : Généralement le lecteur lit seulement les titres pour trouver rapidement son contenu pertinent. 
            <br><b>Au niveau du Moteur de recherche </b> : Les moteurs de recherche lorsqu'il indexe votre page web, prennent en considérations les titres en tant que mots-clés ce qui influe sur le classement de la page lors d'une recherche. Sans titre, une page aura un faible référencement.
            <br><b>Au niveau des personnes malvoyantes </b>: Les personnes malvoyantes pouvant lire votre article qu'avec des lecteurs d'écrans, mais ces lectures d'écrants lisent les titres de votre article a votre utilisateur et si l'article ne possédée pas des titres alors ce logiciel va lire toute l'article.</span>
        <h1>Creer des titres pour organiser votre page web<i class='icon bx bx-chevron-right'></i></h1>
        <span class="content-html">En html , il existe 6 niveaux de titre qu'ils sont le même mot clé <code><< h >></code>et qui signifie heading et en francais entête .</span>
        <span class="content-html"><br><b>        
        Les titres principales sont </b> <br>h1 : ce titre représente un titre principal dans une page web <br>h2 : ce sous-titre est étuliser rarement pour présenter un paragraphe ou bien des sections
        <br>h3: généralement c'est un sous sous-titre qui est utilisé dans le contenu du paragraphe.    </span>
        <h2 class="titre">Example :</h2>
        <!-- start code -->
        <pre class="code">
                    <code>
                        &lt; !-- titre de votre page  -- >
                        &lt;<span>h1</span>>Titre de ma page &lt;/<span>h1</span>>
                        &lt; !-- sous titre  -- >
                        &lt;<span>h2</span>>Titre de ma page &lt;/<span>h2</span>>
                        &lt; !-- sous titre  -- >
                        &lt;<span>h3</span>>Titre de ma page &lt;/<span>h3</span>>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Résultat :</h2>
        <!-- Titre de page-->
        <video class="vid-txt" src="img/vid-text1.mp4" loop autoplay muted></video>
        <span class="content-html">Ces trois éléments sont les plus etuliser dans une page web</span>
        <span class="content-html"><br><b>Les titres secondaires sont </b> :<br> h4 : ce sous titre est rarement etuliser dans une page web <br> h5 : ce sous titre est etuliser rarement pour presenter un paragraphe <br> h6: c 'est aussi un sous titre qui y a moins d 'importance que les sous titres qui le precede. </span>
        <!-- titre de page -->
        <h2 class="titre">Example :</h2>
        <!-- Titre de page-->
         <!-- start code -->
         <pre class="code">
                    <code>
                        &lt; !-- titre de votre page  -- >
                        &lt;<span>h4</span>>Titre de ma page &lt;/<span>h4</span>>
                        &lt; !-- sous titre  -- >
                        &lt;<span>h5</span>>Titre de ma page &lt;/<span>h5</span>>
                        &lt; !-- sous titre  -- >
                        &lt;<span>h6</span>>Titre de ma page &lt;/<span>h6</span>>
                    </code>
                </pre>
                <!-- end code-->
        <!-- titre de page -->
        <h2 class="titre">Resultat :</h2>
        <!-- Titre de page-->
        <video class="vid-txt" src="img/vid-text2.mp4" loop autoplay muted></video>
        <h1>Creer le contenu de votre page web<i class='icon bx bx-chevron-right'></i></h1>
        <span class="content-html">Pour créé un contenu qui decrit notre titre qui est en haut nous avons besoin de la balise < p > , car avec elle on peut écrire  des paragraghes</span>
        <h2 class="titre">Example : </h2> 
        <!-- start code -->
         <pre class="code">
                    <code>
                                <span>
                                    &lt; !-- paragraphe -- >
                                </span>
                                &lt;<span>p</span>>Bonjour , je suis un paragraphe &lt;/<span>p</span>>
                    </code>
                </pre>
            <!-- end code-->
        <!-- Titre de page-->
        <h2 class="titre">Résultat : </h2>
        <div id="execut" class="execute">
            <p>Bonjour , je suis un paragraphe</p>
        </div>
        <!-- Retour a la ligne -->
        <h1>Retour a la ligne<i class='icon bx bx-chevron-right'></i></h1>
        <span class="content-html">Pour faire un saut de ligne nous avons besion de la balise <  br/  ></span>
        <h2 class="titre">Example :</h2>
        <!-- start code -->
        <pre class="code">
                    <code>
                                <span>
                                    &lt; !-- paragraphe -- >
                                </span>
                                &lt;<span>p</span>>Bonjour , je suis un paragraphe &lt;br>ma mission c est de 
                                structurer le contenu d une page web &lt;/<span>p</span>>
                    </code>
                </pre>
            <!-- end code-->
        <h2 class="titre">Resultat : </h2>
        <div id="execut" class="execute">
            <p>Bonjour , je suis un paragraphe <br>ma mission c est de structurer le contenu d une page web</p>
        </div>
    </div>
        <a class="pass" href="lien.php">j ai terminer ce cours et je passe a l autre</a>
<!-- Fin du titre-->
<!-- Debut de footer-->
    <?php 
        include("footer.php");
    ?>
<!-- javascript -->
<script src="js/index.js"></script>
</body>
</html>