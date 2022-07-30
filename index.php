<?php

   //route management
   //No matter user requesting pages. Request must arrive here.

   //url
   //base url+  /Student/Report
   //first word denotes Controller and
   // second word denotes Method inside controller.


   session_start();
   if(isset($_GET['url'])){
   $url = $_GET['url'];
   }
   else{
     if(isset($_SESSION['user'])){
       if($_SESSION['user'] == 'admin'){
         $url="User/admin";
       }
       else if($_SESSION['user'] == 'police'){
         $url = 'User/policemenu';
       }
       else{
         $url = 'User/usermenu';
       }
     }else{
       $url = "User/land";
     }
   }



   //getting url
   //
   // $url="";
   // if(empty($_GET["url"])){
   // 	  //depends on your choice
   // 	  //which page you want to open at startup
   //    $url="User/land";
   // }
   // else{
   // 	  $url=$_GET["url"];
   // }

   $url=explode('/', $url);
   //printring after separation of controller and method.
   //print_r($url);
   $controller=$url[0]."Controller";
   $method=$url[1];

   //calling the function of controller

   require_once 'controllers/'.$controller.'.php';

   $obj= new $controller();
   $obj->$method();


   //while linking files in another file
   //we can use three approach

?>
