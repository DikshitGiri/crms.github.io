<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
<base href="/cms/">
<?php require_once "./views/dashboard/adminbar.php"?>
<style>
h2{
  color:;
}
</style>
<div class="ui grid">
  <div class="ten wide column segment">
  <table class="ui unstackable stripped table">






<div class="ui header center aligned"><h1>Criminals Report</h1></div>
      <tr><td><h2>Criminal Id:</h2></td>
        <td><h2><?php echo$row['criminals_id']?></h2></td></tr>

          <tr><td><h2>Criminals Name:</h2></td>
            <td><h2> <?php echo$row['criminals_name']?></h2></td></tr>



              <tr><td><h2><p>Crime: </h2></td>
                <td><h2><?php echo$row['crime']?></h2></td></tr>
                  <tr><td><h2><p>Appointed Policestation: </h2></td>
                  <td> <h2><?php echo$row['policestation']?></h2></td></tr>



                      <tr><td><h2>Appointed Police: </h2></td>
                      <td><h2><?php echo$row['police']?></h2></td></tr>

                      <tr><td><h2>Fir Id:</h2> </td>
                      <td><h2><?php echo$row['firid']?></h2></td></tr>
                    </table>


                                </div>
                              </div>
