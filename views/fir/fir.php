<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>

<base href="/cms/">

<?php
require_once "views/dashboard/userbar.php";
 ?>
<style>
.ui.grid{
  margin-left: 0px;
}
</style>

  <form class="ui form" method="POST" enctype="multipart/form-data" action="./user/fir">
      <div class="ui header center aligned"><h1>FIR FORM</h1> </div>
    <div class="ui grid">
       <div class="fourteen wide column">
         <div class="ui container segment">

      <div class="ui two column stackable center aligned grid">


            <div class="column">


       <table class="ui unstackable  table">
                       <div class="ui central aligned header">Complinant Dtails</div>
                       <tr>
                      <td>*Current Date:</td>
                      <td><input type="date"  name="current_date" value="<?= date('Y-m-d');?>"></td>

                    </tr>
        <tr>
          <td> * Name:</td>
          <td><input type="text" name="name" ></td>
        </tr>

        <tr>
         <td>* Father's Name:</td>
          <td><input type="text" name="fathers_name" ></td></tr>
          <tr>
          <td>Email:</td>
          <td> <input type="email"  placeholder="example@gmail.com" name="email"></td>
        </tr>

        <tr>
        <td>* Mobile:</td>
        <td> <input type="text"  placeholder="(+977)---------" name="contact" ></td>
        </tr>

        <tr>
        <td>* Present Address</td>
        <td> <input type="text" name="present_address" ></td>
        </tr>

        <tr>
        <td>* Home District:</td>
        <td> <input type="text"  name="home_district"></td>
      </tr></table>

    </div>





  <div class="column">
<table class=" ui unstackable table">
         <div class="ui central aligned header">Complaint Details</div>
<tr>
<td>* Date of Incident:</td>
<td> <input type="date" name="date_of_incident" ></td>
</tr>
<tr>
<td>* Time of Incident:</td>
<td> <input type="time" name="time_of_incident" ></td>
</tr>

<tr>
<td>* Place of Incident:</td>
<td> <input type="text" name="place_of_incident" ></td>
</tr>
<td>* Incident Type:</td>
<td> <select name="incident_type" >
  <option value="murder">murder<option>
  <option value="theft">Theft<option>
  <option value="rape">rape<option>
  <option value="robbery">robbery<option>
  <option value="kidnap">kidnap<option>
  <option value="assult">assult<option>
  <option value="abuse">abuse<option>
  <option value="drug possession">drug possession<option>
  <option value="cyber bullying">cyber bullying<option>

  <select></td>
</tr>

<tr>
<td>* Incident Details:</td>
<td> <textarea name="textarea">

</textarea></td>
</tr>

<tr>
<td>Any Clue:</td>
<td> <input type="file" name="any_clue"></td>
</tr>
</table>
</div>
<div class="column">
</div>
<div class="ui buttons">
<button type="submit" class="ui green button" name="submit" value="submit">submit</button>
<div class="or"></div>
<button type="reset" value="reset" class="ui red button">reset</button></div>


<br>
</form>
    </div>
  </div>
</div></div>
