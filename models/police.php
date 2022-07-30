<?php

   class police{
   	   public $police_id;
       public $police_department;
   	   public $police_name;
   	   public $email;
   	   public $contact;
       public $station;

       private $conn;
      function __construct(){
        require_once "services/Config.php";
        $this->conn=Config::getConnection();
      }



    public function insert(){
    		$sql="INSERT INTO police(police_id,police_department,police_name,email,contact,station)VALUES('$this->police_id', '$this->police_department', '$this->police_name', '$this->email','$this->contact','$this->station')";

    		$result=$this->conn->query($sql);

        return $result;




    	}

    public function CheckPolice(){
            //query
            //username or password matched or not.
            //check.
            $sql="SELECT * FROM police WHERE police_name='$this->police_name' AND police_id='$this->police_id'";
            $result=$this->conn->query($sql);
            return $result;
      }


       //function to select all records
       public function selectAllRecords(){
           $sql= "SELECT * FROM police ORDER BY police_id DESC";
           $result=$this->conn->query($sql);
           return $result;

       }

       public function deletepolice(){
        $sql="DELETE FROM police WHERE police_id='$this->police_id'";
        $result=$this->conn->query($sql);
        return $result;
       }

       public function selectById(){
          $sql="SELECT * FROM police WHERE police_id='$this->police_id'";
           $result=$this->conn->query($sql);
           return $result;
       }

       public function updatepolice(){
        $sql="UPDATE police SET police_id='$this->police_id', police_department='$this->police_department', police_name='$this->police_name', email='$this->email', contact='$this->contact' WHERE police_id='$this->police_id'";
       $result=$this->conn->query($sql);
        return $result;
       }


   }

?>
