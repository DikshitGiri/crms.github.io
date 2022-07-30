<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
<base href="/cms/">
<?php require_once "./views/dashboard/adminbar.php";?>
<style>
h2{
  color:;
}
</style>
<div class="ui grid">
  <div class="ten wide column segment">
  <table class="ui unstackable stripped table">






<div class="ui header center aligned"><h1>Criminals Report</h1></div>
      <tr><td><h2>Fir Id:</h2></td>
        <td><h2><?php echo$row['firid']?></h2></td></tr>

          <tr><td><h2>Fir Date:</h2></td>
            <td><h2> <?php echo$row['firdate']?></h2></td></tr>



              <tr><td><h2><p>Complinant Name: </h2></td>
                <td><h2><?php echo$row['name']?></h2></td></tr>
                  <tr><td><h2><p>Complinant Contact: </h2></td>
                  <td> <h2><?php echo$row['mobile']?></h2></td></tr>



                      <tr><td><h2>Date Of Incident: </h2></td>
                      <td><h2><?php echo$row['date_of_incident']?></h2></td></tr>

                      <tr><td><h2>Time Of Incident:</h2> </td>
                      <td><h2><?php echo$row['time_of_incident']?></h2></td></tr>

                      <tr><td><h2>Incident Details:</h2> </td>
                      <td><h2><?php echo$row['incident_details']?></h2></td></tr>

                      <tr><td><h2>Clue:</h2> </td>
                      <td><img src="<?php echo$row['any_clue']?>"  width="200" height="100" ></td></tr>
                    </table>


                                </div>
                              </div>
