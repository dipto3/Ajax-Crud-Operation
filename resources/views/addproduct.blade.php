<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="addModal" tabindex="-1" aria-labelledby="addModalLabel" aria-hidden="true">
    <form action="" method="post" id="addproductform">
        @csrf
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="addModalLabel">Add Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="errormgs"></div>
            <div class="form-group">
                <label for="name">Product Name</label>
                <input type="text" name="name" id="name" class="form-control">
            </div>

            <div class="form-group">
                <label for="price">Product Price</label>
                <input type="text" name="price" id="price" class="form-control">
            </div>

            <div class="form-group">
                <label for="description">Product Description</label>
                <input type="text" name="description" id="description" class="form-control">
            </div>

              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary add_product">Save changes</button>
              </div>
            </div>
          </div>
    </form>
  </div>