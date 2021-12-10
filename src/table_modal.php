
<!-- Modal structure -->
<div id="modal<?php echo $i['id']?>" data-iziModal-title="Toilet Info" data-iziModal-icon="fas fa-clipboard-list"
  data-iziModal-headerColor="#252833" data-iziModal-background="#2f3241">
  <section class="hide modal-body">
    <form action="" method="post" id="product-form">
      <div id="modal-input-container">
                      <span class="bold"><?php echo $lang['toilet_id'].": ";?></span><?php echo $i['id'];?> <br>
                      <span class="bold"><?php echo $lang['toilet_floor'].": ";?></span><?php echo change_floor($i['location']);?> <br>
                    <span class="bold"><?php echo $lang['toilet_type'].": ";?></span><?php echo change_type($i['type']);?><br>
                    <span class="bold"><?php echo $lang['toilet_time'].": ";?></span><?php echo todate(strtotime($i['time']));?><br>
                    <span class="bold"><?php echo $lang['toilet_status'].": ";?></span><?php echo change_status($i['status']);?><br>
        <div id="atribute-container"></div>
      </div>
    </form>


    <footer>
      <button id="add_queue<?php echo $i['id']?>" class="modal-btn" name="submit"><?php echo $lang['toilet_add']?> <i class="fas fa-plus"></i></button>

    </footer>

  </section>
</div>

