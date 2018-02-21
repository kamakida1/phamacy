<?php
require './phpfile/conn.php';

 $sql="select*from drug";
   $result=mysqli_query($connect,$sql);
    
?>

<link rel="stylesheet" type="text/css" href="css/header.css">
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link rel="stylesheet" type="text/css" href="css/h.css">
<script src="js/h.js"></script>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
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

}
#n{
    text-align: right;
}

</style>
</head>

<body>

   <div class="menu">
    <div class="container-fluid">
        <div class="navbar-header">
            <a href="#">Bootsnipp</a>
        </div>
        <div>
            <ul class="nav navbar-nav navbar-right">
                <li><a href="#" ><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
                <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
            </ul>
        </div>
    </div>
</div>


 <br><br><br>   <!-- / .title -->  
<div class="container">
    <div class="well well-sm">
        <strong>Category Title</strong>
        <div class="btn-group">
            <a href="#" id="grid" class="btn btn-default btn-sm"><span class="glyphicon glyphicon-th-list">
            </span> List</a> <a href="#"  id="list" class="btn btn-default btn-sm"><span
                class="glyphicon glyphicon-th"></span> Grid</a>
        </div>
    </div>

    <?php
    while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
      ?>
    <div id="products" class="row list-group">
        <div class="item  col-xs-3 col-sm-3 col-md-3">
            <div class="thumbnail">
                <img src="images/<?php echo $row['photo'];?>" width="200px" height="200px">
                <div class="caption">
                    <h4 class="group inner list-group-item-heading">
                        <?php echo $row["ID"];?></h4>
                    <p class="group inner list-group-item-text">
                        <?php echo $row["name"];?></p>
                    <div class="row">
                        <div class="col-xs-12 col-md-6">
                            <p class="lead">
                                $21.000</p>
                        </div>
           <div class="col-xs-12 col-md-6">
                            <a class="btn btn-warning" href="BuyProduct.php">ใส่ตะกร้า</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-md-6">
                </div>

            </div>
        </div>

<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
          <p>Some text in the modal.</p>
          <p>thfhfd</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>
   
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
    

    