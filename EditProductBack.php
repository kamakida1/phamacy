<?php

require './phpfile/conn.php';
 $ID=$_POST['ID'];
 
  $ID=$_POST['ID'];
  $name=$_POST['name'];
  $price=$_POST['price'];
  $photo=$_POST['photo'];
 
   $sql = 'UPDATE drug SET ID = "'.$ID.'",name= "'.$name.
  '",price = "'.$price.'",photo = "'.$photo.'" WHERE ID = "'.$ID.'" ';
  if ($connect->query($sql) === TRUE) {
    ?>
    <script type="text/javascript">
      alert('Edit success');
    </script>
    <?php
    header('location: ProductBlack.php');
} else {
?>
  <script type="text/javascript">
    alert('Please Try Again');
  </script>
<?php
  header('location: ProductBlack.php');
}
?>


