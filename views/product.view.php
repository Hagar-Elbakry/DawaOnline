<?php
use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);
$cart = $db->query('SELECT * FROM cart')->fetchAll();
$itemsId = array_map(function($item){
    return $item['item_id'];
}, $cart);
require base_path("views/partials/head.php");
?>

<body>

  <div class="site-wrap">


    <?php require base_path("views/partials/nav.php")?>

    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0"><a href="/">Home</a> <span class="mx-2 mb-0">/</span>
              <strong class="text-black"><?php echo $product['item_name'] ?? 'Unknown'?></strong></div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-5 mr-auto">
            <div class="border text-center">
              <?php $imagePath = $product['item_image']?>
              <img src="<?php echo isset($imagePath) ?  "assets/$imagePath" : 'assets/images/product_03.png'?>" alt="Image" class="img-fluid p-5">
            </div>
          </div>
          <div class="col-md-6">
            <h2 class="text-black"><?php echo $product['item_name'] ?? "Unknown"?></h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur, vitae, explicabo? Incidunt facere, natus
              soluta dolores iusto! Molestiae expedita veritatis nesciunt doloremque sint asperiores fuga voluptas,
              distinctio, aperiam, ratione dolore.</p>
            

            <p><strong class="text-primary h4">$<?php echo $product['item_price'] ?? '0'?></strong></p>


            <form method="post" action="/cart">
              <input type="hidden" name="item_id" value="<?php echo $_GET['item_id']?>">
              <input type="hidden" name="user_id" value="<?php echo Session::get('user')['id']?>">
                <?php if(in_array($_GET['item_id'], $itemsId)):
                    echo '<button type="submit" name="add_to_cart_submit" class="buy-now btn btn-sm  height-auto px-4 py-3 btn-primary" disabled>In Cart</button>';
                ?>

                <?php else:
                    echo '<button type="submit" name="add_to_cart_submit" class="buy-now btn btn-sm  height-auto px-4 py-3 btn-primary">Add To Cart</button>';
                ?>

                <?php endif?>

            </form>
           
            <div class="mt-5">
              <ul class="nav nav-pills mb-3 custom-pill" id="pills-tab" role="tablist">
                <li class="nav-item">
                  <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab"
                    aria-controls="pills-home" aria-selected="true">Ordering Information</a>
                </li>
                <li class="nav-item">
                  <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab"
                    aria-controls="pills-profile" aria-selected="false">Specifications</a>
                </li>
            
              </ul>
              <div class="tab-content" id="pills-tabContent">
                <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                  <table class="table custom-table">
                    <thead>
                      <th>Material</th>
                      <th>Description</th>
                      <th>Packaging</th>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>1 BT</td>
                      </tr>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>144/CS</td>
                      </tr>
                      <tr>
                        <th scope="row">OTC022401</th>
                        <td>Pain Management: Acetaminophen PM Extra-Strength Caplets, 500 mg, 100/Bottle</td>
                        <td>1 EA</td>
                      </tr>
                      
                    </tbody>
                  </table>
                </div>
                <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
            
                  <table class="table custom-table">
            
                    <tbody>
                      <tr>
                        <td>HPIS CODE</td>
                        <td class="bg-light">999_200_40_0</td>
                      </tr>
                      <tr>
                        <td>HEALTHCARE PROVIDERS ONLY</td>
                        <td class="bg-light">No</td>
                      </tr>
                      <tr>
                        <td>LATEX FREE</td>
                        <td class="bg-light">Yes, No</td>
                      </tr>
                      <tr>
                        <td>MEDICATION ROUTE</td>
                        <td class="bg-light">Topical</td>
                      </tr>
                    </tbody>
                  </table>
            
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