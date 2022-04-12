<?php 
    include 'includes/header.php';
    include 'classes/tourpackage.php';
    include 'classes/destination.php';


?>

<style>
    section.home {
        background: url(https://preview.colorlib.com/theme/travelix/images/about_background.jpg.webp);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 75vh;
    }

    img {
        height: 35vmax;
        border-radius: 20px;
    }
</style>


<section class="home">
    <div class="background">
        <div class="inner">
            <h2>Destination</h2>
        </div>
    </div>
</section>



<section class="destination">
    <?php    
        $des = new Destination($conn);
        $des->getDesbyId($_GET);
        $des->output($_GET['id']);

    ?>
</section>

<section class="relative-des">
    <h1>Related Destination</h1>
    <div class="des-carousel">
        <div id="carouselExampleControls" class="carousel carousel-dark slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container p-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="./img/intro_1.jpg" class="d-block w-100" alt="...">   
                        </div>
                        <div class="col-md-4">
                            <img src="./img/intro_2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-4">
                            <img src="./img/intro_3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>                         
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container p-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="./img/intro_1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-4">
                            <img src="./img/intro_2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-4">
                            <img src="./img/intro_3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>                  
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container p-5">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="./img/intro_1.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-4">
                            <img src="./img/intro_2.jpg" class="d-block w-100" alt="...">
                        </div>
                        <div class="col-md-4">
                            <img src="./img/intro_3.jpg" class="d-block w-100" alt="...">
                        </div>
                    </div>                  
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
</section>

<?php 
include 'includes/footer.php';
?>