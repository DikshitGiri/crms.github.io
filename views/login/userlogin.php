<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.css"/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.2.9/semantic.min.js"></script>
<base href="/cms/">
<style>
.form{

}
</style>
<a class="item" href="login/land">
<i class="huge home icon"></i>
home</a>
<br>




<div class="ui center aligned grid">









 <div class="ui blue left aligned five wide segment column">

  <button class=" ui white button" id="sub" > <a href="login/userregister">register </a></button> To Crime Record Management System
  <div class="ui header center aligned">
  <i class="huge icons">
      <i class="big circle outline  icon"></i>
      <i class=" user icon"></i>
    </i>
  </div>
  <form class="ui form" method="POST" action="user/loginCheck">
  <div class="field">
  <label><p> Username</p></label>
  <div class="ui right icon input focus">
  <input type="text" placeholder=" username" name="username" ><i class="ui large  black   user icon"></i>
  </div>


  <div class="field">
  <label><p>Password</p></label>
  <div class="ui right icon input focus">
  <input  type="password" placeholder="Password " name="password" ><i class="ui large lock open icon "></i>
</div><br><br>

  <div><button class="right floated ui  button" name="submit" value="submit" >login</button></div><br>
  <br><br>
  <div class="two fields">
  <div class="field">
  <div class="ui checkbox">
  <input type="checkbox" tabindex="0" class="hidden">
  <label>remember me</label>
  </div>
  </div>
  <div class="field">
  <h3 class="ui  header">Forget Password</h4>
  </div>
  </form>
  </div>

  </div>
</div>
</div>
</div>
