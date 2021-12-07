    <!-- Modal structure -->
    <div id="modal-user" data-iziModal-title="<?php echo $lang['preferences']?>" data-iziModal-icon="fas fa-user-cog"
      data-iziModal-headerColor="#252833" data-iziModal-background="#2f3241">
      <section class="hide modal-body">
        <form action="" method="post" id="user-form">
          <div id="modal-input-container">
            <div class="modal-label"><?php echo $lang['name']?>:</div>
            <input class="modal-input pointer" readonly type="text" placeholder="<?php echo $lang['name']?>" name="name">
            <div class="modal-label"><?php echo $lang['last_name']?>:</div>
            <input class="modal-input pointer" readonly type="text" placeholder="<?php echo $lang['last_name']?>" name="last_name">
          </div>
          <div id="password-container" class="password-container">
          <div class="modal-label"><?php echo $lang['new_password']?>:</div>
            <input class="modal-input" type="text" placeholder="<?php echo $lang['new_password']?>" name="new_password">
          </div>
        </form>


        <footer>
          <button id="user_submit" class="modal-btn" name="submit"><i class="fas fa-save"></i> <?php echo $lang['save']?></button>
          <a href="src/db/Logout.php" id="logout" class="modal-btn modal-btn-right"><i class="fas fa-sign-out-alt"></i> <?php echo $lang['logout'] ?></a>
          <button id="change_password" class="modal-btn modal-btn-right"><i class="fas fa-unlock-alt"></i> <?php echo $lang['change_password'] ?></button>
        </footer>

      </section>
    </div>

    <script>
      $(document).ready(function () {
        $('#change_password').click(function (e) { 
          e.preventDefault();
          $('#password-container').slideToggle();
        });
        
      });
    </script>