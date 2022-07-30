
<?php
require_once "views/shared/effects.php";
require_once "views/dashboard/usermenu.php";
?>


<script type="text/javascript">
    $(window).on('load', function() {
        $('#Modal1').modal('show');
    });
</script>




<style>

  label{
     color:black;
  }
  .bg{
     margin-top:30px;
     color:green;
  }
  .container{
    color:green;
  }
  .col-sm-6{
    color:green;
  }

  </style>



<div class="container" >

<div class="modal fade" id="Modal1" role="dialog">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button> 
          <h1 class="modal-title" style="margin-left:25%;">REPORT YOUR FIR</h1>
        
       
<div class="modal-body">
 <form method="post" action="user/registerfir"> 
<div class="col-sm-6" >
*<label> FIR NUMBER</label><input type="text" class="form-control" required></div>
<div class="col-sm-6" >
*<label>  VICTIMS NAME</label><input type="text" class="form-control" required></div>
<div class="col-sm-6" >
<label> OFFENDER NAME</label><input type="text" class="form-control">
</div>
<div class="col-sm-6" >
<label>DISCRIPTION </label><input type="text"  class="form-control"></div>
<div class="col-sm-6" >
*<label> PLACE</label><input type="text" class="form-control" required></div>
<div class="col-sm-6" >
*<label> DATE</label><input type="date" class="form-control" required></div>
<div class="col-sm-6" >
*<label> TIME</label><input type="time" class="form-control" required></div>
<div class="col-sm-6" >
<label> WITNESS</label><input type="text" class="form-control"><br></div>
<div class="col-sm-6" >
<label class="glyphicon glyphicon-picture form-control"> OFFENDERS PHOTO </label></div><br>
<div class="col-lg-12" style="margin-top:15px;"><button class="  btn btn-success btn-lg"> submit</button></div>
</form>
        </div>
        </div>
      </div>
    </div>
  </div>
  </div>



