<?php 

class Destination {
    
    public $DesId;
    public $DesName;
    public $DesLocation;
    public $DesImg;
    public $Description;
    public $desList = [];
    
    public function __construct($conn) {
        $this->conn = $conn;
    }

    public function getOffers() {
        $sql = "SELECT * FROM destination";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->get_result();
        $this->desList = $result->fetch_all();
    }

    public function getDesbyId($Desid) {
        $sql = 'SELECT * FROM destination WHERE DesId = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param('i', $Desid);
        $stmt->execute();
        $result = $stmt->get_result();
        $this->destination = $result->fetch_all();
        
    }

    public function output($Desid) {
        $host = "localhost";
        $user = "root";
        $pw = "";
        $db = "final_travelop";
        $conn = new mysqli($host, $user, $pw, $db);
        $output = '';
        $query = "SELECT * FROM destination where DesId = $Desid";
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
                        
                        <div style="padding-right: 8rem;">
                            <p>'. $row['Description'] .'</p>
                        </div>
                        
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
                  <div class="book-btn float-start">
                  <button class="btn-primary">Explore Now <span></span></button>
                  </div>
                </div>
            </div>
            <hr>
        </div>
            ';
          
          echo $output;
    }


}

?>