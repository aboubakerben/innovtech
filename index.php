<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOX CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- link of js-->
    <script src ="https://cdn.jsdelivr.net/npm/typelighterjs/typelighter.min.js"></script>
    <!-- file of css-->
    <link rel="stylesheet" href="css/home.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img//logohead.PNG">
    <style>
        .cour{
            padding-left:4rem;
            border-left:2px solid #7451eb;
            margin-left:3rem;
        }
        .tuto{
            margin-top:-15rem;
        }
        .icon{
            margin-left:3rem;
            font-size:20px;
        }
        .bloc{
            margin:50px 0px 50px 3rem;
            width:35%;
        }
        .item-bloc{
            padding:20px 10px;
            margin:50px 0px;
            border-radius:5px;
            background-color:rgb(243, 233, 233);
            box-shadow:0px 2px 2px 2px rgba(0,0,0,0.1);
        }
        .p{
            font-size:20px;
        }
        .p-2{
            margin-left:50%;
            width:100%;
        }
        .p-3{
            font-size:20px;
            width:80%;
            margin:20px 0px;
        }
        .titre{
            font-size:40px;
        }
        .vid-pro{
            width:40%;
            margin-right:3rem;
        }
        .bloc-2{
            display:flex;
            justify-content:space-around;
            align-items:center;
        }
        .project{
            background-color:#7451eb;
            color:white;
            padding:5rem 0rem;
            margin-left:-10px;
            padding-left:4rem;
            margin-top:20px;
            margin-bottom:20px;
            z-index:-2;
        }
        .bloc-3{
            width:50%;
            border:1px solid #7451eb;
        }
        .item-bloc-3{
            padding:10px 0px;
            display:flex;
            font-size:20px;
            align-items:center;
        }
        .blog{
            width:50%;
            object-fit:cover;
        }
        .content{
            display:flex;
            justify-content:space-between;
            width:180%;
            padding:0px 2.5rem;
            margin-top:50px;
            margin-bottom:50px;
        }
        .check{
            border:2px solid #7451eb;
            margin:0px 20px;
            font-size:30px;
            color:#7451eb;
        }
        .bg{
            clip-path: polygon(0% 0%, 100% 0%, 100% 75%, 75% 75%, 68% 75%, 50% 75%, 0% 75%);
        }
        li{
            font-size:20px;
            margin:20px 0px;
            background-color:white;
            color:black;
            width:85%;
            padding:20px 10px;
            border-radius:5px;
        }
        .li-2{
            margin-left:10%;
        }
    </style>
</head>
<body>
    <!-- header section starts -->
    <?php 
        include("header.php");
    ?>
    <!-- header section end-->
    <main>
        <!-- debut du home -->
        <video class="bg" src="img/terre.mp4" loop autoplay muted></video>
        <div class="home-1">
            <h1>Demarer votre carrière en <span class="typeWriter" data-text='["développement web"]'></span></h1>
            <p>Pratiquer pour apprendre le développement web</p>
            <a href="Tutoriel.php">Demarer</a>
        </div>
        <!-- fin du home -->
        <!-- debut tutoriel-->
        <div class='cour tuto'>
            <h1 class="titre">Tutoriel</h1>
            <div class="bloc">
                <div class="item-bloc">
                    <p class="p">1. Ils vous aideront à comprendre comment les sites web fonctionnent et à créer votre propre site web.
</p>
                </div>
                <div class="item-bloc p-2">
                    <p class="p">2. Vous apprendrez également comment ajouter des fonctionnalités avancées à votre site web,</p>
                </div>
                <div class="item-bloc">
                    <p class="p">3. Les tutoriels du développement web vous permettront de créer un site web professionnel qui vous aidera à promouvoir votre entreprise ou votre marque.</p>
                </div>
            </div>
        </div>
        <div class='cour project'>
            <h1 class="titre">Project</h1>
            <div class="bloc-2">
                <video class="vid-pro" src="img/vid-pro.mp4" loop muted autoplay></video>
                <div class="item-bloc-2">
                    <ul>
                        <li>Les projects du développement web peuvent aider les développeurs à mieux comprendre le fonctionnement d'un site web et l'importance de chaque composant </li>
                        <li class="li-2">en plus de gagner de l'expérience en travaillant avec des clients et en gérant des projets.</li>
                        <li>Les projects du développement web peuvent aider les développeurs à acquérir de nouvelles compétences et à se perfectionner dans leur domaine</li>
                    </ul>
                </div>
            </div>
        </div>
        <div  class='cour blog'>
            <h1 class="titre">Blog</h1>
            <div class="content">
                <img class="blog" src="img/photo-p3.jpg" alt="">
                <div class="bloc-3">
                    <div class="item-bloc-3">
                    <i class='check bx bx-check'></i><p>Nos Blogs partagent leurs connaissances et leur expérience avec vous .</p>
                    </div>
                    <div class="item-bloc-3">
                    <i class='check bx bx-check'></i><p> Aider les gens qui sont intéressés par la programmation web</p>
                    </div>
                    <div class="item-bloc-3">
                    <i class='check bx bx-check'></i><p>Ils peuvent également faire la promotion de leurs propres sites web ou de leurs services en ligne</p>
                    </div>
                    <div class="item-bloc-3">
                    <i class='check bx bx-check'></i><p>Nos blogs ont pour but de fournir aux internautes des informations sur les dernières nouveautés </p>
                    </div>
                    <div class="item-bloc-3">
                    <i class='check bx bx-check'></i><p>Aider les développeurs  à rester à jour sur les dernières tendances</p>
                    </div>
                </div>
            </div>
        </div>
        <!-- fin tutoriel-->
    </main>
    <!-- debut du footer-->
    <?php 
        include("footer.php");
    ?>
    <!-- fin du footer-->
    <!-- javascript -->
    <script src ="your file path/typelighter.min.js"></script>
    <script>
       var navbar = document.querySelector("header");
      // add navbar-fixed .
      window.addEventListener("scroll",function(){
                    if(window.pageYOffset > 80){
                        navbar.classList.add("navbar-fixed");
                    }else{
                        navbar.classList.remove("navbar-fixed");
                    }
                });
    </script>
</body>
</html>