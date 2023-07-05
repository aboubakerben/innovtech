<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOX CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- Font -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- link file css-->
    <link rel="stylesheet" href="css/titre.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img//logohead.PNG">
    <style>
        @keyframes aminreglages {
            from{
                transform:rotate(0deg);
            }

            to{
                transform:rotate(180deg);
            }
        }
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
            background-color:white;
            color:black;
            font-size:15px;
            height:360px;
            width:879px;
            border:2px solid black;
            margin-top:-400px;
            padding:20px;
            z-index:-2;
        }
        .output{
           border:2px solid #7451eb;
           margin-top:300px;
           position:absolute;
        }
        footer{
            background-color:#f5f5f5;
            border:none;
        }
    </style>
</head>
<body>
    <!-- header section starts -->
    <header>
        <!-- menu -->
        <i class='bx bx-menu' id="menu"></i>
        <!-- Logo -->
        <a href="index.php" style="color:#7451eb;" class="logo">INNOVTECH</a>
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
    <section class="html">
    <!-- debut introduction -->
    <div class="tete">
        <span class="titr">Introduction de HTML5</span>
        <img style="width:70%;border:1px solid red;"class="img-db" src="img/icon-html.png" alt="">
    </div>
        <div class="content">
            <h1>Definition d une page web<i class='icon bx bx-chevron-right'></i></h1>
                <p class="content-html">une page web est tout simplement un fichier qui est nommer et relier avec une extension , car ce dernier est interpréter par un navigateur web comme Google ;
                    ce fichier contient des informations qui seront après l interprétations le contenu d’une page web .
                    mais pour que cette procédure marche bien en a besoin du langue html 5 .
                </p>
            <h1>Objectif de HTML5 <i class='icon bx bx-chevron-right'></i></h1>
            <p class="content-html">HTML 5 : est une langague balisage qui nous permet de bien structurer notre page web ansi de la remplire avec le contenu que nous souhaitons grace a l ' aide des balise </p>
            <h1>Balise HTML5<i class='icon bx bx-chevron-right'></i></h1>
            <p class="content-html">Une balise html est un element de base dans le code html pour cree une page web ,car se dernier permet de structurer le contenu de notre page .</p>
            <h3 class="titre-3">les types de balise qu il existe :</h3>
                <h4 class="type">Des balise pair </h4>
                <p class="explique"> sont des balise qui contient deux balise , une balise d ouverture et une autre de fermeture , mais la difference entre la balise de fermeture et la balise d ouverture c est que la balise d ouverture commence par ce signe " < " et apres on ecrit le mot cle de la balise et aprs on la ferme par le signe ">", par contre la balise de fermeture commence par ce signe " < " et apres on ecrit le memme  mot cle de la balise d ouverture et apres on la ferme par le signe "/>" </p>
                <h2 class="explique">Example :</h2>
                <!-- start code -->
                <pre class="code">
                    <code>
                        &lt;!DOCTYPE html>
                        &lt;html lang="en">
                            &lt;head>
                                &lt;meta charset="UTF-8">
                                &lt;meta http-equiv="X-UA-Compatible" content="IE=edge">
                                &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
                                &lt;title> Document &lt;/title>
                            &lt;/head>
                            &lt;body>
                                &lt;p>Bonjour le monde &lt/p>
                            &lt;/body>
                        &lt;/html>
                    </code>
                    <span style="background-color:#7451eb;
            color:white;" class="run">Run</span>
                </pre>
                <!-- end code-->
                <div id="execut" class="execute">
                    <p>Bonjour le monde</p>
                </div>
                <p class="explique">Comme vous voyer dans l ' exemple , pour ecrire du paragraph il nous faut une balise pair qui contient de balise une d ouverture et l autre pour la fermeture,et a l interieur de ces deux chevron on integre le mot cle <b>p</b> apres entre ces deux balise on integre le contenu <b>Bonjour le monde</b></p>
                <!--
                <h2 class="explique">Et voila le resultat</h2>
                <!-- end result 
                <img class="image" src="img/example.png" alt="">

                <h4 class="explique">Des balises impair</h4>
                <p class="explique">Les balises impair sont des balises qui contient une balise qui commence par un chevron <b>"<"</b> et puis en ecrit le mots cle apres il se termine par <b>"/>"</b></p>
                <h2 class="explique">Prenons en cas d 'example :</h2>
                 <!-- start code
                 <pre>
                    <code class="code">
                        &lt;!DOCTYPE html>
                        &lt;html lang="en">
                            &lt;head>
                                &lt;meta charset="UTF-8">
                                &lt;meta http-equiv="X-UA-Compatible" content="IE=edge">
                                &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
                                &lt;title> Document &lt;/title>
                            &lt;/head>
                            &lt;body>
                                &lt;p>Bonjour le monde &lt;br/> J ' apprend du HTML &lt/p>
                            &lt;/body>
                        &lt;/html>
                    </code>
                    <span style="background-color::#7451eb; color:white;"class="run">Run</span>
                </pre>
                <!-- end code 
                <div class="execute">
                    <p>Bonjour le monde</p>
                </div>
                <p class="explique">Comme vous voyer dans le code si dessus , pour sauter une ligne il nous faut la balise < br /> qui est une balise impair </p>
                <!--
                <h2 class="explique">Et voila le resultat</h2>
                <img class="image" src="img/output.png" alt="">
                <p class="explique">Mais attender que est ce que ca veut dire les balises < head > et < html 5 > et < !DOCTYPE html > et les autres balises que nous avons vu dans l example ci dessus .</p>
                <h1>Template HTML5<i class='icon bx bx-chevron-right'></i></h1>
                <h4 class="explique">< !DOCTYPE html > </h4>
                <p class="explique">le role du < !DOCTYPE html > dans un fichier html c est de informer au navigateur que le type du document rendu est un document html , chaque document HTML doit être accompagné d'une déclaration DOCTYPE pour être conforme aux normes HTML.</p>
                <h4 class="explique">Queller le role de < html > </h4>
                <p class="explique">Cette balise signale que on va ecrire du code html</p>
                <h4 class="explique">Queller le role de < head > </h4>
                <p class="explique"> C'est là que vont toutes les métadonnées de la page - des choses principalement destinées aux moteurs de recherche et autres programmes informatiques.</p>
                <h4 class="explique">Queller le role de < title > </h4>
                <p class="explique">cette balise nous permete de donner le nom du site web dans l onglet du navigateur</p>
                <h4 class="explique">Queller le role de < meta > </h4>
                <p class="explique">C'est là que sont stockées les informations sur le document : encodage des caractères, nom (contexte de la page), description.</p>
                <h4 class="explique">Queller le role de < body> </h4>
                <p class="explique">Cette balise est le corps de la page</p>
            </div>
            -->
            <a style="width:50%;" class="pass" href="titre.php">j ai terminer ce cours et je passe a l autre</a>
    <!-- fin introduction -->
    </section>
    <!-- Debut de footer-->
    <?php 
        include('footer.php');
    ?>
    <!-- Fin de footer-->
    <!-- Javascript -->
    <script src="js/index.js"></script>
    <script src="js/code.js"></script>
    <script>
        var iconRight = document.querySelector(".icon");
        var contentHTML = document.querySelector(".content-html");

        iconRight.addEventListener("click",()=>{
            // toggle the content html.
             contentHTML.classList.toggle("content-html");
        });
        // rotate of icons .
        iconRight.addEventListener("click",()=>{
                iconRight.classList.toggle("icon");
                iconRight.style.fontSize="50px";
                iconRight.style.cursor="pointer";
        });

    </script>
    </body>
</html>