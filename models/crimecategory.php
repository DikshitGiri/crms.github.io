<?php
class crimecategory{
  public $crimecategory_id;
  public $crime_type;
  public $crime_details;
  private $conn;
function __construct(){
  require_once "services/config.php";
  $this->conn=Config::getConnection();
}
function insertcrime(){
  $sql="INSERT into crimecategory (crime_type)VALUES('$this->crime_type')";

  $result=$this->conn->query($sql);
  return $result;
}

function selectAllRecords(){
  $sql="SELECT * FROM  crimecategory ";
  $result=$this->conn->query($sql);
  return $result;
}

function selectById(){
  $sql="SELECT * FROM  crimecategory WHERE sn='$this->crimecategory_id'";
  $result=$this->conn->query($sql);
  return $result;

}
function deletecrime(){
  $sql="DELETE  FROM  crimecategory WHERE sn='$this->crimecategory_id'";
  $result=$this->conn->query($sql);
  return $result;

}
function updatecategory(){
  $sql="UPDATE crimecategory SET  crime_type='$this->crime_type'";
  $result=$this->conn->query($sql);
  return $result;
}

}









 ?>
