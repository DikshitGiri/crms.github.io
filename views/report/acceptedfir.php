<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
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
      <th>firdate</th>

        <th>date_of_incident</th>

        <th>incident_type</th>

          <th>clue</th>
          <th>Criminal</th>
        </tr>


        <?php
            $sn=1;
         while($row=$result->fetch_assoc()){?>

          <tr>
            <td><?php echo $sn ?></td>
              <td><?php echo $row['firid']?></td>
                <td><?php echo $row['firdate']?></td>
                  <td><?php echo $row['date_of_incident']?></td>
                    <td><?php echo $row['incident_type']?></td>
                      <td><img src="<?php echo $row['any_clue']?>" width="150px;", height="100px;" ></td>
                      <td><a class="ui green button" href="police/addcriminals?firid=<?php echo$row['firid']?>">Add</td>

                    </tr>

                    <?php $sn++; }?>
                  </table>
                </div>
              </div>
