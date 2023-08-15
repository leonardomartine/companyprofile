<style>
    .custom-card {
        background: #FBFBFB;
        border: 1px solid #ddd;
        border-radius: 10px;
        margin-bottom: 10px;
        display: flex;
        align-items: center;
        padding: 10px;
    }

    .custom-card .card-icon {
        color: black;
        font-size: 30px;
        margin-top: -10px; /* Adjust the icon position */
        margin-right: 15px;
    }

    .custom-card .card-title {
        margin: 0;
        font-size: 18px;
        color: black;
        font-family: 'Montserrat', sans-serif;
    }

    .card-body {
        padding: 0;
    }

    .card-text {
        color: black;
        padding: 8px 0;
        font-size: 14px;
    }
</style>


<div class="container">
    <div style="text-align: center;">
      <h2>Contact Us</h2>
      <h1 style="color: #EC2125; font-family: Monstreat;">Lorem Ipsum</h1>
    </div>
<div class="row">
  <div class="col-md-6 col-xs-12 probootstrap-animate">
    <a href="https://www.google.com/maps/search/<?php echo str_replace('<br/>', ' ', $app->contact->address) ?>" target='_blank'>
    <img class="img-thumbnail img-map" style="width: 100%; height:80%; object-fit: cover;" src="<?php echo base_url($app->contact->img_map) ?>" />
    </a>
  </div>

  
<div class="col-md-6 col-xs-12 probootstrap-animate">

<!-- Email Card -->
<div class="card custom-card">
    <div class="card-icon">
        <i class="fa fa-envelope-o"></i>
    </div>
    <div class="card-body">
        <h5 class="card-title">Email</h5>
        <p class="card-text"><?php echo $data->email ?></p>
    </div>
</div>

<!-- Whatsapp Card -->
<?php if (!empty($data->whatsapp)) : ?>
    <div class="card custom-card">
        <div class="card-icon">
            <i class="fa fa-whatsapp"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Whatsapp</h5>
            <p class="card-text">
                <a href="https://api.whatsapp.com/send?phone=<?php echo $data->whatsapp ?>&text=Hallo :)&source=&data=" target="_blank">
                    <?php echo $data->whatsapp ?>
                </a>
            </p>
        </div>
    </div>
<?php endif; ?>

<!-- Facebook Card -->
<?php if (!empty($data->facebook)) : ?>
    <div class="card custom-card">
        <div class="card-icon">
            <i class="fa fa-facebook"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Facebook</h5>
            <p class="card-text">
                <a href="http://facebook.com/<?php echo $data->facebook ?>" target="_blank">
                    <?php echo $data->facebook ?>
                </a>
            </p>
        </div>
    </div>
<?php endif; ?>

<!-- Instagram Card -->
<?php if (!empty($data->instagram)) : ?>
    <div class="card custom-card">
        <div class="card-icon">
            <i class="fa fa-instagram"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Instagram</h5>
            <p class="card-text">
                <a href="http://instagram.com/<?php echo $data->instagram ?>" target="_blank">
                    <?php echo $data->instagram ?>
                </a>
            </p>
        </div>
    </div>
<?php endif; ?>

<!-- Twitter Card -->
<?php if (!empty($data->twitter)) : ?>
    <div class="card custom-card">
        <div class="card-icon">
            <i class="fa fa-twitter"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Twitter</h5>
            <p class="card-text">
                <a href="http://twitter.com/<?php echo $data->twitter ?>" target="_blank">
                    <?php echo $data->twitter ?>
                </a>
            </p>
        </div>
    </div>
<?php endif; ?>

<!-- Tiktok Card -->
<?php if (!empty($data->tiktok)) : ?>
    <div class="card custom-card">
        <div class="card-icon">
            <i class="fa fa-linkedin"></i>
        </div>
        <div class="card-body">
            <h5 class="card-title">Tiktok</h5>
            <p class="card-text">
                <a href="https://www.tiktok.com/<?php echo $data->tiktok ?>" target="_blank">
                    <?php echo $data->tiktok ?>
                </a>
            </p>
        </div>
    </div>
<?php endif; ?>

<!-- Address Card -->
<div class="card custom-card">
    <div class="card-icon">
        <i class="fa fa-map-marker"></i>
    </div>
    <div class="card-body">
        <h5 class="card-title">Address</h5>
        <p class="card-text"><?php echo $data->address ?></p>
    </div>
</div>

</div>
</div>