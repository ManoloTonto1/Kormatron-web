<!-- import the page header -->
<?php include('../src/header.php') ?>
<?php include('db/connectdb.php') ?>
<?php include('db/scripts.php') ?>
<?php include('lang/translate.php') ?>
<?php session_start(); ?>
<?php 
      if($_SESSION['language'] == "nl"){
        include('lang/dutch.php'); 
      }
      else{
        include('lang/english.php'); 
      }
      ?>


<body>

<!-- Top container -->
<div class="w3-bar w3-top w3-black w3-large" style="z-index:4">
  <button class="w3-bar-item w3-button w3-hide-large w3-hover-none w3-hover-text-light-grey" onclick="open_nav();"><i class="fa fa-bars"></i>  Menu</button>
  <a href="#" data-izimodal-open="#modal-notifications"class="icon"><i class="fas fa-clipboard-list"></i></a>
  <span class="w3-bar-item w3-right"><img class="logo"src="img/logo.png" alt="logo"></span>
</div>


<?php include('nav.php') ?>

<!-- !PAGE CONTENT! -->
<div class="w3-main main" style="margin-top:43px;">

  <!-- Header -->
  <header class="w3-container" style="padding-top:22px">
    <h5><b><i class="fa fa-dashboard"></i> My Dashboard</b></h5>
  </header>
<?php include('settings.php');
      include('user.php');
      include('notifications.php');
?>

<!--body-->
<div class="table-div">
<?php include('../src/table.php');?>
</div>





<!-- Footer -->
<?php include 'footer.php'; ?>
  <!-- End page content -->
</div>

</body>
</html>




