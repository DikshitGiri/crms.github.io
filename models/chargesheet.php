<?php
class chargesheet{
  public $firid;
  public $criminals_id;

  public $investigation_police;
  public $policestation;

  public $criminal;


  public $applicant_name;
  public $applicant_adddress;
  public $applicant_contact;
  public $applicant_email;
  public $crime;

  public $remarks;
  public $final_status;
  public $section_of_law;
  public $investigation_details;
  public $crime_location;
  public $crime_date;
  public $crime_details;
  private $conn;
   function __construct(){
     require_once "services/config.php";
     $this->conn=Config::getConnection();
   }

   function insertintochargesheet(){
     $sql="INSERT INTO chargesheet(firid,criminal_id,applicant_name,applicant_contact,applicant_email,policestation,crime,criminal,crime_location,crime_date,crime_details,section_of_law,investigation_police,investigation_details,remarks)VALUES('$this->firid','$this->criminals_id','$this->applicant_name','$this->applicant_contact','$this->applicant_email','$this->policestation','$this->crime','$this->criminal','$this->crime_location','$this->crime_date','$this->crime_details',
       '$this->section_of_law','$this->investigation_police','$this->investigation_details','$this->remarks')";
     $result=$this->conn->query($sql);
     return $result;

   }
   function searchchargesheet(){
     $sql="SELECT criminals.*,fir.*,chargesheet.* FROM chargesheet JOIN fir ON chargesheet.firid=fir.firid JOIN criminals ON criminals.criminals_id=chargesheet.criminal_id WHERE fir.firid='$this->firid'";
     $result=$this->conn->query($sql);
     return $result;



   }





}



























 ?>
