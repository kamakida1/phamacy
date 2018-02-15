<?php
require './phpfile/conn.php';

 $sql="select* from drug ";
   $result=mysqli_query($connect,$sql);
    
   
  
?>

<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  
 <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-responsive.min.css">
  <link rel="stylesheet" href="css/font-awesome.min.css">
  


 <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Simple Responsive Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="css/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="css/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
   <link rel="stylesheet" type="text/css" href="css/css/navbar.css">


    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<style>
#customers {
    font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
    border-collapse: collapse;
    width: 100%;
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
 

 
  <title></title>
 
</head>
<body>

<div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="images/imgend/logo.png" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                 <form action="index.html" method="post">
     <center><button type="submit" class="btn btn-danger btn-md">Logout</button></center>
   </form>

                </span>
            </div>
        </div>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">

         <style>
.accordion {
    background-color: #eee;
    color: #444;
    cursor: pointer;
    padding: 18px;
    width: 100%;
    border: none;
    text-align: left;
    outline: none;
    font-size: 15px;
    transition: 0.4s;
}

.active, .accordion:hover {
    background-color: #ccc;
}

.accordion:after {
    content: '\002B';
    color: #777;
    font-weight: bold;
    float: right;
    margin-left: 5px;
}

.active:after {
    content: "\2212";
}

.panel {
    padding: 0 18px;
    background-color: white;
    max-height: 0;
    overflow: hidden;
    transition: max-height 0.2s ease-out;
}
</style>
</head>
<body>

<h2>จัดการ</h2>

<button class="accordion glyphicon glyphicon-shopping-cart">สินค้า</button>
<div class="panel">
 
 <a href="uis.php"> - เพิ่มสินค้า</a><br>
 <a href="ProductBlack.php"> - สินค้าในคลัง</a><br>
 
</div>

<button class="accordion glyphicon glyphicon-user">สมาชิก</button>
<div class="panel">
 <a href="MemberBack.php"> - รายชื่อสมาชิก</a><br>
 
</div>

<button class="accordion glyphicon glyphicon-file">รายการสังซื้อ</button>
<div class="panel">
 <a href="buy.php"> - รายการสั่งซื้อ</a><br>
 
</div>

<script>
var acc = document.getElementsByClassName("accordion");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.maxHeight){
      panel.style.maxHeight = null;
    } else {
      panel.style.maxHeight = panel.scrollHeight + "px";
    } 
  });
}
</script>

                 

                    
                            </div>

        </nav>
          <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>BLANK PAGE </h2> 
                       <ol class="breadcrumb">
    <li><span class="glyphicon glyphicon-home"></span> <a href="Home.html">จัดการระบบ</a></li>
        <li> <span class="glyphicon glyphicon-shopping-cart"></span></span> <a href=blanks.html>สินค้า</a><li>     
  </ol>


                     <a href="uis.php" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-plus"></span> เพิ่มสินค้า 
        </a>
       <a href="checkbox.php" class="btn btn-success btn-lg">
          <span class="glyphicon glyphicon-plus"></span> เพิ่มสินค้า 
        </a>
       
          </div>
        </div>    
 <hr />
 
<br>
  <center><h2>สินค้าในคลัง</h2><br>
 
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
   <form method="post" action="checkbox.php">

    <td><div align="center"><center><a href="checkbox.php " class="btn btn-success"><input type="checkbox" name="[]" value="checkbox">  เลือก</a></center></div></td>

    <td><div align="center"><?php echo $row["ID"];?></div></td>
    <td><div align="center"><?php echo $row["name"];?></td>
    <td><div align="center"><?php echo $row["price"];?></td>
   <td><center><img src="images/<?php echo $row['photo'];?>" width="200px" height="200px"></center></td>
     <td><br>
       <center><a href="UpProductBack.php?ID=<?php echo $row['ID']?> " class="btn btn-success"><span class="glyphicon glyphicon-edit"></span>  Edit</a></center><br>

       <center><a href="delProBlack.php?ID=<?php echo $row['ID']?> " class="btn btn-danger"><span class="glyphicon glyphicon-trash"></span> Delete</a></center><br>

   
  </tr>
</form>
<?php
}
?>
</div>
</table><br>
<?php
mysqli_close($connect);
?>
   <div class="row">
                    <div class="col-lg-12 ">
          <br/>
                        <div class="alert alert-danger">
                             <strong>Want More Icons Free ? </strong> Checkout fontawesome website and use any icon <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">Click Here</a>.
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
    <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
                </div>
            </div>
        </div>
          

     <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="js/js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="js/js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="js/js/custom.js"></script>
    
             
</body>
</html>