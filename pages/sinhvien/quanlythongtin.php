<?php
$sql = "SELECT * FROM ttsinhvien WHERE id_sv = '$_SESSION[id_sv]'";
$query = mysqli_query($mysqli, $sql);
$row = mysqli_fetch_array($query);

if (isset($_POST['capnhap'])) {
    // Lấy thông tin từ form
    $cccd = $_POST['cccd'];
    $bhyt = $_POST['bhyt'];
    $chuongtrinh = $_POST['chuongtrinh'];
    $ngayvaotruong = $_POST['ngayvaotruong'];
    $ngaytotnghiep = $_POST['ngaytotnghiep'];
    $tencha = $_POST['tencha'];
    $sdtcha = $_POST['sdtcha'];
    $tenme = $_POST['tenme'];
    $sdtme = $_POST['sdtme'];

    // Kiểm tra xem thông tin đã tồn tại trong cơ sở dữ liệu chưa
    if ($row) {
        // Nếu đã tồn tại, thực hiện cập nhật
        $sql_update = "UPDATE ttsinhvien SET cccd = '$cccd', bhyt = '$bhyt', chuongtrinh = '$chuongtrinh', 
                       ngayvaotruong = '$ngayvaotruong', ngaytotnghiep = '$ngaytotnghiep', tencha = '$tencha', 
                       sdtcha = '$sdtcha', tenme = '$tenme', sdtme = '$sdtme' WHERE id_sv = '$_SESSION[id_sv]'";
        $result_update = mysqli_query($mysqli, $sql_update);
        if ($result_update) {
            echo '<script type="text/javascript">alert("Cập nhật thông tin thành công"); window.location.href = "index.php?quanly=quanlythongtin"; </script>';
        } else {
            echo '<script type="text/javascript">alert("Cập nhật thông tin không thành công"); window.location.href = "index.php?quanly=quanlythongtin"; </script>';
        }
    } else {
        // Nếu chưa tồn tại, thực hiện thêm mới
        $sql_insert = "INSERT INTO ttsinhvien (id_sv, cccd, bhyt, chuongtrinh, ngayvaotruong, ngaytotnghiep, tencha, sdtcha, tenme, sdtme) 
                       VALUES ('$_SESSION[id_sv]', '$cccd', '$bhyt', '$chuongtrinh', '$ngayvaotruong', '$ngaytotnghiep', '$tencha', '$sdtcha', '$tenme', '$sdtme')";
        $result_insert = mysqli_query($mysqli, $sql_insert);
        if ($result_insert) {
            echo '<script type="text/javascript">alert("Thêm mới thông tin thành công"); window.location.href = "index.php?quanly=quanlythongtin"; </script>';
        } else {
            echo '<script type="text/javascript">alert("Thêm mới thông tin không thành công"); window.location.href = "index.php?quanly=quanlythongtin"; </script>';
        }
    }
}
?>

<main class="main container" id="main">
    <div class="container">
        <div class="row d-flex justify-content-right align-items-right">
            <div class="col-5">
                <h1 class="mb-5">Thông tin cá nhân</h1>
                <form action="" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">CCCD</label>
                        <input name="cccd" type="text" class="form-control" value="<?php echo $row['cccd'] ?? '' ?>" >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">BHYT</label>
                        <input name="bhyt" type="text" class="form-control" value="<?php echo $row['bhyt'] ?? '' ?>" >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Chương trình</label>
                        <input name="chuongtrinh" type="text" class="form-control" value="<?php echo $row['chuongtrinh'] ?? '' ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày vào trường</label>
                        <input name="ngayvaotruong" type="date" class="form-control" value="<?php echo $row['ngayvaotruong'] ?? '' ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày tốt nghiệp</label>
                        <input name="ngaytotnghiep" type="date" class="form-control" value="<?php echo $row['ngaytotnghiep'] ?? '' ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tên cha</label>
                        <input name="tencha" type="text" class="form-control" value="<?php echo $row['tencha'] ?? '' ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">SĐT Cha</label>
                        <input name="sdtcha" type="text" class="form-control" value="<?php echo $row['sdtcha'] ?? '' ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tên mẹ</label>
                        <input name="tenme" type="text" class="form-control" value="<?php echo $row['tenme'] ?? '' ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">SĐT Mẹ</label>
                        <input name="sdtme" type="text" class="form-control" value="<?php echo $row['sdtme'] ?? '' ?>">
                    </div>

                    <button type="submit" class="btn btn-primary" name="capnhap">Cập nhập</button>
                </form>
            </div>

            <div class="col-1"></div>

            <div class="col-6 position-relative">
                <img src="images/sinhvien.jpg" class="w-75 position-absolute top-50 start-50 translate-middle" />
            </div>
        </div>
    </div>
</main>
