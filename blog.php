<?php
include 'header.php';
include 'connection.php';

$query = "SELECT * FROM `category`";
$result = mysqli_query($conn ,$query);
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
                            <li class="breadcrumb-item active" aria-current="page">Blog</li>
                        </ol>
                        <h2 class="page-header-title">Our latest news</h2>
                    </div>
                </div>
                <div class="col-sm-4 d-sm-flex justify-content-end align-items-end">
                    <h5 class="showing-pagination-results">Blog Page</h5>
                </div>
            </div>
        </div>
    </section>
    <!--== End Page Header Area Wrapper ==-->

    <!--== Start Blog Area Wrapper ==-->
    <section class="blog-area section-space">
        <div class="container">
            <div class="row flex-lg-row-reverse">
                <div class="col-lg-8">
                    <div class="row mb-n8 post-items-two">
                        <div class="col-sm-12 col-md-6 mb-8">
                            <!--== Start Blog Item ==-->
                            <div class="post-item">
                                <a href="blog-details.php" class="thumb">
                                    <img class="w-100" src="assets/images/blog/3.jpg" width="570" height="320"
                                        alt="Image-HasTech">
                                </a>
                                <div class="content mt-5">
                                    <a class="post-category me-3" href="blog.php">Fashion</a>
                                    <a class="post-date-two" href="blog.php">13 Feb 2021</a>
                                    <h4 class="title mb-0 mt-1"><a href="blog-details.html">But I must explain to you
                                            how all this mistaken ideal fashion</a></h4>
                                </div>
                            </div>
                            <!--== End Blog Item ==-->
                        </div>
                        <div class="col-sm-12 col-md-6 mb-8">
                            <!--== Start Blog Item ==-->
                            <div class="post-item">
                                <a href="blog-details.php" class="thumb">
                                    <img class="w-100" src="assets/images/blog/4.jpg" width="570" height="320"
                                        alt="Image-HasTech">
                                </a>
                                <div class="content mt-5">
                                    <a class="post-category me-3" href="blog.html">Fashion</a>
                                    <a class="post-date-two" href="blog.html">16 Feb 2021</a>
                                    <h4 class="title mb-0 mt-1"><a href="blog-details.html">My Favorite White Sneakers
                                            From Splurge To Joy New Style Scene</a></h4>
                                </div>
                            </div>
                            <!--== End Blog Item ==-->
                        </div>
                        <div class="col-sm-12 col-md-6 mb-8">
                            <!--== Start Blog Item ==-->
                            <div class="post-item">
                                <a href="blog-details.php" class="thumb">
                                    <img class="w-100" src="assets/images/blog/5.jpg" width="570" height="320"
                                        alt="Image-HasTech">
                                </a>
                                <div class="content mt-5">
                                    <a class="post-category me-3" href="blog.html">Fashion</a>
                                    <a class="post-date-two" href="blog.html">13 Feb 2021</a>
                                    <h4 class="title mb-0 mt-1"><a href="blog-details.html">On the other hand we provide
                                            denounce with righteous</a></h4>
                                </div>
                            </div>
                            <!--== End Blog Item ==-->
                        </div>
                        <div class="col-sm-12 col-md-6 mb-8">
                            <!--== Start Blog Item ==-->
                            <div class="post-item">
                                <a href="blog-details.php" class="thumb">
                                    <img class="w-100" src="assets/images/blog/6.jpg" width="570" height="320"
                                        alt="Image-HasTech">
                                </a>
                                <div class="content mt-5">
                                    <a class="post-category me-3" href="blog.html">Fashion</a>
                                    <a class="post-date-two" href="blog.html">25 Dec 2021</a>
                                    <h4 class="title mb-0 mt-1"><a href="blog-details.html">Consectetur adipiscing elit.
                                            Habitasse suspendisse tincidunt</a></h4>
                                </div>
                            </div>
                            <!--== End Blog Item ==-->
                        </div>
                        <div class="col-sm-12 col-md-6 mb-8">
                            <!--== Start Blog Item ==-->
                            <div class="post-item">
                                <a href="blog-details.php" class="thumb">
                                    <img class="w-100" src="assets/images/blog/7.jpg" width="570" height="320"
                                        alt="Image-HasTech">
                                </a>
                                <div class="content mt-5">
                                    <a class="post-category me-3" href="blog.html">Fashion</a>
                                    <a class="post-date-two" href="blog.html">13 Feb 2021</a>
                                    <h4 class="title mb-0 mt-1"><a href="blog-details.html">But I must explain to you
                                            how all this mistaken ideal fashion</a></h4>
                                </div>
                            </div>
                            <!--== End Blog Item ==-->
                        </div>
                        <div class="col-sm-12 col-md-6 mb-8">
                            <!--== Start Blog Item ==-->
                            <div class="post-item">
                                <a href="blog-details.php" class="thumb">
                                    <img class="w-100" src="assets/images/blog/8.jpg" width="570" height="320"
                                        alt="Image-HasTech">
                                </a>
                                <div class="content mt-5">
                                    <a class="post-category me-3" href="blog.html">Fashion</a>
                                    <a class="post-date-two" href="blog.html">13 Feb 2021</a>
                                    <h4 class="title mb-0 mt-1"><a href="blog-details.html">My Favorite White Sneakers
                                            From Splurge To Joy New Style Scene</a></h4>
                                </div>
                            </div>
                            <!--== End Blog Item ==-->
                        </div>
                        <div class="col-sm-12 col-md-6 mb-8">
                            <!--== Start Blog Item ==-->
                            <div class="post-item">
                                <a href="blog-details.php" class="thumb">
                                    <img class="w-100" src="assets/images/blog/3.jpg" width="570" height="320"
                                        alt="Image-HasTech">
                                </a>
                                <div class="content mt-5">
                                    <a class="post-category me-3" href="blog.html">Fashion</a>
                                    <a class="post-date-two" href="blog.html">13 Feb 2021</a>
                                    <h4 class="title mb-0 mt-1"><a href="blog-details.html">Consectetur adipiscing elit.
                                            Habitasse suspendisse tincidunt</a></h4>
                                </div>
                            </div>
                            <!--== End Blog Item ==-->
                        </div>
                        <div class="col-sm-12 col-md-6 mb-8">
                            <!--== Start Blog Item ==-->
                            <div class="post-item">
                                <a href="blog-details.php" class="thumb">
                                    <img class="w-100" src="assets/images/blog/4.jpg" width="570" height="320"
                                        alt="Image-HasTech">
                                </a>
                                <div class="content mt-5">
                                    <a class="post-category me-3" href="blog.html">Fashion</a>
                                    <a class="post-date-two" href="blog.html">19 Mar 2021</a>
                                    <h4 class="title mb-0 mt-1"><a href="blog-details.html">On the other hand we provide
                                            denounce with righteous Merier</a></h4>
                                </div>
                            </div>
                            <!--== End Blog Item ==-->
                        </div>
                        <div class="col-12 mb-8">
                            <nav class="pagination-area">
                                <ul class="page-numbers">
                                    <li>
                                        <a class="page-number active" href="blog-left-sidebar.html">1</a>
                                    </li>
                                    <li>
                                        <a class="page-number" href="blog-left-sidebar.html">2</a>
                                    </li>
                                    <li>
                                        <a class="page-number" href="blog-left-sidebar.html">3</a>
                                    </li>
                                    <li>
                                        <a class="page-number next" href="blog-left-sidebar.html">
                                            <i class="fa fa-angle-right"></i>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="sidebar-area mt-10 mt-lg-n1 pe-lg-10">
                        <div class="widget-item">
                            <form class="widget-search-box" action="#" method="post">
                                <input type="text" id="search2" placeholder="Search">
                                <button type="button" class="btn-src">
                                    <img src="assets/images/icons/search.png" width="16" height="16" alt="Icon">
                                </button>
                            </form>
                        </div>
                        <div class="widget-item pt-3">
                            <h3 class="widget-title">Categories</h3>
                            <?php 
            while ($row = mysqli_fetch_assoc($result)) 
            {
                ?>
                            <div class="widget-categories">
                                <a href="shop.php"><?php echo $row['cat_name'] ;?></a> &nbsp;
                            </div>
                            <?php
                        }
                        ?>
                        </div>
                        <div class="widget-item pt-3">
                            <h3 class="widget-title">Popular Posts</h3>
                            <div class="widget-blog-posts">
                                <a href="news.php" class="widget-blog-post">
                                    <div class="thumb">
                                        <img src="assets/images/blog/w1.jpg" width="85" height="85" alt="Image">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Hot Summer Modern Fashion for Women new arrives</h4>
                                        <span class="post-date">13 Feb 2021</span>
                                        <span class="btn-text">Read More</span>
                                    </div>
                                </a>
                                <a href="news.php" class="widget-blog-post">
                                    <div class="thumb">
                                        <img src="assets/images/blog/w2.jpg" width="85" height="85" alt="Image">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Modern Women Meta Collection Dress Slightly Hoody</h4>
                                        <span class="post-date">13 Feb 2021</span>
                                        <span class="btn-text">Read More</span>
                                    </div>
                                </a>
                                <a href="news.php" class="widget-blog-post">
                                    <div class="thumb">
                                        <img src="assets/images/blog/w3.jpg" width="85" height="85" alt="Image">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">Literature Classical Fashion Merier Ruffled Classic</h4>
                                        <span class="post-date">13 Feb 2021</span>
                                        <span class="btn-text">Read More</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="widget-item pt-2">
                            <h3 class="widget-title">Pin Posts</h3>
                            <div class="widget-blog-posts">
                                <a href="news.php" class="widget-blog-post">
                                    <div class="thumb">
                                        <img src="assets/images/blog/w4.jpg" width="85" height="85" alt="Image">
                                    </div>
                                    <div class="content">
                                        <h4 class="title">My Favorite White Sneaker From new Splurge</h4>
                                        <span class="post-date">13 Feb 2021</span>
                                        <span class="btn-text">Read More</span>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="widget-item mb-10">
                            <h3 class="widget-title mb-3">Newsletter</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit ut aliquam</p>
                            <form class="widget-newsletter-box" action="#" method="post">
                                <input type="text" id="search3" placeholder="Enter your email">
                                <button type="button" class="btn-src">
                                    <img src="assets/images/icons/mail.png" width="16" height="16" alt="Icon">
                                </button>
                            </form>
                        </div>
                        <div class="widget-item mb-0">
                            <a class="widget-banner product-banner-item" href="shop.php">
                                <img class="w-100" src="assets/images/shop/banner/w1.png" width="320" height="320"
                                    alt="Image-HasTech">
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
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