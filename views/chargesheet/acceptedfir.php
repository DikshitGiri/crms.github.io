<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
<base href="/cms/">


<?php require_once "./views/dashboard/policebar.php";?>
<style>
.ui.column{
  margin-right: 140px;
}
</style>
<div class="ui grid">
  <div class="ui eighteen wide column">
    <div class="ui header center aligned"><h1> Add Criminals</h1></div>
<table class="ui unstackable stripped table">
  <thead>
    <tr>
      <th>sn</th>
      <th>firid</th>
      <th>criminal id</th>
      <th>criminal name</th>

        <th>policestation</th>

        <th>crime</th>


          <th>police</th>
          <th>Chargesheet</th>

        </tr>


        <?php
            $sn=1;
         while($row=$result->fetch_assoc()){?>

          <tr>
            <td><?php echo $sn ?></td>
              <td><?php echo $row['firid']?></td>
                <td><?php echo $row['criminals_id']?></td>
                <td><?php echo $row['criminals_name']?></td>
                  <td><?php echo $row['policestation']?></td>
                    <td><?php echo $row['crime']?></td>
                      <td><?php echo $row['police']?></td>

                      <td><a class="ui green button" href="police/chargesheet?criminal_id=<?php echo$row['criminals_id']?>">Add To Chargesheet</td>

                    </tr>

                    <?php $sn++; }?>
                  </table>
                </div>
              </div>
