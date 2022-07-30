
<html>
<head>
	<meta charset="utf-8">


  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <base href="/cms/">
  <?php require_once "./views/dashboard/policebar.php" ?>
  <style>
  .ui.grid{

    margin-left: -80px;
		margin-right: 100px;
  }
  </style>


</head>


  <div class="ui grid">
    <div class="ui eleven  wide  column segment">



<div class="ui header center aligned"><h3 >Criminals Details</h3></div>

<form class="ui form" method="POST" action="police/insertcriminal">
	  <input type="text" class="form-control" name="firid"  value="<?php echo $_GET['firid']?>"/hidden >
  <div class="row md-3">
    <label class="col-sm-2 col-form-label">Criminals Id</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="criminals_id"  >
    </div>
  </div><br>
     <div class="row md-3">
    <label class="col-sm-2 col-form-label" >Criminals Name</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="criminals_name" >
    </div></div><br>

		 <div class="row md-3">
		<label class="col-sm-2 col-form-label" >Police Station</label>
		<div class="col-sm-10">


			<select name="policestation">

				<?php while($row=$result2->fetch_assoc()){

			?>
			<option value=" <?php echo $row['station_id']?>"> <?php echo $row['station_name'] ?></option>
		<?php }?>
</select>




</div></div><br>

<div class="row md-3">
<label class="col-sm-2 col-form-label" >Police</label>
<div class="col-sm-10">

	<select name="police">

		<?php while($row=$result3->fetch_assoc()){

	?>
	<option value=" <?php echo $row['police_id']?>"> <?php echo $row['police_name'] ?></option>
<?php }?>

</select></div></div><br>

<div class="row md-3">
<label class="col-sm-2 col-form-label" >crime type</label>
<div class="col-sm-10">


	<select name="crimetype">


			<?php while($row=$result4->fetch_assoc()){

		?>
		<option value=" <?php echo $row['crime_id']?>"> <?php echo $row['crime_type'] ?></option>
	<?php }?>

	</select></div></div><br>

















  <div class="col-sm-12">
<button class="ui blue right floated  button  " type="submit" name="submit">Add</button></div>

</form>
</body>
</html>
