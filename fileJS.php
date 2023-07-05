<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOX CSS-->
     <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <!-- link css-->
    <link rel='stylesheet' href="css/fileJS.css">
    <title>INNOVTECH</title>
    <link rel="icon" href="img/logohead.PNG">
    <style>
        .block-card{
            display:grid;
            grid-template-columns: repeat(auto-fit,minmax(20rem,1fr));
            gap:2rem;
        }
        .card{
            border:2px solid red;
            margin:2rem;
        }
    </style>
</head>
<body>
    <!-- start header -->
     <?php 
        include("header.php");
     ?>
    <!-- end header -->
    <!-- start main-->
    <main>
        <h1 class="project">Projects : Javascript </h1>
        <div class="block-card">
            <div class="card">
                <img src="img/Devjs.png" alt="">
                <div class="content">
                    <h1></h1>
                    <p></p>
                </div>
            </div>

            <div class="card">
                <img src="img/Devjs.png" alt="">
                <div class="content">
                    <h1></h1>
                    <p></p>
                </div>
            </div>

            <div class="card">
                <img src="img/Devjs.png" alt="">
                <div class="content">
                    <h1>Project</h1>
                    <p> Lorem Lorem LoremLoremLoremLoremLorem</p>
                </div>
            </div>

            <div class="card">
                <img src="img/Devjs.png" alt="">
                <div class="content">
                    <h1>Project</h1>
                    <p> Lorem Lorem LoremLoremLoremLoremLorem</p>
                </div>
            </div> 
            
            <div class="card">
                <img src="img/Devjs.png" alt="">
                <div class="content">
                    <h1></h1>
                    <p></p>
                </div>
            </div>
        </div>
    </main>
    <!-- end main-->
    <!-- start footer-->
    <?php 
        include("footer.php");
    ?>
    <!-- end footer-->
   </body>
</html>