    <!-- Modal structure -->
    <div id="modal-user" data-iziModal-title="User Preferences" data-iziModal-icon="fa fa-diamond"
      data-iziModal-headerColor="#252833" data-iziModal-background="#2f3241">
      <section class="hide modal-body">
        <form action="" method="post" id="product-form">
          <div id="modal-input-container">
            <input id="product-name" class="modal-input" type="text" placeholder="Product Name" name="product_name">
            <input id="product-category" class="modal-input" type="text" placeholder="Catergory" name="category">
            <div id="atribute-container"></div>
          </div>
        </form>


        <footer>
          <button id="submit-product" class="modal-btn" name="submit">Save</button>
          <button id="add-atribute" class="modal-btn modal-btn-right"><i class="fas fa-plus"></i> New atribute</button>
        </footer>

      </section>
    </div>