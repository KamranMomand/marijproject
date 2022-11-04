<?php
include 'connection.php';

$check = "";

$get = isset($_GET['cid']);
$get2 = isset($_GET['bid']);
if($get)
{

        $cid=$_GET['cid'];
    
        $p_query = "SELECT * FROM `product_details` p join category c on p.category_id = c.cat_id join brands b on p.br_id = b.brand_id where (p.product_status='new' ||  p.product_status='active') && c.cat_id='$cid'";
        $p_result = mysqli_query($conn ,$p_query);
        $check  = "category";


}elseif($get2){
    $bid=$_GET['bid'];
    
        $b_query = "SELECT * FROM `product_details` p join category c on p.category_id = c.cat_id join brands b on p.br_id = b.brand_id where p.br_id='$bid' && p.product_status='active'";
        $b_result = mysqli_query($conn ,$b_query);
        $check  = "brand";
}

include 'header.php';
?>


<main class="main-content">

    <!--== Start Page Header Area Wrapper ==-->
    <section class="page-header-area" data-bg-color="#F1FAEE">
        <div class="container">
            <div class="row">
                <div class="col-sm-8">
                    <div class="page-header-content">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Products</li>
                        </ol>
                        <h2 class="page-header-title">All Trending Products</h2>
                    </div>
                </div>
                <div class="col-sm-4 d-sm-flex justify-content-end align-items-end">
                    <h5 class="showing-pagination-results">Showing 09 Results</h5>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Shop Top Bar Area Wrapper ==-->
    <section class="shop-top-bar-area">
        <div class="container">
            <div class="shop-top-bar">
                <select class="select-shoing">
                    <option data-display="Trending">Trending</option>
                    <option value="1">Featured</option>
                    <option value="2">Best Selling</option>
                    <option value="5">Price: low to high</option>
                    <option value="6">Price: high to low</option>
                </select>

                <div class="select-on-sale d-flex d-md-none">
                    <h5>On Sale :</h5>
                    <select class="select-on-sale-form">
                        <option selected>Yes</option>
                        <option value="1">No</option>
                    </select>
                </div>

                <div class="select-price-range">
                    <h4 class="title">Pricing</h4>
                    <div class="select-price-range-slider">
                        <div class="slider-range" id="slider-range"></div>
                        <div class="slider-labels">
                            <span id="slider-range-value1"></span>
                            <span>-</span>
                            <span id="slider-range-value2"></span>
                        </div>
                    </div>
                </div>

                <div class="select-on-sale d-none d-md-flex">
                    <h5>On Sale :</h5>
                    <select class="select-on-sale-form">
                        <option selected>Yes</option>
                        <option value="1">No</option>
                    </select>
                </div>
            </div>
        </div>
        <h6 class="visually-hidden">Shop Top Bar Area</h6>
    </section>
    <!--== End Shop Top Bar Area Wrapper ==-->

    <!--== End Product Categories Area Wrapper ==-->

    <!--== Start Product Area Wrapper ==-->
    <section class="product-area section-space">
        <div class="container">
            <?php
            if($check == "brand"){ ?>

<div class="row mb-n6 product-items-two">
            <?php 
            while ($b_row = mysqli_fetch_assoc($b_result)) 
            {
            ?>
                <div class="col-sm-6 col-lg-4 col-xl-3 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-product.php">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($b_row['product_image']);?>" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <a href="add_cart.php?prid=<?php echo $b_row['product_id'];?>" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i></a>
                           
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.php"><?php echo $b_row['product_name'];?></a></h4>
                            <div class="price">Rs : <?php echo $b_row['product_price'];?></div>
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
      

            <?php
            }
            elseif($check == "category"){ ?>

<div class="row mb-n6 product-items-two">
            <?php 
            while ($p_row = mysqli_fetch_assoc($p_result)) 
            {
            ?>
                <div class="col-sm-6 col-lg-4 col-xl-3 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-product.php">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($p_row['product_image']);?>" width="300" height="286" alt="Image-HasTech">
                        </a>
                        <span class="badges">New</span>
                        <div class="product-action">
                            <button type="button" class="product-action-btn action-btn-quick-view"
                                data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                                <i class="fa fa-expand"></i>
                            </button>
                            <a href="add_cart.php?prid=<?php echo $row['product_id'];?>" class="product-action-btn action-btn-cart" data-bs-toggle="modal"
                                data-bs-target="#action-CartAddModal">
                                <i class="fa fa-shopping-cart"></i></a>
                           
                            <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal"
                                data-bs-target="#action-CompareModal">
                                <i class="fa fa-exchange"></i>
                            </button>
                        </div>
                        <div class="product-info">
                            <h4 class="title"><a href="shop-single-product.php"><?php echo $p_row['product_name'];?></a></h4>
                            <div class="price">Rs : <?php echo $p_row['product_price'];?></div>
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
        <?php
            }
            
            ?>
        </div>




    </section>
    <!--== End Product Area Wrapper ==-->

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
                            <input type="email" class="form-control" placeholder="Email address">
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