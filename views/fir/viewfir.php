
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">



<?php require_once "./views/dashboard/adminbar.php"; ?>

<style>
.ui.grid{
  margin-left: -120px;
  margin-right: 10px;
}
</style>
<div class="ui  grid">
   <div class="eighteen wide column">

<div class=" header ui center aligned">Complete Fir Details</div>
<table class="ui inverted unstackable striped  table">
  	<thead>
      <tr>
    <th>sn</th>
		<th>firdate</th>
	    <th>firid</th>


  		<th>userid</th>

  	    <th> Email </th>
  	    <th> Mobile </th>





         <th>Any clue</th>
         <th>status</th>

  	</tr>
  </thead>




    <?php



		$sn=1;
	  while($row=$result->fetch_assoc()){ ?>

		<tr>
			<td><?php echo $sn; ?></td>
			<td><?php echo $row['firdate'];?></td>
      <td><?php echo $row['firid'];?></td>
			<td><?php echo $row['uid'];?></td>

			<td><?php echo $row['email']; ?></td>
			<td><?php echo $row['contact'];?></td>







     	<td><img src="<?php echo $row['any_clue']; ?>" width="150" height="100"></td>
      <td><?php echo $row['status'];?></td>


		</tr>

		<?php $sn++; }
	?>
</table>

</div>
