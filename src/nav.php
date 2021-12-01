<!-- Sidebar/menu -->
<nav class=" sidebar w3-animate-left" style="z-index:3;width:300px;" id="mySidebar"><br>
  <div class="w3-container w3-row">
    <div class="w3-col s4">
      <img src="/w3images/avatar2.png" class="w3-circle w3-margin-right" style="width:46px">
    </div>
    <div class="w3-col s8 w3-bar">
      <span>Welcome, <strong><?php echo($_SESSION[Name]);?></strong></span><br>
      <a href="#" data-izimodal-open="#modal-notifications"class="navbar-icon"><i class="fa fa-envelope"></i></a>
      <a href="#" data-izimodal-open="#modal-user" class="navbar-icon"><i class="fa fa-user"></i></a>
      <a href="#" data-izimodal-open="#modal-settings" class="navbar-icon"><i class="fa fa-cog"></i></a>
    </div>
  </div>
  <hr>
  <div class="w3-container">
    <h5>Dashboard</h5>
  </div>
  <div class="w3-bar-block">
    <a href="#" class="w3-bar-item w3-button w3-padding-16 w3-hide-large w3-dark-grey w3-hover-black" onclick="close_nav()" title="close menu"><i class="fa fa-remove fa-fw"></i>  Close Menu</a>
    <a href="#" class="navbar-btn"><i class="fa fa-users fa-fw"></i>  Overview</a>
    <a href="#" class="navbar-btn"><i class="fa fa-eye fa-fw"></i>  Views</a>
    <a href="#" class="navbar-btn"><i class="fa fa-users fa-fw"></i>  Traffic</a>
  </div>
</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="close_nav()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- start the modals -->
<script>
  $(document).ready(function () {
    $('#modal-settings').iziModal();
    $('#modal-user').iziModal();
    $('#modal-notifications').iziModal();

  });
  </script>