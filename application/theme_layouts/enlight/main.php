<style>
  .my-card {
    position: absolute;
    left: 40%;
    top: -20px;
    border-radius: 50%;
  }

  body {
    overflow-x: hidden;
  }
</style>

<?php include_once('header.php') ?>

<div class="probootstrap-page-wrapper">
  <!-- Fixed navbar -->

  <div class="probootstrap-header-top" style="background-color: #D53832;">
    <div class="container">
      <div class="row">
        <div class="col-lg-9 col-md-9 col-sm-9 probootstrap-top-quick-contact-info">
          <span style="height: 20px; overflow: hidden; color: white;"><i class="icon-location2" style="color: white;"></i><?php echo $app->contact->address ?></span>
          <span style="height: 20px; overflow: hidden; color: white;"><i class="icon-phone2" style="color: white;"></i><?php echo $app->contact->phone ?></span>
          <span style="height: 20px; overflow: hidden; color: white;"><i class="icon-mail" style="color: white;"></i><?php echo $app->contact->email ?></span>
        </div>
        <div class="col-lg-3 col-md-3 col-sm-3 probootstrap-top-social">
          <ul>
            <?php if (!empty($app->contact->twitter)) : ?>
              <li><a href="http://twitter.com/<?php echo $app->contact->twitter ?>" target="_blank"><i class="icon-twitter" style="background-color: white; color: red; border-radius: 50%; padding: 5px;"></i></a></li>
            <?php endif; ?>
            <?php if (!empty($app->contact->facebook)) : ?>
              <li><a href="http://facebook.com/<?php echo $app->contact->facebook ?>" target="_blank"><i class="icon-facebook2" style="background-color: white; color: red; border-radius: 50%; padding: 5px;"></i></a></li>
            <?php endif; ?>
            <?php if (!empty($app->contact->instagram)) : ?>
              <li><a href="http://instagram.com/<?php echo $app->contact->instagram ?>" target="_blank"><i class="icon-instagram2" style="background-color: white; color: red; border-radius: 50%; padding: 5px;"></i></a></li>
            <?php endif; ?>
          </ul>
        </div>
      </div>
    </div>
  </div>



  <nav class="navbar navbar-default probootstrap-navbar">
    <div class="container">
      <div class="navbar-header">
        <div class="btn-more js-btn-more visible-xs">
          <a href="#"><i class="icon-dots-three-vertical "></i></a>
        </div>
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar-collapse" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" style="background: url('<?php echo base_url('themes/_public/img/logo.png') ?>') no-repeat; background-size: 50px; height: 50px;" href="<?php echo base_url() ?>">CAHAYA ABADI</a>
      </div>

      <div id="navbar-collapse" class="navbar-collapse collapse">
        <ul class="nav navbar-nav navbar-right">

          <?php
          // Generate menu: 2 level
          $menu = '';

          foreach ($menus as $item) {
            $class1 = (count($item->childs) > 0) ? 'dropdown' : '';
            $class2 = ($this->router->fetch_class() == $item->link) ? 'active' : '';
            $isDropdown = (count($item->childs) > 0) ? 'data-toggle="dropdown" class="dropdown-toggle"' : '';
            $link = ($item->link_tobase == 1) ? base_url($item->link) : $item->link;
            $newTab = ($item->is_newtab == 1) ? 'target="_blank"' : '';

            $menu .= '<li class="' . $class1 . ' ' . $class2 . '">';
            $menu .= '<a href="' . $link . '" ' . $newTab . ' ' . $isDropdown . '>';
            $menu .= $item->name;
            $menu .= '</a>';
            if (count($item->childs) > 0) {
              $menu .= '<ul class="dropdown-menu">';
              foreach ($item->childs as $child) {
                $class1 = (count($child->childs) > 0) ? 'dropdown' : '';
                $class2 = ($this->router->fetch_class() == $child->link) ? 'active' : '';
                $link = ($child->link_tobase == 1) ? base_url($child->link) : $item->link;
                $newTab = ($item->is_newtab == 1) ? 'target="_blank"' : '';

                $menu .= '<li class="' . $class1 . ' ' . $class2 . '">';
                $menu .= '<a href="' . $link . '" ' . $newTab . '>';
                $menu .= $child->name;
                $menu .= '</a>';
                $menu .= '</li>';
              };
              $menu .= '</ul>';
            };
            $menu .= '</li>';
          };

          echo $menu;
          ?>

        </ul>
      </div>
    </div>
  </nav>

  <?php if (in_array($this->router->fetch_class(), ['dashboard'])) : ?>
    <section>

      <!-- Carousel container -->
      <div id="my-pics" class="carousel slide" data-ride="carousel" style="width:max-width;margin:auto;">

        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#my-pics" data-slide-to="0" class="active"></li>
          <li data-target="#my-pics" data-slide-to="1"></li>
          <li data-target="#my-pics" data-slide-to="2"></li>
        </ol>

        <!-- Content -->
        <div class="carousel-inner" role="listbox">

          <!-- Slide 1 -->
          <div class="item active">
            <img src="<?php echo base_url('application/theme_layouts/enlight/saltwater.jpg'); ?>" alt="Saltwater Fish" style="opacity: 0.6;">
            <div class="carousel-caption">
              <h1 style="font-weight: bold; color: white;">Emperor Angelfish</h1>
              <p style="font-weight: bold; font-size:larger;"> It is a reef-associated fish.</p>
            </div>
          </div>

          <!-- Slide 2 -->
          <div class="item">
            <img src="<?php echo base_url('application/theme_layouts/enlight/freshwater.jpg') ?>" alt="Freshwater Fish" style="opacity: 0.6;">
            <div class="carousel-caption">
              <h1 style="font-weight: bold; color: white;">Discus Fish</h1>
              <p style="font-weight: bold; font-size:larger;">Some of the most stunning specimens you can stock in an aquarium.</p>
            </div>
          </div>

          <!-- Slide 3 -->
          <div class="item">
            <img src="<?php echo base_url('application/theme_layouts/enlight/consumable.jpg') ?>" alt="Consumable Fish" style="opacity: 0.6;">
            <div class="carousel-caption">
              <h1 style="font-weight: bold; color: white;">Salmon</h1>
              <p style="font-weight: bold; font-size:larger;">Salmon are typically anadromous.</p>
            </div>
          </div>

        </div>

        <!-- Previous/Next controls -->
        <a class="left carousel-control" href="#my-pics" role="button" data-slide="prev">
          <span class="icon-prev" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#my-pics" role="button" data-slide="next">
          <span class="icon-next" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>

      </div>


    </section>

    <!-- counter -->
    <div class="jumbotron" style="background-color: white;">
      <div class="row w-100">
        <div class="col-md-3">
          <div class="card border-info mx-sm-1 p-3">
            <div class="text-info text-center mt-2">
              <h1 id="counter" style="color: #1F95D2; font-weight: bold; font-size: 28px;">47</h1>
            </div>
            <div class="text-info text-center mt-3">
              <h4 style="color: black; font-weight: bold; font-size: 18px;">Customers</h4>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="border-left: 1px solid #ccc;">
          <div class="card border-success mx-sm-1 p-3">
            <div class="text-success text-center mt-2">
              <h1 id="counter2" style="color: #1F95D2; font-weight: bold; font-size: 28px;">13</h1>
            </div>
            <div class="text-success text-center mt-3">
              <h4 style="color: black; font-weight: bold; font-size: 18px;">Exported Country</h4>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="border-left: 1px solid #ccc;">
          <div class="card border-danger mx-sm-1 p-3">
            <div class="text-danger text-center mt-2">
              <h1 id="counter3" style="color: #1F95D2; font-weight: bold; font-size: 28px;">0%</h1>
            </div>
            <div class="text-danger text-center mt-3">
              <h4 style="color: black; font-weight: bold; font-size: 18px;">Lively Products</h4>
            </div>
          </div>
        </div>
        <div class="col-md-3" style="border-left: 1px solid #ccc;">
          <div class="card border-warning mx-sm-1 p-3">
            <div class="text-warning text-center mt-2">
              <h1 id="counter4" style="color: #1F95D2; font-weight: bold; font-size: 28px;">0</h1>
            </div>
            <div class="text-warning text-center mt-3">
              <h4 style="color: black; font-weight: bold; font-size: 18px;">Inbox</h4>
            </div>
          </div>
        </div>
      </div>
    </div>









    <section class="probootstrap-section probootstrap-section-colored" style="background-color: #F7FAFC;">
      <div class="container style">

      </div>
    </section>

    <section class="probootstrap-section" style="padding-bottom: 20px;">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="probootstrap-flex-block">
              <div class="probootstrap-text probootstrap-animate" style="flex: 1;">
                <h3>About Us</h3>
                <h4 style="color: red;">Indonesia Distribution in Whole World</h4>
                <p>We offer solutions to Aqua Manufacturing and Aqua Hobbyist across various regions in the country. Ensuring customer satisfaction through Quality Assurance, we cater both large and small quantity purchases. Founded in 2000, our company has branches in Tangerang and Cirebon</p>
                <p><a href="<?php echo base_url('about') ?>" class="btn btn-primary">Learn More</a></p>
              </div>
              <div class="probootstrap-image probootstrap-animate" style="flex: 1; background: url('<?php echo $data->intro_image ?>') center/cover; border-radius: 12px 0px 12px 60px;">
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <style>
      @media (max-width: 768px) {
        .probootstrap-flex-block {
          flex-direction: column;
        }

        .probootstrap-text,
        .probootstrap-image {
          width: 100%;
          padding: 0 20px;
          text-align: center;
        }

        .probootstrap-image {
          background-size: cover;
          /* Adjust background size */
          background-position: center;
          /* Adjust background position */
          border-radius: 12px;
          height: 250px;
          /* Adjust the height for mobile layout */
        }
      }
    </style>











