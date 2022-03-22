<?php 

class TourPackage {
    public $TourId;
    public $DesId;
    public $StartDate;
    public $EndDate;
    public $Price;
    public $rating;
    public function __construct($conn) {
        $this->conn = $conn;
    }

}

?>