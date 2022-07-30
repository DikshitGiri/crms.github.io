<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">
<style>
.ui.column{
  margin-right: 100px;
  margin-left: -50PX;
}
</style>
<?php require_once "./views/dashboard/policebar.php" ?>

<div class="ui grid">
<div class="ui  column">
  <div class=" header ui center aligned">Managemenet Over Here</div>
<table class="ui  unstackable striped  table">

  <thead>
    <tr>
      <th>sn</th>
      <th>firid</th>
      <th>criminals_id</th>
      <th>criminals_name</th>
      <th>policestation</th>
      <th>police</th>
      <th>crime</th>

      <th>Action</th>
    </tr></thead>


  <?php
   $sn=1;

   while($row=$result->fetch_assoc()){?>
     <tr>
    <tr> <td><?php echo $sn;?></td>
      <td><?php echo $row['firid'] ?></td>
      <td><?php echo $row['criminals_id'] ?></td>
      <td><?php echo $row['criminals_name']?></td>
      <td><?php echo $row['policestation']?></td>
      <td><?php echo $row['police']?></td>
      <td><?php echo $row['crime']?></td>

        <td>
        <a class="ui green button" href="police/updatecriminals?criminals_id=<?php echo $row['criminals_id']?>">Update</a>
        <a class="ui red button" href="police/deletecriminals?criminals_id=<?php echo $row['criminals_id']?>" onclick="return confirm('Do You Want To Delete?(Y/N)')">Delete</a>
      </td>
      </tr>
      <?php $sn++; }?>
    </table>
</div>
</div>
</div>
