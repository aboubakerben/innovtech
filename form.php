<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Integrer votre formulaires dans votre site web">
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
        <span class="titr">Integrer votre formulaires dans votre site web</span>
        <img class="img-db" src="img/icon-html.png" alt="formulaire">
    </div>
    <div class="content">
        <span class="content-html">Les formulaires dans un site web c'est comme une porte d une chambre qui est nomme le backend , car c est le seule moyen de communiquer avec le backend , par example inserer les donnes dans une base de donnes et bien d'autre fonctionaliters</span>
        <h1> Créer un formulaire <i class='icon bx bx-chevron-right'></i></h1>
        <span class="content-html">Un formulaire est une zone interactive dans votre site web, dans lequel vos visiteurs  peuvent saisir leurs informations. Par exemple son nom et son prénom son email et bien d’autre chose. </span>
        <h3 class="content-html">Pour crée un formulaire, nous aurons besoin des balises HTML suivants : </h3> 
        <span class="content-html"> < form > : la balise form est le début de toute les formulaires html en plus cette balise possède deux attribut.</span>
        <br>
        <span class="content-html">L’attribut method : cette attribut nous indique de quelle manière les donnes sont envoyer .cette attribut admet deux valeur .</span>
        <br>
        <span class="content-html">Une valeur get : cette une méthode qui un peu adapter car il limitée à 255 caractères. En plus Les données saisies dans le formulaire seront ajoutées dans par la barre d'adresse.</span>
        <br>
        <span class="content-html">La valeur post : c’est la méthode la plus utilisée pour les formulaires car elle permet d'envoyer un grand nombre d'informations. Les données saisies dans le formulaire ne transitent pas par la barre d'adresse.</span>
        <br>
        <span class="content-html">L’attribut action : c’est la place ou on va mettre l’adresse de notre page qui va  traiter le programme .</span>
        <h3 class="content-html">Cree un champs de texte </h3>
        <span class="content-html">Généralement , pour cree un champs de texte avec une seule ligne nous avons besoin de l element < input /> et pour cree un champs de texte avec plusieures ligne nous avons besoin de l element < textarea > . mais attentions < textarea > est une balise pair</span>
        <br>
        <span class="content-html"><h4>La balise < input />:</h4> cette est faite pour créer une zone de texte à une ligne , cette balise contient l attribut type qui indique le type du texte par example un email ou bien un password . pour donner un nom à un élément de formulaire, on utilise l'attribut name. </span>
        <h2 class="titre">Example :</h2>
        <!-- Titre de page-->
         <!-- start code -->
         <pre class="code">
                    <code>
                        &lt;form action="" method="post"</span> >
                            &lt;input type="text" name="user"/>
                        &lt;/form>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Resultat</h2>
        <img class="image" src="img/inputshow.png" alt="">
        <br>
        <span class="content-html">
            <h4>La balise < label >:</h4>
            Comme vous remarquez dans l'exemple précédent, le formulaire contient une zone de texte mais sans 
            aucune indication sur ce que le visiteur doit écrire. C'est exactement le rôle de la balise . mais  
            Pour lier le label au champ, vous devez :
            ajouter deux attributs : l'attribut for à la balise < label > et l’attribut id au champ . puis donner la même valeur à ces deux attributs.                        
        </span>
        <!-- Titre de page-->
        <h2 class="titre">Example</h2>
         <!-- start code -->
         <pre class="code">
                    <code>
                        &lt;form action="" method="post"</span> >
                           &lt;label>user  : &lt/label>
                            &lt;input type="text" name="user"/>
                        &lt;/form>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Voila le resutat </h2>
        <img class="image" src="img/outuser.png" alt="">
        <h3 class="content-html">Ajouter l attribut placeholder a votre balise < input /></h3>
        <span class="content-html">Pour donner une indication sur le contenu du champ. Cette indication disparaîtra 
        dès que le visiteur aura cliqué à l'intérieur du champ. </span>
        <h2 class="titre">Example</h2>
        <!-- Titre de page-->
         <!-- start code -->
         <pre class="code">
                    <code>
                        &lt;form action="" method="post"</span> >
                           &lt;label>user  : &lt/label>
                            &lt;input type="text" placeholder="Entrer votre nom" name="user"/>
                        &lt;/form>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Voila le resutat </h2>
        <img class="image" src="img/outplaceholder.png" alt="">
        <h3 class="content-html">Les Differents type de champs .</h3>
        <table class="table">
            <tr class="head">
                <th>Type de champs de saisie</th>
                <th>Valeur de l'attribut type</th>
                <th>information sur le type</th>
            </tr>
            <tr class="ligne">
                <td>Mot de passe</td>
                <td> type="password" </td>
                <td>Les caractères saisies dans ce champs ne 
                    s'affichent pas à l'écran</td>
            </tr>
            <tr class="ligne">
                <td>Email</td>
                <td> type="email" </td>
                <td>
                    Le navigateur peut afficher une 
                    indication si le texte saisie ne 
                    correspond pas au type définie.
                    Les navigateurs mobiles affichent un 
                    clavier adapté à la saisie selon type 
                    définie.
                </td>
            </tr>
            <tr class="ligne">
                <td>Nombre</td>
                <td> type="number" </td>
                <td>Vous pouvez personnaliser le 
                    fonctionnement du champ avec les attributs 
                    suivants :
                    min: valeur minimale autorisée.
                    max: valeur maximale autorisée.
                    step: c'est le « pas » de déplacement. 
                    Si vous indiquez un pas de 2, le 
                    champ n'acceptera que des valeurs 
                    de 2 en 2 (par exemple 0, 2, 4, 6...).</td>
            </tr>
            <tr class="ligne">
                <td>Date</td>
                <td> input type="date"</td>
                <td>
                    Différents types de champs de sélection de 
                date existent :
                date : pour la date (06/08/1986 par 
                exemple) ;
                time : pour l'heure (08:30 par 
                exemple) ;
                week : pour la semaine ;
                month : pour le mois ;
                datetime : pour la date et l'heure 
                (avec gestion du décalage horaire) ;
                datetime-local  : pour la date et 
                l'heure (sans gestion du décalage 
                horaire)</td>
            </tr>
        </table>
        <h3 class="content-html">La balise < textarea ></h3>
        <span class="content-html">Pour cree un champs avec plusieures ligne ,  on utilise cette fois la balise < textarea >.... < / textarea > , cette balise contient plusieures attribut comme id pour identifier la balise aussi l attribut name pour donner un nom a la balise aussi l attribut cols pour donner le nombre de colonne et l attribut rows pour definire le nombre de ligne . </span>
        <h2 class="titre">Example</h2>
         <!-- start code -->
         <pre class="code">
                    <code>
                        &lt;form action="" method="post"</span> >
                           &lt;label>Commentaire : &lt/label>
                            &lt;textarea name="Commentaire" id="user-comment" cols="30"
                             rows="10"> &lt;/textarea>
                        &lt;/form>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Resutat :</h2>
        <img class="image" src="img/outtextarea.png" alt="">
        <h3 class="content-html">Cree des champs d'option</h3>
        <span class="content-html">Les champs d'options sont des éléments qui demandent au visiteur de faire un choix parmi une liste de 
            possibilités , le langague html propose différents type de champs d'options à utiliser dans votre formulaire tels que les cases à cocher et les boutons radio et les listes déroulantes .</span>
        <!-- debut du checkbox -->
        <h3 class="content-html">Parlons un petit peu des cases à cocher </h3>
        <span class="content-html">Pour créer une case à cocher nous allons réutiliser la balise< input / >, en spécifiant cette fois le type 
            checkbox</span>
        <h2 class="titre">Example</h2>
         <!-- start code -->
         <pre class="code">
                    <code>
                        &lt;p>True or False&lt;/p>
                        &lt;form action="" method="post"</span> >
                           &lt;label>True&lt/label>&lt;input type="checkbox" placeholder="true">
                           &lt;label>False&lt/label>&lt;input type="checkbox" placeholder="false">
                        &lt;/form>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Resultat</h2>
        <video class="image" src="img/vid-checkbox.mp4" loop autoplay muted></video>
        <span class="content-html">Pour préciser qu'une case soit cochée par défaut avec l'attribut checked</span>
        <!-- fin du checkbox -->
        <!-- debut du buttons radion -->
        <h3 class="content-html">Parlons un petit peu button radio</h3>
        <span class="content-html">Les boutons radion vous permettent de faire un choix (et un seul) parmi une liste de possibilités.La balise à utiliser est toujours un < input / >, avec cette fois la valeur radio pour l'attribut type</span>
        <h2 class="titre">Example</h2>
        <!-- start code -->
        <pre class="code">
                    <code>
                        &lt;p>True or False&lt;/p>
                        &lt;form action="" method="post"</span> >
                           &lt;label>True&lt/label>&lt;input type="radio" placeholder="true">
                           &lt;label>False&lt/label>&lt;input type="radio" placeholder="false">
                        &lt;/form>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Resultat</h2>
        <!-- output -->
        <video class="image" src="img/vid-radio.mp4" loop autoplay muted></video>
        <!-- fin du buttons radion -->
        <!-- debut des listes deroulantes -->
        <h3 class="content-html">Parlons un petit peu des listes deroulantes</h3>
        <span class="content-html">Les listes déroulantes sont un autre moyen sophistiqué de faire un choix parmi plusieurs possibilités.Le fonctionnement est un peu différent. On va utiliser la balise < select > qui indique le début et la fin de la liste déroulante.On ajoute l'attribut name à la balise pour donner un nom à la liste.
            Puis, à l'intérieur du < select > , nous allons placer plusieurs balises < option >(une 
            par choix possible).
            On ajoute à chacune des options un attribut value pour pouvoir identifier ce que le visiteur a choisi.</span>
        <h2 class="titre">Example</h2>
        <!-- start code -->
        <pre class="code">
                    <code>
                        &lt;form action="" method="post"</span> >
                           &lt;label for="input">Type de input&lt/label>
                           &lt;select name="type" id="input">
                                &lt;option value="text">text&lt;/option>
                                &lt;option value="text">email&lt;/option>
                                &lt;option value="text">date&lt;/option>
                                &lt;option value="text">password&lt;/option>
                           &lt;/select>
                        &lt;/form>
                    </code>
        </pre>
        <!-- end code-->
        <h2 class="titre">Resultat</h2>
        <video class="image" src="img/vid-loop.mp4" loop autoplay muted></video>
         <!-- fin des listes deroulantes --> 
         <!-- debut les buttons dans les formulaires -->
         <h3 class="content-html">cree un button pour envouyer les donnes saisie dans le formulaire</h3>
         <span class="content-html">pour cree un button de formulaire qui d objectif d envioe des donnes alors on a besoin de la balise < input /> de type button plus integrer l attribut name avec une valeur submit avec un attribut value de valeur submit</span>
         <h2 class="titre">Example</h2>
          <!-- start code -->
            <pre class="code">
                        <code>
                            &lt;form action="" method="post"</span> >
                                &lt;input type="button" value="submit" name="submit">
                            &lt;/form>
                        </code>
            </pre>
        <!-- end code-->
         <h2 class="titre">Resultat</h2>
         <video class="image" src="img/vid-btn.mp4" loop autoplay muted></video>
        <!-- fin les buttons dans les formulaires -->
    </div>
        <a class="pass" href="heberge.html">j ai terminer ce cours et je passe a l autre</a>
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