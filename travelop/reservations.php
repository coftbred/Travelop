<?php 
    include 'includes/header.php';    
    include 'classes/tourpackage.php';
    include 'classes/destination.php';
    include 'classes/reservations.php';
    
    if(isset($_GET['id'])) {
        $_SESSION['TourId'] = $_GET['id'];
    }
    
    $book = new reservations($conn);
    if (isset($_POST['book'])) {
		$tourId = $_SESSION['TourId'];
		$userId = $_SESSION['user_id'];
		$userAmount = $_POST['amount'];
        $requirement = $_POST['requirement'];
		$book = new reservations($conn);
        // var_dump($_POST);
        $book->booking($tourId, $userId);

	}

?>


<style>
    section.home {
        background: url(https://preview.colorlib.com/theme/travelix/images/blog_background.jpg.webp);
        background-position: center;
        background-repeat: no-repeat;
        background-size: cover;
        height: 80vh;
    }
</style>


<section class="home">
    <div class="background">
        <div class="inner">
            <h2>Booking</h2>
        </div>
    </div>
</section>
<?php 
    if($_SESSION['loggedin'] == true):
        
?>

<section class="reservations">
    <div class="container">
        <div class="row">
            <div class="col-md-5" style="height: 50vh;">
                <div class="container">
                    <form class="form-control" action="reservations.php" method="post">
                        <div class="all-input">
                            <div class="mb-3">
                                <label class="form-label" for="amount">Number of people: </label> <br>
                                <input class="form-control"  type="number" name="amount" min="1" placeholder="1" value="1" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="phone">Phone</label><br>
                                <input class="form-control"  type="number" name="phone" >
                            </div>
                            <div class="mb-3">
                                <label class="form-label" for="requirement">Requirement</label><br>
                                <textarea class="form-control" name="requirement" ></textarea>
                            </div>
                        </div>
                        <button class="btn-primary float-start" type="submit" name="book" value="book"> book <span></span> </button>
                    </form>
                </div>
            </div>
            <div class="col-md-7" style="height: 50vh;">
                <?php    
                    $book->output($_SESSION['TourId']);
                 
                ?>
  
            </div>
        </div>
        
    </div>
</section>
<?php else: ?>
    <div class="container m-5 p-5" style="text-align: center;">
        <h1> You should Login first !</h1>
        <a href="login.php"><button class="btn-primary">Login Here</button></a>
       
    </div>
    

<?php endif; ?>





<?php 
    include 'includes/footer.php';
?>