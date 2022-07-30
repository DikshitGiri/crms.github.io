<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
<base href="/cms">
  <?php require_once "./views/dashboard/userbar.php" ?>
  <body>
    <style>
    .ui.column{
      margin-right: 70px;
      margin-left: -70px;
    }
    </style>
<div class="ui fluid container">
<h3> All FIR</h3>
<div class="ui grid">
  <div class="ui fifteen wide column">
 <table class=" ui celled striped table">
<tr>
	<th>#</th>
	<th>Fir Id</th>
	<th>Fir Date</th>

	<th>Name</th>
	<th>Email</th>
	<th>Status</th>

</tr>
<?php $sn=1;
while($row=$result->fetch_assoc()){?>
  <tr>
    <td><?php echo $sn; ?></td>
      <td><?php echo $row['firid']; ?></td>
        <td><?php echo $row['firdate']; ?></td>
        <td><?php echo $row['name']; ?></td>

            <td><?php echo $row['email']; ?></td>
              <td><?php echo $row['status']; ?></td>




  </tr>
  <?php $sn++; } ?>


 </table>

</body>
</html>
