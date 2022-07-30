<?php
class criminals{

public $criminals_id;
public $criminals_name;
public $firid;
public $policestation;
public $police;
public $crimecategory;
private $conn;
function __construct(){
require_once "services/config.php";
$this->conn=Config::getConnection();
}

public function insertcriminalsdata(){
$sql="INSERT INTO criminals (criminals_id ,criminals_name,policestation,police,crime,firid)VALUES('$this->criminals_id','$this->criminals_name','$this->policestation','$this->police','$this->crimecategory','$this->firid')";

$result=$this->conn->query($sql);
return $result;

}
public function updatecriminals(){
$sql="UPDATE criminals SET criminals_name='$this->criminals_name' WHERE criminals_id='$this->criminals_id'";
$result=$this->conn->query($sql);
return $result;
}

public function selectAllRecords(){
  $sql="SELECT * from criminals ORDER BY criminals_id ASC";
  $result=$this->conn->query($sql);
  return $result;

}

public function selectById(){
  $sql="SELECT * FROM  fir,criminals  WHERE criminals_id='$this->criminals_id' AND criminals.firid=fir.firid";

  $result=$this->conn->query($sql);
  return $result;
}

public function deletecriminals(){
  $sql="DELETE FROM criminals WHERE criminals_id='$this->criminals_id'";
  $result=$this->conn->query($sql);
  return $result;

}
public function selectpolice(){
  $sql="SELECT police_name FROM police ORDER BY police_id DESC ";

  $result=$this->conn->query($sql);
   return $result;
}

public function selectstation(){
  $sql="SELECT station_name FROM policestation ORDER BY station_id DESC ";
  $result=$this->conn->query($sql);
  return $result;
}
public function selectall(){
  $sql="SELECT * from criminals ORDER BY criminals_id ASC";
  $result=$this->conn->query($sql);

  return $result;
}

function criminalsearch(){
  $sql="SELECT * FROM criminals WHERE criminals_id='$this->criminals_id'";
  $result= $this->conn->query($sql);
  return $result;


}
function chargesheet(){
  $sql="SELECT * FROM criminals";

  $result= $this->conn->query($sql);
  return $result;
}






}







 ?>
