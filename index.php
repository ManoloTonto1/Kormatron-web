<!-- import the page header -->

<?php include('src/header.php') ?>
<main id="main-login">

  <form>

    <div class="uname-password">
      <img class="login-image" src="src/img/logoKormaTron.png" alt="logo">

      <br>
      <div class='login-div'>
        <label class="login-label"><b>Username</b></label>
        <input class="login-input" id="username" type="text" placeholder="Enter Username" name="username" required>

        <label class="login-label"><b>Password</b></label>
        <input class="login-input" id="password" type="password" placeholder="Enter Password" name="password" required>
      </div>
      <button id="login-btn" class="login-button" type="submit">Login</button>
      <!--choose language -->
      <div class="login-div">
      <label id="english" class="language-check">🇬🇧
        <input name="lang" type="radio" checked="checked" value="en">
        <span class="checkmark"></span>
      </label>

      <label id="dutch" class="language-check">🇳🇱
        <input name="lang" type="radio" value="nl">
        <span class="checkmark"></span>
      </label>
      </div>
      
    </div>
  </form>

</main>

<script>
  $(document).ready(function() {
    $("#login-btn").click(function(e) {
      e.preventDefault();
      doLogin();
    });

    function doLogin() {
      var username = $("#username").val();
      var password = $("#password").val();
      $.ajax({
        type: "POST",
        url: "src/db/login_code.php",
        data: ({
          "username": username,
          "password": password,
          "lang": $("input[name='lang']:checked").val()
        }),
        success: function(response) {
          if (response.includes(true)) {
            window.location.replace("src/mainmenu.php");
          } else {

            iziToast.error({
              title: 'Error',
              message: 'Login failed',
            });

          }
        }

      });
    }

  });
</script>
<style>
  body {
    background: rgb(3, 119, 187);
    background: linear-gradient(90deg, rgba(3, 119, 187, 1) 0%, rgba(47, 50, 65, 1) 50%, rgba(3, 119, 187, 1) 100%);

  }

  html {
    height: 100%;
  }
</style>