<?php 

class Destination {
    
    public $DesId;
    public $DesName;
    public $DesLocation;
    public $DesImg;
    public function __construct($conn) {
        $this->conn = $conn;
    }
}

?>