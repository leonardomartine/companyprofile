<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  .probootstrap-service-card {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    background-color: #394855;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    transition: background-color 0.3s;
  }

  .probootstrap-service-card:hover {
    background-color: #ffffff;
  }

  .probootstrap-service-icon {
    width: 48px;
    height: 48px;
    padding: 12px;
    border-radius: 8px;
    color: white;
    background-color: #EC2125;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
  }

  .probootstrap-service-icon i {
    font-size: 24px;
  }

  .probootstrap-service-content {
    flex: 1;
  }

  .probootstrap-service-card h3 {
    margin-top: 0;
  }

  .probootstrap-service-card p {
    margin-bottom: 0;
  }
  .probootstrap-service-card {
    display: flex;
    flex-direction: column;
    align-items: flex-start;
    background-color: #394855;
    padding: 20px;
    border-radius: 8px;
    margin-bottom: 20px;
    transition: background-color 0.3s;
  }

  .probootstrap-service-card:hover {
    background-color: #ffffff;
  }

  .probootstrap-service-icon {
    width: fit-content;
    height: fit-content;
    padding: 12px;
    border-radius: 8px;
    color: #ffffff;
    background-color: #394855;
    display: flex;
    justify-content: center;
    align-items: center;
    margin-bottom: 10px;
    transition: background-color 0.3s;
  }

  .probootstrap-service-icon i {
    font-size: 24px;
  }

  .probootstrap-service-card:hover .probootstrap-service-icon {
    background-color: #ffffff;
  }

  .probootstrap-service-content {
    flex: 1;
  }

  .probootstrap-service-card h3 {
    margin-top: 0;
  }

  .probootstrap-service-card p {
    margin-bottom: 0;
  }
  .probootstrap-service-card {
    background-color: #FBFBFB;
    padding: 20px;
    border-radius: 10px;
    margin-bottom: 20px;
    transition: background-color 0.3s;
  }

  .probootstrap-service-card:hover {
    background-color: #394855;
  }

</style>


<section class="probootstrap-section probootstrap-bg-white probootstrap-border-top" style="padding-bottom: 0px;">
  <div class="container">
    <div style="text-align: center;">
      <h2>Our Services</h2>
      <h1 style="color: #EC2125; font-family: Monstreat;">Empowering Reasons to Choose Us</h1>
    </div>

    <div class="col-md-12">
      <div class="row">
        <div class="col-md-3" style="text-align: left;">
          <div class="probootstrap-service-card">
            <div class="probootstrap-service-icon" style="background-color: #394855;">
              <i class="fa fa-shield" style="color: #FFFFFF;"></i>
            </div>
            <div class="probootstrap-service-content">
              <h3>Integrity</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consectetur orci ac sem sollicitudin,</p>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="text-align: left;">
          <div class="probootstrap-service-card">
            <div class="probootstrap-service-icon" style="background-color: #394855;">
              <i class="fa fa-trophy" style="color: #FFFFFF;"></i>
            </div>
            <div class="probootstrap-service-content">
              <h3>Quality</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consectetur orci ac sem sollicitudin, </p>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="text-align: left;">
          <div class="probootstrap-service-card">
            <div class="probootstrap-service-icon" style="background-color: #394855;">
              <i class="fa fa-handshake-o" style="color: #FFFFFF;"></i>
            </div>
            <div class="probootstrap-service-content">
              <h3>Commitment</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consectetur orci ac sem sollicitudin,.</p>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="text-align: left;">
          <div class="probootstrap-service-card">
            <div class="probootstrap-service-icon" style="background-color: #394855;">
              <i class="fa fa-lightbulb-o" style="color: #FFFFFF;"></i>
            </div>
            <div class="probootstrap-service-content">
              <h3>Innovation</h3>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas consectetur orci ac sem sollicitudin,.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="probootstrap-section probootstrap-bg-white probootstrap-border-top">
  <div class="container">
    <div class="row">
    <div class="col-md-4 text-center section-heading probootstrap-animate">
    <div style="display: flex; flex-direction: column; align-items: flex-start;">
        <h2 style="font-size: 24px; color: black; font-weight: bold; margin-bottom: 10px;">Blog</h2>
        <p style="text-align: left; font-family: 'Montserrat', sans-serif;">
    <span style="color: red; font-weight: bold; font-size: 36px; display: block; margin-bottom: 20px;">Discover</span>
    <span style="color: red; font-weight: bold; font-size: 32px; display: block; margin-top: 20px; margin-bottom: 10px;">Interesting Articles</span>
    <span style="color: red; font-weight: bold; font-size: 36px; display: block; margin-top: 20px;">on Our Blog</span>
</p>
        <a href="<?php echo base_url('blog') ?>" class="btn btn-primary" style="background-color: #1F95D2; font-family: 'Montserrat', sans-serif;">View All Posts</a>
    </div>
