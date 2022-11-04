<?php
include 'header.php';
include 'connection.php';
$sql = $_GET['search'];
$search_result = false;
$query = "SELECT * FROM `product_details` WHERE MATCH (product_name) against ('$sql')";
$result = mysqli_query($conn,$query);

if ($result) {
    $search_result = true;
}
?>


<main class="main-content">

<!-- search results start here -->
    
<div class="jumbotron jumbotron-fluid mt-5">
  <div class="container">
    <h3 class="display-4">Results Found For <em> <?php echo $_GET['search'];?> <em></h3>
    
</div>


   <!--== Start Product Area Wrapper ==-->
   <div class="container">
            <div class="row mb-n6 product-items-two">
   <?php
   while ($row = mysqli_fetch_assoc($result)) 
   {
       $p_name = $row['product_name'];
   
   
   ?>
    <div class="col-sm-6 col-lg-4 col-xl-3 mb-6">
                    <!--== Start Product Item ==-->
                    <div class="product-item">
                        <a class="product-thumb" href="shop-single-product.php">
                            <img src="data:image/jpg;base64,<?php echo base64_encode($row['product_image']);?>" width="300" height="286" alt="Image-HasTech">
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
                            <h4 class="title"><a href="shop-single-product.php"><?php echo $p_name;?></a></h4>
                            <div class="price">Rs : <?php echo $row['product_price'];?></div>
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