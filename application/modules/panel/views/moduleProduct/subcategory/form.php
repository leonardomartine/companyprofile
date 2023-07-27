<div class="modal fade" id="modal-form-productSubCategory" data-backdrop="static" data-keyboard="false">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title pull-left">Sub Category</h5>
      </div>
      <div class="spinner">
        <div class="lds-hourglass"></div>
      </div>
      <div class="modal-body">
        <form id="form-productSubCategory" enctype="multipart/form-data">
			<input type="hidden" name="id" class="subcategory_id" readonly/>

          <div class="form-group">
            <label required>Name</label>
            <input type="text" name="name" class="form-control subcategory-name" maxlength="100" style="text-transform: capitalize;" placeholder="Name" required>
            <i class="form-group__bar"></i>
          </div>


			<div class="form-group">
				<label required>Category</label>
				<div class="select">
					<select name="product_category_id" class="form-control subcategory-product_category_id">
						<option value="">(Empty)</option>
						<?php
						if (count($data_category) > 0) {
							$category = '';
							foreach ($data_category as $index => $item) {
								$selected = (isset($data->product_category_id) && $data->product_category_id == $item->id) ? 'selected' : '';
								$category .= '<option value="'.$item->id.'" '.$selected.'>'.$item->name.'</option>';
							};
							echo $category;
						};
						?>
					</select>
					<i class="form-group__bar"></i>
				</div>
			</div>

			<div class="form-group">
				<label required>Image</label>
				<div class="upload">
					<div class="upload-button">
						<input type="file" name="image" class="upload-pure-button subcategory-image" data-preview="image"/>
					</div>
					<div class="upload-preview preview-image">
					</div>
				</div>
			</div>

          <small class="form-text text-muted">
            Fields with red stars (<label required></label>) are required.
          </small>

        </form>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-success btn--icon-text subcategory-action-save">
          <i class="zmdi zmdi-save"></i> Save
        </button>
        <button type="button" class="btn btn-light btn--icon-text subcategory-action-cancel" data-dismiss="modal">
          Cancel
        </button>
      </div>
    </div>
  </div>
</div>
