<?php class AdminController{
  function __construct(){
    require_once "models/crimecategory.php";
    $this->crimecategory=new crimecategory();

    require_once "models/criminals.php";
    $this->criminals=new criminals();

    require_once "models/fir.php";
    $this->fir=new fir();

    require_once "models/notification.php";
    $this->notification=new notification();
  }
  function addcategory(){
    require_once "./views/criminals/crimecategory.php";
  }

  function insertcrimecategory(){
    if(isset($_POST['submit'])){
      $crime_type=$_POST['crime_type'];



    }
    if(empty($crime_type)){
      echo"<script> alert('fill the form properly')
      locatio='addcategory';
      </script>";
    }
    else{
      $this->crimecategory->crime_type=$crime_type;

      $result=$this->crimecategory->insertcrime();
      if($result==TRUE){
       echo "<script> alert('insertion successfull')
       location='managecrime';
       </script>";
      }
    }
  }

    function managecrime(){
      $result=$this->crimecategory->selectAllRecords();
      require_once './views/criminals/managecrime.php';


    }
    function updatecrimecategory(){
      $crimecategory_id=$_GET['crimecategory_id'];
      $this->crimecategory->crimecategory_id=$crimecategory_id;
      $result=$this->crimecategory->selectById();

      require_once "./views/criminals/updatecrimecategory.php";




    }
    function deletecrimecategory(){
      $crimecategory_id=$_GET['crimecategory_id'];
      $this->crimecategory->crimecategory_id=$crimecategory_id;
      $result=$this->crimecategory->deletecrime();

      if($result==TRUE){
        echo "<script> alert('deleted successfull');
        location='managecrime';
        </script>";
      }
      else{
        echo "<script> alert('deletion failled!');
        location='managecrime';
        </script>";

      }

    }
    function updatecrimecategorydata(){
      if(isset($_POST['submit'])){
        $crimecategory_id=$_POST['crimecategory_id'];
        $crime_type=$_POST['crime_type'];

      }
      if(empty($crimecategory_id)||empty($crime_type)){
        echo "<script> alert('incomplete details')
        location='updatecrimecategory';
        </script>";
      }
      else{
        $this->crimecategory->crimecategory_id=$crimecategory_id;
        $this->crimecategory->crime_type=$crime_type;

        $result=$this->crimecategory->updatecategory();
        if($result==TRUE){
          echo"<script>alert('updated Successfully')
          location='managecrime';
          </script>";

        }
        else{
          echo"<script>alert('updation failed')
          location='managecrime';
          </script>";
        }
}

}


    function viewcriminals(){
      $result=$this->criminals->selectAllRecords();
      require_once "./views/criminals/viewcriminals.php";
    }

    function report(){
      $resultb=$this->criminals->selectall();
      $resultc=$this->fir->selectall();
      $resultd=$this->fir->selectrecords();
      require_once "./views/report/reportforpolice.php";

    }

    function criminalsearch(){
      require_once "./views/report/criminalsearch.php";
    }
    function firsearch(){
      require_once "./views/report/firsearch.php";
    }

    function firdata(){
      if(isset($_POST['submit'])){
        $firid=$_POST['firid'];


      if(empty($firid)){
        "<script>alert('please insert required information')
        location='search';
        </script>";


      }
      else{

        $this->fir->firid=$firid;

        $result=$this->fir->firsearch();
        $count=mysqli_num_rows($result);

      }
      if($count==0){
        echo"<script> alert('result not found')
        location='firsearch';

        </script>";
      }
      else{
        $row=$result->fetch_assoc();
        require_once "./views/report/firresult.php";
        require_once "./views/User/firhistory.php";

       }
}
}

       function criminalsdata(){
         if(isset($_POST['submit'])){
           $criminals_id=$_POST['criminals_id'];



         if(empty($criminals_id)){
           "<script>alert('please insert required information')
           location='search';
           </script>";


         }
         else{

           $this->criminals->criminals_id=$criminals_id;

           $result=$this->criminals->criminalsearch();
           $count=mysqli_num_rows($result);

         }
         if($count==0){
           echo"<script> alert('result not found')
           location='criminalsearch';

           </script>";
         }
         else{

           $row=$result->fetch_assoc();

           require_once "./views/report/criminalresult.php";


          }


      }

    }
    function reportforadmin(){
      $resultv=$this->criminals->selectall();
      $resultt=$this->fir->selectall();
       require_once "./views/report/reportforadmin.php";

    }

    function criminalsearchbyadmin(){
      require_once "./views/report/criminalsearchbyadmin.php";
    }
    function firsearchbyadmin(){
      require_once "./views/report/firsearchbyadmin.php";
    }

    function notify(){
      $result=$this->notification->notify();
    }

    function firdatabyadmin(){
      if(isset($_POST['submit'])){
        $firid=$_POST['firid'];


      if(empty($firid)){
        "<script>alert('please insert required information')
        location='search';
        </script>";


      }
      else{

        $this->fir->firid=$firid;

        $result=$this->fir->firsearch();
        $count=mysqli_num_rows($result);

      }
      if($count==0){
        echo"<script> alert('result not found')
        location='firsearch';

        </script>";
      }
      else{
        $row=$result->fetch_assoc();
        require_once "./views/report/firreportforadmin.php";


       }
}
}
function criminalsdatabyadmin(){
  if(isset($_POST['submit'])){
    $criminals_id=$_POST['criminals_id'];



  if(empty($criminals_id)){
    "<script>alert('please insert required information')
    location='search';
    </script>";


  }
  else{

    $this->criminals->criminals_id=$criminals_id;

    $result=$this->criminals->criminalsearch();
    $count=mysqli_num_rows($result);

  }
  if($count==0){
    echo"<script> alert('result not found')
    location='criminalsearch';

    </script>";
  }
  else{

    $row=$result->fetch_assoc();

    require_once "./views/report/criminalreportforadmin.php";


   }


}

}






}


?>
