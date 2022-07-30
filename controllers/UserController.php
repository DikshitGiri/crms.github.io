


<?php
class UserController
{
  private $user;
  private $police;
  private $fir;
  function __construct()
  {
    require_once "models/user.php";
    $this->user = new user();
    require_once "models/police.php";
    $this->police = new police();

    require_once "models/fir.php";
    $this->fir = new fir();
    require_once "models/notification.php";
    $this->notification = new notification();
    require_once "models/chargesheet.php";
    $this->chargesheet = new chargesheet();
  }
  function logout(){
    session_destroy();
    header('Location:land');
  }

  function userbar()
  {
    require_once "./views/dashboard/userbar.php";
  }
  function firform()
  {
    require_once "./views/fir/fir.php";
  }
  function admin()
  {
    if ($_SESSION['user'] == 'admin') {
      require_once "./views/dashboard/adminmenu.php";
    } else {
      header('Location:land');
    }
  }

  function land()
  {
    require_once "./views/shared/menu.php";
  }
  function username()
  {
    $name = $this->user->username();
  }





  function usermenu()
  {
    if ($_SESSION['user']=='user'){

    require_once "./views/dashboard/usermenu.php";
      }

      else {
        header('Location:land');
      }

  }
  function policemenu()
  {
  ;
    if ($_SESSION['user']=='police'){
  require_once "./views/dashboard/policemenu.php";
        }

        else {
          header('Location:land');
        }

  }
  function fir()
  {
   if( $_SESSION['user']=='user'){



    if (isset($_POST["submit"])) {



      $file = $_FILES["any_clue"];

      $file_name = $_FILES["any_clue"]["name"];
      $file_temp = $_FILES["any_clue"]['tmp_name'];
      $file_size = $_FILES["any_clue"]["size"];
      $file_type = $_FILES["any_clue"]["type"];
      $destination = ("uploadimages/" . $file_name);
      move_uploaded_file($file_temp, $destination);

      $date=$_POST['current_date'];




      $name = $_POST["name"];

      $fathers_name = $_POST["fathers_name"];

      $email = $_POST["email"];
      $mobile = $_POST["contact"];
      $present_address = $_POST["present_address"];
      $home_district = $_POST["home_district"];
      $date_of_incident = $_POST["date_of_incident"];
      $time_of_incident = $_POST["time_of_incident"];
      $place_of_incident = $_POST["place_of_incident"];
      $incident_type = $_POST["incident_type"];
      $incident_details = $_POST["textarea"];
      $any_clue = $file;


      if (empty($name) || empty($fathers_name) || empty($mobile) || empty($present_address) || empty($home_district) || empty($date_of_incident) || empty($time_of_incident) || empty($place_of_incident) || empty($incident_type) || empty($incident_details) || empty($any_clue)) {

        echo "<script> alert('fill the form as suggested. fir registration failed!');
           location='firform';
           </script>";
      } else {
        //send data to model
        $this->fir->date=$date;

        $this->fir->name = $name;
        $this->fir->fathers_name = $fathers_name;
        $this->fir->email = $email;
        $this->fir->mobile = $mobile;
        $this->fir->userid=$_SESSION['userid'];
        $this->fir->present_address = $present_address;
        $this->fir->home_district = $home_district;
        $this->fir->date_of_incident = $date_of_incident;
        $this->fir->time_of_incident = $time_of_incident;
        $this->fir->place_of_incident = $place_of_incident;
        $this->fir->incident_type = $incident_type;
        $this->fir->incident_details = $incident_details;


        $this->fir->any_clue = $destination;
        $result = $this->fir->insertfir();
      }






      if ($result == TRUE) {
        echo "<script> alert('Fir registered successfully');
            location='firform';
             </script>";
      } else {
        echo "<script> alert('fir registration failed! try again latter');
            location='firform';
            </script>";
      }
    }}
else {
  header('Location:land');
}


  }




