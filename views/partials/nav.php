<?php
use Core\App;
use Core\Database;
use Core\Session;

$db = App::resolve(Database::class);
$cart = $db->query('SELECT * FROM cart WHERE user_id= :id', [
        ':id' => Session::get('user')['id'] ?? '1'
])->fetchAll();
?>
<div class="site-navbar py-2">

      <div class="container">
        <div class="d-flex align-items-center justify-content-between">
          <div class="logo">
            <div class="site-logo">
              <a href="/" class="js-logo-clone"><strong class="text-primary">Dawa</strong>Online</a>
            </div>
          </div>
          <div class="main-nav d-none d-lg-block">
            <nav class="site-navigation text-right text-md-center" role="navigation">
              <ul class="site-menu js-clone-nav d-none d-lg-block">
                <li class=<?php if(urlIs('/')){echo "active";}?>><a href="/">Home</a></li>
                <li class=<?php if(urlIs('/about')){echo "active";}?>><a href="/about">About</a></li>
              </ul>
            </nav>
          </div>
          <div class="icons">

              <?php if($_SESSION['user'] ?? false) : ?>
                  <p class="mb-0"> <strong>You are logged in!</strong></p>
                    <form action="/session" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-primary btn-sm ml-4">Log Out</button>
                    </form>

                  <a href="/cart" class="icons-btn d-inline-block bag">
                      <span class="icon-shopping-bag"></span>
                      <span class="number"><?php echo count($cart)?></span>
                  </a>
              <?php else :?>
              <div class="d-flex align-items-center">
                  <a href="/register" class="btn btn-primary btn-sm mr-2">Register</a></li>
                  <a href="/login"  class="btn btn-secondary btn-sm">Log In</a></li>
              </div>
              <?php endif;?>

          </div>
        </div>
      </div>
    </div>
  