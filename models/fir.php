<?php
 class fir{
  public $firid;
  public $date;
  public $name;
  public $fathers_name;
  public $email;
  public $mobile;
  public $present_address;
  public $home_district;
  public $date_of_incident;
  public $time_of_incident;
  public $place_of_incident;
  public $incident_type;
  public $incident_details;
  public $any_clue;
  public $status;
  public $userid;
  private $conn;
 function __construct(){
   require_once "services/Config.php";
   $this->conn=Config::getConnection();
 }

 public function insertfir(){

  $sql="INSERT INTO fir(firdate,name,fathers_name,email,mobile,present_address,home_district,date_of_incident,time_of_incident,place_of_incident,incident_type,incident_details,any_clue,uid) VALUES ( '$this->date','$this->name', '$this->fathers_name', '$this->email', '$this->mobile','$this->present_address','$this->home_district','$this->date_of_incident','$this->time_of_incident','$this->place_of_incident','$this->incident_type','$this->incident_details','$this->any_clue','$this->userid')";


  $result=$this->conn->query($sql);

  return $result;
}
public function selectById(){
   $sql="SELECT fir.firid,fir.firdate,fir.name,fir.fathers_name,fir.email,fir.mobile,fir.present_address,fir.home_district,fir.time_of_incident,fir.date_of_incident,fir.place_of_incident,fir.incident_type,fir.incident_details,fir.any_clue,fir.status,user.username,user.contact  FROM fir,user WHERE fir.uid=user.uid AND  fir.firid='$this->firid'";

   $result=$this->conn->query($sql);
   return $result;



 }

 public function selectfir(){
   $sql="SELECT * from fir ORDER BY firid DESC ";
   $result=$this->conn->query($sql);
   return $result;
 }

 public function selectnewfir(){
   $sql="SELECT * from fir WHERE status='pending' ORDER BY firid DESC ";
   $result=$this->conn->query($sql);
   return $result;
 }
 public function selectallfir(){
   $sql="SELECT * from fir ,user WHERE fir.uid=user.uid";
   $result=$this->conn->query($sql);
   return $result;
 }





 public function firstatus(){

   $sql="UPDATE fir SET status='$this->status' WHERE firid='$this->firid'";

   $result=$this->conn->query($sql);

   return $result;
 }

 public function selectall(){
   $sql="SELECT * from fir ORDER BY firid DESC ";
   $result=$this->conn->query($sql);
   return $result;



 }
 public function selectrecords(){
   $sql="SELECT * FROM fir, criminals WHERE fir.criminals_id=criminals.criminals_id";
   $result=$this->conn->query($sql);
   return $result;
 }

 public function accepted(){
   $sql=" SELECT * from fir WHERE status='Accept'";
   $result=$this->conn->query($sql);
   return $result;
 }

 public function firsearch(){
   $sql="SELECT  * from fir WHERE  firid='$this->firid'";
   $result=$this->conn->query($sql);
   return $result;
 }
 public function usersearch(){
   $sql="SELECT  * from fir WHERE  firid='$this->firid'";
   $result=$this->conn->query($sql);
   return $result;
 }






}
?>
