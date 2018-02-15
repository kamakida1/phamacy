<?php

require './phpfile/conn.php';

 $sql="select*from drug";
   $result=mysqli_query($connect,$sql);
    
?>

<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>


    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>สินค้ายา | Nova</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/main.css">
    <link rel="stylesheet" href="css/sl-slide.css">

    <script src="js/vendor/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
   <link rel="stylesheet" type="text/css" href="css/shop.css">


    <style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 80%;
}

#customers td, #customers th {
    border: 1px solid #ddd;
    padding: 8px;
}

#customers tr:nth-child(even){background-color: #f2f2f2;}

#customers tr:hover {background-color: #ddd;}

#customers th {
    padding-top: 12px;
    padding-bottom: 12px;
    text-align: left;
    background-color: #4CAF50;
    color: white;


</style>
</head>

<body>

    <!--Header-->
   <header class="navbar navbar-fixed-top">
        <div class="navbar-inner">
            <div class="container">
                <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </a>
                <a id="logo" class="pull-left" href="index.html"></a>
                <div class="nav-collapse collapse pull-right">
                    <ul class="nav">
                        <li class="active"><a href="index.html">หน้าหลัก</a></li>
                        
                        <li><a href="portfolio.php">สินค้ายา</a></li>
                        
                        <li><a href="blog.html">บทความ</a></li> 
                       
                        <li class="login">
                          
                            <style>
.avatar {
    vertical-align: middle;
    width: 40px;
    height: 40px;
    border-radius: 40%;
}
</style>
 <div class="dropdown">
<img src="images\icon\i1.png" alt="Avatar" class="avatar">
    <button class="btn btn-primary dropdown-toggle" type="button" data-toggle="dropdown"><a data-toggle="modal"><i class=""></i>
    <span class="caret"></span></button>
    <ul class="dropdown-menu">

      <li><a href="InputMember.php"><span class="glyphicon glyphicon-user"></span> ประวัติส่วนตัว</a></li>
      <li><a href="index.html"><i class="icon-off"></i> Logout</a></li>
     
    
  </div>
</div>

                        </li>
                    </ul>        
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </header>

    <!-- /header -->

    <section class="title">
        <div class="container">
            <div class="row-fluid">
                <div class="span6">
                    
                </div>
                <div class="span6">
                    <ul class="breadcrumb pull-right">
                        <li><a href="index.html">Home</a> <span class="divider">/</span></li>
                        <li><a href="#">Pages</a> <span class="divider">/</span></li>
                        <li class="active">Portfolio</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- / .title -->     
    <div class="cart-box" id="Normal">
    
</div>

 <center><h2>สินค้ายา</h2><br>

 
    <table width="80%" border="1"  id="customers">
  <tr>
   <th width="10"> <div align="center">เลือก </div></th>
    <th width="20"> <div align="center">รหัสสินค้า </div></th>
    <th width="20"> <div align="center">ชื่อสินค้า </div></th>
    <th width="20"> <div align="center">ราคาสินค้า</div></th>
     <th width="20"> <div align="center">รูปภาพ</div></th>
    
    <th width="20"> <div align="center">จัดการ </div></th>

  </tr></center>
  <?php
    while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
      ?>
     
    <tr>
      <td><div align="center"><input type="checkbox" name=""></div></td>
    <td><div align="center"><?php echo $row["ID"];?></div></td>
    <td><div align="center"><?php echo $row["name"];?></td>
    <td><div align="center"><?php echo $row["price"];?></td>
    <td><center><img src="images/<?php echo $row['photo'];?>" width="200px" height="200px"></td>
    
     <td><br>
       <center><a href="buy.php?ID=<?php echo $row['ID']?> " class="btn btn-warning"><span class="glyphicon glyphicon-edit"></span>  ใส่ตระกร้า</a></center><br>

      
   
  </tr>

<?php
}
?>
</div>
</table><br>
<?php
mysqli_close($connect);
?>
              
