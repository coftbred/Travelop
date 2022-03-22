<?php 

class Destination {
    
    public $DesId;
    public $DesName;
    public $DesLocation;
    public $DesImg;
    public $Description;
    
    public function __construct($conn) {
        $this->conn = $conn;
    }
}

?>