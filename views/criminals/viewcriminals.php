<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">
<style>
.ui.column{
  margin-right: 100px;
  margin-left: 50PX;
}
</style>
<?php require_once "./views/dashboard/adminbar.php" ?>

<div class="ui grid">
<div class="ui thirteen wide column">
  <div class=" header ui center aligned">Criminals Details</div>
<table class="ui  unstackable striped  table">

  <thead>
    <tr>
      <th>sn</th>
      <th>criminals_id</th>
      <th>criminals_name</th>


    </tr></thead>


  <?php
   $sn=1;

   while($row=$result->fetch_assoc()){?>
     <tr>
    <tr> <td><?php echo $sn;?></td>
      <td><?php echo $row['criminals_id'] ?></td>
      <td><?php echo $row['criminals_name']?></td>


      </tr>
      <?php $sn++; }?>
    </table>
</div>
</div>
</div>
