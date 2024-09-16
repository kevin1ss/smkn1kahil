<html lang="en">
<head>
    <?php
       
       include "header.php";
    
    ?>
    <title><?= $title ?></title>
      
</head>
<body>
<?php
       include "nav.php";
    
    ?>
    
    <div class="container-fluid">
        <div id="carouselExampleSlidesOnly" class="carousel slide " data-bs-ride="carousel">
            <div class="carousel-inner imgs">
                <div class="">
                <video controls loop class="d-block w-100 h-100" src="asset/Video/SMKPROMOTION.mp4">

                </video>
                </div>
            </div>
        <br>
        <?php
         include "cardinfo.php";
        ?>
        <?php
       include "pimpinan.php";
       
    ?>
         <?php
       
       include "tuleader.php";
    
    ?>

        <?php
       
       include "kakomli.php";
    
    ?>

        <?php
       
       include "guru.php";
    
    ?>
    </div>
    <script src="asset/script.js"></script>
</body>
</html>