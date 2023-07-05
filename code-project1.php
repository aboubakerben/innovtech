<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOX CSS-->
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- link file css-->
    <link rel="stylesheet" href="css/code-project1.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img/logohead.PNG">
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
    <div class="content">
        <h1>Project 1 : site personel</h1>
    </div>

    <video class="image"  controls>
         <source  src="img/vid-P.mp4" alt="video/ogg">
    </video>


    <h2>Les technologies etuliser dans ce project :</h2>

    <ul>
        <li>HTML5</li>
        <li>CSS3</li>
        <li>Javascript</li>
    </ul>

    <div class="code">
    <!-- Barre de navigation -->
    <!-- <img class="ss-img" src="img/navP1.png" alt=""> -->
    <h1 class="title">Etape1 :#Code source d une barre de navigation<i class='icon bx bx-chevron-right'></i></h1>
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
                    &lt;!-- Boxicons CSS -->
                    &lt;link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
                    &lt;!-- link css-->
                    &lt;link rel="stylesheet" href="css/Portfolio.css">
                    &lt;title>Document&lt;/title>
                &lt;/head>
                &lt;body>
                    &lt;!-- Start header -->
                        &lt;header>
                            &lt;!-- Logo -->
                            &lt;a class="logo" href="">Portfolio.io&lt;/a>
                            &lt;!-- Link -->
                            &lt;div class="link activ">
                                &lt;a href="" class="link-items">Home&lt;/a>
                                &lt;a href="" class="link-items">About&lt;/a>
                                &lt;a href="" class="link-items">Services&lt;/a>
                                &lt;a href="" class="link-items">Projects&lt;/a>
                                &lt;a href="" class="link-items">Skills&lt;/a>
                                &lt;a href="" class="active ">Contact&lt;/a>
                            &lt;/div>
                            &lt;!-- icon  -->
                            &lt;i class='menu bx bx-menu'>&lt;/i>
                            &lt;i class='close bx bx-x-circle'>&lt;/i>
                        &lt;/header>
                    &lt;!-- End header -->
                </code>
            </pre>
            <h2>Code CSS3</h2>
            <pre>
                <code>
                /* Google Font */
                @import url('https://fonts.googleapis.com/css2?family=
                Anek+Tamil:wght@300&family=Lobster&family=Nunito:wght@300&
                family=Open+Sans:wght@300;400&family=Roboto:wght@300;
                400;500&display=swap');
                :root{
                    --blue:#7451eb;
                    --black:black;
                    --silver:rgb(243, 233, 233);
                }
                *{
                    padding:0px;
                    margin:0px;
                    text-decoration:none;
                    list-style:none;
                    font-family: 'Nunito', sans-serif;
                    transition:all .2s linear;
                }
                /* start header */
                header{
                    display:flex;
                    justify-content:space-around;
                    align-items:center;
                    padding:2rem 0rem;
                    background-color:rgb(243, 233, 233);
                    z-index:1;
                }
                .logo{
                font-size:30px;
                color:black;
                padding-left:40px;
                }
                .color{
                    color:#7451eb;
                }
                .link-items{
                    color:var(--black);
                    margin-left:2rem;
                    font-size:1.23rem;
                }
                .link-items:hover{
                    color:#7451eb;
                    border-bottom: 1px solid #7451eb;
                    padding-bottom:5px;
                }
                .active{
                background-color:#7451eb;
                color:white;
                padding:10px 15px;
                border-radius:20px;
                margin-left:2rem;
                }
                .active:hover{
                    background-color:white;
                color:#7451eb;
                border:2px solid #7451eb;
                }
                .menu{
                    font-size:35px;
                    cursor:pointer;
                    display:none;
                }
                .close{
                    display:none;
                }
                /* start navbar fixed*/
                .navbar-fixed{
                    display:flex;
                    justify-content:space-around;
                    align-items:center;
                    padding:20px 0px;
                    background-color:white;
                    position:fixed;
                    width:100%;
                    z-index:2;
                    box-shadow:0px 2px 4px 4px rgba(0,0,0,0.1);
                }
                /* end navbar fixed*/
                /* end header */
                </code>
            </pre>
            <!-- code javascript -->
            <h2>Code Javascript</h2>
            <pre>
                <code>
                var navbar = document.querySelector("header");

                // add navbar-fixed .
                window.addEventListener("scroll",function(){
                    if(window.pageYOffset > 80){
                        navbar.classList.add("navbar-fixed");
                    }else{
                        navbar.classList.remove("navbar-fixed");
                    }
                });
                </code>
            </pre>
    </div>
            <!-- Acceuil -->
            <!--
                <img class="ss-img" src="img/homeP1.png" alt="">
            -->
            <h1 class="title">Etape2:#Code source d Accueil <i class='icon bx bx-chevron-right'></i></h1>
            <div class="source show">
            <h2>Code html5</h2>
            <pre>
                <code>
                &lt;!-- start home -->
                &lt;section class="home">
                    &lt;div class="info">
                        &lt;h1 class="titles">I ' am web Designer&lt;/h1>
                        &lt;h2 class="s-titles">A freelance UI & UX Designer&lt;/h2>
                    &lt;/div>
                    &lt;img class="image" src="img/UI.jpg" alt="">
                &lt;/section>
                &lt;!-- end home -->
                </code>
            </pre>
            <h2>Code CSS3</h2>
            <pre>
                <code>
                /* start home*/
                .home{
                    display:flex;
                    align-items:center;
                    justify-content:space-around;
                    padding:2rem 0rem;
                    background-color:rgb(243, 233, 233);
                }
                .info h1{
                    font-size:3rem;
                }
                .image{
                    width:500px;
                }
                /* end home*/
                </code>
            </pre>
        </div>
            <!-- start about-->
            <!--
                <img class="ss-img" src="img/aboutP1.png" alt="">
            -->
            <h1 class="title">Etape3 :#Code Source About <i class='icon bx bx-chevron-right'></i></h1>
            <pre>
                <code>
                &lt;!-- start About -->
                    &lt;section class="about">
                        &lt;h1 class="titre">About&lt;/h1>
                        &lt;div class="info-section">
                            &lt;img class="image-about" src="img/UI.jpg" alt="">
                            &lt;ul class="info">
                                &lt;li> &lt;span class="Q">Name&lt;/span> : &lt;span class="A D">Scott Addakin&lt;/span>&lt;/li>
                                &lt;li> &lt;span class="Q">Date of birth&lt;/span> : &lt;span class="A B">07/10/1988&lt;/span>&lt;/li>
                                &lt;li> &lt;span class="Q">Address&lt;/span> : &lt;span class="A C">FLORIDA CA 36 443  USA&lt;/span>&lt;/li>
                                &lt;li> &lt;span class="Q">Zip code&lt;/span> : &lt;span class="A E">3000&lt;/span>&lt;/li>
                                &lt;li> &lt;span class="Q">Email&lt;/span> : &lt;span class="A F">ScottAddakin@gmail.com&lt;/span>&lt;/li>
                                &lt;li> &lt;span class="Q">phone&lt;/span> : &lt;span class="A G">+ 00 1234 5678&lt;/span>&lt;/li>
                            &lt;/ul>
                        &lt;/div>
                    &lt;/section>
                    &lt;!-- End About -->
                </code>
            </pre>
            <pre>
                <code>
                /* start about*/
                    .titre{
                        padding:20px 0px;
                        display:flex;
                        justify-content:center;
                        font-size:30px;
                        letter-spacing:2px;
                    }
                    .info-section{
                        display:flex;
                        justify-content:center;
                        align-items:center;
                    }
                    .image-about{
                        background-color:#fcf9f9;
                        border-radius:10px;
                        width:400px;
                    }
                    .info{
                        margin-left:30px;
                    }
                    .info li{
                        margin:40px;
                        font-size:20px;
                    }
                    .Q{
                    font-weight:bold;
                    }
                    .D{
                        margin-left:50px;
                    }
                    .C{
                        margin-left:30px;
                    }
                    .E{
                        margin-left:27px;
                    }
                    .F{
                        margin-left:50px;
                    }
                    .G{
                        margin-left:45px;
                    }
                    /* end about*/
                </code>
            </pre>
            <!-- end about -->
            <!-- start myservice-->
            <!--
                <img class="ss-img" src="img/serviceP1.png" alt="">
            -->
            <h1 class="title">Etape4:#Code Source My services <i class='icon bx bx-chevron-right'></i></h1>
            <pre>
                <code>
                &lt;!-- Start MyServices-->
                &lt;section class="services">
                    &lt;h1 class="titre">My Services&lt;/h1>
                    &lt;div class="info-service">
                        &lt;div class="service">
                            &lt;i class='icons bx bx-code-alt'>&lt;/i>
                            &lt;h1>Web and mobile devloppement&lt;/h1>
                            &lt;p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates corrupti animi saepe quasi 
                            excepturi cupiditate voluptate dolor sed obcaecati vero.&lt;/p>
                        &lt;/div>
                        &lt;div class="service">
                            &lt;i class='icons bx bx-diamond'>&lt;/i>
                            &lt;h1>Web design&lt;/h1>
                            &lt;p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates corrupti animi saepe quasi
                             excepturi cupiditate voluptate dolor sed obcaecati vero.&lt;/p>
                        &lt;/div>
                        &lt;div class="service">
                            &lt;i class='icons bx bxl-android'>&lt;/i>
                            &lt;h1>App Design&lt;/h1>
                            &lt;p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates corrupti animi saepe quasi excepturi cupiditate 
                            voluptate dolor sed obcaecati vero.&lt;/p> 
                        &lt;/div>
                    &lt;/div>
                &lt;/section>
                &lt;!-- END MyServices-->
                </code>
                </pre>
                <pre>
                    <code>
                    /* Start MyServices*/
                        .services{
                            margin:5rem 0rem;
                            background-color:#f1ebeb;
                            padding:2rem 0rem;
                        }
                        .info-service{
                            display:flex;
                            justify-content:space-around;
                            margin:20px 0px 40px 0px;
                        }
                        .service{
                            box-shadow:0px 2px 4px 4px rgba(0,0,0,0.1);
                            padding:30px;
                            background-color:white;
                            margin:0rem 1.5rem;
                        }
                        .info-service h1{
                            text-align:center;
                            margin-bottom:20px;
                        }
                        p{
                            display:flex;
                            justify-content:center;
                            font-size:20px;
                        }
                        .icons{
                            font-size:50px;
                            display:flex;
                            justify-content:center;
                            margin-bottom:2rem;
                        }
                        /* End MyServices*/
                    </code>
                </pre>
         <!-- end myServices-->
                </code>
            </pre>
            <!-- start project -->
            <!--
                <img class="ss-img" src="img/projectP1.png" alt="">
             -->
            <h1 class="title">Etape5 :#Code Source Project<i class='icon bx bx-chevron-right'></i></h1>
            <pre>
                <code>
                        &lt;!-- Start MyProjects-->
                    &lt;section class="projects">
                        &lt;h1 class="titre">Projects&lt;/h1>
                        &lt;div class="project">
                            &lt;div class="inf">
                                &lt;img class="image" src="img/travel.jpg" alt="">
                                &lt;div class="inf-project">
                                    &lt;h1>Web Site Travel&lt;/h1>
                                    &lt;p>Descouver your web site&lt;/p>
                                &lt;/div>
                            &lt;/div>
                            &lt;div class="inf">
                                &lt;img class="image" src="img/design2.jpg" alt="">
                                &lt;div class="inf-project">
                                    &lt;h1>Design&lt;/h1>
                                    &lt;p>Descouver your Design&lt;/p>
                                &lt;/div>
                            &lt;/div>
                            &lt;div class="inf">
                                &lt;img class="image" src="img/seo-4.jpg" alt="">
                                &lt;div class="inf-project">
                                    &lt;h1>Search Engine Optim&lt;/h1>
                                    &lt;p>Descouver your Seo&lt;/p>
                                &lt;/div>
                            &lt;/div>
                        &lt;/div>
                    &lt;/section>
                    &lt;!-- End MyProjects-->
                </code>
            </pre>
            <pre>
                <code>
                /* start project*/
                    .title{
                        display:flex;
                        justify-content:center;
                        padding:20px 0px;
                    }
                    .project{
                        display:flex;
                        justify-content:space-around;
                        padding:20px 0px 50px 0px;
                    }
                    .image{
                        width:400px;
                        border-radius:5px;
                    }
                    .inf{
                        display:flex;
                    }
                    .inf-project{
                        border:2px solid white;
                        position:absolute;
                        padding:5rem;
                        margin:.9rem 0rem 0rem .5rem;
                        color:white;
                        text-align:center;
                    }
                    /* end  project*/
                </code>
            </pre>
             <!-- start project -->
             <!--
                <img class="ss-img" src="img/skills.png" alt="">
             -->
             <h1 class="title">Etape6:#Cree la section Skills<i class='icon bx bx-chevron-right'></i></h1>
            <pre>
                <code>
                &lt;!-- start skills-->
            &lt;section class="skills">
                &lt;h1 class="titre">Skills&lt;/h1>
                &lt;div class="skil">
                    &lt;article>
                        &lt;h2>Front End&lt;/h2>
                        &lt;div class="content-skill">
                            &lt;div class="bg-clr">
                                &lt;p>HTML/CSS&lt;/p>
                                &lt;span class="per">85%&lt;/span>
                            &lt;/div>
                            &lt;div class="colore">&lt;/div>
                        &lt;/div>
                        &lt;div class="content-skill">
                            &lt;div class="bg-clr">
                                &lt;p>Javascript&lt;/p>
                                &lt;span class="per">60%&lt;/span>
                            &lt;/div>
                            &lt;div class="colore">&lt;/div>
                        &lt;/div>
                        &lt;div class="content-skill">
                            &lt;div class="bg-clr">
                                &lt;p>Bootstrap&lt;/p>
                                &lt;span class="per">80%&lt;/span>
                            &lt;/div>
                            &lt;div class="colore">&lt;/div>
                        &lt;/div>
                    &lt;/article>
                    &lt;article>
                        &lt;h2>Back End&lt;/h2>
                        &lt;div class="content-skill">
                            &lt;div class="bg-clr">
                                &lt;p>PHP/MYSQL&lt;/p>
                                &lt;span class="per">50%&lt;/span>
                            &lt;/div>
                            &lt;div class="colore">&lt;/div>
                        &lt;/div>
                        &lt;div class="content-skill">
                            &lt;div class="bg-clr">
                                &lt;p>Pyton&lt;/p>
                                &lt;span class="per">50%&lt;/span>
                            &lt;/div>
                            &lt;div class="colore">&lt;/div>
                        &lt;/div>
                        &lt;div class="content-skill">
                            &lt;div class="bg-clr">
                                &lt;p>Laravel&lt;/p>
                                &lt;span class="per">50%&lt;/span>
                            &lt;/div>
                            &lt;div class="colore">&lt;/div>
                        &lt;/div>
                    &lt;/article>
                &lt;/div>
            &lt;/section>
            &lt;!-- end skills-->
                </code>
            </pre>
            <pre>
                <code>
                /* start skill */
                .skills{
                    margin-bottom:5rem;
                    background-color:rgb(243, 233, 233);
                }
                .skil{
                    display:flex;
                    justify-content:space-around;
                    margin:0rem 10rem 0rem -10rem;
                }
                .content-skill{
                width:50%;
                padding:5px 0px 0px 0px;
                margin:25px 0px;
                }
                .bg-clr{
                    display:flex;
                    justify-content:space-between;
                    width:650%;
                }
                .colore{
                    width:650%;
                    padding:10px 20px 10px 0px;
                    background-color:#7451eb;
                    border-radius:20px;
                }
                /* end skill*/
                </code>
            </pre>
            <!-- start contact-->
            <!--
                <img class="ss-img" src="img/contact.png" alt="">
            -->
            <h1 class="title">Etape7:#Code Source Contact<i class='icon bx bx-chevron-right'></i></h1>
            <pre>
                <code>
                &lt;!-- Debut de Contact-->
                &lt;section class="contact">
                    &lt;video class="vedio" src="img/bg-contact.mp4" autoplay muted>&lt;/video>
                    &lt;div class="info">
                        &lt;h1>Contact&lt;/h1>
                        &lt;p>Lorem ipsum dolor sit amet consectetur adipisicing elit Voluptates corrupti animi saepe quasi
                         isicing elit Voluptates corrupti animi saepe quasi excepturi cupiditate voluptate dolor sed obcaecati 
                         excepturi cupiditate voluptate dolor sed obcaecati vero,Lorem ipsum dolor sit amet consectetur adip
                         vero.&lt;/p>
                        &lt;a class="links" href="">Send&lt;/a>
                    &lt;/div>
                &lt;/section>
                &lt;!-- Fin de Contact-->
                </code>
            </pre>
            <pre>
                <code>
                /* start contact */
                    .vedio{
                        position: absolute;
                        z-index: -1;
                        width: 100%;
                        height: 100%;
                        object-fit: cover;
                        clip-path: polygon(20% 0%, 80% 0%, 100% 20%, 100% 80%, 80% 100%, 20% 100%, 0% 80%, 0% 20%);
                        opacity:0.5;
                    }
                    .info{
                        padding-top:10rem;
                    }
                    .info h1{
                        display:flex;
                        justify-content:center;
                    }
                    .info p{
                        width:100%;
                        padding:5rem 0rem;
                    }
                    .info a{
                        display:flex;
                        justify-content:center;
                        padding:10px 0px;
                        width:20%;
                        border-radius:5px;
                        margin-left:33rem;
                        background-color:white;
                        color:black;
                        letter-spacing:2px;
                    }
                    .info a:hover{
                        background:transparent;
                        border:2px solid white;
                    }
                    .links{
                        padding:10px 50px;
                        color:black;
                        border-radius:7px;
                        margin-left:38rem;
                        margin-top:20px;
                    }
                    /* end contact */
                </code>
            </pre>
             <!-- start footer-->
             <!--
                    <img class="ss-img" src="img/footer.png" alt="">
              -->
             <h1 class="title">Etape8:#Code Source footer<i class='icon bx bx-chevron-right'></i></h1>
            <pre>
                <code>
                        &lt;!-- Start footer-->
                        &lt;footer>
                        &lt;div class="media">
                            &lt;a class="icon" href="">
                                &lt;i class='icn bx bxl-facebook-circle'>&lt;/i>
                            &lt;/a>
                            &lt;a class="icon" href="">
                                &lt;i class='icn bx bxl-instagram'>&lt;/i>
                            &lt;/a>
                            &lt;a class="icon" href="">
                                &lt;i class='icn bx bxl-twitter'>&lt;/i>
                            &lt;/a>
                        &lt;/div>
                        &lt;p>@Copyright Scott 2022 , All Right Reseved&lt;/p>
                    &lt;/footer>
                    &lt;!-- end footer-->
                    &lt;!-- javascript-->
                    &lt;script src="js/portfolio.js">&lt;/script>
                &lt;/body>
                &lt;/html>
                </code>
            </pre>

            <pre>
                <code>
                /* start footer*/
                footer{
                    margin-top:11rem;
                    padding:5rem 0rem;
                    background-color:rgb(243, 233, 233);
                }
                .media{
                    display:flex;
                    justify-content:center;
                }
                .icon{
                    font-size:40px;
                    margin:0rem 1rem;
                }
                footer p{
                    margin-top:1rem;
                    padding:1rem;
                }
                /* end footer*/
                </code>
            </pre>
    </code>
</pre>
</div>
<div class="information">
        <p>Si vous avez terminer le codage de notre maquette , n hesitez pas de voir le site personel et le comparer avec votre project</p>
        <a class="link-p" href="portefolio.html">Vister le project1</a>
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