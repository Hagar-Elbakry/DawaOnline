<?php require base_path("views/partials/head.php")?>
<body>

  <div class="site-wrap">


    <?php require base_path("views/partials/nav.php")?>

    <div class="owl-carousel owl-single px-0">
      <div class="site-blocks-cover overlay" style="background-image: url('assets/images/hero_bg.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0"><strong class="text-primary">DawaOnline</strong> Opens 24 Hours</h1>

                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non quibusdam vel quidem.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="site-blocks-cover overlay" style="background-image: url('assets/images/hero_bg_2.jpg');">
        <div class="container">
          <div class="row">
            <div class="col-lg-12 mx-auto align-self-center">
              <div class="site-block-cover-content text-center">
                <h1 class="mb-0">New Medicine <strong class="text-primary">Everyday</strong></h1>
                <div class="row justify-content-center mb-5">
                  <div class="col-lg-6 text-center">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Facilis ex perspiciatis non quibusdam vel quidem.</p>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>



    <div class="site-section py-5">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-24-hours-drugs-delivery"></span>
              <h3><a href="#">Free Delivery</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-medicine"></span>
              <h3><a href="#">New Medicine Everyday</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="feature">
              <span class="wrap-icon flaticon-test-tubes"></span>
              <h3><a href="#">Medicines Guaranteed</a></h3>
              <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Culpa laborum voluptates excepturi neque labore .</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    
    <div class="site-section bg-light">
      <div class="container">
        <div class="row">
          <div class="title-section text-center col-12">
            <h2>Pharmacy <strong class="text-primary">Products</strong></h2>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 block-3 products-wrap">
            <div class="nonloop-block-3 owl-carousel">
              <?php foreach($products as $item):?>
              <div class="text-center item mb-4 item-v2">
                <?php $imagePath = $item['item_image']?>
                <a href="/product?item_id=<?php echo $item['item_id'] ?? '1'?>"> <img src="<?php echo isset($imagePath) ?  "assets/$imagePath" : 'assets/images/product_03.png'?>" alt="Image"></a>
                <h3 class="text-dark"><a href="/product?item_id=<?php echo $item['item_id'] ?? '1'?>"><?php echo $item['item_name'] ?? "Unknown"?></a></h3>
                <p class="price">$<?php echo $item['item_price'] ?? '0'?></p>
              </div>
              <?php endforeach?>

            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        
        <div class="row justify-content-between">
          <div class="col-lg-5 mx-auto text-center ">
            <div class="title-section">
              <h2 class="mb-5">Why <strong class="text-primary">Us</strong></h2>
              <div class="step-number d-flex mb-4">
                <span>1</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>2</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore</p>
              </div>

              <div class="step-number d-flex mb-4">
                <span>3</span>
                <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nemo omnis voluptatem consectetur quam tempore</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <?php require base_path("views/partials/footer.php")?>    
  </div>

 <?php require base_path("views/partials/script.php")?>

</body>

</html>