</div>




      <div class="col-md-8 probootstrap-animate">
  <?php if (count($data_blog) > 0) : ?>
    <div id="featured-news" class="tab-pane fade in active">
      <div class="row">
        <?php
        $postCounter = 0; // Counter for limiting the number of posts
        foreach ($data_blog as $item) :
          if ($postCounter >= 2) {
            break; // Break the loop after displaying 2 posts
          }
        ?>
          <div class="col-md-6">
            <div class="probootstrap-featured-news-card" style="background: #F7FAFC; width: 320px; height: 390px; padding: 40px 16px; border-radius: 20px; gap: 21px;">
              <div class="probootstrap-card-media" style="position: relative;">
                <div style="width: 100%; padding-bottom: 100%; position: relative; overflow: hidden; border-radius: 8px;">
                  <img src="<?php echo base_url($item->cover) ?>" alt="<?php echo $item->title ?>" class="img-responsive" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; object-fit: cover; border-radius: 8px;">
                </div>
              </div>
              <div class="probootstrap-card-details" style="padding: 20px; height: 100%;">
                <h3 style="margin: 0; margin-bottom: 10px; font-weight: bold;"><?php echo $item->title ?></h3>
                <p style="margin-bottom: 20px;"><?php echo $item->snippet ?></p>
                <div class="probootstrap-date" style="font-size: 13px;">
                  <i class="icon-calendar"></i><?php echo date("d M Y", strtotime($item->created_at)) ?>
                  <?php if ($item->is_comment == 1) : ?>
                    <div style="float: right;">
                      <i class="zmdi zmdi-comments"></i> <?php echo number_format((int)$item->comment_count) ?>
                    </div>
                  <?php endif; ?>
                </div>
              </div>
            </div>
          </div>
        <?php
          $postCounter++;
        endforeach;
        ?>
      </div>
    </div>
  <?php else : ?>
    <div class="nothing-found">
      <div>No data found</div>
    </div>
  <?php endif; ?>
</div>

    </div>
  </div>
</section>


<section class="probootstrap-section" style="padding-bottom: 0px;">
	<div class="row">
		<div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
    <p class="lead">Partner</p>	
    <h2 style ="color:#EC2125;font-weight: bold;">Our Business Partner</h2>
		
		</div>
	</div>

  <div id="companyCarousel" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
    <div class="row">
  <div class="col-md-3" style="text-align: center;">
    <div class="card" style="background: #FBFBFB; padding: 20px; border-radius: 10px;">
      <img src="<?php echo base_url('themes/_public/img/company.png') ?>" alt="" width="60" height="60">
      <h3>Company A</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. M.</p>
    </div>
  </div>
  <div class="col-md-3" style="text-align: center;">
    <div class="card" style="background: #FBFBFB; padding: 20px; border-radius: 10px;">
      <img src="<?php echo base_url('themes/_public/img/company.png') ?>" alt="" width="60" height="60">
      <h3>Company B</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. M.</p>
    </div>
  </div>
  <div class="col-md-3" style="text-align: center;">
    <div class="card" style="background: #FBFBFB; padding: 20px; border-radius: 10px;">
      <img src="<?php echo base_url('themes/_public/img/company.png') ?>" alt="" width="60" height="60">
      <h3>Company C</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. M.</p>
    </div>
  </div>
  <div class="col-md-3" style="text-align: center;">
    <div class="card" style="background: #FBFBFB; padding: 20px; border-radius: 10px;">
      <img src="<?php echo base_url('themes/_public/img/company.png') ?>" alt="" width="60" height="60">
      <h3>Company D</h3>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. M.</p>
    </div>
  </div>
</div>

    </div>
  </div>
  <a class="carousel-control-prev" href="#companyCarousel" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#companyCarousel" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</section>


<br>
<br>





<section class="probootstrap-section " style="background-color: #FFFFFF
!important; margin-left: -180px; margin-right: -180px;">
    <div class="row">
        <div class="col-md-6 col-md-offset-3 text-center section-heading probootstrap-animate">
            <h2 style="color: #394855 !important;">TESTIMONIAL</h2>
            <h1 style="color:#EC2125 !important;font-weight: bold;">What Our Client Say About Us</h1>
            <a href="<?php echo base_url('testimonial') ?>" class="btn btn-primary" style="background-color:#394855;">View All Testimonial</a>
        </div>
    </div>
    <!-- END row -->
    <?php if (count($data_testimonial) > 0) : ?>
        <div class="row">
            <div class="col-md-12 probootstrap-animate">
                <div class="owl-carousel owl-carousel-testimony owl-carousel-fullwidth">
                    <?php foreach ($data_testimonial as $item) : ?>
                        <div class="item">
                            <div class="probootstrap-testimony-wrap text-center">
                                <figure class="testimonial-image">
                                    <img src="<?php echo base_url($item->creator_photo) ?>" alt="<?php echo $item->creator_name ?>" style="object-fit: cover;">
                                </figure>
                                <blockquote class="quote"><?php echo $item->content ?></blockquote>
                                <cite class="author"> &mdash; <span><?php echo $item->creator_name ?></span></cite>
                            </div>
                        </div>
                    <?php endforeach; ?>
                </div>
            </div>
        </div>
    <?php else : ?>
        <div class="nothing-found">
            <div>No data found</div>
        </div>
    <?php endif; ?>
    <!-- END row -->
</section>




<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>