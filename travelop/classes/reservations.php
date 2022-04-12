<?php 

   class reservations {

    public $id;
    public $TourId;
    public $userId;
    public $userAmount;
    public $requirement;
    public $totalPrice;
    public $bookingDate;

    public function __construct($conn) {
        $this->conn = $conn;
    }



    public function output($TourId) {
        $host = "localhost";
        $user = "root";
        $pw = "";
        $db = "final_travelop";
        $conn = new mysqli($host, $user, $pw, $db);
        $output = '';
        $tourName = '';
        $query = "SELECT * FROM destination d join tourpack t where t.id = $TourId and t.desId = d.DesId";
        $sql = mysqli_query($conn, $query);
        $row = mysqli_fetch_assoc($sql);
            $output .= '
            <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="img-fuild">
                        <img src="' . $row['Img'] . '" alt="">
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="des-info">
                        <h2>' . $row['DesName'] . '</h2>
                        <h2><span style="font-weight: bolder;">Country: </span>' . $row['DesLocation'] . '</h2>
                        <p>May 25th - June 1st</p>
                        <h6>From ' . $row['price'] . '</h6>
                </div>
                <p>
                '. $row['Description'] .'
                </p>
            </div>
            <hr>
        </div>
            ';
          
          echo $output;

          $tourName .= '<h1> ' . $row['name'] . ' </h1>';
    }



    public function booking($tourId, $userId) {
        $host = "localhost";
        $user = "root";
        $pw = "";
        $db = "final_travelop";
        $conn = new mysqli($host, $user, $pw, $db);
        $amount = $this->userAmount = $_POST['amount'];
        $requirement = $this->requirement = $_POST['requirement'];
        $price = "SELECT * FROM tourpack WHERE id = $tourId";
        $Tprice = mysqli_query($conn, $price);
        $row = mysqli_fetch_assoc($Tprice);
        $totalPrice = (int)$row['price'] * $amount;

        $query = "INSERT INTO `ticket`(`tuorId`, `userId`, `amount`, `totalPrice`) VALUES ($tourId, $userId, $amount, $totalPrice)";
        $sql = mysqli_query($conn, $query);
    }

    
   }




?>