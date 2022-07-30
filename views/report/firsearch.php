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
      <form class="ui form "method="POST" action="admin/firdata">



<div class="ui header center aligned"><h3 >search</h3></div>


  <div class="row md-3">
    <label class="col-sm-2 col-form-label">firID </label>
    <div class="col-sm-10">
      <input type="text" class="form-control" name="firid">
          </div>
  </div><br>

    <button class="ui green button" value="submit" name="submit">search</button>
</form>

  </div></div>
