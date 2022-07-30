<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">
<style>

.item{
  margin-top:20px;
}
</style>


<div class="ui top fixed  blue small inverted menu ">

  <a class=" active item">
    <i class="ui large home icon"></i>
    Home
  </a>

  <a href="User/logout" class="item">
  logout
  </a>

</div>



<br><br><br><br>



<div class="ui left  blue  inverted visible thin sidebar vertical  menu">

<a class="item">
  <i class="huge icons">
    <i class="big circle outline icon"></i>
    <i class="shield icon"></i>
  </i>
<?php echo $_SESSION['username'];?>
</a>



    <div class="ui dropdown item">
       <i class="dropdown icon"></i>
  Criminals
       <div class="menu">
         <div class="header">action</div>
          <a href="police/acceptedfir" class="item">Add Criminals</a>

         <a href="police/criminalstatus" class="item">Manage Criminals</a>

       </div>
     </div>















    <a  href="police/newfirstatus" class="item">
                New Fir
          <i class="bell outline icon">    <?php

              require_once ('././services/config.php');
              $conn=Config::getConnection();


              $sql="SELECT * from fir  WHERE status='pending'";
              $result1=$conn->query($sql);


              $count=mysqli_num_rows($result1);

              echo $count;

               ?>
</i>


        </a>
        <a href="police/acceptedfir1" class="item">
              <i class="paper icon"></i>
              ChargeSheet  </a>

        <a href="Admin/report" class="item">
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






<div class="ui container">
  <div class="ui basic segment">










































    <script>


  $('.ui.thin.sidebar').sidebar('');

    $('.ui.dropdown')
      .dropdown({

      })
    ;

    </script>