  function RegisterData()
  {

    if (isset($_POST["submit"])) {
      $username = $_POST["username"];
      $contact = $_POST["contact"];

      $email = $_POST["email"];
      $password = $_POST["password"];
      $repassword = $_POST["repassword"];

      if (
        empty($username) || empty($contact) ||
        empty($email) || empty($password) || empty($repassword)
      ) {
        echo "<script> alert ('fill the form first.registration failed!');
   location='land';
   </script>";
      } else {
        $this->user->username = $username;
        $this->user->contact = $contact;
        $this->user->email = $email;
        $this->user->password = $password;

        $result = $this->user->RegisterUser();
      }
      if ($result == TRUE) {

        echo "<script> alert ('registration succeed');
           location='land';
           </script>";
      } else {
        echo "<script>alert('failed to insert!');
       location='land';
       </script>";
      }
    }
  }




  function logadmin()
  {
    if (isset($_POST["submit"])) {

      $username = $_POST['username'];
      $password = $_POST['password'];
      if (empty($username) || empty($password)) {
        echo  "<script> alert ('Username or Password Empty!');
                location='land';
                </script>";
      } else {
        if ($username == "admin" && $password == "admin") {
          $_SESSION['user'] = 'admin';


          echo  "<script> alert ('successfully logged in!');
            location='admin';
            </script>";
        }
        else{
          echo  "<script> alert ('Username or Password  is invalid!');
          location='land';
          </script>";
        }
      }
    }
  }

  function logpolice()
  {

    if (isset($_POST["submit"])) {

      $police_name = $_POST['username'];
      $police_id = $_POST['password'];
      $_SESSION['police_id'] = $police_id;
      if (empty($police_name) || empty($police_id)) {
        echo  "<script> alert ('Username or Password Empty!');
              location='land';
              </script>";
      } else {

        $this->police->police_name = $police_name;
        $this->police->police_id = $police_id;
        $result =$this->police->CheckPolice();
        $rowcount = mysqli_num_rows($result);
      }
      //$this->user->setUsername($username);

      if ($rowcount === 0) {
        echo "<script> alert ('police Login Failed!');
            location='land';
            </script>";
      } else {
        $row=$result->fetch_assoc();
        $_SESSION['user']='police';
        $_SESSION['username']=$row['police_name'];

        echo "<script> alert(' you are successfully logged in')
       location='policemenu';

       </script>";
      }
    }
  }



  function loginCheck()
  {
    if (isset($_POST["submit"])) {

      $username = $_POST["username"];
      $password = $_POST["password"];

      if (empty($username) || empty($password)) {
        echo  "<script> alert ('Username or Password Empty!');
                              location='land';
                              </script>";
      } else {

        $this->user->username = $username;
        $this->user->password = $password;




        $result = $this->user->CheckUser();


        $rowcount = mysqli_num_rows($result);
      }
      if ($rowcount == 0) {
        echo "<script> alert ('Login Failed!');
                          location='land';
                          </script>";
      } else {
        $row=$result->fetch_assoc();
        $_SESSION ['username'] = $row['username'];
        $_SESSION['userid']=$row['uid'];
        $_SESSION['user']='user';
        echo "<script> alert(' you are successfully logged in');
                      location='usermenu';

                      </script>";
      }
    }
  }



  function usersearch(){

  require_once "./views/User/searchfir.php";




  }

  function firdata(){
    if(isset($_POST['submit'])){
      $firid=$_POST['firid'];


    if(empty($firid)){
      "<script>alert('please insert required information')
      location='usersearch';
      </script>";


    }
    else{

      $this->fir->firid=$firid;

      $result=$this->fir->firsearch();
      $count=mysqli_num_rows($result);

    }
    if($count==0){
      echo"<script> alert('result not found')
      location='usersearch';

      </script>";
    }
    else{



      require_once "./views/User/firhistory.php";

     }
}
}

function chargesheet(){
  require_once "./views/User/searchchargesheet.php";
}

function chargesheetdata(){
  if(isset($_POST['submit'])){
    $firid=$_POST['firid'];


  if(empty($firid)){
    "<script>alert('please insert required information')
    location='chargesheet';
    </script>";


  }
  else{

    $this->chargesheet->firid=$firid;

    $result=$this->chargesheet->searchchargesheet();

    $count=mysqli_num_rows($result);

  }
  if($count==0){
    echo"<script> alert('result not found')
    location='chargesheet';

    </script>";
  }
  else{



    require_once "./views/User/chargesheethistory.php";

   }
 }
}










}





?>
