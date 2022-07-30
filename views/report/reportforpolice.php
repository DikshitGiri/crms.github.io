


  <html>
  <head>
  	<meta charset="utf-8">

	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>

    <base href="/cms/">
    <?php require_once "./views/dashboard/policebar.php" ?>
    <style>
    .ui.grid{

      margin-left: -80px;
  		margin-right: 100px;
    }
    </style>


  </head>


    <div class="ui grid">
      <div class="ui eleven  wide  column segment">



  <div class="ui header center aligned"><h3 >Total Criminals and Fir registration</h3></div>


    <div class="row md-3">
      <label class="col-sm-2 col-form-label">Total Criminals </label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo mysqli_num_rows($resultb) ?>">
            </div>
    </div><br>
       <div class="row md-3">
      <label class="col-sm-2 col-form-label" >Total Fir registration</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" value="<?php echo mysqli_num_rows($resultc)?>" >
      </div></div><br>



    <div class="col-sm-12">
  <button class="ui blue right floated  button" id="show" >view details</button></div>
</div></div>


<div class="ui basic modal">

<table class="ui striped unstackable table">
  <thead>
    <tr>
      <th>sn</th>
      <th>firID</th>
      <th>Firdate</th>
      <th>Criminal name</th>
      <th>crimetype</th>

      <tr>
      </thead>
      <tr>
        <?php $sn=1;
        while($row=$resultd->fetch_assoc()){
        ?>
        <td><?php echo $sn; ?></td>
        <td><?php echo $row['firid'] ?></td>
        <td><?php echo $row['fiirdate']?></td>
        <td><?php echo $row['criminals_name']?></td>
        <td><?php echo $row['crime'] ?></td></tr>
  <?php $sn++;}?>
</table>

</div>

<script>

$("#show").click(function(){
  $('.ui.basic.modal')
    .modal('show')

});

</script>




  </body>
  </html>
