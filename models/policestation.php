<?php
class policestation{

  public $station_name;
  public $station_code;
  private $conn;


  function __construct(){
    require_once "services/config.php";

    $this->conn=Config::getConnection();
  }


  public function insertstation(){
    $sql="INSERT INTO  policestation(station_name,station_code) VALUES('$this->station_name', '$this->station_code')";
    $result=$this->conn->query($sql);
    return $result;
  }

  public function selectAllRecords(){
    $sql="SELECT * from policestation ORDER BY station_id";
    $result=$this->conn->query($sql);
    return $result;


  }
  public function deletestation(){
   $sql="DELETE FROM policestation WHERE station_id='$this->station_id'";
   $result=$this->conn->query($sql);
   return $result;
  }

  public function selectById(){
    $sql="SELECT * FROM policestation WHERE station_id='$this->station_id'";
    $result=$this->conn->query($sql);
    return $result;
  }

  public function updatestation(){
    $sql="UPDATE policestation SET station_id='$this->station_id',station_name='$this->station_name', station_code='$this->station_code' WHERE station_id='$this->station_id'";

    $result=$this->conn->query($sql);
    return $result;
  }
  public function selectstation(){
    $sql="SELECT * FROM policestation ORDER BY station_id DESC";
    $result=$this->conn->query($sql);
    return $result;
  }













}








 ?>
