<?php
require'./phpfile/conn.php';
$ID=$_GET['ID'];
$sql="delete from drug where ID=".$ID;
$result=mysqli_query($connect ,$sql);
if($connect->query($sql) === true){
	?>
	<script type="text/javascript">
      alert('Delete success');
    </script>
    <?php
    header('location: ProductBlack.php');
}else{
	?>
<script type="text/javascript">
      alert('Delete success');
    </script>
    <?php
    header('location: ProductBlack.php');
}
?>