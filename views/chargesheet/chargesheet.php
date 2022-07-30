
<!<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<base href="/cms/">
	<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KyZXEAg3QhqLMpG8r+8fhAXLRk2vvoC2f3B09zVXn8CA5QIVfZOJ3BCsw2P0p/We" crossorigin="anonymous">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
</head>
<body><?php require_once "./views/dashboard/policebar.php"?>
	<style>
	.ui.table{
		margin-left: -100px;
	}
.mb-3{
			margin-left: -100px;
			margin-right: 100px;
	}
	</style>
		<?php $row=$result->fetch_assoc() ?>
  <p>
	<form class="ui form" method="POST" action="police/chargesheetdata">

 <div class="ui fluid container">

<table class=" ui celled striped table">


  <thead>

		<tr><th colspan="6"style="color:blue">Chargesheet</th></tr>


</thead>
	<thead>
		<tr>
			<th scope="col">FirId</th>
				<td scope="col"><input type="text" name="firid" value="<?php echo$row['firid']?>"></td>
				<th scope="col">CriminalId</th>
					<td scope="col"><input type="text" name="criminals_id" value="<?php echo$row['criminals_id']?>"></td>





		</tr>

    <tr><th colspan="6"style="color:blue">
      Complainer Details
    </th>
  </tr></thead>
  <thead>
    <tr>
      <th scope="col">Name</th>
        <td scope="col"><input type="text" name="name" value="<?php echo$row['name']?>"></td>
      <th scope="col">Mobile Number</th>
			  <td scope="col"><input type="text" name="contact" value="<?php echo$row['mobile']?>"></td>

      <th scope="col">Email</th>
						  <td scope="col"><input type="text" name="email" value="<?php echo$row['email']?>"></td>


    </tr>
  </thead>
  <thead>
    <tr><th colspan="6"style="color:blue">
      FIR Details
    </th>
  </tr></thead>
  <tbody>
    <tr>
      <th scope="row">Police Station</th>
    	<td scope="col"><input type="text" name="policestation" value="<?php echo$row['policestation']?>"></td>
      <th>Crime Type</th>
      <td scope="col"><input type="text" name="crime" value="<?php echo$row['crime']?>"></td>
      <th scope="col">Name of Accused</th>
      <td scope="col"><input type="text" name="criminals_name" value="<?php echo$row['criminals_name']?>"></td>
    </tr>
   <tr>

      <th>Location of Crime</th>
      <td scope="col"> <input type="text" name="place_of_incident" value="<?php echo$row['place_of_incident']?>"></td>


      <th scope="row">time of incident</th>
      <td scope="col"> <input type="text" name="date_of_incident" value="<?php echo$row['date_of_incident']?>"></td>
      <th>Details of crime</th>
      <td scope="col"> <input type="text" name="incident_details" value="<?php echo$row['incident_details']?>"></td>

    </tr>

    </tbody>
</table>
</div>

 <p>
 <div class=" ui header aligned center" ><h5 style="color:red">Fill Chargesheet Detail(Only for Officer):</h5></p>
</div>


<div class="mb-3">
  <label  class="form-label">Section of Law:</label>
  <input type="text" class="form-control"  placeholder="Section of law" name="section_of_law">
  <label  class="form-label">Name of Investigation Officer:</label>
  <input type="text" class="form-control"   name="investigation_police" value="<?php echo$row['police']?>">
</div>
<div class="mb-3">
  <label  class="form-label">Investigation Details</label>
  <textarea class="form-control" rows="3" placeholder="Investigation Details" name="investigation_details"></textarea>
</div>
<div class="mb-3">
  <label  class="form-label">Remarks</label>
  <textarea class="form-control"  rows="3" placeholder="remarks" name="remarks"></textarea>
</div>
</div>
<button type="submit" class="btn btn-primary" name="submit" value="Submit">Submit</button></div>
</from>
</body>
</html>
