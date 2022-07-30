
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">
<style>
.ui.striped.unstackable.table{
  margin-right:100px;
  margin-left: -100px;
}
</style>
<?php
require_once "./views/dashboard/adminbar.php";
 ?>
 <div class="ui grid">
   <div class="ui four width column">
<table class="ui striped inverted  unstackable table">
  <thead>
    <tr>
    <th>sn</th>
    <th>Station Id</th>
    <th>Station Name</th>


    <th>Station Code</th>

    <th>Action</th>
  </tr>
  </thead>

  <?php
  $sn=1;
  while($row= $result->fetch_assoc()){?>
    <tr>
   <td><?php echo $sn; ?></td>
   <td><?php echo $row['station_id']; ?></td>
   <td><?php echo $row['station_name']; ?></td>
   <td><?php echo $row['station_code']; ?></td>
   <td>
    <a class="ui green button" href="police/updatestation?station_id=<?php echo $row['station_id']?>">Update</a>
    <a class="ui red button" href="police/deletestation?station_id=<?php echo $row['station_id']?>" onClick="return confirm('Do you want to Delete? Y/N')"> Delete</a>
  </td>
</tr>

<?php

$sn++;
}
?>
</table>
</div>
</div>
