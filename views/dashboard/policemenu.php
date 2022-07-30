<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">
<style>
.row{
  margin-top:20px;
}
.item{
  margin-top:20px;
}
</style>


<div class="ui top fixed  blue small inverted menu ">

  <a class=" active item">
    <i class="ui large home icon"></i>
    Home
  </a>
  <a class="item">
    Messages
  </a>

  <a href="User/logout" class="item">
  logout
  </a>
</div>
<br><br><br><br>





  <div class="ui left  blue  inverted visible thin sidebar vertical  menu ">
  <a class="item">
  <i class="huge icons">
    <i class="big circle outline icon"></i>
    <i class="shield icon"></i>
  </i>
<?php echo $_SESSION['username'] ?>
</a>





    <div class="ui dropdown item">
       <i class="dropdown icon"></i>
  Criminals
       <div class="menu">
         <div class="header">action</div>
    <a href="police/acceptedfir" class="item">Add Criminals</a>
         <a href="police/criminalstatus" class="item">Manage criminals</a>

       </div>
     </div>














    <a href="police/newfirstatus" class="item">
                New Fir
          <i class="bell outline icon">    <?php

              require_once ('././services/config.php');
              $conn=Config::getConnection();


              $sql="SELECT * from fir WHERE status='pending'";
              $result=$conn->query($sql);
              $count=mysqli_num_rows($result);
              echo $count;
               ?>
</i>


        </a>
        <a href="police/acceptedfir1" class="item">
              <i class="paper icon"></i>
              ChargeSheet            </a>

        <a href="admin/report" class="item">
              <i class="folder outline icon"></i>
              Report
            </a>

            <div class="ui dropdown item">
               <i class="dropdown icon"></i>
          search
               <div class="menu">

                  <a href="admin/criminalsearch" class="item" >criminals search</a>

                 <a href="admin/firsearch" class="item">fir search</a>

               </div>
             </div>
</div>


<div class="ui grid">

   <div class="fourteen wide column">
     <div class="ui container">






<div class="ui three  cards">

  <div class="ui green card">
    <div class="content">
      <div class="ui placeholder">
        <div class="rectangular image">




  <i class=" circular inverted teal ui big file green icon" ></i>


                         <?php

                         require_once ('././services/config.php');
                         $conn=Config::getConnection();


                         $sql="SELECT firid from fir ORDER BY firid";
                         $result=$conn->query($sql);
                         $count=mysqli_num_rows($result);
                         echo $count;
                          ?>
                          <div class="label">
                            Fir Registration
                          </div>




        </div>
      </div>
    </div>
  </div>

  <div class="ui red card">
    <div class="content">
      <div class="ui placeholder">
        <div class="rectangular image">




  <i class=" circular inverted teal ui big users green icon"></i>


                         <?php

                         require_once ('././services/config.php');
                         $conn=Config::getConnection();


                         $sql="SELECT uid from user ORDER BY uid";
                         $result=$conn->query($sql);
                         $count=mysqli_num_rows($result);
                         echo $count;
                          ?>
                          <div class="label">
                          User Registration
                          </div>




        </div>
      </div>
    </div>
  </div>

  <div class="ui blue card">
    <div class="content">
      <div class="ui placeholder">
        <div class="rectangular image">




  <i class=" circular inverted teal ui big shield  green icon"></i>


                         <?php

                         require_once ('././services/config.php');
                         $conn=Config::getConnection();


                         $sql="SELECT sn from police ORDER BY sn";
                         $result=$conn->query($sql);
                         $count=mysqli_num_rows($result);
                         echo $count;
                          ?>
                          <div class="label">
                          POlice Registration
                          </div>




        </div>
      </div>
    </div>
  </div>


          </div>
        </div>
      </div>
    </div>







































    <script>


  $('.ui.thin.sidebar').sidebar('');

    $('.ui.dropdown')
      .dropdown({

      })
    ;

    </script>
