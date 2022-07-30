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


<div class="ui  blue top fixed inverted menu  ">

  <a class=" active item">
    <i class="ui large home icon"></i>
    Home
  </a>


  <a style="color:red" href="User/logout"class="item">
  logout
  </a>



</div><br><br><br><br>

  <div class="ui left blue inverted thin visible sidebar vertical  menu ">

<a class="item">
  <i class="huge icons">
    <i class="big circle outline icon"></i>
    <i class="user icon"></i>
  </i>
    <?php echo $_SESSION['username'] ?>
</a>



    <br>
    <a class="item">
      <i class="large home icon"></i>
      Home
    </a><br>
    <a href="./User/firform" class="item" >
      <i class=" large edit outline icon"></i>
      Fir Form
    </a><br>
    <a href="User/usersearch" class="item">
      <i class="large open folder icon"></i>
  Fir History
</a><br>
    <a href="User/chargesheet" class="item">
      <i class="large file outline icon"></i>
      Charge Sheet
    </a><br>
  </div>









<div class="ui container">

         <div class="ui basic segment">















    <script>

  $('.ui.sidebar').sidebar('');


    $('.ui.dropdown')
      .dropdown({

      })
    ;

    </script>
