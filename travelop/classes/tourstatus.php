<?php 

    class tourStatus {
        public $id;
        public $ticketId;
        public $paymentStatus;

        public function __construct($conn) {
            $this->conn = $conn;
        }

        // public function getTourStat() {
        //     $host = "localhost";
        //     $user = "root";
        //     $pw = "";
        //     $db = "final_travelop";
        //     $conn = new mysqli($host, $user, $pw, $db);
        //     $tourId = $_SESSION['TourId'];
        //     $userId = $_SESSION['user_id'];
        //     $output = '';
        //     $query = "SELECT * FROM `ticket` WHERE tuorId = $tourId";
        //     $sql = mysqli_query($conn, $query);
        //     $row = mysqli_fetch_assoc($sql);
        // }

        public function output() {
            $host = "localhost";
            $user = "root";
            $pw = "";
            $db = "final_travelop";
            $conn = new mysqli($host, $user, $pw, $db);
            $output = '';
            $query = "SELECT * FROM tourpack t join destination d where t.desId = d.DesId";
            $sql = mysqli_query($conn, $query);
            $row = mysqli_fetch_assoc($sql);
            while ($row = mysqli_fetch_assoc($sql)) {
                $output .= '
                <div class="item">
                   <div class="left">
                   <a href="destination.php?id='. $row['DesId'] .'">
                       <img src="' . $row['Img'] . '" class="w-100 h-100"/>
                   </a>
                   </div>
                   <div class="right">
                       <div class="review-pricing">
                           <div class="inner-left">
                           <h3 style="font-weight: bold">' . $row['name'] . '</h3>
                           <h4> Location: ' . $row['DesLocation'] . '</h4>
                           <p><span>$50</span> per night</p>
                               <div class="rating-star">
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                                   <i class="fa fa-star"></i>
                               </div>
                           </div>
                           <div class="inner-right">
                               <div>
                                   <h5>Very Good</h5>
                                   <p>110 reviews</p>
                               </div>
                               <div>
                                   <span>8.1</span>
                               </div>
                           </div>
                       </div>
                       <p>
                       '. $row['Description'] .'
                       </p>
                       <div class="icon">
                           <i class="fa fa-clock"></i>
                           <i class="fa fa-bicyc    le"></i>
                           <i class="fa fa-map-signs"></i>
                           <i class="fab fa-app-store"></i>
                       </div>
                       
                        <a href="tourStat.php?id='. $row['id'] .'"> 
                            <button class="btn-primary">View status<span></span></button>
                        </a>
                       
                   </div>
               </div>
                ';
              }
              echo $output;
        }


    }

?>