<div class="col-lg-7 mt-30">
  <?php $bigCarusProductCount = 3; ?>
  <div class="hero__product">
    <div class="hero__product-wrap">
      <div class="hero__product-carousel">
        <?php
          for($i=0; $i<$bigCarusProductCount; $i++){
            $_GET['best-product-img-index'] = 52+$i;
            include("best-product.php");
          }
          for($i=0; $i<$bigCarusProductCount; $i++){
            $_GET['best-product-img-index'] = 52+$i;
            include("best-product.php");
          }
        ?>
      </div>
      <div class="hero__product-carousel-nav">
        <?php
          for($i=0; $i<$bigCarusProductCount; $i++){
            $_GET['best-product-img-index'] = 52+$i;
            include("best-product-nav.php");
          }
          for($i=0; $i<$bigCarusProductCount; $i++){
            $_GET['best-product-img-index'] = 52+$i;
            include("best-product-nav.php");
          }
        ?>
      </div>
      <span class="hero__product-offer">
        <span class="discount">29<span>%</span></span>
        <span>off</span>
      </span>
    </div>
  </div>
</div>