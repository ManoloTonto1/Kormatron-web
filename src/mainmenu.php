<!-- import the page header -->
<?php include('src/header.html') ?>

<body>

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="open_nav();"><i class="fa fa-bars"></i>  Menu</button>
  <span class="w3-bar-item w3-right"><img class="logo"src="src/img/logo.png" alt="logo"></span>
</div>


<?php include('src/nav.php') ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:300px;margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>
<?php include('src/settings.php');
      include('src/user.php');
      include('src/notifications.php');
?>

<!-- Footer -->
<?php include 'src/footer.php'; ?>
  <!-- End page content -->
</div>

</body>
</html>




