<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">

<style>
.row{
  margin-top:3px;
}
.item{
  margin-top:20px;
}
</style>


<div class="ui  blue top fixed inverted menu  ">

  <a class=" active item">
    <i class="ui large home icon"></i>
    Home
  </a>
  <a class="item">
    Messages
  </a>
  <a href="User/logout"class="item">
   logout
  </a>



</div><br><br><br><br>



  <div class="ui left thin blue inverted visible sidebar vertical  menu ">

    <a class="item">
      <i class="huge icons">
        <i class="big circle outline icon"></i>
        <i class="user secrete icon"></i>
      </i>

    welcome Admin
    </a>



   <div class="row">
    <div class="ui dropdown item">
       <i class="dropdown icon"></i>
      Police Station
       <div class="menu">
         <div class="header">action</div>
         <a href="police/addstation" class="item">Add Station</a>
         <a href="police/managestation" class="item">Manage Station</a>

       </div>
     </div></div>








   <div class="row">
     <div class="ui dropdown item">
        <i class="dropdown icon"></i>
        Crime Category
        <div class="menu">
          <div class="header">action</div>
          <a href="admin/addcategory"class="item">Add Category</a>
          <a class="item">Manage Category</a>

        </div>
      </div>
    </div>

    <div class="row">
      <div class="ui dropdown item">
         <i class="dropdown icon"></i>
          police
         <div class="menu">
           <div class="header">Action</div>
           <a class="item" href="./police/addpolice">Add Police</a>
           <a class="item" href="./police/Index">Manage Police</a>

         </div>
       </div>
     </div>


<a href="./Admin/viewcriminals"class="item">
      <i class="ui users icon"></i>
      view criminals
    </a>

    <a href="./police/allfirstatus" class="item">
          <i class="file outline icon"></i>
          View Fir
        </a>

        <a href="admin/reportforadmin" class="item">
              <i class="folder outline icon"></i>
              Report
            </a>
            <div class="ui dropdown item">
               <i class="dropdown icon"></i>
          search
               <div class="menu">

                  <a href="admin/criminalsearchbyadmin" class="item" >criminals search</a>

                 <a href="admin/firsearchbyadmin" class="item">fir search</a>

               </div>
             </div>
  </div>
</div>
</div>








<div class="ui container">

         <div class="ui basic segment">















    <script>

  $('.ui.sidebar').sidebar('');


    $('.ui.dropdown')
      .dropdown({

      })
    ;

    </script>
