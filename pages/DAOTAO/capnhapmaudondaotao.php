<?php
  $noidung = $_POST['noidung'];

    $id_dg =$_GET['iddg'];
    $sql = "UPDATE dongui SET tinhtrang = '$noidung' WHERE id_dg = '$id_dg'";
    $query = mysqli_query($mysqli,$sql);
    echo '<script type="text/javascript">alert("Đã cập nhập trạng thái thành công");    window.location.href = "index.php?quanly=danhsachmaudonxinsvdaotao"; </script>';
 

?>