<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-nk8Xo79GjVYBl58b3AI42Dz6Ok3IW8l1DQHwfZU5vOd6y86Y23c9yXwr0FrxQd+PX9qM1mEAK/LVZO58gTpvRg==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>
<header id="header">
        <div class="container">
            <img src="images/SJ Logo.jpg"  width="50" height="50" >
            <strong style= "font-size: 30px;"><a href="index.php">Shah Jewellers</a></strong>
            <div class="right-links">
                <ul>
                     <?php if (strlen($_SESSION['jsmsuid']>0)) {?>
                    <li> <?php
                            $userid= $_SESSION['jsmsuid'];
$ret2=mysqli_query($con,"select sum(products.shippingCharge+products.productPrice) as total,COUNT(orders.PId) as totalp from orders join products on products.id=orders.PId where orders.UserId='$userid' and orders.IsOrderPlaced is null");
$resultss=mysqli_fetch_array($ret2);

?>
                        <a href="cart.php"><span class="ico-products"></span><?php echo $resultss['totalp'];?> cart, <?php echo $resultss['total'];?></a></li>
                   <li><a href="wishlist.php"><span class="ico-heart"></span>Wishlist</a></li>
                    <li><a href="profile.php"><span class="ico-account"></span>My Profile</a></li>
                    <li><a href="my-orders.php"><span class="ico-cart"></span>My Orders</a></li>
                    <li><a href="change-password.php"><span class="ico-signout"></span>Setting</a></li>
                    <li><a href="logout.php"><span class="ico-signout"></span>Sign out</a></li><?php }?>
                </ul>
            </div>
        </div>
        <!-- / container -->
    </header>
    <!-- / header -->

    <nav id="menu">
        <div class="container">
            <div class="trigger"></div>
            <ul>

                <img src="images/SJ Logo.jpg"  width="50" height="50" >
                <li><a href="index.php">Home</a></li>
                 <li><a href="about.php">About Us</a></li>
                  <li><a href="products.php">Products</a></li>
                <li><a href="category.php">Category</a></li>
               
               
                <li><a href="contact.php">Contact Us</a></li>
                <?php if (strlen($_SESSION['jsmsuid']==0)) {?>
                <li><a href="signup.php">Register</a></li>
                <li><a href="login.php">Login</a></li><?php }?>
            </ul>
        </div>
        <!-- / container -->
    </nav>
    <!-- / navigation -->