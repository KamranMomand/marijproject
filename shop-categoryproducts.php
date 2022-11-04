<?php
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

<!--== Start Product Top Bar Area Wrapper ==-->
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
    <h6 class="visually-hidden">Product Top Bar Area</h6>
</section>
<!--== End Product Top Bar Area Wrapper ==-->

<!--== Start Product Categories Area Wrapper ==-->
<section class="product-categories-area section-top-space">
    <div class="container">
        <div class="row mb-n8">
            <div class="col-6 col-md-4 col-lg-2 mb-8">
                <!--== Start Product Categories Item ==-->
                <a class="product-two-category-item" href="shop.html">
                    <img class="product-two-category-thumb" src="assets/images/shop/category/c1.png" width="80" height="80" alt="Image-HasTech">
                    <h4 class="product-two-category-title">Clothes</h4>
                </a>
                <!--== End Product Categories Item ==-->
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-8">
                <!--== Start Product Categories Item ==-->
                <a class="product-two-category-item" href="shop.html">
                    <img class="product-two-category-thumb" src="assets/images/shop/category/c2.png" width="80" height="80" alt="Image-HasTech">
                    <h4 class="product-two-category-title">Shoes</h4>
                </a>
                <!--== End Product Categories Item ==-->
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-8">
                <!--== Start Product Categories Item ==-->
                <a class="product-two-category-item" href="shop.html">
                    <img class="product-two-category-thumb" src="assets/images/shop/category/c3.png" width="80" height="80" alt="Image-HasTech">
                    <h4 class="product-two-category-title">Shirts</h4>
                </a>
                <!--== End Product Categories Item ==-->
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-8">
                <!--== Start Product Categories Item ==-->
                <a class="product-two-category-item" href="shop.html">
                    <img class="product-two-category-thumb" src="assets/images/shop/category/c4.png" width="80" height="80" alt="Image-HasTech">
                    <h4 class="product-two-category-title">Pants</h4>
                </a>
                <!--== End Product Categories Item ==-->
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-8">
                <!--== Start Product Categories Item ==-->
                <a class="product-two-category-item" href="shop.html">
                    <img class="product-two-category-thumb" src="assets/images/shop/category/c5.png" width="80" height="80" alt="Image-HasTech">
                    <h4 class="product-two-category-title">Bags</h4>
                </a>
                <!--== End Product Categories Item ==-->
            </div>
            <div class="col-6 col-md-4 col-lg-2 mb-8">
                <!--== Start Product Categories Item ==-->
                <a class="product-two-category-item" href="shop.html">
                    <img class="product-two-category-thumb" src="assets/images/shop/category/c6.png" width="80" height="80" alt="Image-HasTech">
                    <h4 class="product-two-category-title">Hats</h4>
                </a>
                <!--== End Product Categories Item ==-->
            </div>
        </div>
    </div>
</section>
<!--== End Product Categories Area Wrapper ==-->

