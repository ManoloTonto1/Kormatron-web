<!-- import the page header -->
<?php include('src/header.html') ?>
<?php include ('src/mainmenu.php') ?>
 
<form action="mainmenu.php" method="post">
  <div class="imgcontainer"> 
    <img src="" alt="" class="">
  </div>

  <div class="uname-password">
  <img class="login-image" src="src/img/logoKormaTron.png" alt="logo">
  <div class="login-slider">
  <label class="switch">
  <input type="checkbox">
  <span class="slider round"></span>
</label>
</div>
  <br>
    <label class="login-label" for="uname"><b>Username</b></label>
    <br>
    <input class="login-input" type="text" placeholder="Enter Username" name="bokkie" required>
    <br>
    <label class="login-label" for="psw"><b>Password</b></label>
    <br>
    <input class="login-input" type="password" placeholder="Enter Password" name="WW" required>
    <br>
    <br>
    <br>
    <button class="login-button" type="submit">Login</button>
    <label>
      <input class="remember-me" type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>
</form>


  <div class="container" style="background-color:#f1f1f1"> 
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>

<script>

</script>
