<section id="products">

  <p></p>

  <div class="card">
    <div class="card-body">
      <div class="row detail-item">
        <div class="col-md-5 col-xs-12 probootstrap-animate" style="padding-bottom: 30px;">
          <div class="left">
            <a href="<?php echo base_url($data->image1) ?>" data-lightbox="portfolio" class="link-preview link-product-active">
              <img class="img-large img-product-active" src="<?php echo base_url($data->image1) ?>" style="border-radius: 10px;" />
            </a>
            <div class="img-other">
              <div class="row">
                <?php if (!empty($data->image1)) : ?>
                  <div class="col-md-3 col-xs-3 probootstrap-animate">
                    <a href="<?php echo base_url($data->image1) ?>" data-lightbox="portfolio" class="link-preview">
                      <img src="<?php echo base_url($data->image1) ?>" class="first img-product" style="border-radius: 10px; padding: 8px;" />
                    </a>
                  </div>
                <?php endif; ?>
                <?php if (!empty($data->image2)) : ?>
                  <div class="col-md-3 col-xs-3 probootstrap-animate">
                    <a href="<?php echo base_url($data->image2) ?>" data-lightbox="portfolio" class="link-preview">
                      <img src="<?php echo base_url($data->image2) ?>" class="img-product" style="border-radius: 10px; padding: 8px;" />
                    </a>
                  </div>
                <?php endif; ?>
                <?php if (!empty($data->image3)) : ?>
                  <div class="col-md-3 col-xs-3 probootstrap-animate">
                    <a href="<?php echo base_url($data->image3) ?>" data-lightbox="portfolio" class="link-preview">
                      <img src="<?php echo base_url($data->image3) ?>" class="img-product" style="border-radius: 10px; padding: 8px;" />
                    </a>
                  </div>
                <?php endif; ?>
                <?php if (!empty($data->image4)) : ?>
                  <div class="col-md-3 col-xs-3 probootstrap-animate">
                    <a href="<?php echo base_url($data->image4) ?>" data-lightbox="portfolio" class="link-preview">
                      <img src="<?php echo base_url($data->image4) ?>" class="img-product" style="border-radius: 10px; padding: 8px;" />
                    </a>
                  </div>
                <?php endif; ?>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-7 col-xs-12 probootstrap-animate">
          <div class="right">
            <div class="description">
              <table>
                <tr>
                  <td>
                    <div style="margin: 10px;">
                      <span style="font-size: xx-large; color: black; font-weight: bold;">Detail</span>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td valign="top" width="130">
                    <div style="margin: 10px;">
                      <span class="text-hint">Brand</span>
                    </div>
                  </td>
                  <td valign="top" style="color: black; font-weight: bold;">
                    <div style="margin: 10px;">
                      <?php echo (!empty($data->name)) ? $data->name : '-' ?>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td valign="top" width="150">
                    <div style="margin: 10px;">
                      <span class="text-hint">Scientific Name</span>
                    </div>
                  </td>
                  <td valign="top" style="color: black; font-weight: bold;">
                    <div style="margin: 10px;">
                      <?php echo (!empty($data->name)) ? $data->name : '-' ?>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td valign="top">
                    <div style="margin: 10px;">
                      <span class="text-hint">Description</span>
                    </div>
                  </td>
                  <td valign="top" style="color: black; font-weight: bold;">
                    <div style="margin: 10px;">
                      <!-- <?php echo (!empty($data->merk)) ? $data->merk : '-' ?> -->
                      <?php echo (!empty($data->description)) ? $data->description : '-' ?>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td valign="top">
                    <div style="margin: 10px;">
                      <span class="text-hint">Available Stok</span>
                    </div>
                  </td>
                  <td valign="top" style="color: black; font-weight: bold;">
                    <div style="margin: 10px;">
                      <?php echo number_format($data->stock) ?>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td valign="top">
                    <div style="margin:10px;">
                      <span class="text-hint">Sold</span>
                    </div>
                  </td>
                  <td valign="top" style="color: black; font-weight: bold;">
                    <div style="margin: 10px;">
                      <?php echo number_format($data->sold_out) ?>
                    </div>
                  </td>
                </tr>
                <tr>
                  <td valign="top">
                    <div style="margin: 10px;">
                      <span class="text-hint">Shipped From</span>
                    </div>
                  </td>
                  <td valign="top" style="color: black; font-weight: bold;">
                    <div style="margin: 10px;">
                      <?php echo $data->regencies_name . ', ' . $data->province_name ?>
                    </div>
                  </td>
                </tr>
              </table>
              <div class="clearfix"></div>

              <?php
              $recipient_email = "business@cahayaabadi.org";
              $subject = "Pesan dari Website";
              $message = "Halo,\n\nTerima kasih telah mengunjungi website kami.";
              ?>

              <br>
              <!-- <a href="mailto:<?php echo $recipient_email ?>?subject=<?php echo urlencode($subject) ?>&body=<?php echo urlencode($message) ?>" target="_blank">
                <i class="fa fa-envelope"></i>
                By Email
              </a> -->

              <br>
              <?php
              // Ganti nomor berikut dengan nomor WhatsApp bisnis Anda
              $nomorWhatsApp = "81280604587";
              ?>

              <!-- Tautan WA.me -->
              <!-- <a href="https://wa.me/<?php echo $nomorWhatsApp; ?>"> <i class="fa fa-phone"></i> By WA</a> -->

              <a href="<?php echo base_url('contact') ?>" style="background-color: #1F95D2; border-radius: 10px; width: 167px">Contact Us</a>






            </div>
          </div>
        </div>
      </div>
      <!-- <div class="row detail-item" style="padding-top: 10px;">
        <div class="col-lg-12 col-xs-12 probootstrap-animate">
          <div class="right">
            <div class="div30"></div>
            <div class="description-text">
              <div class="title">Deskripsi Produk</div>
              <div class="content">
                <?php echo $data->description ?>
              </div>
            </div>
          </div>
        </div>
      </div> -->
    </div>
  </div>

  <hr />

  <div class="product-new">
    <div class="header">LATEST PRODUCTS</div>
    <div class="content">
      <?php if (count($data_latest) > 0) : ?>
        <div class="row">
          <?php foreach ($data_latest as $index => $item) : ?>
            <div class="col-md-4 col-md-6 col-xs-6 col-xxs-12 probootstrap-animate">
              <a href="<?php echo base_url('product/' . $item->link) ?>" class="probootstrap-featured-news-box">
                <figure class="probootstrap-media">
                  <img src="<?php echo base_url($item->image1) ?>" alt="<?php echo $item->name ?>" class="img-responsive" style="width: 100%; height: 250px; object-fit: cover;">
                </figure>
                <div class="probootstrap-text">
                  <div style="height: 80px; overflow: hidden;">
                    <h3 class="product-title"><?php echo $item->name ?></h3>
                    <span style="color: #ff6b68;">Rp <?php echo number_format($item->price) ?></span>
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
    </div>
  </div>

</section>