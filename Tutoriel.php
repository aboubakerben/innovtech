<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOX CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- link file css-->
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/Tutoriel.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img//logohead.PNG">
    <style>
        .home{
            height:70vh;
        }
        .Titre{
            display:flex;
            justify-content:flex-start;
            padding-left:15rem;
        }
    </style>
</head>
<body>
    <!-- header section start-->
    <?php 
        include("header.php");
    ?>
    <!-- header section end-->
    <!-- home tutoriel strat
    <section style="background-image:url(img/tutoriel.jpg);background-repeat:no-repeat;background-size:100%;object-fit:none;filter:brightness(50%);"class="home">
        <h1 style="color:white;font-size:40px;" class="title_home">tutoriel</h1>
        <p style="padding:20px;text-transform:initial;line-height:4rem;" class="text paragraph">Apprenez la programmation web avec les cours si dessous , les premiers cours sont la base du developpement web , il est conseille de suivre l ' ordre des coues , car il sont mis en ordre et on vous souhaitent un bon apprentissage . et de ne pas sauter les chapitres du cours .</p>
    </section>
    -->
     <!--home tutoriel end -->
    <!-- Debut Tutoriel -->
    <section class="Tuto">
        <h1 style="margin:40px 0px;" class="Titre">Cours: développement web</h1>
        <!-- HTML5-->
        <div class="card-Tuto">
                <img class="image" src="img/html.jpg" alt="">
                <div class="card-content">
                    <h1>Tutoriel HTML5</h1>
                    <p class="Description">HTML est Hyper Text Markup Langague . c est un langague qui nous permet de ecrire le contenue de notre page web , et de la structurer .<a href="TutoHTML.php" class="savoir">En Savoir Plus</a></p>
                </div>  
        </div>
        <!-- CSS3 -->
        <div class="card-Tuto">
            <img class="image" src="img/css.jpg" alt="">
            <div class="card-content">
                <h1>Tutoriel CSS3</h1>
                <p class="Description">HTML est Hyper Text Markup Langague . c est un langague qui nous permet de ecrire le contenue de notre page web , et de la structurer .<a href="Tutocss/html/plan2.html" class="savoir">En Savoir Plus</a></p>
            </div>  
        </div>
        <!-- Javascript -->
        <div class="card-Tuto">
            <img class="image" src="img/js.jpg" alt="">
            <div class="card-content">
                <h1>Tutoriel Javascript</h1>
                <p class="Description">HTML est Hyper Text Markup Langague . c est un langague qui nous permet de ecrire le contenue de notre page web , et de la structurer .<a href="" class="savoir">En Savoir Plus</a></p>
            </div>  
        </div>
    </section>
    <!-- Fin Tutoriel -->
    <!-- start footer-->
    <?php 
        include("footer.php");
    ?>
    <!-- end footer-->
<!-- link file javascript -->
    <script src="js/index.js"></script>
</body>
</html>