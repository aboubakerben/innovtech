<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOX CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
     <!-- link file css-->
    <link rel="stylesheet" href="../Travel/blog/blog-card.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img/logohead.PNG">
    <style>
        /* start home section*/
        .title_porject{
            height:100vh;
            margin-top:60px;
            background-image:url(img/Bib.jpg);
            background-repeat:no-repeat;
            background-size:100%;
            filter:brightness(50%);
        }
        .title{
            display:flex;
            align-items:center;
            justify-content:center;
            font-size:40px;
            padding-top:100px;
            padding-left:40px;
            word-spacing:10px;
            width:90%;
            color:white;
        }
        .paragraph{
            margin-top:35px;
            font-size:30px;
            padding-left:40px;
            color:white;
        }
/* end home section*/
        .titre{
            padding:20px 40px 20px 0px;
            font-size:40px;
            width:40%;
            margin-left:43px;
            margin-top:-40px;
        }
        .blog{
            padding-top:30px;
        }
    </style>
</head>
<body>
    <!-- header section starts -->
   <?php 
        include("header.php");
   ?>
    <!-- header section end-->
    <!-- start blogs-->
    <section class="blog">
        <h1 style="padding-top:50px;" class="titre">Toute les dernieres sujets .</h1>
        <div style="display:flex;" class="blg">
            <div class="card-blg">
                <a href="blog1.php">
                    <img  style="max-height:263px;border-radius:0px;object-fit:cover;;height:70%;" class="img" src="img/tech.jpg"  alt="">
                    <div class="content">
                        <h1 class="titre-blog">Etape pour cree un site web </h1>
                    </div>
                </a>
            </div>
            <!-- blog-2-->
            <div class="card-blg">
                <a href="../Travel/blog/blog2.php">
                    <img style="max-height:263px;border-radius:0px;object-fit:cover;;height:70%;" class="img" src="img/blog2.jpg"  alt="Evolution des paradigmes">
                    <div class="content">
                        <h1 class="titre-blog">Les paradigmes et Les langagues programmation</h1>
                    </div>
                </a>
            </div>
        <!-- blog des langagues interprete et compiler -->
        <div class="card-blg">
                <a href="../Travel/blog/blog3.php">
                    <img style="max-height:263px;border-radius:0px;object-fit:cover;height:70%;" class="img" src="img/img-bog.jpg"  alt="Evolution des paradigmes">
                    <div class="content">
                        <h1 class="titre-blog">Langages compilés et interprétés</h1>
                    </div>
                </a>
            </div>
      </div>
    </section>
    <!-- end blogs-->
           <!-- Debut de footer-->
             <?php 
                include("footer.php");
             ?>
           <!-- Fin de footer-->
    <!-- javascript -->
    <script src="js/index.js"></script>
    </body>
</html>