
<?php

require'./phpfile/conn.php';
$IDy=$_GET['IDy'];
$sql="select *from drug where ID=".$ID;
$result=mysqli_query($connect,$sql);
$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
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

<link rel="stylesheet" type="text/css" href="css/uploadPhoto.css">

 <script type="js/upPhoto.js"></script>
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
                        <img src="assets/img/logo.png" />
                    </a>
                </div>
              
                 <span class="logout-spn" >
                  <a href="index.html" style="color:#fff;">LOGOUT</a>  

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

<h2>Accordion with symbols</h2>

<button class="accordion glyphicon glyphicon-shopping-cart">สินค้า</button>
<div class="panel">
 
 <a href="uis.php"> - เพิ่มสินค้า</a><br>
 <a href="ProductBlack.php"> - สินค้าในคลัง</a><br>
 
</div>

<button class="accordion glyphicon glyphicon-user">สมาชิก</button>
<div class="panel">
 <a href="MemberBack.php"> - รายการสมาชิก</a><br>
 
</div>

<button class="accordion glyphicon glyphicon-file">รายการสังซื้อ</button>
<div class="panel">
 <a href="buy.php"> - รายการสั่ซื้อ</a><br>
 
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

        <!-- /. NAV SIDE  -->
        <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                     <h2>แก้ไขข้อมูลสินค้า </h2> 
                       <ol class="breadcrumb">
    <li><span class="glyphicon glyphicon-home"></span> <a href="Home.html">จัดการระบบ</a></li>
        <li> <span class="glyphicon glyphicon-shopping-cart"></span></span> <a href=blanks.html>สินค้า</a><li>     
  </ol>


               
       


                    </div>
                </div>    

                 <!-- /. ROW  -->
                  <hr />
           <table width="80%" border="1">  
  <section id="registration-page" class="container">
    <form class="center" action='EditProductBack.php' method="POST">
      <fieldset class="registration-form">
        <div class="control-group">
          
        <div class="control-group">
          <!-- E-mail -->
          <div class="controls">

            รหัสสินค้า : <input type="text" id="IDy" name="IDy" placeholder="IDy" class="input-xlarge" style="width: 300px" value="<?php echo $row['IDy']?>">
          </div>
          

        <div class="control-group">
          <!-- E-mail -->
          <div class="controls">
            ชื่อสินค้า : <input type="text" id="name" name="name" placeholder="name" class="input-xlarge" value="<?php echo $row['name']?>">
          </div>
        </div>

        <div class="control-group">
          <!-- Password-->
          <div class="controls">
            ราคาสินค้า :  <input type="password" id="price" name="price" placeholder="price" class="input-xlarge" value="<?php echo $row['price']?>">
          </div>
        </div>

    <br>
        <input type='file'  name="photo" onchange="readURL(this);" /><br><br>
<img id="blah" src="http://placehold.it/180" alt="your image" value="<?php echo $row['photo']?>" />

        <br>

        <div class="control-group">
          <!-- Button -->
          <div class="controls">
            <br> <button class="btn btn-success ">แก้ไขสินค้า</button>   <a href="ProductBlack.php">สินค้าในคลัง</a>

            
           </table>

             <br>
         </div>
        </div>
      </fieldset>
    </form>
  </section>
                 <!-- /. ROW  -->           
    </div>
             <!-- /. PAGE INNER  -->
            </div>
         <!-- /. PAGE WRAPPER  -->
        </div>
        <script type="text/javascript">
 function readURL(input) {
            if (input.files && input.files[0]) {
                var reader = new FileReader();

                reader.onload = function (e) {
                    $('#blah')
                        .attr('src', e.target.result);
                };

                reader.readAsDataURL(input.files[0]);
            }
        }
        </script>
  <!-- /#registration-page -->

<!--Bottom-->
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
    
  