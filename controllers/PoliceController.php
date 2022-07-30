<?php
class policeController{



  	   function __construct(){
  	   	  require_once "models/police.php";
          $this->police=new police();
          require_once "models/fir.php";
          $this->fir=new fir();
          require_once "models/policestation.php";
          $this->policestation=new policestation();
          require_once "models/criminals.php";
          $this->criminals=new criminals();
          require_once "models/crimecategory.php";
          $this->crimecategory=new crimecategory();
          require_once "models/chargesheet.php";
          $this->chargesheet=new chargesheet();

  	   }


       function updatepolice(){
          require_once  "./views/police/updatepolice.php";
       }

       function policeinfo(){
         require_once "./views/police/policeinfo.php";
       }
       function adminmenu(){
          require_once "./views/dashboard/adminmenu.php";
       }
    function nitify(){

                require_once "./views/dashboard/policemenu.php";
    }




     //opens index page
     public function Index(){
     	  //call function to select all records

     	  $result=$this->police->selectAllRecords();


     	  require_once "./views/Police/policeinfo.php";
     }



     function addpolice(){
       $result6=$this->policestation->selectstation();




       require_once "./views/police/addpolice.php";
     }


     public function selectedfir(){
    $result=$this->fir->selectedfir();


     }



     public function InsertData(){
          if(isset($_POST["submit"])){
          	$police_id=$_POST["police_id"];
            $police_department=$_POST['police_department'];
          	$police_name=$_POST["police_name"];

          	$email=$_POST["email"];
          	$contact=$_POST["contact"];
            $station=$_POST['station'];


          	//validation
            if(empty($police_id)||empty($police_department)||empty($police_name)||
            empty($email)||empty($contact)||empty($station)){

               echo "<script> alert ('insertion failled! fill the form properly');
               location='addpolice';
               </script>";
             }

            else{
                //send data to model
                $this->police->police_id=$police_id;

                $this->police->police_department=$police_department;
                $this->police->police_name=$police_name;
                $this->police->email=$email;
                $this->police->contact=$contact;
                $this->police->station=$station;

                //calling insert function
                $result=$this->police->insert();

              }
                if($result==TRUE){
                	echo "<script> alert ('Inserted Successfully!');
                     location='Index';
                     </script>";

                }else{
                	echo "<script> alert ('Failed to Insert!');
                     location='addpolice';
                     </script>";
                }
            }

          }

     public function Update(){
       //receive bid here
        $police_id=$_GET["police_id"];

        //send data to model
       $this->police->police_id=$police_id;

        //calling delete function
       $result=$this->police->selectById();
       $result3=$this->policestation->selectstation();

        include "./views/police/updatepolice.php";
     }

     public function Delete(){
      //receive bid here
      $police_id=$_GET["police_id"];
      //send data to model
      $this->police->police_id=$police_id;

      //calling delete function
      $result=$this->police->deletepolice();
      if($result==TRUE){
            echo "<script> alert ('Deleted Successfully!');
                  location='Index';
                  </script>";
      }else{
            echo "<script> alert ('Failed to Delete!');
                  location='Index';
                  </script>";
      }
     }

     //receives data





      //receives data
     public function UpdateData(){
          if(isset($_POST["submit"])){

            $police_id=$_POST["police_id"];
            $police_department=$_POST["police_department"];
            $police_name=$_POST["police_name"];
            $email=$_POST["email"];
            $contact=$_POST["contact"];
            $station=$_POST["station"];


            //validation
            if(empty($police_name)){
              echo "<script>location='update' <script>";
            }

            else{
                //send data to model
                $this->police->police_id=$police_id;
                $this->police->police_department=$police_department;
                $this->police->police_name=$police_name;
                $this->police->email=$email;
                $this->police->contact=$contact;
                $this->police->station=$station;


                //calling insert function
                $result=$this->police->updatepolice();
                if($result==TRUE){
                  echo "<script> alert ('Updated Successfully!');
                     location='Index';
                     </script>";
                }else{
                  echo "<script> alert ('Failed to Update!');
                     location='Index';
                     </script>";
                }
            }

          }
     }

     public function allfirstatus(){
         $result=$this->fir->selectallfir();
          require_once "./views/fir/viewfir.php";
     }

public function newfirstatus(){

  $result=$this->fir->selectnewfir();
  require_once "./views/police/newfirstatus.php";

}



  //
  // // public function   allfirstatus(){
  //      //call function to select all records
  //      $result=$this->fir->selectfir();
  //
  //
  //
  //      require_once "./views/police/firstatus.php";
  //
  //    }

