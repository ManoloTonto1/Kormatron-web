<!-- import the page header -->
<?php include('src/header.html') ?>

<form action="mainmenu.php" method="post">
  <div class="imgcontainer"> 
    <img src="" alt="" class="">
  </div>

  <div class="boktor">
    <label for="uname"><b>Username</b></label>
    <input type="text" placeholder="Enter Username" name="bokkie" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="WW" required>

    <button type="submit">Login</button>
    <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label>
  </div>

  <div class="container" style="background-color:#f1f1f1"> 
    <button type="button" class="cancelbtn">Cancel</button>
    <span class="psw">Forgot <a href="#">password?</a></span>
  </div>
</form>