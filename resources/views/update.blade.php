<!-- Button trigger modal -->

  
  <!-- Modal -->
  <div class="modal fade" id="updateModal" tabindex="-1" aria-labelledby="updateModalLabel" aria-hidden="true">
    <form action="" method="POST" id="updateproductform">
        @csrf
        <input type="hidden" id="up_id">
        <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title" id="updateModalLabel">Edit Product</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="errormgs"></div>
                <div class="form-group mt-2">
                <label for="">Product Name</label>
              
                <input type="text" class="form-control" name="up_name" id="up_name">
                </div>
                <div class="form-group mt-2">
                    <label for="">Price</label>
                  
                    <input type="text" class="form-control" name="up_price" id="up_price">
                    </div>
                    <div class="form-group mt-2">
                        <label for="">Description</label>
                      
                        <input type="text" class="form-control" name="up_description" id="up_description">
                        </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary update_product">Update Product</button>
              </div>
            </div>
          </div>
    </form>
  </div>