     public function updatefir(){
       //receive bid here
        $firid=$_GET["firid"];

        //send data to model
       $this->fir->firid=$firid;


        //calling  function
       $result=$this->fir->selectById();





        require_once "./views/police/getstatus.php";
     }




    public function updatestatus(){
       if(isset($_POST['submit'])){
         $status=$_POST['select'];
         $firid=$_POST['firid'];


         $this->fir->status=$status;
          $this->fir->firid=$firid;


         $result=$this->fir->firstatus();






       }
       if($result==TRUE){
         echo "<script> alert('Action Performed')
         location='newfirstatus';

         </script>";
       }
       else{
         echo "<script> alert('pending')
         location='newfirstatus';

         </script>";
       }


     }

function addcriminals(){
$result3=$this->criminals->selectpolice();
$result4=$this->crimecategory->selectAllRecords();

$result2=$this->criminals->selectstation();
$firid=$_GET['firid'];

require_once './views/criminals/addcriminals.php';
}

function criminalstatus(){
  $result=$this->criminals->selectAllRecords();
  require_once "./views/criminals/managecriminals.php";
}

     function insertcriminal(){
       if(isset($_POST['submit'])){

         $criminals_id=$_POST['criminals_id'];
         $firid=$_POST['firid'];



         $criminals_name=$_POST['criminals_name'];

         $policestation=$_POST['policestation'];


         $police=$_POST['police'];

         $crimecategory=$_POST['crimetype'];







        }
        if(empty($firid)||empty($criminals_id)||empty($criminals_name)||empty($policestation)||empty($police)||empty($crimecategory)){
          echo"<script> alert('incomplete information')
          location='addcriminals';
          </script>";

        }
        else{

          $this->criminals->criminals_id=$criminals_id;
          $this->criminals->criminals_name=$criminals_name;
          $this->criminals->policestation=$policestation;
          $this->criminals->police=$police;
          $this->criminals->crimecategory=$crimecategory;
          $this->criminals->firid=$firid;



          $result=$this->criminals->insertcriminalsdata();





        }
        if($result==TRUE){
          echo"<script> alert('insertion successfull')
          location='criminalstatus';
          </script>";
        }
        else{
          echo"<script> alert('insertion failed');
          location='addcriminals';
          </script>";
        }

        }



   function updatecriminals(){
     $criminals_id= $_GET['criminals_id'];

     $this->criminals->criminals_id=$criminals_id;
     $result=$this->criminals->selectById();
     $resulta=$this->policestation->selectstation();
     $resultb=$this->police->selectAllRecords();
     $resultc=$this->crimecategory->selectAllRecords();


     require_once './views/criminals/updatecriminals.php';

     }
     function deletecriminals(){
       $criminals_id =$_GET['criminals_id'];


       $this->criminals->criminals_id=$criminals_id;

       $result=$this->criminals->deletecriminals();

      if($result==TRUE){
        echo "<script> alert('Delation Successfull')
        location ='criminalstatus';
        </script>";
      }
      else{
        echo "<script> alert('Delation Failed')
        location ='criminalstatus';
        </script>";
      }
      }


     function updatecriminalsdata(){
       if(isset($_POST['submit'])){
         $criminals_id=$_POST['criminals_id'];

         $criminals_name=$_POST['criminals_name'];


         if (empty($criminals_id)||empty($criminals_name)){
           echo"<script> alert('incomplete details!')
           location='updatecriminals';
           </script>";
         }
         else{
          $this->criminals->criminals_id= $criminals_id;
          $this->criminals->criminals_name= $criminals_name;

          $result=$this->criminals->updatecriminals();
         }
         if($result=TRUE){
           echo "<script> alert('updation successfull')
           location='criminalstatus';
           </script>";
         }
         else{
           echo "<script> alert('updation failed')
           location='updatecriminals';
           </script>";
         }

       }

     }


     function addstation(){
      require_once './views/policestation/addstation.php';
     }
   function insertstation(){
       if (isset($_POST['submit'])){

        $name=$_POST['station_name'];
        $code=$_POST['station_code'];

    if(empty($name)||empty($code)){
      echo"<script> alert('fill the form properly')
      location='addstation';
      </script>";
    }

      else{
    
        $this->policestation->station_name=$name;
        $this->policestation->station_code=$code;

        $result=$this->policestation->insertstation();



      }
if ($result==TRUE){
  echo "<script> alert('insertion successfull')
  location='addstation';
</script>";


}

else{
  echo "<script> alert('insertion failed')
  location='addstation';
</script>";


}

    }




       }



