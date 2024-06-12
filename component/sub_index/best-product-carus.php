<div class="col-lg-7 mt-30">
  <?php $bigCarusProductCount = 6; ?>
  <div class="hero__product">
    <div class="hero__product-wrap">
      <div class="hero__product-carousel">
        <?php
          for($i=0; $i<$bigCarusProductCount; $i++){
            include("best-product.php");
          }
        ?>
      </div>
      <div class="hero__product-carousel-nav">
        <?php
          for($i=0; $i<$bigCarusProductCount; $i++){
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