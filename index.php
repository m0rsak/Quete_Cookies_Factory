<?php require 'inc/head.php';
if (empty($_SESSION)){
    header('location:login.php');
}

?>

<section class="cookies container-fluid">
  <div class="row">
    <form role="form" action="ajout.php" method="POST">
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-46.jpg" id="pecan" alt="Pecan_nuts" class="img-responsive">
          <figcaption class="caption">
            <h3>Pecan nuts</h3>

              <button type="submit" name="submit" value="pecan_nuts">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </button>
          </figcaption>
        </figure>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-36.jpg" id="chocolate" alt="Chocolate_chips" class="img-responsive">
          <figcaption class="caption">
            <h3>Chocolate chips</h3>

              <button type="submit" name="submit" value="chocolate_chips">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </button>
          </figcaption>
        </figure>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-58.jpg" id="cookie" alt="Chocolate_cookie" class="img-responsive">
          <figcaption class="caption">
            <h3>Chocolate cookie</h3>

              <button type="submit" name="submit" value="chocolate_cookie">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </button>
          </figcaption>
        </figure>
      </div>
      <div class="col-xs-12 col-sm-6 col-md-4 col-lg-3">
        <figure class="thumbnail text-center">
          <img src="assets/img/product-32.jpg" id="mm_cookie" alt="mm_cookies" class="img-responsive">
          <figcaption class="caption">
            <h3>M&M's&copy; cookies</h3>

              <button type="submit" name="submit" value="mm_cookies">
                  <span class="glyphicon glyphicon-plus" aria-hidden="true"></span> Add to cart
              </button>
          </figcaption>
        </figure>
      </div>
    </form>
  </div>
</section>
<?php require 'inc/foot.php'; ?>
