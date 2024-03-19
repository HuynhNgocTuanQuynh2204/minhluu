<?php
$noidung = $_POST['noidung'];
 if(isset($_POST['capnhap'])){
    $sql = "UPDATE form SET tinhtrang = '$noidung' WHERE id_form = '$_GET[idform]'";
    $query = mysqli_query($mysqli,$sql);
    echo '<script type="text/javascript">alert("Cập nhập form thành công"); window.location.href = "index.php?quanly=danhsachformguisv"; </script>';
 }else{
    $idform=$_GET['idform'];
    $sql = "UPDATE form SET tinhtrang = 'Đã tiếp nhận đơn' WHERE id_form = '$idform'";
    $query = mysqli_query($mysqli,$sql);
    echo '<script type="text/javascript">alert("Xác nhận thành công");    window.location.href = "index.php?quanly=danhsachformguisv"; </script>';
 }


?>