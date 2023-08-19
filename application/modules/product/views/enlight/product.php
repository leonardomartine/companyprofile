<style type="text/css">
  .product-title {
    -webkit-box-orient: vertical;
    display: -webkit-box;
    -webkit-line-clamp: 2;
    overflow: hidden;
    text-overflow: ellipsis;
    white-space: normal;
    height: 45px;
  }

  .card-panel {
    margin-bottom: 20px;
    position: relative;
    /* Add position relative to the panel */
  }

  .card-image {
    max-width: 100%;
    height: auto;
  }

  .panel-heading {
    padding: 0;
    /* Remove default padding to make room for the image */
  }

  .panel-heading .panel-title {
    padding: 10px;
    /* Add padding to the panel title for spacing */
  }

  .button-container {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 10px;
    /* Add some margin to separate the span and the button */
  }

  .stock-info {
    font-size: 12px;
    float: left;
  }

  .custom-btn {
    font-size: 12px;
    float: right;
    background-color: transparent;
    /* Set background color to transparent */
    padding: 5px 10px;
    border: 1px solid green;
    /* Add a border */
    border-radius: 4px;
    text-decoration: none;
    transition: border-color 0.3s;
    border-radius: 20px;
    /* Add a smooth transition effect for border color */
  }

  .custom-btn:hover {
    background-color: green;
    color: white;
    /* Change the border color on hover */
  }
</style>

<!-- <section class="probootstrap-section" style="padding-top: 0px; padding-bottom: 0px;">
  <?php if (count($data) > 0) : ?>
    <div class="row">
      <?php foreach ($data as $item) : ?>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a href="<?php echo base_url('product/' . $item->product_category_id . '/' . $item->product_sub_category_id . '/' . $item->link) ?>" class="probootstrap-featured-news-box">
            <figure class="probootstrap-media">
              <img src="<?php echo base_url($item->image1) ?>" alt="<?php echo $item->name ?>" class="img-responsive" style="width: 100%; height: 250px; object-fit: cover;">
            </figure>
            <div class="probootstrap-text">
              <div style="height: 80px; overflow: hidden;">
                <h3 class="product-title"><?php echo $item->name ?></h3>
                <span style="color: #ff6b68;">Stock </span>
                <span style="float: right; font-size: 12px;"><?php echo ($item->sold_out <= $item->stock) ? 'Tersedia' : 'Kosong' ?></span>
              </div>
            </div>
          </a>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else : ?>
    <div class="nothing-found">
      <div>No data found</div>
    </div>
  <?php endif; ?>

  <div class="text-center probootstrap-animate">
    <?php echo $pagination ?>
  </div>
</section> -->

<div style="text-align: center;">
  <p class="titleProd" style="font-size: large; line-height: 1;">PRODUCTS</p>
  <p class="titleProd" style="margin-top: -10px; font-size:xx-large; color: red; font-weight: bold;"><?php echo $item->name ?></p>
  <br>
</div>

<section class="probootstrap-section" style="padding-top: 0px; padding-bottom: 0px;">
  <?php if (count($data) > 0) : ?>
    <div class="row">
      <?php foreach ($data as $item) : ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="panel panel-default card-panel" style="border-radius: 20px;">
            <div class="panel-heading ">
              <img src="<?php echo base_url($item->image1) ?>" alt="<?php echo $item->name ?>" class="card-image" style="border-radius: 20px;">
              <!-- <img src="/application/modules/product/fish.jpg" alt="Fish" class="card-image"> -->
            </div>
            <div class="panel-body" style="text-align: center;">
              <h3 class="panel-title"><?php echo $item->name ?></h3>
              <p>This is the content of the card with an image. It can be short or long, and the card width will adjust based on the content length.</p>
              <!-- <span style="float: left; font-size: 12px;"><?php echo $item->stock ?> Fishes</span>
              <a href="<?php echo base_url('product/' . $item->product_category_id . '/' . $item->product_sub_category_id . '/' . $item->link) ?>" class="custom-btn">
                <span style="float: right; font-size: 12px;"><?php echo ($item->sold_out <= $item->stock) ? 'Stock Available' : 'Out Of Stock' ?></span>
              </a> -->
              <div class="button-container">
                <span class="stock-info"><?php echo $item->stock ?> Fishes</span>
                <a href="<?php echo base_url('product/' . $item->product_category_id . '/' . $item->product_sub_category_id . '/' . $item->link) ?>" class="custom-btn">
                  <span class="stock-status"><?php echo ($item->sold_out <= $item->stock) ? 'Stock Available' : 'Out Of Stock' ?></span>
                </a>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  <?php else : ?>
    <div class="nothing-found">
      <div>No data found</div>
    </div>
  <?php endif; ?>

  <div class="text-center probootstrap-animate">
    <?php echo $pagination ?>
  </div>
</section>