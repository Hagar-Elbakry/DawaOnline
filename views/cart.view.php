<?php require base_path("views/partials/head.php")?>

<body>

  <div class="site-wrap">


    <?php require base_path("views/partials/nav.php")?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="/">Home</a> <span class="mx-2 mb-0">/</span> 
            <strong class="text-black">Cart</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row mb-5">
          <form class="col-md-12" method="post">
            <div class="site-blocks-table">
              <table class="table table-bordered">
                <thead>
                  <tr>
                    <th class="product-thumbnail">Image</th>
                    <th class="product-name">Product</th>
                    <th class="product-price">Price</th>
                    <th class="product-remove">Remove</th>
                  </tr>
                </thead>
                <tbody>
                    <?php foreach($cart as $item):
                        $carProducts = $db->query('SELECT * FROM product WHERE item_id = :item_id', [':item_id' => $item['item_id']])->fetchAll();
                        foreach($carProducts as $carProduct):
                            $prices [] = $carProduct['item_price'];
                    ?>
                  <tr>
                    <td class="product-thumbnail">
                      <?php $imagePath = $carProduct['item_image']?>
                      <img src="<?php echo isset($imagePath) ?  "assets/$imagePath" : 'assets/images/product_03.png'?>" alt="Image" class="img-fluid">
                    </td>
                    <td class="product-name">
                      <h2 class="h5 text-black"><?php echo $carProduct['item_name'] ?? "Unknown"?></h2>
                    </td>
                    <td>$<?php echo $carProduct['item_price'] ?? '0'?></td>
                    <form method="post" action="/cart">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="item_id" value="<?php echo $carProduct['item_id']?>">
                    <td><button type="submit" name="delete_from_cart" class="btn btn-primary height-auto btn-sm">X</button></td>
                    </form>
                    
                  </tr>
                  <?php 
                  endforeach;
                  endforeach?>
                </tbody>
              </table>
            </div>
          </form>
        </div>
    
        <div class="row">
          <div class="col-md-6">
            <div class="row mb-5">
              <div class="col-md-5">
                <a href="/" class="btn btn-outline-primary btn-md btn-block">Continue Shopping</a>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label class="text-black h4" for="coupon">Coupon</label>
                <p>Enter your coupon code if you have one.</p>
              </div>
              <div class="col-md-8 mb-3 mb-md-0">
                <input type="text" class="form-control py-3" id="coupon" placeholder="Coupon Code">
              </div>
              <div class="col-md-4">
                <button class="btn btn-primary btn-md px-4">Apply Coupon</button>
              </div>
            </div>
          </div>
          <div class="col-md-6 pl-5">
            <div class="row justify-content-end">
              <div class="col-md-7">
                <div class="row">
                  <div class="col-md-12 text-right border-bottom mb-5">
                    <h3 class="text-black h4 text-uppercase mr-5">Cart Totals</h3>
                  </div>
                </div>
                <div class="row mb-5">
                  <div class="col-md-6">
                    <span class="text-black">Total</span>
                  </div>
                  <div class="col-md-6 text-right">
                    <strong class="text-black"><?php echo getTotal($prices ?? [])?></strong>
                  </div>
                </div>
    
                <div class="row">
                  <div class="col-md-12">
                    <button class="btn btn-primary btn-lg btn-block">Proceed To
                      Checkout</button>
                  </div>
                </div>
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