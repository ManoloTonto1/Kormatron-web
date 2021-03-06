    <!-- Modal structure -->
    <div id="modal-user" data-iziModal-title="<?php echo $lang['preferences'] ?>" data-iziModal-icon="fas fa-user-cog" data-iziModal-headerColor="#252833" data-iziModal-background="#2f3241">
      <section class="hide modal-body">
        <form action="" method="post" id="user-form">
          <div id="modal-input-container">
            <div class="modal-label"><?php echo $lang['name'] ?>:</div>
            <input class="modal-input pointer" readonly type="text" name="name" value="<?php echo $_SESSION['first_name'] ?>">
            <div class="modal-label"><?php echo $lang['last_name'] ?>:</div>
            <input class="modal-input pointer" readonly type="text" name="last_name" value="<?php echo $_SESSION['last_name'] ?>">
          </div>
          <div id="password-container" class="password-container">
            <div class="modal-label"><?php echo $lang['new_password'] ?>:</div>
            <input class="modal-input" type="password" placeholder="<?php echo $lang['new_password'] ?>" name="new_password" id="new_password" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required>
          </div>
        </form>


        <footer>
          <button type="submit" form="user-form" id="user_submit" class="modal-btn" name="submit"><i class="fas fa-save"></i> <?php echo $lang['save'] ?></button>
          <a href="db/Logout.php" id="logout" class="modal-btn modal-btn-right"><i class="fas fa-sign-out-alt"></i> <?php echo $lang['logout'] ?></a>
          <button id="change_password" class="modal-btn modal-btn-right"><i class="fas fa-unlock-alt"></i> <?php echo $lang['change_password'] ?></button>
        </footer>

      </section>
    </div>

    <script>
      $(document).ready(function() {
        $('#change_password').click(function(e) {
          e.preventDefault();
          $('#password-container').slideToggle();
        });

        $("#user_submit").click(function(e) {
          var new_password = document.getElementById('new_password');
          e.preventDefault();
          $.ajax({
            type: "POST",
            url: "db/change_pass.php",
            data: ({
              "new_pass": $("input[name='new_password']").val(),
            }),

            success: function(response) {
              console.log(response);
              if (response.includes(true)) {

                iziToast.success({
                  title: 'OK',
                  message: '<?php echo $lang['password_change'] ?>',
                });
                iziToast.info({
                  title: '<?php echo $lang['password_change_logging'] ?>',
                  message: '<?php echo $lang['password_change_comment'] ?>',
                });
                setTimeout(function() {
                  window.location.href = "db/Logout.php";
                }, 5000);
              } else {
                iziToast.error({
                  title: 'Error',
                  message: '<?php echo $lang['password_change_error'] ?>',
                });

              }

            }
          });
        });

      });
    </script>