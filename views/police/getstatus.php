<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">

<?php
   //code to access data from result
   print_r($result);
$row=$result->fetch_assoc();


?>




<?php
require_once "views/dashboard/policebar.php";
 ?>
<style>
.ui.grid{
  margin-left: 0px;
}
</style>


    <div class="ui header center aligned"><h1>FIR REPORT</h1> </div>
    <div class="ui grid">
       <div class="fourteen wide column">
         <div class="ui container segment">
         <form class="ui form">

                    <tr>
                     <h1> <td>User:  <?php echo $row['username'] ?></h1> </td></h1>
                     <h1> <td>Contact:  <?php echo $row['contact'] ?></h1> </td></h1>

                    </tr><br>

      <div class="ui two column stackable center aligned grid">


            <div class="column">


       <table class="ui unstackable  table">
                       <div class="ui central aligned header">Complinant Dtails</div>

        <tr>
          <td> * Name:</td>
          <td><input type="text" value="<?php echo $row['name']?>" ></td>
        </tr>

        <tr>
         <td>* Father's Name:</td>
          <td><input type="text" value="<?php echo $row['fathers_name'] ?>" ></td></tr>
          <tr>
          <td>Email:</td>
          <td><input type="email"  value="<?php echo $row['email'] ?>"> </td>
        </tr>

        <tr>
        <td>* Mobile:</td>
        <td> <input type="text" value="<?php echo $row['mobile']?>" ></td>
        </tr>

        <tr>
        <td>* Present Address</td>
        <td> <input type="text" value="<?php echo $row['present_address'] ?>"></td>
        </tr>

        <tr>
        <td>* Home District:</td>
        <td> <input type="text"  value="<?php echo $row['home_district']?>"></td>
      </tr></table>

    </div>





  <div class="column">
<table class=" ui unstackable table">
<div class="ui central aligned header">Complaint Details</div>
<tr>
<td>* Date of Incident:</td>
<td> <input type="date" value="<?php echo $row['date_of_incident']?>"></td>
</tr>
<tr>
<td>* Time of Incident:</td>
<td> <input type="time" value="<?php echo $row['time_of_incident']?>" ></td>
</tr>

<tr>
<td>* Place of Incident:</td>
<td> <input type="text"  value="<?php echo $row['place_of_incident']?>"></td>
</tr>
<td>* Incident Type:</td>
<td><input type="text"  value="<?php echo $row['incident_type']?>" ></td>
</tr>

<tr>
<td>* Incident Details:</td>
<td><textarea> <?php echo $row['incident_details']?>

</textarea></td>
</tr>

<tr>
<td>Any Clue:</td>
<td> <img style="height:100px; width:140px;" src="<?php echo $row['any_clue']?>"></td>
</tr>
</table>
<div class="ui primary button floated left" id="click">Take Action</button></div>



</form>
    </div>
  </div>
</div></div>








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


















<script>
	$("#click").click(function(){
		$(".ui.small").modal('show');
	});


</script>
