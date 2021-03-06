<!-- Sidebar/menu -->
<nav class="sidebar" style="z-index:3;" id="mySidebar"><br>
  <div class="navbar-icon-container">
  <div>
  <a id="todo" href="#" data-izimodal-open="#modal-notifications"class="navbar-icon notif"><i class="fas fa-clipboard-list"></i></a>
  <span class="tooltip-txt"><?php echo $lang['todo']?></span>
  <span class="sidebar-tooltip"></span>
  </div>

      <a href="#" data-izimodal-open="#modal-user" class="navbar-icon margin-top"><i class="fa fa-user"></i></a>
      <span class="tooltip-txt"><?php echo $lang['user']?></span>

  </div>



</nav>


<!-- Overlay effect when opening sidebar on small screens -->
<div class="w3-overlay w3-hide-large w3-animate-opacity" onclick="close_nav()" style="cursor:pointer" title="close side menu" id="myOverlay"></div>
<!-- start the modals -->
<script>
  $(document).ready(function () {
    //$('#modal-settings').iziModal();
    $('#modal-user').iziModal();
    $('#modal-notifications').iziModal();
    $('#todo').click(function (e) { 
      
       $( "#notif_table" ).load( "notifications_table.php" );
   
      
    });
    $('#todo2').click(function (e) { 
      
      $( "#notif_table" ).load( "notifications_table.php" );
  
     
   });

  });
  </script>
  <script src="nav.js" type="text/javascript"></script>