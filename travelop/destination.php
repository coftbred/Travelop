<?php 
include 'includes/header.php'
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
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="img-fuild">
                    <img src="./img/intro_1.jpg" alt="">
                </div>
            </div>
            <div class="col-md-6">
                <div class="des-info">
                    <h2>Mauritius Island</h2>
                    <h2><span style="font-weight: bolder;">Country:</span> Republic of Mauritius</h2>
                    <p>Mauritius lies about 500 miles (800 km) east of Madagascar in the Indian Ocean. 
                        Its outlying territories are Rodrigues Island, situated about 340 miles (550 km) eastward,
                         the Cargados Carajos Shoals, 250 miles (400 km) northeastward, and the Agalega Islands, 
                         580 miles (930 km) northward from the main island.</p>
                    <p>May 25th - June 1st</p>
                    <h6>From 1450$</h6>
                  <div class="rating-star">
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                      <i class="fa fa-star" aria-hidden="true"></i>
                  </div>
                </div>
              <div class="book-btn">
              <button class="btn-primary">Explore Now <span></span></button>
              </div>
            </div>
        </div>
        <hr>
    </div>
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
                    <div class="container">
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
                    <div class="container">
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
include 'includes/footer.php'
?>