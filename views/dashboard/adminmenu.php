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
  <a  href="User/logout" class="item">
    logout
  </a>

</div>
<br><br><br><br>





  <div class="ui left  blue  inverted visible thin sidebar vertical  menu ">
    <a class="item">
      <i class="huge icons">
        <i class="big circle outline icon"></i>
        <i class="user secrete icon"></i>
      </i>

    welcome Admin
    </a>

<br><br>

   <div class="row">
    <div class="ui dropdown item">
       <i class="dropdown icon"></i>
      Police Station
       <div class="menu">
         <div class="header">action</div>
         <a href="police/addstation" class="item">Add Station</a>
         <a href="police/managestation" class="item">Manage Station</a>

       </div>
     </div></div>








   <div class="row">
     <div class="ui dropdown item">
        <i class="dropdown icon"></i>
        Crime Category
        <div class="menu">
          <div class="header">action</div>
          <a  href="admin/addcategory"class="item">Add Category</a>
          <a class="item">Manage Category</a>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="ui dropdown item">
         <i class="dropdown icon"></i>
          police
         <div class="menu">
           <div class="header">Action</div>
           <a class="item" href="./police/addpolice">Add Police</a>
           <a class="item" href="./police/Index">Manage Police</a>

         </div>
       </div>
     </div>


<a href="./Admin/viewcriminals" class="item">
      <i class="ui users icon"></i>
      view criminals
    </a>

    <a href="./police/allfirstatus"class="item">
          <i class="file outline icon"></i>
          View Fir
        </a>

        <a href="admin/reportforadmin" class="item">
              <i class="folder outline icon"></i>
              Report
            </a>
            <div class="ui dropdown item">
               <i class="dropdown icon"></i>
          search
               <div class="menu">

                  <a href="admin/criminalsearchbyadmin" class="item" >criminals search</a>

                 <a href="admin/firsearchbyadmin" class="item">fir search</a>

               </div>
             </div>
</div>
</div>

<div class="ui grid">

   <div class="fourteen wide column">
     <div class="ui container">






<div  class="ui three  cards">

  <div class="ui green card" >
    <div class="content" >
      <div class="ui placeholder">
        <div class="rectangular image">




<i  class=" circular inverted teal ui big file green icon"></i>


                         <?php

                         require_once ('././services/config.php');
                         $conn=Config::getConnection();


                         $sql="SELECT firid from fir ORDER BY firid";
                         $result=$conn->query($sql);
                         $count=mysqli_num_rows($result);
                         echo $count;
                          ?>
                          <div  class="label">
                            Fir Registration
                          </div>
                          <div class="ui button" id="fir">show</div>




        </div>
      </div>
    </div>
  </div>

  <div class="ui small modal">
    <i class="ui close icon"></i>

      <form class="ui form" method="POST" action="police/updatestatus">
    <div class="header"><lable><h1> Status (accept/reject)?</h1></label></div>



    <div class="content">
      <div>
    <input type="text" name="firid" value="<?php echo $row['firid'] ?>">
  </div>
    <select name="select">
      <option value="Accept">Accept</option>
      <option value="Reject">Reject</option>

    </select></div><br>

    <div class="actions">
  <button type="submit"  name="submit"  class="right floated ui green button" >submit</button>
  <button type="reset"  class="right floated ui red button" >reset</button>


  </div>
  </form>
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
    $("#fir").Click(function(){
      (".ui.small").modal('show');

    });

    </script>
