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

  .custom-btn {
    background-color: white;
    /* Set initial background color */
    border: none;
    color: #333;
    /* Set text color */
    transition: background-color 0.3s;
    /* Smooth transition for background color */
    padding: 12px 20px;
    /* Increase padding to make the background a bit bigger */
    border-radius: 5px;
    /* Add border radius for a slightly rounded look */
  }

  .custom-btn:hover {
    background-color: #1F95D2;
    /* Change background color on hover */
    border: none;
    color: #fff;
    /* Change text color on hover */
    text-decoration: none;
  }

  .titleProd {
    margin-top: 0;
  }
</style>

<!-- <section class="probootstrap-section" style="padding-top: 0px; padding-bottom: 0px;">
  <?php if (count($data) > 0) : ?>
    <div class="row">
      <?php foreach ($data as $item) : ?>
        <div class="col-md-4 col-sm-6 col-xs-6 col-xxs-12 probootstrap-animate">
          <a href="<?php echo base_url('product/' . $item->product_category_id . '/' . $item->id) ?>" class="probootstrap-featured-news-box">
            <figure class="probootstrap-media">
              <img src="<?php echo base_url($item->image) ?>" alt="" class="img-responsive" style="width: 100%; height: 250px; object-fit: cover;">
            </figure>
            <div class="probootstrap-text">
              <div style="height: 80px; overflow: hidden;">
                <h3 class="product-title"><?php echo $item->name ?></h3>
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
  <p class="titleProd" style="margin-top: -10px; font-size:xx-large; color: red; font-weight: bold;"><?php echo $item->product_category_id ?></p>
  <br>
</div>

<section class="probootstrap-section" style="padding-top: 0px; padding-bottom: 0px;">
  <?php if (count($data) > 0) : ?>
    <div class="row">
      <?php foreach ($data as $item) : ?>
        <div class="col-xs-12 col-sm-6 col-md-4">
          <div class="panel panel-default card-panel">
            <div class="panel-heading">
              <img src="<?php echo base_url($item->image) ?>" alt="<?php echo $item->name ?>" class="card-image">
              <!-- <img src="/application/modules/product/fish.jpg" alt="Fish" class="card-image"> -->
            </div>
            <div class="panel-body" style="text-align: center;">
              <h3 class="panel-title"><?php echo $item->name ?></h3>
              <p>This is the content of the card with an image. It can be short or long, and the card width will adjust based on the content length.</p>
              <a href="<?php echo base_url('product/' . $item->product_category_id . '/' . $item->id) ?>" class="custom-btn">
                See All
                <i class="fa fa-arrow-up" aria-hidden="true"></i>
              </a>
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