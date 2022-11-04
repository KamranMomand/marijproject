<?php
session_start();
include 'header.php';
include 'connection.php';
$query = "SELECT * FROM `product_details` WHERE `product_status`= 'active'";
$result = mysqli_query($conn,$query);
?>
<script>
$(document).ready(function(){
    $(document).on('click','.action-btn-cart',function() {
        var p_id = this.id;
        $.ajax({
         url:'add_cart.php',
         type:'POST',
         data: {'get':1,'pid':p_id},
         success:function(response)
         {
            //alert(response);
            $('#p_id').val(p_id);
            $('#quan').val(response);
            $('#action-CartAddModal').modal('show');
         },
         error:function()
         {
             alert("erorr");
         }
       });
        
       
    });
    $(document).on('click','#btn_save',function() {
        //alert("Save run");
       var p_id = $('#p_id').val();
       var quant = $('#quan').val();
       //alert("ID "+p_id+"\nQuantity : "+quan);
       $.ajax({
         url:'add_cart.php',
         type:'POST',
         data: {'pid':p_id,'quan':quant},
         success:function(response)
         {
            alert(response);
         },
         error:function()
         {
             alert("erorr");
         }
       });
    });
});
</script>

<main class="main-content">

    <!--== Start Hero Area Wrapper ==-->
    <section class="hero-slider-area position-relative">
        <div class="swiper hero-slider-container">
            <div class="swiper-wrapper">
             
                <div class="swiper-slide hero-slide-item">
                    <div class="container">
                        <div class="row align-items-center position-relative">
                            <div class="col-12 col-sm-6">
                                <div class="hero-slide-content">

                                    <h4 class="hero-slide-sub-title">HURRY UP!</h4>
                                    <h2 class="hero-slide-title">Let’s find your stationery.</h2>
                                    <p class="hero-slide-desc">Artline premium quality markers. For 50 years considered to be market leader in whiteboard markers, everyday pens, permanent markers, specialty markers, fineliners, and even correction options.</p>
                                    <div class="hero-slide-meta">
                                        <a class="btn btn-border-primary" href="shop.php">Shop Now</a>
                                        <a class="ht-popup-video" data-fancybox data-type="iframe"
                                            href="https://player.vimeo.com/video/172601404?autoplay=1">
                                            <i class="fa fa-play icon"></i>
                                            <span>Play Now</span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12 col-sm-6">
                                <div class="hero-slide-thumb">
                                <img src="assets/images/pics/bg-img.jpg" width="660" height="680" alt="Image">
                                </div>
                            </div>
                        </div>
                        <div class="hero-social">
                            <a href="https://www.facebook.com/" target="_blank" rel="noopener">fb</a>
                            <a href="https://www.twitter.com/" target="_blank" rel="noopener">tw</a>
                            <a href="https://www.linkedin.com/" target="_blank" rel="noopener">in</a>
                        </div>
                    </div>
                </div>
            </div>
            <!--== Add Pagination ==-->
            <div class="hero-slider-pagination"></div>
        </div>
    </section>
    <!--== End Hero Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->

    <?php
    
    include 'owl-carousel.php';
    
    ?>
    <!-- <section class="product-banner-area section-top-space ">
        <div class="container">
            <div class="swiper banner-slider-container">
            <div class="section-title text-center">
                <h6 class="title mt-5">Top Categories</h6>
              
            </div>
                <div class="swiper-wrapper">
                    <a href="shop.html" class="swiper-slide product-banner-item">
                        <img class="icon" src="https://cdn.shopify.com/s/files/1/0253/7911/0974/files/Fine-Arts-Pakistan_408x.progressive.jpg?v=1636963767" width="370" height="294"
                            alt="Image-HasTech">
                            
                    </a>
                    <a href="shop.html" class="swiper-slide product-banner-item">
                        <img class="icon" src="https://cdn.shopify.com/s/files/1/0253/7911/0974/files/School-Bags-Pakistan_408x.progressive.jpg?v=1636963799" width="370" height="294"
                            alt="Image-HasTech">
                    </a>
                    <a href="shop.html" class="swiper-slide product-banner-item">
                        <img class="icon" src="https://cdn.shopify.com/s/files/1/0253/7911/0974/files/Office-Supplies-Pakistan_408x.progressive.jpg?v=1636963821" width="370" height="294"
                            alt="Image-HasTech">
                    </a>
                </div>
                
            </div>
        </div>
        <h6 class="visually-hidden">Banner Section</h6>
    </section> -->
    <!--== End Product Banner Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area section-space">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="title ">New arrivals</h2>
               
            </div>

            <div class="row mb-6">
                <?php
                $a_query = "SELECT * FROM `product_details` WHERE `product_status`= 'active' order by product_id desc limit 3";
                $a_result = mysqli_query($conn,$a_query);
             while ($row = mysqli_fetch_assoc($a_result)) 
             {
            ?>
                <div class="col-sm-4 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item product-item-border">
                        <a class="product-thumb" href="shop-single-product.php?prid=<?php echo $row['product_id'];?>">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row['product_image']);?>"
                                width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                        </button>
                            <button type="button" class="product-action-btn action-btn-cart" id="<?php echo $row['product_id'];?>">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html"><?php echo $row['product_name'];?></a>
                            </h4>
                            <div class="price">Rs <?php echo $row['product_price'];?><span
                                    class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
                <?php
             }
             ?>

            </div>

           


        </div>
    </section>

    
    <!--== End Product Area Wrapper ==-->

    <!--== Start Product Banner Area Wrapper ==-->
    <section class="product-banner-area">
        <div class="container">
            <div class="row mb-n6 mb-sm-n7">
                <div class="col-sm-12 col-md-6 mb-6">
                    <!--== Start Product Banner Item ==-->
                    <a href="shop.php" class="product-banner-item">
                        <img class="icon" src="https://htmldemo.net/merier/merier/assets/images/shop/banner/d1.png"
                            width="570" height="266" alt="Image-HasTech">
                    </a>
                    <!--== End Product Banner Item ==-->
                </div>
                <div class="col-sm-12 col-md-6 mb-6">
                    <!--== Start Product Banner Item ==-->
                    <a href="shop.php" class="product-banner-item">
                        <img class="icon" src="https://htmldemo.net/merier/merier/assets/images/shop/banner/d2.png"
                            width="570" height="266" alt="Image-HasTech">
                    </a>
                    <!--== End Product Banner Item ==-->
                </div>
            </div>
        </div>
        <h6 class="visually-hidden">Product Banner Area</h6>
    </section>
    <!--== End Product Banner Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area section-space">
        <div class="container">
            <div class="section-title text-center">
                <h2 class="title">Trending</h2>
               
            </div>
            <div class="row mb-n6">
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item product-item-border">
                        <a class="product-thumb" href="shop-single-product.html">
                            <img src="assets/images/shop/invite.jpg" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html">Literature Classical</a></h4>
                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item product-item-border">
                        <a class="product-thumb" href="shop-single-product.html">
                            <img src="assets/images/shop/vallet.jpg" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html">Dollar Stationary</a></h4>
                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
                <div class="col-sm-6 col-lg-4 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item product-item-border">
                        <a class="product-thumb" href="shop-single-product.html">
                            <img src="assets/images/shop/pens.jpg" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i>
                            </button>
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.html">Dux stationery</a></h4>
                            <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                            <button type="button" class="info-btn-wishlist" data-bs-toggle="modal"
                                data-bs-target="#action-WishlistModal">
                                <i class="fa fa-heart-o"></i>
                            </button>
                        </div>
                    </div>
                    <!--== End prPduct Item ==-->
                </div>
            </div>
        </div>
    </section>
    <!--== End Product Area Wrapper ==-->



    <!--== Start Blog Area Wrapper ==-->
    <div class="container" style="margin-bottom:200px;">
    <div class="row">
        <div class="col-md-12">
            <a href="shop.php"><img src="assets/images/pics/banner.jpg" alt="" ></a>
        </div>
    </div>
            </div>
    <!--== End Blog Area Wrapper ==-->

    <!--== Start News Letter Area Wrapper ==-->
    <section class="news-letter-area section-bottom-space">
        <div class="container">
            <div class="newsletter-content-wrap" data-bg-img="assets/images/blog/station59.jpg">
                <div class="newsletter-content">
                    <h2 class="title">Connect with us | merier</h2>
                    <p>Get the latest digital printable planner of the month and the best deals delivered to your inbox!

</p>
                    <div class="newsletter-form">
                        <form>
                            <input type="email" class="form-control" placeholder="Email address" required>
                            <button class="btn-submit" type="submit"><i class="fa fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--== End News Letter Area Wrapper ==-->

</main>


<?php
include 'footer.php';
?>