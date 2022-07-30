<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">

<div class="ui  header aligned center"><h1> police Update Form </h1></div>

<?php
   //code to access data from result
  $row=$result->fetch_assoc();

?>

<div class="ui raised very padded text container segment">
	<form  class="ui form" method="POST" action="police/UpdateData">
    <div class="eight width feild">


  <input type="text" name="police_id" value="<?php echo $row['police_id'] ?>" hidden/>

       <div class="field">
         <label>police_department:</label>
         <input type="text" name="police_department" class="form-control" value="<?php echo $row['police_department'] ?>" />
       </div>

       <div class="field">
         <label>police_name:</label>
         <input type="text" name="police_name" class="form-control" value="<?php echo $row['police_name'] ?>" />
       </div>

       <div class="field">
         <label>email:</label>
         <input type="text" name="email" class="form-control" value="<?php echo $row['email'] ?>" />
       </div>

       <div class="field">
         <label>contact:</label>
         <input type="text" name="contact" class="form-control" value="<?php echo $row['contact'] ?>" />
       </div>
       <div class="field">
         <label>station:</label>
         <select name="station" value="<?php echo $row['station'] ?>">

           <?php while($row=$result3->fetch_assoc()){?>
             <option> <?php echo $row['station_name'] ?></option>
           <?php } ?>
         </select>



       <div class="ui buttons">
 <input type="submit" name="submit" value="submit" class="ui primary button" />submit</button>
  <div class="or"></div>
 <button class=" ui link red button active"> <a href="police/Index"> cancel <a> </button>
</div>



     </div>
     </form>
   </div>
