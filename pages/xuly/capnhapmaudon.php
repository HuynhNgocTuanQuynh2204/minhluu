<?php
  $noidung = $_POST['noidung'];

  if(isset($_POST['capnhap'])){
    $sql = "UPDATE dongui SET tinhtrang = '$noidung' WHERE id_dg = '$_GET[iddg]'";
    $query = mysqli_query($mysqli,$sql);
    echo '<script type="text/javascript">alert("Cập nhập mẫu đơn thành công"); window.location.href = "index.php?quanly=danhsachdongui"; </script>';
  }else{
    $id_dg =$_GET['iddg'];
    $sql = "UPDATE dongui SET tinhtrang = 'Đã tiếp nhận đơn' WHERE id_dg = '$id_dg'";
    $query = mysqli_query($mysqli,$sql);
    echo '<script type="text/javascript">alert("Xác nhận thành công");    window.location.href = "index.php?quanly=danhsachdonxinsv"; </script>';
  }

?>