</div>
</div>
</div>
</section>
<?php endif; ?>


<?php if (!in_array($this->router->fetch_class(), ['dashboard', 'page'])) : ?>

<?php endif; ?>

<section class="probootstrap-section probootstrap-bg-white">
  <div class="container">
    {content}
  </div>

</section>

<section class="probootstrap-cta" style="background-color: #eef2f7;">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <h2 class="probootstrap-animate" data-animate-effect="fadeInRight" style="color: #000000; font-family: 'Montserrat', sans-serif; font-size: 28px;">Contact Us for More Information</h2>
        <a href="<?php echo base_url('contact') ?>" role="button" class="btn btn-primary btn-lg btn-ghost probootstrap-animate" data-animate-effect="fadeInLeft" style="background-color: #1F95D2; color: #FFFFFF; font-family: 'Montserrat', sans-serif; font-size: 26px;">Contact Us</a>

      </div>
    </div>
  </div>
</section>


</div>
<!-- END wrapper -->

<!-- Photoswipe Modal -->
<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">
  <div class="pswp__bg"></div>
  <div class="pswp__scroll-wrap">

    <div class="pswp__container">
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
      <div class="pswp__item"></div>
    </div>

    <div class="pswp__ui pswp__ui--hidden">
      <div class="pswp__top-bar">
        <div class="pswp__counter"></div>
        <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>
        <button class="pswp__button pswp__button--share" title="Share"></button>
        <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>
        <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>
        <div class="pswp__preloader">
          <div class="pswp__preloader__icn">
            <div class="pswp__preloader__cut">
              <div class="pswp__preloader__donut"></div>
            </div>
          </div>
        </div>
      </div>
      <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
        <div class="pswp__share-tooltip"></div>
      </div>
      <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
      </button>
      <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
      </button>
      <div class="pswp__caption">
        <div class="pswp__caption__center"></div>
      </div>
    </div>
  </div>
