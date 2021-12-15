<!-- import the page header -->
<?php include('src/header.php') ?>
  <main id="swup" class="transition-fade">
<form action="src/mainmenu.php" method="post">


  <div class="uname-password">
  <img class="login-image" src="src/img/logoKormaTron.png" alt="logo">
  <div class="login-slider">
  <label class="switch">
  <input type="checkbox">
  <span class="slider round"><span class="flag">🇳🇱</span></span>
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
    <button id="login-btn"class="login-button" type="submit">Login</button>
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
</main>
<script>
  const swup = new Swup();  // Initialize swup

</script>
