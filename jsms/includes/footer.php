<?php
if(isset($_POST['sub']))
  {
   
    $email=$_POST['email'];
 
     
    $query=mysqli_query($con, "insert into tblsubscriber(Email) value('$email')");
    if ($query) {
   echo "<script>alert('Your subscribe successfully!.');</script>";
echo "<script>window.location.href ='index.php'</script>";
  }
  else
    {
       echo '<script>alert("Something Went Wrong. Please try again")</script>';
    }

  
}
  ?>
  <style>
.whatsapp_float{
       position: fixed;
       bottom: 40px;
       right: 20px;
}
</style>
<div class="whatsapp_float">
   <a href="https:wa.me/919309188879" target="_blank"><img src='images/whatsapp.png' width="50px" class="whatsapp_float_btn"/></a>
</div>
<footer id="footer">
              <div class="container">
                     <div class="cols">
                            <div class="col">
                                   <h3>Shorts Links</h3>
                                  
                                   <ul>
                                          <li><a href="index.php">Home </a></li>
                                          <li><a href="category.php">Category</a></li>
                                          <li><a href="contact.php">Contact Us</a></li>
                                          <li><a href="about.php">About Us</a></li>
                                          <li><a href="admin/index.php">Admin </a></li>
                                   </ul>
                            </div>
                            <div class="col media">
                                   <h3>Social media</h3>
                                   <ul class="social">
                                          <li><a href="https://www.facebook.com/profile.php?id=100091537797821&mibextid=ZbWKwL"><span class="ico ico-fb"></span>Facebook</a></li>
                                          
                                          <li><a href="https://jsdl.in/RSL-PCO1710750765"><span class="ico ico-gp"></span>Google+</a></li>
                                          <li><a href="https://www.instagram.com/shah___jewellers?igsh=cTIxeTNpejZqbmFn"><span class="ico ico-ig"></span></span>Instagram</a></li>
                                   </ul>
                            </div>
                            <div class="col contact">
                                   <?php

$ret=mysqli_query($con,"select * from tblpage where PageType='contactus' ");
$cnt=1;
while ($row=mysqli_fetch_array($ret)) {

?>
                                   <h3><?php  echo $row['PageTitle'];?></h3>
                                   <p style="color: white"><?php  echo $row['Main Road, Sarafa Bazar,Yavatmal - 4454001'];?>Main Road, Sarafa Bazar,<br>Yavatmal - 4454001</p>
                                   <p><span class="ico ico-em"></span><?php  echo $row['Shahjewellers@gmail.com'];?>Shahjewellers@gmail.com</p>
                                   <p><span class="ico ico-ph"></span><?php  echo $row['9822563880'];?>9822563880</p><?php } ?>
                            </div>
                            <div class="col newsletter">

                                   <h3>Join our newsletter</h3>
                                   <p>Subscribe now and get jewellery offer every week in your inbox.</p>
                                   <form action="#" method="post">
                                         <input type="email" name="email" placeholder="Your email address">
                                          <button type="submit" name="sub"></button>
                                   </form>
                            </div>
                     </div>
                     <p class="copy">Shah Jewellers</p>
              </div>
              <!-- / container -->
       </footer>
       <!-- / footer -->