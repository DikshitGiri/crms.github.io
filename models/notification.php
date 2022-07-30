<?php
class notification{

  private $conn;
  function __construct(){
require_once "services/config.php";
$this->conn=config::getConnection();

}

  function notify(){
   $sql="SELECT COUNT(uid) FROM fir WHERE uid=(SELECT MAX(uid)FROM fir) AND status IN('Accept','Reject') AND uid IS NOT NULL";
    $result=$this->conn->query($sql);
    return $result;


  }
  function showfir(){
    $sql="SELECT firid from fir WHERE uid=(SELECT MAX(uid))";
    $result=$this->conn->query($sql);
    return $result;


  }













}






 ?>
