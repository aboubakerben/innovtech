<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <!-- BOX CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- link file css-->
    <link rel="stylesheet" href="css/code-project2.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img/logohead.PNG">
    <style>
        .code{
            margin:0px 100px 0px 0px;
            margin-left:38px;
        }
        ul{
            margin-left:80px;
        }
        li{
            font-size:20px;
        }
        #img-home{
            width:70%;
            margin-left:24px;
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
        <div class="log icons">
            <i class='bx bx-search-alt-2' id="search"></i>
            <!--
                <a class="login" href="connexion.php">connexion </a>
            -->
        </div>
        <!-- search -->
        <div class="search-bar-container" style="background-color:#f5f5f5;">
            <input type="search" id="search-bar" placeholder="search here ...">
            <label for="search-bar" class='bx bx-search-alt-2'></label>
        </div>
    </header>
    <!-- header section end-->
    <div class="container">
    <div class="content">
        <h1>Project2 : site de parfum</h1>
    </div>

    <video id="img-home"  src="img/site-parfum.mp4" controls></video>

    <h2>Les technologies etuliser dans ce project : </h2>
    <ul>
        <li>
            <p>HTML5</p>
        </li>
        <li>
            <p>CSS3</p>
        </li>
        <li>
            <p>Javascript</p>
        </li>
    </ul>
    <div class="container">
    <div class="code">
    <!-- Barre de navigation -->
    <h1 class="title">Etape 1 :#Code source d une barre de navigation<i class='icon bx bx-chevron-right'></i></h1>
    <div class="source show">
    <h2>Code html5</h2>
        <pre>
            <code>
                &lt;!DOCTYPE html>
                &lt;html lang="en">
                &lt;head>
                    &lt;meta charset="UTF-8">
                    &lt;meta http-equiv="X-UA-Compatible" content="IE=edge">
                    &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
                    &lt;!-- link of font -->
                    &lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
                    integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+
                    4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                    &lt;!-- link of css-->
                    &lt;link rel="stylesheet" href="css/Parfum.css">
                    &lt;title>Parfum&lt;/title>
                &lt;/head>
                &lt;body>
                    &lt;!-- start header -->
                        &lt;header>
                            &lt;!-- logo-->
                            &lt;a href="" class="logo">Parfum.io&lt;/a>
                            &lt;!-- navigation -->
                            &lt;nav>
                                &lt;a href="#Acceuil" class="link">Acceuil&lt;/a>
                                &lt;a href="#histoire" class="link">histoire&lt;/a>
                                &lt;a href="#article" class="link">article&lt;/a>
                                &lt;a href="#Tandance" class="link">Tandance&lt;/a>
                                &lt;a href="#Contact" class="link active">Contact&lt;/a>
                            &lt;/nav>
                        &lt;/header> 
                        &lt;!-- end header -->  
            </code>
        </pre>
            <h2>Code CSS3</h2>
            <pre>
                <code>
                @import url('https://fonts.googleapis.com/css2?family=Anek+Tamil:wght@300&family=Lobster&family=
                Nunito:wght@300&family=Open+Sans:wght@300;400&family=Roboto:wght@300;400;500&display=swap');
                    :root{
                        --white:white;
                        --color1:#c0b8b8;
                        --color2:rgb(73, 194, 73);
                    }

                    *{
                        padding:0px;
                        margin:0px;
                        list-style:none;
                        text-decoration:none;
                        font-family: 'Roboto', sans-serif;
                        transition:all .3s;
                        text-transform: capitalize;
                    }
                    header{
                        display:flex;
                        justify-content:space-around;
                        align-items:center;
                        padding:2rem 0rem;
                        z-index:1;
                        position:absolute;
                        width:100%;
                    }
                    .header-fixed{
                        display:flex;
                        justify-content:space-around;
                        align-items:center;
                        padding:20px 0px;
                        background-color:black;
                        position:fixed;
                        width:100%;
                        z-index:2;
                        box-shadow:0px 2px 4px 4px rgba(0,0,0,0.1);
                    }
                    .logo{
                        font-size:2rem;
                        font-weight:bold;
                        color:var(--white);
                        letter-spacing:2px;
                    }
                    .link{
                        margin-left:10px;
                        padding:8px 15px;
                        border-radius:5px;
                        font-size:1.3rem;
                        color:var(--white);
                    }
                    .active{
                        background-color:var(--color2);
                        border-radius:5px;
                    }
                    .active:hover{
                        border:2px solid var(--color2);
                        background-color:transparent;
                    }
                </code>
            </pre>
            <!-- code javascript -->
            <h2>Code Javascript</h2>
            <pre>
                <code>
                    var scrollPage = document.querySelector("header");

                    window.addEventListener("scroll",()=>{
                        if(window.pageYOffset > 80 ){
                            scrollPage.classList.add("header-fixed");
                        }else{
                            scrollPage.classList.remove("header-fixed");
                        }
                    });
                </code>
            </pre>
    </div>
            <!-- Acceuil -->
            <h1 class="title">Etape2 : #Code source d accueil <i class='icon bx bx-chevron-right'></i></h1>
            <div class="source show">
            <h2>Code html5</h2>
            <pre>
                <code>
                    &lt;!-- start home -->
                    &lt;section class="home">
                        &lt;video class="video" src="img/vid-1.mp4" loop autoplay muted>&lt;/video>
                        &lt;h1>Savoir comment choisir un parfun&lt;/h1>
                        &lt;p>Parfum.io vous donne des informations pour bien choisir votre parfum m N hesitez pas a nous contacter si 
                        vous avez besoin&lt;/p>
                        &lt;a href="" class="contact">contacter&lt;/a>
                    &lt;/section>
                    &lt;!-- end home -->
                </code>
            </pre>
            <h2>Code CSS3</h2>
            <pre>
                <code>
                /* start home*/
                        .video{
                            width:100%;
                            height:100%;
                            left:0;
                            z-index:-1;
                            filter:brightness(50%);
                        }
                        .home h1{
                            display:flex;
                            justify-content:flex-start;
                            align-items:flex-end;
                            font-size:40px;
                            margin-left:140px;
                            height:50vh;
                            z-index:1;
                            color:white;
                            position:absolute;
                            top:0;
                        }
                        .home p{
                            display:flex;
                            justify-content:flex-start;
                            font-size:30px;
                            padding:20px 0px;
                            margin:340px 140px;
                            position:absolute;
                            color:white;
                            z-index:1;
                            top:0;
                        }
                        .contact{
                            margin-left:140px;
                            background-color:var(--white);
                            padding:10px 23px;
                            border-radius:5px;
                            color:black;
                            z-index:1;
                            margin:500px 140px;
                            position:absolute;
                            left:0;
                        }
                        .contact:hover{
                            background-color:transparent;
                            color:white;
                            border:2px solid white;
                        }
                </code>
            </pre>
        </div>
            <!-- start about-->
            <h1 class="title">Etape 3 : #Code Source de histoire <i class='icon bx bx-chevron-right'></i></h1>
            <h2>Code html5</h2>
            <pre>
                <code>
                    &lt;!-- start history-->
                    &lt;section class="history">
                        &lt;h1 class="reval-1">Histoire des Parfumes&lt;/h1>

                        &lt;div class="parfum">
                            &lt;img class="histoire-img reval-2" src="img/histoire.jpg" alt="histoire des parfumes">

                            &lt;div class="content-info">
                                &lt;h2 class="reval-3">histoire des parfumes&lt;/h2>
                                &lt;p class="reval-3">Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre 
                                provisoire pour calibrer une mise en page, le texte définitif venant remplacer le faux-texte dès qu'il est prêt
                                 ou que la mise en page est achevée. Généralement,  on utilise un texte en faux latin, le Lorem ipsum 
                                 ou Lipsum.
                                 &lt;/p>
                            &lt;/div>
                        &lt;/div>
                    &lt;/section>
                    &lt;!-- end history-->
                </code>
            </pre>
            <h2>Code CSS3</h2>
            <pre>
                <code>
                .history h1{
                            display:flex;
                            padding:40px 0px;
                            justify-content:center;
                            font-size:45px;
                        }
                        .parfum{
                            margin:0 5rem;
                            display:flex;
                        }
                        .histoire-img{
                            width:50%;
                            height:70vh;
                        }
                        [class*="reval-"] {
                            opacity:0;
                            transform: translateY(-30px);
                        }
                        .reval-2,.reval-3,.reval-4{
                            transition-delay:100ms;
                        }
                        .reval-visble{
                            opacity:1;
                            transform:translateY(0);
                            transition:1s cubic-bezier(.5,0,0,1);
                        }
                        .content-info{
                            width:50%;
                            margin:0px 0px 0px 20px;
                            font-size:25px;
                        }
                        .content-info h2{
                        padding:20px 20px 0px 20px;
                        }
                        .content-info p{
                            padding:0px 20px 0px 20px;
                            height:50vh;
                            display:flex;
                            align-items:center;
                            line-height:2.5rem;
                        }
                        /* end history*/
                </code>
            </pre>
            <h2>Code Javascript</h2>
            <pre>
                <code>
                    const radio = .1

                    var options = {
                        root:null,
                        rootMargin: '0px',
                        threshold: radio
                    }

                    const handelIntersect = function(entries, observer){
                        entries.forEach(function(entry){
                            if(entry.intersectionRatio > radio){
                                entry.target.classList.add("reval-visble");
                                IntersectionObserver.unobserve(entry.target);
                            }
                        });
                    }
                    var observer = new IntersectionObserver(handelIntersect , options);
                    document.querySelectorAll('[class*="reval-"]').forEach(function(r){
                        observer.observe(r);
                    })

                </code>
            </pre>
            <!-- end about -->
            <!-- start myservice-->
            <h1 class="title">Etape 4 :  #Code Source Article <i class='icon bx bx-chevron-right'></i></h1>
            <h2>Code html5</h2>
            <pre>
                <code>
                &lt;!-- start article-->
                &lt;section class="article">
                    &lt;h2 class="reval-1">article&lt;/h2>
                    &lt;div class="a">
                            &lt;div class="card">
                                &lt;img class="Parfum-1" src="img/parfum1.jpg" alt="CHANNEL">
                                &lt;div class="content-inf">
                                    &lt;h3>Parfum CHANNEL&lt;/h3>
                                    &lt;p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour .&lt;/p>
                                &lt;/div>
                            &lt;/div>

                            &lt;div class="card">
                                &lt;img class="Parfum-1" src="img/parfum1.jpg" alt="CHANNEL">
                                &lt;div class="content-inf">
                                    &lt;h3>Parfum CHANNEL&lt;/h3>
                                    &lt;p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour .&lt;/p>
                                &lt;/div>
                            &lt;/div>

                            &lt;div class="card">
                                &lt;img class="Parfum-1" src="img/parfum1.jpg" alt="CHANNEL">
                                &lt;div class="content-inf">
                                    &lt;h3>Parfum CHANNEL&lt;/h3>
                                    &lt;p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour .&lt;/p>
                                &lt;/div>
                            &lt;/div>

                            &lt;div class="card">
                                &lt;img class="Parfum-1" src="img/parfum1.jpg" alt="CHANNEL">
                                &lt;div class="content-inf">
                                    &lt;h3>Parfum CHANNEL&lt;/h3>
                                    &lt;p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour .&lt;/p>
                                &lt;/div>
                            &lt;/div>

                            &lt;div class="card">
                                &lt;img class="Parfum-1" src="img/parfum1.jpg" alt="CHANNEL">
                                &lt;div class="content-inf">
                                    &lt;h3>Parfum CHANNEL&lt;/h3>
                                    &lt;p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour .&lt;/p>
                                &lt;/div>
                            &lt;/div>

                            &lt;div class="card">
                                &lt;img class="Parfum-1" src="img/parfum1.jpg" alt="CHANNEL">
                                &lt;div class="content-inf">
                                    &lt;h3>Parfum CHANNEL&lt;/h3>
                                    &lt;p>Le lorem ipsum est, en imprimerie, une suite de mots sans signification utilisée à titre provisoire pour .&lt;/p>
                                &lt;/div>
                            &lt;/div>
                    &lt;/div>
                    &lt;/section>
                    &lt;!-- end article-->
                </code>
                </pre>
                <h2>Code CSS3</h2>
                <pre>
                    <code>
                    /* start arcticle*/
                        .article h2{
                            display:flex;
                            padding:40px 0px;
                            justify-content:center;
                            font-size:45px;
                        }
                        .a{
                            display:grid;
                            grid-template-columns: repeat(auto-fit,minmax(20rem,1fr));
                            gap:2rem;
                        }
                        .card{
                            margin:0px 20px;
                            box-shadow:0px 2px 4px 4px rgba(0,0,0,0.2);
                            border-radius:5px;
                        }
                        .card:hover{
                            box-shadow:4px 6px 8px 8px rgba(0,0,0,0.2);
                        }
                        .Parfum-1{
                            width:100%;
                            transform: scale(1);
                        }
                        .content-inf h3{
                            padding:10px 0px;
                            font-size:23px;
                            padding:5px 10px;
                        }
                        .content-inf p{
                            font-size:25px;
                            padding:5px 10px;
                        }
                        /* end article*/
                    </code>
                </pre>
         <!-- end myServices-->
                </code>
            </pre>
            <!-- start project -->
            <h1 class="title">Etape5 : #Code Source de choisir mon Parfum<i class='icon bx bx-chevron-right'></i></h1>
            <h2>Code html5</h2>
            <pre>
                <code>
                            &lt;section class="choisir">
                            &lt;h2>Choisir mon parfum&lt;/h2>


                            &lt;article class="chois">

                                
                                &lt;div class="scroll">
                                    &lt;div class="iconse">
                                        &lt;i class="icon fa-solid fa-chevron-left">&lt;/i>
                                    &lt;/div>

                                    &lt;img class="img1" src="img/p1.png" alt="">
                                    &lt;img class="img1" src="img/p2.png" alt="">
                                    &lt;img class="img1" src="img/p3.png" alt="">
                                    &lt;img class="img1" src="img/p4.png" alt="">
                                    &lt;img class="img1" src="img/p5.png" alt="">
                                    &lt;img class="img1" src="img/p6.png" alt="">

                                    &lt;div class="iconse">
                                        &lt;i class="icon right fa-solid fa-chevron-right">&lt;/i>
                                    &lt;/div>

                                &lt;/div>


                            &lt;/article>

                        &lt;/section>
                        &lt;!-- end choisir parfum -->
                </code>
            </pre>
            <h2>Code CSS3</h2>
            <pre>
                <code>
                    /* start parfum*/
                    .choisir h2{
                        display:flex;
                        padding:40px 0px;
                        justify-content:center;
                        font-size:45px;
                    }
                    .scroll{
                        width:100%;
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        overflow:auto;
                        scroll-behavior:smooth;
                    }
                    .scroll::-webkit-scrollbar{
                        -webkit-appearance: none;
                    }
                    .img1{
                        width:20%;
                        height:50vh;
                        margin:0px 20px;
                    }
                    .iconse{
                        height:280px;
                        display:flex;
                        justify-content:space-between;
                        align-items:center;
                    }
                    .icon{
                        background-color:white;
                        color:black; 
                        padding:20px;
                        border-radius:50%;
                        cursor:pointer;
                        position:absolute;
                        font-size:30px;
                        box-shadow:0px 2px 4px 4px rgba(0,0,0,0.1);
                        margin-left:20px;
                    }
                    .right{
                        position:absolute;
                        right:0; 
                        margin-right:20px;
                    }
                    /* end parfum*/
                </code>
            </pre>
            <h2>Code Javascript</h2>
            <pre>
                <code>
                    var left = document.querySelector(".scroll");
                    var iconLeft = document.querySelector(".icon");

                    iconLeft.addEventListener("click",()=>{
                        left.scrollBy(400,0);
                    });

                    var rigth = document.querySelector(".scroll");
                    var iconRight = document.querySelector(".right");

                    iconRight.addEventListener("click",()=>{
                        rigth.scrollBy(-400,0);
                    });
                </code>
            </pre>
             <!-- start project -->
             <h1 class="title">Etape 6 : #Cree contact<i class='icon bx bx-chevron-right'></i></h1>
             <h2>Code html5</h2>
            <pre>
                <code>
                        &lt;footer>

                        &lt;!-- start contact -->
                        &lt;section class="contact-2">
                            &lt;h2 class="title-contact">contact&lt;/h2>

                            &lt;form action="" method="post">
                                &lt;div class="user">
                                    &lt;label for="">&lt;/label>
                                    &lt;input type="text" placeholder="Nom itulisateur">
                                &lt;/div>
                                &lt;div class="email">
                                        &lt;label for="">&lt;/label>
                                        &lt;input type="email" placeholder="Email">
                                &lt;/div>
                                &lt;button type="submit">Envoyer&lt;/button>
                            &lt;/form>
                        &lt;/section>
                        &lt;!-- end contact -->

                        &lt;ul class="social">
                            &lt;a href="" class="link-s fb">&lt;i class="fa-brands fa-facebook">&lt;/i>&lt;/a>
                            &lt;a href="" class="link-s insta" >&lt;i class="fa-brands fa-instagram">&lt;/i>&lt;/a>
                            &lt;a href="" class="link-s you">&lt;i class="fa-brands fa-youtube">&lt;/i>&lt;/a>
                        &lt;/ul>

                        &lt;/footer>
                        &lt;!-- javascript-->
                        &lt;script src="js/Parfum.js">&lt;/script>
                        &lt;/body>
                        &lt;/html>
                </code>
            </pre>
            <h2>Code CSS3</h2>
            <pre>
                <code>
                     /* start contact */
                    .contact-2{
                        width:50%;
                        background-color:white;
                        display:grid;
                        grid-template-columns:repeat("auto-fit",minmax(20rem,1fr));
                        gap:2rem;
                        margin:0px 0px 0px 300px;
                        border-radius:5px;
                        box-shadow:0px 2px 4px 4px rgba(0,0,0,0.3);
                        z-index:1;
                        position:absolute;
                        margin-top:-10rem;
                    }
                    .title-contact{
                        text-align:center;
                        font-size:30px;
                        padding:20px 0px;
                    }
                    .user input , .email input{
                    width:90%;
                    margin:20px;
                    padding:10px 18px;
                    }
                    button{
                        width:20%;
                        margin:20px 0px 20px 20px;
                        background-color:var(--color2);
                        margin-left:10px;
                        padding:8px 15px;
                        border-radius:5px;
                        font-size:1.3rem;
                        color:var(--white);
                    }
                    button:hover{
                        border:1px solid var(--color2);
                        background-color:white;
                        color:black;
                    }
                    /* end contact */
                    /* strat footer*/
                    footer{
                        background-color:black;
                        padding:20px 0px;
                        z-index:-1;
                        margin-top:15rem;
                        height:15rem;
                    }
                    .social{
                        height:15rem;
                        display:flex;
                        justify-content:center;
                        align-items:flex-end;
                    }
                    .link-s{
                        margin-top:20px;
                        color:white;
                        font-size:32px;
                        padding:0px 20px;
                    }
                    .fb{
                        background-color:#7451eb;
                        color:white;
                        border-radius:5px;
                    }
                    .you{
                        background-color:red;
                        color:white;
                        border-radius:5px;
                    }
                    /* end footer*/
                </code>
            </pre>
    </code>
</pre>
</div>
    </div>

    <div class="information">
        <p>Si vous avez terminer le codage de notre maquette , n hesitez pas de voir le site de parfum et le comparer avec votre project</p>
        <a class="link-p" href="Parfum/Parfum.html">Vister le projet2</a>
    </div>
    
</div>
 <!-- Debut de footer-->
 <footer style="border-top:0px;">
        <div class="inf">
            <a href="" class="logo" style="color:#7451eb;">INNOVTECH</a>
            <p>Vous etes debutant en programmation et vous voulez devlopper votre<br> competences technique en devloppement web ,<br> Alors que est ce que vous attender ,<br> commencer a suivre nos cous et pratiquer nos project pour devenir expert dans ce monde la .</p>
        </div>
        <ul class="Reseau">
            <h1>Reaseau sociaux</h1>
            <a href=""><i class='bx bxl-facebook-circle'></i>Facbook</a>
            <a href=""><i class='bx bxl-instagram'></i>Instagram</a>
            <a href=""><i class='bx bxl-twitter' ></i>Twiter</a>
            <a href=""><i class='bx bxl-tiktok' ></i>TikTok</a>
            <a href=""><i class='bx bxl-youtube'></i>YouTub</a>
        </ul>
        <ul class="information">
            <h1>Inforamation</h1>
            <a href="">Qui nous sommes nous ?</a>
            <a href="">Experience De Formation</a>
        </ul>

    </footer>
<!-- Fin de footer-->
<!-- javascript-->
<script src="js/code-project1.js"></script>
<script src="js/index.js"></script>
</body>
</html>