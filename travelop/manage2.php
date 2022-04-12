<?php
    include 'includes/header.php';
    include 'classes/destination.php';
    include 'classes/tourpackage.php';
    include 'classes/tourStatus.php';
    include 'function/search.php';

?>
<style>
    section.home {
        background: url(https://preview.colorlib.com/theme/travelix/images/about_background.jpg.webp);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
    }
</style>
<link rel="stylesheet" href="./css/manager2.css">

    <section class="home">
        <div class="background">
            <div class="inner">
                <h1>Manager Tour</h1>
            </div>
        </div>
    </section>

    <section class="search">
        <div class="container">
            <ul>
            <li>
                        <a href="manage.php"> 
                            <h6>Post tours</h6>
                        </a>
                    </li>
                <li class="active">
                    <a href="manage2.php"> 
                        <h6>View tours</h6>
                    </a>
                </li>

  
            </ul>
    </section>

    <section class="offer">
        <div class="container">
            


            <div class="wrapper">
                <?php 
                        $tourStatus = new tourStatus($conn);
                        $tourStatus->output();
                 ?>            
            </div>
        </div>
    </section>



<?php
include 'includes/footer.php'
?>