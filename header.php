<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Inserer des images et des videos dans votre site web">
    <!-- BOX CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- link file css-->
    <!--
    <link rel="stylesheet" href="css/titre.css">
-->
    <link rel="stylesheet" href="header.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img//logohead.PNG">
    <style>
        @media(max-width:1000px){
            .navbar{
                box-shadow: 0px 0px 2px 2px rgba(0,0,0,0.1);
            }
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
        <nav class="navbar active">
            <a href="index.php">Accueil</a>
            <a href="Tutoriel.php">Tutoriel</a>
            <a href="project.php">Projects</a>
            <a href="blog.php">blog</a>
        </nav>

        <!-- icons  -->
        <div class="icons">
            <i class='icon bx bx-search-alt-2' id="search"></i>
<!--
            <div class="log active">
                <a class="login user" href="connexion.php">Connexion</a>
                    <a class="signup user" href="signup.php">Inscription</a>
-->
            </div>
        </div>
        <!-- search -->
        <div class="search-bar-container">
            <input type="search" id="search-bar" placeholder="search here ...">
            <label for="search-bar" class='bx bx-search-alt-2'></label>
        </div>
    </header>
    <!-- header section end-->
    <!--javascript -->
    <script>
        var menuBtn = document.querySelector("#menu");
        var navBarre = document.querySelector(".navbar");
        var active = document.querySelector(".active");
        var log = document.querySelector(".log");

        menuBtn.addEventListener("click",()=>{
            navBarre.classList.toggle("active");
        });
    </script>
    <script src="js/index.js"></script>
</body>
</html>