<!--== Start Product Area Wrapper ==-->
<section class="product-area section-space">
    <div class="container">
        <div class="row mb-n6">
            <div class="col-sm-6 col-lg-4 mb-6">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <a class="product-thumb" href="shop-single-product.html">
                        <img src="assets/images/shop/13.png" width="300" height="286" alt="Image-HasTech">
                    </a>
                    <span class="badges">New</span>
                    <div class="product-action">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                            <i class="fa fa-exchange"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <h4 class="title"><a href="shop-single-product.html">Casual Prince</a></h4>
                        <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                        <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-sm-6 col-lg-4 mb-6">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <a class="product-thumb" href="shop-single-product.html">
                        <img src="assets/images/shop/19.jpg" width="300" height="286" alt="Image-HasTech">
                    </a>
                    <span class="badges">New</span>
                    <div class="product-action">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                            <i class="fa fa-exchange"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <h4 class="title"><a href="shop-single-product.html">Fit Wool Suit</a></h4>
                        <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                        <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-sm-6 col-lg-4 mb-6">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <a class="product-thumb" href="shop-single-product.html">
                        <img src="assets/images/shop/20.jpg" width="300" height="286" alt="Image-HasTech">
                    </a>
                    <span class="badges">New</span>
                    <div class="product-action">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                            <i class="fa fa-exchange"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <h4 class="title"><a href="shop-single-product.html">Slightly jackets</a></h4>
                        <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                        <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-sm-6 col-lg-4 mb-6">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <a class="product-thumb" href="shop-single-product.html">
                        <img src="assets/images/shop/16.jpg" width="300" height="286" alt="Image-HasTech">
                    </a>
                    <span class="badges">New</span>
                    <div class="product-action">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                            <i class="fa fa-exchange"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <h4 class="title"><a href="shop-single-product.html">Red Perspiciatis</a></h4>
                        <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                        <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-sm-6 col-lg-4 mb-6">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <a class="product-thumb" href="shop-single-product.html">
                        <img src="assets/images/shop/21.jpg" width="300" height="286" alt="Image-HasTech">
                    </a>
                    <span class="badges">New</span>
                    <div class="product-action">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                            <i class="fa fa-exchange"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <h4 class="title"><a href="shop-single-product.html">Style Modern Dress</a></h4>
                        <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                        <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-sm-6 col-lg-4 mb-6">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <a class="product-thumb" href="shop-single-product.html">
                        <img src="assets/images/shop/22.jpg" width="300" height="286" alt="Image-HasTech">
                    </a>
                    <span class="badges">New</span>
                    <div class="product-action">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                            <i class="fa fa-exchange"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <h4 class="title"><a href="shop-single-product.html">Star Women pants</a></h4>
                        <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                        <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-sm-6 col-lg-4 mb-6">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <a class="product-thumb" href="shop-single-product.html">
                        <img src="assets/images/shop/23.jpg" width="300" height="286" alt="Image-HasTech">
                    </a>
                    <span class="badges">New</span>
                    <div class="product-action">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                            <i class="fa fa-exchange"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <h4 class="title"><a href="shop-single-product.html">Flower Print dress</a></h4>
                        <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                        <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-sm-6 col-lg-4 mb-6">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <a class="product-thumb" href="shop-single-product.html">
                        <img src="assets/images/shop/17.jpg" width="300" height="286" alt="Image-HasTech">
                    </a>
                    <span class="badges">New</span>
                    <div class="product-action">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                            <i class="fa fa-exchange"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <h4 class="title"><a href="shop-single-product.html">Winter Sprit</a></h4>
                        <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                        <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
                            <i class="fa fa-heart-o"></i>
                        </button>
                    </div>
                </div>
                <!--== End prPduct Item ==-->
            </div>
            <div class="col-sm-6 col-lg-4 mb-6">
                <!--== Start Product Item ==-->
                <div class="product-item">
                    <a class="product-thumb" href="shop-single-product.html">
                        <img src="assets/images/shop/24.jpg" width="300" height="286" alt="Image-HasTech">
                    </a>
                    <span class="badges">New</span>
                    <div class="product-action">
                        <button type="button" class="product-action-btn action-btn-quick-view" data-bs-toggle="modal" data-bs-target="#action-QuickViewModal">
                            <i class="fa fa-expand"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-cart" data-bs-toggle="modal" data-bs-target="#action-CartAddModal">
                            <i class="fa fa-shopping-cart"></i>
                        </button>
                        <button type="button" class="product-action-btn action-btn-compare" data-bs-toggle="modal" data-bs-target="#action-CompareModal">
                            <i class="fa fa-exchange"></i>
                        </button>
                    </div>
                    <div class="product-info">
                        <h4 class="title"><a href="shop-single-product.html">Slightly Hoody</a></h4>
                        <div class="price">$650.00 <span class="price-old">$650.00</span></div>
                        <button type="button" class="info-btn-wishlist" data-bs-toggle="modal" data-bs-target="#action-WishlistModal">
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

<!--== Start News Letter Area Wrapper ==-->
<section class="news-letter-area section-bottom-space">
    <div class="container">
        <div class="newsletter-content-wrap" data-bg-img="assets/images/photos/bg1.jpg">
            <div class="newsletter-content">
                <h2 class="title">Connect with us | merier</h2>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</p>
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
