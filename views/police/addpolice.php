


<?php
require_once "views/dashboard/adminbar.php";

 ?>






  <html>
  <head>
  	<meta charset="utf-8">


    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
  		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <base href="/cms/">
    <?php require_once "./views/dashboard/adminbar.php" ?>
    <style>
    .ui.grid{

      margin-left: -80px;
  		margin-right: 100px;
    }
    </style>

  </head>


    <div class="ui grid">
      <div class="ui eleven  wide  column segment">



  <div class="ui header center aligned"><h3 > Add Police </h3></div>

  <form class="ui form" method="POST" action="./police/InsertData">
    <div class="row md-3">
      <label class="col-sm-2 col-form-label"> Id</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="police_id"  >
      </div>
    </div><br>

    <div class="row md-3">
          <label class="col-sm-2 col-form-label" >Department</label>
      <div class="col-sm-10">
      <input type="text" class="form-control" name="police_department" >
</div></div><br>

       <div class="row md-3">
      <label class="col-sm-2 col-form-label" >Name</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" name="police_name" >
      </div></div><br>



  <div class="row md-3">
        <label class="col-sm-2 col-form-label" >Email</label>
    <div class="col-sm-10">
    <input type="text" class="form-control" name="email" >
</div>
</div><br>

<div class="row md-3">
      <label class="col-sm-2 col-form-label" >Contact</label>
  <div class="col-sm-10">
  <input type="text" class="form-control" name="contact" >
</div>

     </div><br>

     <div class="row md-3">
           <label class="col-sm-2 col-form-label" >policestation</label>
       <div class="col-sm-10">
         <select name="station">

           <?php while($row=$result6->fetch_assoc()){?>
             <option value="<?php echo $row['station_id']?>"> <?php echo $row['station_name'] ?></option>
           <?php } ?>
         </select>

     </div>

   </div><br>





    <div class="col-sm-12">
  <button class="ui blue right floated  button  " type="submit" name="submit">Add</button></div>

  </form>
  </body>
  </html>
