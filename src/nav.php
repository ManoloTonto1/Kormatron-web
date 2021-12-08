<!-- Sidebar/menu -->
<nav class="sidebar" style="z-index:3;" id="mySidebar"><br>
  <div class="navbar-icon-container">
  <div>
  <a href="#" data-izimodal-open="#modal-notifications"class="navbar-icon"><i class="fa fa-envelope"></i></a>
  <span class="sidebar-tooltip"></span>
  </div>

      <a href="#" data-izimodal-open="#modal-user" class="navbar-icon margin-top"><i class="fa fa-user"></i></a>
      <a href="#" data-izimodal-open="#modal-settings" class="navbar-icon margin-top"><i class="fa fa-cog"></i></a>

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
  <script src="src/nav.js" type="text/javascript"></script>