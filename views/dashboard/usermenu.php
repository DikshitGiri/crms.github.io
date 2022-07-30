
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">
  <div class="ui top fixed blue inverted  menu"  >


      <a class="item" id="tog">
        <i class="large sidebar icon" ></i>
        Menu
      </a>
      <a class="active item">
        Home
      </a>
      <a id="notify" class="item">
        <?php require_once "services/config.php";
        $conn=config::getConnection();
        $sql="SELECT COUNT(firid) as num FROM fir WHERE uid=".$_SESSION['userid']. " AND status IN('Accept','Reject')";

         $result=$conn->query($sql);
    $count=$result->fetch_assoc();

         echo $count['num'];




        ?>
      <i class="large bell icon" > </i>

        New Message
      </a>
      <a href="User/logout" class="item">
      <i class=""></i>
      logout
      </a>
    </div><br><br><br><br>




  <div class="ui bottom attached segment pushable">
  <div class="ui left blue inverted small sidebar vertical  menu ">
  <a class="item">
  <i class="huge icons">
    <i class="big circle outline icon"></i>
    <i class="user icon"></i>
  </i>
<?php echo $_SESSION['username'] ?>
</a>

  <br><br><br>
      <a class="item">
        <i class="large home icon"></i>
        Home
      </a><br>
      <a href="./User/firform" class="item" >
        <i class=" large edit outline icon"></i>
        Fir Form
      </a><br>
      <a href="User/usersearch" class="item">
        <i class="large open folder icon"></i>
    Fir History
  </a><br>
      <a  href="User/chargesheet" class="item">
        <i class="large file outline icon"></i>
        Charge Sheet
      </a><br>

    </div>

    <div class="pusher">
      <div class="ui basic segment">
        <h1 class="ui header"><i class=" massive handshake icon"></i> Lets Wipe Out These Crimes Together </h1>





<p> <div class="ui three doubling cards">

  <div class="card">
    <div class="image">
      <img class="ui  right floated image"
       img src="../images/bul.jpg"/>
    </div>
  </div>
  <div class="card">
    <div class="image">
      <img class="ui small left floated image"
       img src="../images/hacker1.png"/>
    </div>
  </div>
  <div class="card">
    <div class="image">
      <img class="ui small left floated image"
       img src="../images/bg.jpg"/>
    </div>
  </div>

</div></p>
<p>
  <div class="ui inverted blue segment">
  <div class="ui active inverted placeholder">
    <div class="image header">
      <div class="line"><h1>What is a crime</h1>A crime is a deliberate act that causes physical or psychological harm, damage to or loss of property, and is against the law.

There are lots of different types of crime and nearly everyone will experience a crime at some point in their lives. One in five people were affected by crime last year; the equivalent of ten million people. It affects people from all backgrounds, locations and ages; more than one in ten children have been a victim of crime in the past year.</div>
      <div class="line"></div>
    </div><br>
    <div class="paragraph">
      <div class="line"><h1>Tips to avoid crime</h1><li>Trust yourself. </li>
      <li>Be aware of your surroundings</li>
      <li>Pay attention to the people around you</li>
      <li>Act confident and focused</li>
      <li>Understand that alcohol or drugs can cloud judgment</li>
    </div>

    </div>
  </div>
</div>
</p>
<p>

<div class="ui inverted green segment">
  <div class="ui active inverted placeholder">
    <div class="image header">
      <div class="line"><h1>Crime Record Management System CRMS </h1></div><br>
      <div class="line"><h3>Here's how our system will  help you</h3></div>
    </div>
    <div class="paragraph">
      <div class="line"><p><div class="ui two column grid">
      <div class="column">
      <div class="ui raised segment">
      <a class="ui red ribbon label">Register </a>
      <span>Account Details</span>
      <p>Provide Your Detils Required By The System In Order To Be The Registered User.</p>

      </div>
      </div>
      <div class="column">
      <div class="ui segment">
      <a class="ui orange right ribbon label">Login</a>
      <span>Registered Details</span>
      <p>Once You Register Into System You Can Now  Log Into the System Whenever You Like Or Needed</p>

      </div>
      </div>
      </div>
    </p></div><br>
      <div class="line">When You Are Done Registration And Login You Can Submit Your Fir To Be Responded In Time <br><br>
      You Can Submit your Fir and Other Dtails Scrolling Menu On Your Left.<br><br> <div><i class=" large arrow left icon"></i></div></div>
      <br><div class="line"> Submit your details and interact with the system further we are here for you </div>
    </div>
  </div>
</div>
</p>


<p>

</p>
      </div>
    </div>
  </div>

  <div class="ui small modal">
<div class="ui header center aligned"><h1>Fir Id</h1></div>
    <?php require_once "services/config.php";
    $conn=config::getConnection();
    $sql="SELECT firid from fir WHERE uid=".$_SESSION['userid'];
    $result8=$conn->query($sql);?>
<?php while($row=$result8->fetch_assoc()){ ?>
<div class="ui header center aligned"><h1><?php echo "-". $row['firid']."<br />" ; ?></h1></div>
<?php } ?>
</div></div></div>

<script>
$('#tog').click(function(){
  $('.ui.sidebar').sidebar('toggle');
});
$('#notify').click(function(){
  $('.ui.small.modal').modal('show');
});
</script>
