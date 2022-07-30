


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
  	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">

<base href="/cms/">

  <style>
  .ui.column{
     margin-top: 10px;
    margin-left: 20px;
		margin-right: 300px;
  }
  </style>
<?php require_once "./views/dashboard/policebar.php";?>

<?php $row=$result->fetch_assoc(); ?>
  <div class="ui grid">
  <div class="ui thirteen wide column segment ">



<div class="ui header center aligned"><h3 >Update Criminals Details</h3></div>

<form class="ui form" method="POST" action="police/updatecriminalsdata">


    <input type="text" name="criminals_id" value="<?php echo $row['criminals_id'] ?>"/hidden>


     <div class="row md-3">
    <label class="col-sm-2 col-form-label" >Criminals Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="criminals_name" value="<?php echo $row['criminals_name']?>" >
    </div></div><br>


    <div class="row md-3">
    <label class="col-sm-2 col-form-label" >station</label>
    <div class="col-sm-10">
     <select value="<?php echo $row['station']?>" >
       <?php while($row=$resulta->fetch_assoc()){?>
       <option><?php echo$row['station_name']?></option>
     <?php }?>
   </select>
 </div></div><br>

    <div class="row md-3">
    <label class="col-sm-2 col-form-label" >police</label>
    <div class="col-sm-10">
    <select value="<?php echo $row['police']?>" >
      <?php while($row=$resultb->fetch_assoc()){?>
      <option><?php echo$row['police_name']?></option>
    <?php }?>
  </select>
</div></div><br>

    <div class="row md-3">
    <label class="col-sm-2 col-form-label" >crime</label>
    <div class="col-sm-10">
    <select value="<?php echo $row['crime_type']?>" >
     <?php while($row=$resultc->fetch_assoc()){?>
     <option><?php echo$row['crime_type']?></option>
    <?php }?>
  </select>
</div></div><br>










  <div class="col-sm-12">
<button class="ui blue right floated  button  " type="submit" name="submit">Udate</button></div>

</form>
</body>
</html>
