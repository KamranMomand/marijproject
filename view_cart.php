<?php
session_start();
include 'header.php';
include 'connection.php';
// $total=0;
// $p_query = "select * from product where p_id in (".implode(',',$_SESSION['cart']).")";
// $p_result = mysqli_query($conn,$p_query);
// $_SESSION['total']=$total;
?>
 
 <!-- Cart Start -->
 <div class="container-fluid pt-5">
 <form method="post" action="update_cart.php">
 
        <div class="row px-xl-5">
        
            <div class="col-lg-12 table-responsive mb-5">
            
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                        <?php
                        if($p_result)
                        {
                            while($p_row=mysqli_fetch_array($p_result))
                            {
                        ?>
                        <tr>
                        <input type="hidden" name="indexes[]" value="<?php echo $index;?>"/>
                            <td class="align-middle"><img src="data:image/jpg;base64,<?php echo base64_encode($p_row['p_image']);?>" alt="" style="width: 50px;"> <?php echo $p_row['p_name'];?></td>
                            <td class="align-middle"><?php echo $p_row['p_price'];?></td>
                            <td class="align-middle">
                                <div class="input-group quantity mx-auto" style="width: 100px;">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-minus" >
                                        <i class="fa fa-minus"></i>
                                        </button>
                                    </div>
                                    <input type="text" class="form-control form-control-sm bg-secondary text-center" value="<?php echo $_SESSION['qty'][$index];?>" name="quantity_<?php echo $index;?>">
                                    <div class="input-group-btn">
                                        <button class="btn btn-sm btn-primary btn-plus">
                                            <i class="fa fa-plus"></i>
                                        </button>
                                    </div>
                                </div>
                            </td>
                            <td class="align-middle"><?php echo $p_row['p_price']*$_SESSION['qty'][$index];?></td>
                            <td class="align-middle"><a href="remove_cart.php?pid=<?php echo $p_row['p_id'];?>&index=<?php echo $index;?>" class="btn btn-sm btn-primary"><i class="fa fa-times"></i></a></td>
                        </tr>
                        <?php
                        $total+=($p_row['p_price']*$_SESSION['qty'][$index]);
                        $_SESSION['total']=$total;
                        $index++;    
                        
                        }
                    }else{
                        echo "No Product in Cart";
                    }
                        ?>
                    </tbody>
                </table>
                
            </div>
            <div class="col-lg-4">
                <input type="submit" class="btn btn-primary" value="Update Cart"/>
            </div>
           
            <div class="col-lg-8">
                <form class="mb-5" action="">
                    <div class="input-group">
                        <input type="text" class="form-control p-4" placeholder="Coupon Code">
                        <div class="input-group-append">
                            <button class="btn btn-primary">Apply Coupon</button>
                        </div>
                    </div>
                </form>
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium"><?php echo $total;?></h6>
                        </div>
                        <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">$10</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold"><?php echo $total;?></h5>
                        </div>
                        <a href="checkout.php" class="btn btn-block btn-primary my-3 py-3">Proceed To Checkout</a>
                    </div>
                </div>
            </div>
            </form>
        </div>
    </div>
    <!-- Cart End -->
    <?php
include 'footer.php';

?>