</body>
</html>
    

    <!--Bottom-->
    <section id="bottom" class="main">
        <!--Container-->
        <div class="container">

            <!--row-fluids-->
            <div class="row-fluid">

                <!--Contact Form-->
                <div class="span3">
                    <h4>ADDRESS</h4>
                    <ul class="unstyled address">
                        <li>
                            <i class="icon-home"></i><strong>Address:</strong> 1032 Wayback Lane, Wantagh<br>NY 11793
                        </li>
                        <li>
                            <i class="icon-envelope"></i>
                            <strong>Email: </strong> support@email.com
                        </li>
                        <li>
                            <i class="icon-globe"></i>
                            <strong>Website:</strong> www.domain.com
                        </li>
                        <li>
                            <i class="icon-phone"></i>
                            <strong>Toll Free:</strong> 631-409-3105
                        </li>
                    </ul>
                </div>
                <!--End Contact Form-->

                <!--Important Links-->
                <div id="tweets" class="span3">
                    <h4>OUR COMPANY</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">About Us</a></li>
                            <li><a href="#">Support</a></li>
                            <li><a href="#">Terms of Use</a></li>
                            <li><a href="#">Privacy Policy</a></li>
                            <li><a href="#">Copyright</a></li>
                            <li><a href="#">We are hiring</a></li>
                            <li><a href="#">Clients</a></li>
                            <li><a href="#">Blog</a></li>
                        </ul>
                    </div>  
                </div>
                <!--Important Links-->

                <!--Archives-->
                <div id="archives" class="span3">
                    <h4>ARCHIVES</h4>
                    <div>
                        <ul class="arrow">
                            <li><a href="#">December 2012 (1)</a></li>
                            <li><a href="#">November 2012 (5)</a></li>
                            <li><a href="#">October 2012 (8)</a></li>
                            <li><a href="#">September 2012 (10)</a></li>
                            <li><a href="#">August 2012 (29)</a></li>
                            <li><a href="#">July 2012 (1)</a></li>
                            <li><a href="#">June 2012 (31)</a></li>
                        </ul>
                    </div>
                </div>
                <!--End Archives-->

                <div class="span3">
                    <h4>FLICKR GALLERY</h4>
                    <div class="row-fluid first">
                        <ul class="thumbnails">
                          <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>
                        </li>
                    </ul>
                </div>
                <div class="row-fluid">
                    <ul class="thumbnails">
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829524451/" title="01 (6) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7148/6829524451_a725793358_s.jpg" width="75" height="75" alt="01 (6)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829540293/" title="01 (254) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7003/6829540293_bd99363818_s.jpg" width="75" height="75" alt="01 (254)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829537417/" title="01 (196) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7013/6829537417_465d28e1db_s.jpg" width="75" height="75" alt="01 (196)"></a>
                        </li>
                        <li class="span3">
                            <a href="http://www.flickr.com/photos/76029035@N02/6829527437/" title="01 (65) by Victor1558, on Flickr"><img src="http://farm8.staticflickr.com/7021/6829527437_88364c7ec4_s.jpg" width="75" height="75" alt="01 (65)"></a>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
        <!--/row-fluid-->
    </div>
    <!--/container-->

</section>
<!--/bottom-->

<!--Footer-->
<footer id="footer">
    <div class="container">
        <div class="row-fluid">
            <div class="span5 cp">
                &copy; 2013 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ShapeBootstrap</a>. All Rights Reserved.
            </div>
            <!--/Copyright-->

            <div class="span6">
                <ul class="social pull-right">
                    <li><a href="#"><i class="icon-facebook"></i></a></li>
                    <li><a href="#"><i class="icon-twitter"></i></a></li>
                    <li><a href="#"><i class="icon-pinterest"></i></a></li>
                    <li><a href="#"><i class="icon-linkedin"></i></a></li>
                    <li><a href="#"><i class="icon-google-plus"></i></a></li>                       
                    <li><a href="#"><i class="icon-youtube"></i></a></li>
                    <li><a href="#"><i class="icon-tumblr"></i></a></li>                        
                    <li><a href="#"><i class="icon-dribbble"></i></a></li>
                    <li><a href="#"><i class="icon-rss"></i></a></li>
                    <li><a href="#"><i class="icon-github-alt"></i></a></li>
                    <li><a href="#"><i class="icon-instagram"></i></a></li>                   
                </ul>
            </div>

            <div class="span1">
                <a id="gototop" class="gototop pull-right" href="#"><i class="icon-angle-up"></i></a>
            </div>
            <!--/Goto Top-->
        </div>
    </div>
</footer>
<!--/Footer-->

<!--  Login form -->
<div class="modal hide fade in" id="loginForm" aria-hidden="false">
    <div class="modal-header">
        <i class="icon-remove" data-dismiss="modal" aria-hidden="true"></i>
        <h4>Login Form</h4>
    </div>
    <!--Modal Body-->
    <div class="modal-body">
        <form class="form-inline" action="index.html" method="post" id="form-login">
            <input type="text" class="input-small" placeholder="Email">
            <input type="password" class="input-small" placeholder="Password">
            <label class="checkbox">
                <input type="checkbox"> Remember me
            </label>
            <button type="submit" class="btn btn-primary">Sign in</button>
        </form>
        <a href="#">Forgot your password?</a>
    </div>
    <!--/Modal Body-->
</div>
<!--  /Login form -->

<script src="js/vendor/jquery-1.9.1.min.js"></script>
<script src="js/vendor/bootstrap.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>