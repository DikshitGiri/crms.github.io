
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">



<?php require_once "./views/dashboard/policebar.php"; ?>

<style>
.ui.grid{
  margin-right: 200px;
}
</style>
<div class="ui  grid">
   <div class="eight  wide column">

<div class=" header ui center aligned">Managemenet Over Here</div>
<table class="ui inverted unstackable striped  table">
  	<thead>
      <tr>
    <th>sn</th>
		<th>firdate</th>
	    <th>firid</th>


  		<th>Name</th>

  	    <th> Email </th>
  	    <th> Mobile </th>



       	<th>Date of incident</th>

         <th>Any clue</th>
         <th>Action</th>

  	</tr>
  </thead>




    <?php



		$sn=1;
	  while($row=$result->fetch_assoc()){ ?>

		<tr>
			<td><?php echo $sn; ?></td>
			<td><?php echo $row['firdate'];?></td>
      <td><?php echo $row['firid'];?></td>
			<td><?php echo $row['name'];?></td>

			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['mobile'];?></td>


      <td><?php echo $row['date_of_incident']; ?></td>




     	<td><img src="<?php echo $row['any_clue']; ?>" width="150" height="100"></td>
			<td>
			<a class="ui green button" href="police/updatefir?firid=<?php echo $row['firid'] ?>">View</a>



			</td>

		</tr>

		<?php $sn++; }
	?>
</table>

</div>
