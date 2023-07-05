<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INNOVTECH</title>
    <link rel="icon" href="img/logohead.PNG">
    <!-- link of css -->
    <link rel="stylesheet" href="css/codeP3.css">
</head>
<body>
    <!-- header section starts -->
    <header>
        <!-- menu -->
        <i class='bx bx-menu' id="menu"></i>
        <!-- Logo -->
        <a href="index.php" class="logo" style="color:#7451eb;">INNOVTECH</a>
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
        <div class="search-bar-container"  style="background-color:#f5f5f5;">
            <input type="search" id="search-bar" placeholder="search here ...">
            <label for="search-bar" class='bx bx-search-alt-2'></label>
        </div>
    </header>
    <!-- header section end-->
    <!-- start main-->
    <main>
        <h1>Project3 : Formulaire de inscription</h1>

        <img class="imag" src="img/imgP3.jpg" alt="code source d un site du formulaire">

        <din class="tech">
            <h2>les technologies etuliser dans ce project : </h2>
            <ul>
                <li>HTML5</li>
                <li>CSS3</li>
            </ul>
        </din>
        
        <div class="tech">
            <h2>1 . maquette du formulaire d inscription</h2>
        </div>

        <img class="imag" src="img/Inscription.png" alt="image de formulaire d inscription">

        <div class="tech">
            <h2 class="title">2. code source du project</h2>
        </div>

        <div class="tech">
            <h3>Code html5</h3>
        </div>

        <pre>
            <code>
                &lt;!DOCTYPE html>
                &lt;html lang="en">
                &lt;head>
                &lt;meta charset="UTF-8">
                &lt;meta http-equiv="X-UA-Compatible" content="IE=edge">
                &lt;meta name="viewport" content="width=device-width, initial-scale=1.0">
                &lt;!-- link of icons-->
                &lt;link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css" 
                integrity="sha512-xh6O/CkQoPOWDdYTDqeRdPCVd1SpvCA9XXcUnZS2FmJNp1coAFzvtCN9BmamE+
                4aHK8yyUHUSCcJHgXloTyT2A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
                &lt;!-- link of css-->
                &lt;link rel="stylesheet" href="css/index.css">
                &lt;title>Document</title>
                </head>
                <body>
                &lt;div class="container">
                    &lt;img class="image" src="img/Login.jpg" alt="">

                    &lt;form action="" method="post">
                        &lt;h1>inscription</h1>

                        &lt;div class="inscrire">
                            &lt;div class="fb">
                                &lt;i class="icon fa-brands fa-facebook"></i>
                                &lt;span>FACBOOK</span>
                            &lt;/div>
                            &lt;div class="google">
                                &lt;i class="icon fa-brands fa-google"></i>
                                &lt;span>GOOGLE</span>
                            &lt;/div>
                            &lt;div class="apple">
                                &lt;i class="icon fa-brands fa-apple"></i>
                                &lt;span>APPLE</span>
                            &lt;/div>
                        &lt;/div>
                        &lt;div class="choix">
                            &lt;span class="color"></span>
                            &lt;p>ou</p>
                            &lt;span class="color"></span>
                        &lt;/div>
                        &lt;p class="txt">inscriver vous avec votre email</p>
                        &lt;div class="user">
                            &lt;label for=""></label>
                            &lt;input type="text" placeholder="Nom & Prenom">
                        &lt;/div>
                        &lt;div class="email">
                            &lt;label for=""></label>
                            &lt;input type="email" placeholder="Email">
                        &lt;/div>
                        &lt;div class="pass">
                            &lt;label for=""></label>
                            &lt;input type="password" placeholder="Mots de passe">
                        &lt;/div>
                        &lt;div class="comfirm">
                            &lt;label for=""></label>
                            &lt;input type="password" placeholder="Confirmation du mots de passe">
                        &lt;/div>
                        &lt;div class="acceptation">
                            &lt;input type="checkbox">
                            &lt;span>J' ai lu et j' acceptea &lt;a href="">les conditions generales d utlisations et la politique de
                             protection des donnes personnelles.</a></span>
                        &lt;/div>
                        &lt;button type="submit">S' inscrire</button>
                    &lt;/form>

                &lt;/div>
        &lt;/body>
        &lt;/html>
            </code>
        </pre>

        <div class="tech">
            <h3>Code CSS3</h3>
        </div>

        <pre>
            <code>
            /*Font Google*/
                    @import url('https://fonts.googleapis.com/css2?family=Anek+Tamil:wght@300&family=Lobster&family=
                    Nunito:wght@300&family=Open+Sans:wght@300;400&family=Roboto:wght@300;400;500&display=
                    swap');
                    *{
                        padding:0px;
                        margin:0px;
                        font-family: 'Roboto', sans-serif;
                        text-transform:capitalize;
                    }
                    .container{
                        display:flex;
                    }
                    .image{
                        width:50%;
                        height:100vh;
                        object-fit:cover;
                        filter:brightness(50%);
                    }
                    form{
                        width:50%;
                    }
                    h1{
                        text-align:center;
                        padding:20px 0px;
                        color:#6a49d6;
                        font-size:40px;
                        letter-spacing:2px;
                    }
                    .inscrire{
                        display:flex;
                        justify-content:center;
                    }
                    .fb,.google,.apple{
                        padding:5px 14px;
                        border-radius:5px;
                        margin:0px 10px;
                        display:flex;
                        justify-content:space-between;
                        cursor:pointer;
                    }
                    .fb{
                        border:1px solid #7451eb;
                    }
                    .fb i{
                        color:#7451eb;
                    }
                    .fb span{
                        color:#7451eb;
                        margin-left:10px;
                    }
                    .google{
                        border:1px solid black;
                    }
                    .google span{
                        color:#7d7d7e;
                        margin-left:10px;
                    }
                    .apple{
                        border:1px solid black;
                    }
                    .apple span{
                        margin-left:10px;
                    }
                    .icon{
                        font-size:20px;
                    }
                    .choix{
                        display:flex;
                        justify-content:center;
                        align-items:center;
                        margin:10px 0px;
                    }
                    .choix p{
                        font-size:24px;
                    }
                    .txt{
                        text-align:center;
                        padding:5px 0px;
                        font-size:20px;
                    }
                    .color{
                        width:13%;
                        height:2px;
                        margin:0px 10px;
                        background-color: #7d7d7e;
                    }
                    .user,.email,.pass,.comfirm{
                        display:flex;
                        justify-content:center;
                        padding:10px 0px;
                        align-items:center;
                    }
                    .user input,.email input,.pass input,.comfirm input{
                        padding:20px 0px 8px 5px;
                        width:80%;
                        font-size:24px;
                        background-color:#f5f5f5;
                        border:none;
                        border-bottom:2px solid black;
                    }
                    .acceptation{
                        margin:0px 60px;
                    }
                    button{
                        width:40%;
                        margin-left:30%;
                        padding:6px 0px;
                        background-color: #7451eb;
                        color:white;
                        border-radius:5px;
                        font-size:24px;
                        margin-top:20px;
                        cursor:pointer;
                        border:none;
                    }
                    button:hover{
                        box-shadow:0px 2px 4px 4px rgba(0,0,0,0.1);
                    }
            </code>
        </pre>

        <div class="information">
            <p>Si vous avez terminer le codage de notre maquette , n hesitez pas a voir si voir le formulaire et le comparer avec votre project <a style="color:black;"class="link-p" href="form/index.html">visiter le project3</a></p>
        </div>
    </main>
    <!-- end main-->
     <!-- Debut de footer-->
     <footer style="border-top:0px;">
        <div class="inf">
            <a href="" class="logo" style="color:#7451eb;">INNOVTECH</a>
            <p>Vous etes debutant en programmation et vous voulez devlopper votre<br> competences technique en devloppement web ,<br> Alors que est ce que vous attender ,<br> commencer a suivre nos cous et pratiquer nos project pour devenir expert dans ce monde la .</p>
        </div>
        <ul class="Reseau">
            <h1 style="font-size:15px;">Reaseau sociaux</h1>
            <a href=""><i class='bx bxl-facebook-circle'></i>Facbook</a>
            <a href=""><i class='bx bxl-instagram'></i>Instagram</a>
            <a href=""><i class='bx bxl-twitter' ></i>Twiter</a>
            <a href=""><i class='bx bxl-tiktok' ></i>TikTok</a>
            <a href=""><i class='bx bxl-youtube'></i>YouTub</a>
        </ul>
        <ul class="information">
            <h1 style="font-size:15px;">Inforamation</h1>
            <a href="">Qui nous sommes nous ?</a>
            <a href="">Experience De Formation</a>
        </ul>

    </footer>
<!-- Fin de footer-->
</body>
</html>