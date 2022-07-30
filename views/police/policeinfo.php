
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">


<?php
require_once "views/dashboard/adminbar.php";


?>

<style>
.ui.grid{
  margin-left: -120px;
  margin-right: 50px;
}
</style>


<div class="ui grid">


<div class=" header ui center aligned">Managemenet Over Here</div>
<table class="ui unstackable inverted striped  table">
  	<thead>
      <tr>
	  <th>sn</th>
  			<th>police-id </th>
        <th>police_department</th>
  			<th> police-name </th>
  			<th> email </th>
  			<th> contact</th>
        <th>station</th>
			 <th>Action</th>

  	</tr>
  </thead>




    <?php



		$sn=1;
		 while($row= $result->fetch_assoc()){ ?>

		<tr>
			<td><?php echo $sn; ?></td>
			<td><?php echo $row['police_id'];?></td>
      <td><?php echo $row['police_department'];?></td>
			<td><?php echo $row['police_name']; ?></td>
			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['contact']; ?></td>
      	<td><?php echo $row['station']; ?></td>
			<td>
			<a class="ui green button" href="police/Update?police_id=<?php echo $row['police_id'] ?>"> Update </a>
				<a class="ui red button" href="police/Delete?police_id=<?php echo $row['police_id'] ?>" onClick="return confirm('Do you want to Delete? Y/N')"> Delete </a>
			</td>

		</tr>

		<?php $sn++; }
	?>
</table>

</div>
