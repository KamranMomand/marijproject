<?php
$query = "SELECT `cat_img` FROM `category`";
$result = mysqli_query($conn,$query);

?>

    <div class="container">
  
        <div class="owl-carousel owl-theme">
        <?php
    while ($ci_row = mysqli_fetch_assoc($result)) 
    {
        
    
    ?>
            <div class="item">
                <img src="data:image/jpg;base64,<?php echo base64_encode($ci_row['cat_img']);?>">
            </div>
           
            <?php
    }
    ?>

        </div>

    </div>
    <script>
        $(document).ready(function () {
            $('.owl-carousel').owlCarousel({
                items: 6,
                loop: true,
                margin: 30,
                nav: true,
                autoplay: true,
                autoplayTimeout: 1000,
                autoplayHoverPause: true,
                responsive: {
                    0: {
                        items: 1
                    },
                    600: {
                        items: 3
                    },
                    1000: {
                        items: 5
                    }
                }
            })
        })
    </script>