</div>

<?php include_once('footer.php') ?>

<script>
  document.addEventListener("DOMContentLoaded", function() {
    const targetNumber = 47;

    const animationDuration = 2000;

    const increment = targetNumber / (animationDuration / 100);

    const counterElement = document.getElementById("counter");

    function updateCounter(currentNumber) {
      counterElement.innerText = Math.floor(currentNumber);
    }

    function startAnimation() {
      let currentNumber = 0;

      const animationInterval = setInterval(() => {
        currentNumber += increment;
        updateCounter(currentNumber);

        if (currentNumber >= targetNumber) {
          clearInterval(animationInterval);
          updateCounter(targetNumber); // Ensure the final number is exact
        }
      }, 80); // Update the number every 100 milliseconds
    }

    startAnimation();
  });


  document.addEventListener("DOMContentLoaded", function() {
    const targetNumber = 13;

    const animationDuration = 2000;

    const increment = targetNumber / (animationDuration / 100);

    const counterElement = document.getElementById("counter2");

    function updateCounter(currentNumber) {
      counterElement.innerText = Math.floor(currentNumber);
    }

    function startAnimation() {
      let currentNumber = 0;

      const animationInterval = setInterval(() => {
        currentNumber += increment;
        updateCounter(currentNumber);

        if (currentNumber >= targetNumber) {
          clearInterval(animationInterval);
          updateCounter(targetNumber); // Ensure the final number is exact
        }
      }, 80); // Update the number every 100 milliseconds
    }

    startAnimation();
  });


  // JavaScript code to handle the counting animation
  document.addEventListener("DOMContentLoaded", function() {
    const percentageContainer = document.getElementById("counter3");
    const targetPercentage = 97; // Replace this with your desired target percentage
    const duration = 2000; // Duration in milliseconds for the animation

    let currentPercentage = 0;
    let startTime = null;

    function animateCount(timestamp) {
      if (!startTime) startTime = timestamp;
      const progress = timestamp - startTime;
      const percentage = Math.min(Math.ceil(progress / duration * targetPercentage), targetPercentage);
      currentPercentage = percentage;
      percentageContainer.innerText = currentPercentage + "%";

      if (progress < duration) {
        requestAnimationFrame(animateCount);
      }
    }

    requestAnimationFrame(animateCount);
  });




  document.addEventListener("DOMContentLoaded", function() {
    const targetNumber = 434;

    const animationDuration = 2000;

    const increment = targetNumber / (animationDuration / 100);

    const counterElement = document.getElementById("counter4");

    function updateCounter(currentNumber) {
      counterElement.innerText = Math.floor(currentNumber);
    }

    function startAnimation() {
      let currentNumber = 0;

      const animationInterval = setInterval(() => {
        currentNumber += increment;
        updateCounter(currentNumber);

        if (currentNumber >= targetNumber) {
          clearInterval(animationInterval);
          updateCounter(targetNumber); // Ensure the final number is exact
        }
      }, 80); // Update the number every 100 milliseconds
    }

    startAnimation();
  });
</script>