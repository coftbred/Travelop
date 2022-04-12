<?php
    include 'includes/header.php';
    include 'classes/tourpackage.php';
    include 'classes/destination.php';
    include 'classes/reservations.php';

    $post = new TourPack($conn);
    if (isset($_POST['postTour'])) {
		$DesId = $_POST['desId'];
        $tourName = $_POST['tourName'];
        $price = $_POST['price'];
		
        // var_dump($_POST);
        $post->postTour();

	}
?>
<style>
    section.home {
        background: url(https://preview.colorlib.com/theme/travelix/images/about_background.jpg.webp);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        
    }
    section.search .all-input > div label {
        color: black;
    }
</style>
<link rel="stylesheet" href="./css/manager.css">

    <section class="home">
        <div class="background">
            <div class="inner">
                <h1>Post tour</h1>
            </div>
        </div>
    </section>

    <section class="search pt-5">
        <div class="container">
            <ul>
                <li class="active">
                    <a href="manage.php"> 
                        <h6>Post tours</h6>
                    </a>
                </li>
                
                    <li>
                        <a href="manage2.php"> 
                            <h6>View tours</h6>
                        </a>
                    </li>
                
            </ul>
            <div class="container">
                <form class="form-control" action="manage.php" method="post">
                        <div class="all-input">
                            <div class="mb-3">
                                <label class="form-label" for="amount">Tour Name: </label> <br>
                                <input class="form-control"  type="text" name="tourName" placeholder="Enter tour name..." >
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="phone">Destination Id</label><br>
                                <input class="form-control"  type="number" name="desId" min="1" placeholder="1" value="1" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="requirement">Price</label><br>
                                <input class="form-control"  type="number" name="price" min="1" placeholder="1" value="1" >
                            </div>
                        </div>
                        <button class="btn-primary" type="submit" name="postTour" value="postTour"> Post Tour <span></span> </button>
                    </form>
               
            </div>
        </div>
    </section>

 


<?php
include 'includes/footer.php'

?>