  function managestation(){
       $result=$this->policestation->selectAllRecords();


     require_once './views/policestation/managestation.php';

     }


 function deletestation(){
      //receive bid here
      $station_id=$_GET["station_id"];


      //send data to model
      $this->policestation->station_id=$station_id;


      //calling delete function
      $result=$this->policestation->deletestation();


      if($result==TRUE){
            echo "<script> alert('Deleted Successfully!');
                  location='managestation';
                  </script>";
      }else{
            echo "<script> alert ('Failed to Delete!');
                  location='managestation';
                  </script>";
      }
    }





 function updatestation(){
       $station_id = $_GET["station_id"];





       $this->policestation->station_id=$station_id;


       $result=$this->policestation->selectById();



    require_once './views/policestation/updatestation.php';

     }

function updatestationdata(){
       if(isset($_POST['submit'])){
         $station_id=$_POST['station_id'];

         $station_name=$_POST['station_name'];
         $station_code=$_POST['station_code'];
         if(empty($station_id)||empty($station_name)||empty($station_code)){
           echo "<script> alert('somethings missing!')
            location='updatestation';
            </script>";
         }
         else{
           $this->policestation->station_id=$station_id;
            $this->policestation->station_name=$station_name;
            $this->policestation->station_code=$station_code;
            $result=$this->policestation->updatestation();


         }
         if($result==TRUE){
           echo"<script> alert('updation successfull')
           location='managestation';
           </script>";
         }
         else{
           echo"<script> alert('updation failled');
           location='managestation';
           </script>";
         }



       }
     }









function acceptedfir(){


$result=$this->fir->accepted();
require_once "./views/report/acceptedfir.php";
}

function acceptedfir1(){
  $result=$this->criminals->chargesheet();

  require_once "./views/Chargesheet/acceptedfir.php";
}


function chargesheet(){
  $criminal_id=$_GET['criminal_id'];

  $this->criminals->criminals_id=$criminal_id;
  $result=$this->criminals->selectById();

  require_once "./views/chargesheet/chargesheet.php";

}
function chargesheetdata(){
  if(isset($_POST['submit'])){
    $firid=$_POST['firid'];


    $criminals_id=$_POST['criminals_id'];

    $name=$_POST['name'];
    $contact=$_POST['contact'];
    $email=$_POST['email'];
    $policestation=$_POST['policestation'];
    $crime=$_POST['crime'];
    $criminals_name=$_POST['criminals_name'];
    $crime_location=$_POST['place_of_incident'];
    $crime_date=$_POST['date_of_incident'];
    $crime_details=$_POST['incident_details'];
    $section_of_law=$_POST['section_of_law'];
    $investigation_police=$_POST['investigation_police'];
    $investigation_details=$_POST['investigation_details'];
    $remarks=$_POST['remarks'];



    //echo $firid,$criminals_id,$name,$contact,$email,$policestation,$crime,$criminals_name,$crime_location,$crime_date,$crime_details,$section_of_law,$investigation_police,$investigation_details,$remarks;
  //exit();


    if(empty($firid)||empty($criminals_id)||empty($name)||empty($contact)||empty($email)||empty($policestation)||empty($crime)||empty($criminals_name)||empty($crime_location)||empty($crime_date)||empty($crime_details)||empty($section_of_law)||empty($investigation_police)||empty($investigation_details)||empty($remarks)){
      echo"<script>alert('please fill the details properly')
      location='acceptedfir1';
      </script>";
    }

    else{
      $this->chargesheet->firid =$firid;
      $this->chargesheet->criminals_id =$criminals_id;
      $this->chargesheet->applicant_name =$name;
      $this->chargesheet->applicant_contact =$contact;
      $this->chargesheet->applicant_email =$email;
      $this->chargesheet->policestation =$policestation;
      $this->chargesheet->crime=$crime;
      $this->chargesheet->criminal=$criminals_name;
      $this->chargesheet->crime_location =$crime_location;
      $this->chargesheet->crime_date=$crime_date;
      $this->chargesheet->crime_details=$crime_details;
      $this->chargesheet->section_of_law=$section_of_law;
      $this->chargesheet->investigation_police=$investigation_police;
      $this->chargesheet->investigation_details=$investigation_details;
      $this->chargesheet->remarks=$remarks;

      $result=$this->chargesheet->insertintochargesheet();

      if($result==TRUE){
        echo "<script> alert('insertion succeed')
        location='acceptedfir1';
        </script> ";
      }
      else{
        echo "<script> alert('insertion failled')
        location='./views/chargesheet/chargesheet.php';
        </script> ";

      }










    }



  }



}






}

?>
