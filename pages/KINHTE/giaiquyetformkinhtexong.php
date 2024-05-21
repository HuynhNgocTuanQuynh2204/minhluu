<?php
require("carbon/autoload.php");
use Carbon\Carbon;
use Carbon\CarbonInterval;
$now = Carbon::now('Asia/Ho_Chi_Minh');
$now->format('Y-m-d H:i:s');
  $id = $_GET['idform'];
  $noidung = $_POST['noidung'];
  $sql_update = "UPDATE form SET tinhtrang = 'Đã hoàn thành đơn', goigam = '" . $noidung . "',thoigianhoanthanh ='$now' WHERE id_form = " . $id;
    $query = mysqli_query($mysqli, $sql_update);

    echo '<script type="text/javascript">alert("Gửi thành công"); window.location.href = "index.php?quanly=danhsachformguisvkinhte"; </script>';
 

?>