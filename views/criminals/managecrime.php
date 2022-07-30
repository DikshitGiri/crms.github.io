<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">
<style>
.ui.column{
  margin-right: 100px;
  margin-left: 10PX;
}
</style>
<?php require_once "./views/dashboard/adminbar.php" ?>

<div class="ui grid">
<div class="ui  column">
  <div class=" header ui center aligned">Managemenet Over Here</div>
<table class="ui  unstackable striped  table">

  <thead>
    <tr>
      <th>sn</th>
      <th> crime type</th>


      <th>Action</th>
    </tr></thead>


  <?php
   $sn=1;

   while($row=$result->fetch_assoc()){?>
     <tr>
    <tr> <td><?php echo $sn;?></td>
      <td><?php echo $row['crime_type'] ?></td>


        <td>
        <a class="ui green button" href="admin/updatecrimecategory?crimecategory_id=<?php echo $row['sn']?>">Update</a>
        <a class="ui red button" href="admin/deletecrimecategory?crimecategory_id=<?php echo $row['sn']?>" onclick="return confirm('Do You Want To Delete?(Y/N)')">Delete</a>
      </td>
      </tr>
      <?php $sn++; }?>
    </table>
</div>
</div>
</div>
