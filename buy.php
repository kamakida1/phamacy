
<?php
require './phpfile/conn.php';

 $sql="select*from  drug where id";
   $result=mysqli_query($connect,$sql);
    
   
  
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <link href="css/css/bootstrap.css" rel="stylesheet" />
     <!-- FONTAWESOME STYLES-->
    <link href="css/css/font-awesome.css" rel="stylesheet" />
        <!-- CUSTOM STYLES-->
    <link href="css/css/custom.css" rel="stylesheet" />
     <!-- GOOGLE FONTS-->
   <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />


   
</head>
<body>

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


<?php
    while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
      ?>
     
    <tr>
     <div style="margin:5% 40% 0% 33%;float:left; width:500px; box-shadow:0 0 3px #aaa; height:auto;color:#666;">
   <div style="width:100%; padding:10px; float:left; background:#1ca8dd; color:#fff; font-size:30px; text-align:center;">
    Invoice 
   </div>
    <div style="width:100%; padding:0px 0px;border-bottom:1px solid rgba(0,0,0,0.2);float:left;">
        <div style="width:30%; float:left;padding:10px;">
           
            <span style="font-size:14px;float:left; width:100%;">
                
            </span>
             <span style="font-size:14px;float:left;width:100%;">
                 
                
            </span>
            <span style="font-size:14px;float:left;width:100%;">
           
            </span>
        </div>
        
        <div style="width:40%; float:right;padding:">
            <span style="font-size:14px;float:right;  padding:10px; text-align:right;">
               

           <span style="font-size:14px;float:right;  padding:10px; text-align:right;">
               <b>Invoice# : </b><?php echo $row["ID"];?>
            </span>
   
            
        </div>
    </div>

     <div style="width:100%; padding:0px; float:left;">
     
          <div style="width:100%;float:left;background:#efefef;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;font-weight:600;">
            Decription
           </span>
         <span style="font-weight:600;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
         Amount
        </span>
      </div>
      
      <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
    <?php echo $row["name"];?>
   
     
            <span style="font-size:10px; float:left; width:100%;">
                (Text Consulting)
            </span>
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
          <?php echo $row["price"];?>
        </span>
      </div>
       <div style="width:100%;float:left;">
            <span style="float:left; text-align:left;padding:10px;width:50%;color:#888;">
            Promotional Code            
            <span style="font-size:10px; float:left; width:100%;">
                (0%)
            </span>
        </span>
         <span style="font-weight:normal;float:left;padding:10px ;width:40%;color:#888;text-align:right;">
           <?php echo $row["price"];?>
        </span>
      </div>
      
           <div style="width:100%;float:left; background:#fff;">
           
         <span style="font-weight:600;float:right;padding:10px 0px;width:40%;color:#666;text-align:center;">
           Total : <?php echo $row["price"];?>
                     </span>
                 </tr>

              </body>
        </html>
    </span>
                    </div>       

              </div>
        </div>

</div>
    <a href="uis.php" class="btn btn-warning btn-lg">
          <span class="glyphicon glyphicon-plus"></span> เพิ่มสินค้า 
        </a>

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
