<?php
  $sql_sua = "SELECT * FROM dongui WHERE id_dg='$_GET[iddg]' LIMIT 1";
    $query_sua = mysqli_query($mysqli, $sql_sua);
    $row = mysqli_fetch_array($query_sua);
?>
<main class="main container" id="main">
    <div class="text-center">
        <h1 style="text-align: center;padding: 10px;">Vui lòng chọn mức độ ưu tiên và phòng khoa (Bộ phận phụ trách)
            trước khi duyệt</h1>

        <form class="row g-3 needs-validation" method="POST"
            action="index.php?quanly=capnhapmaudon&iddg=<?php echo $row['id_dg'] ?>" novalidate
            enctype="multipart/form-data">
            <div class="col-md-6 mx-auto">
                <label for="validationCustom04" class="form-label">Mức độ ưu tiên</label>
                <select class="form-select" id="validationCustom04" name="mucdo">
                    <option value="Cao">Cao</option>
                    <option value="Trung bình">Trung bình</option>
                    <option value="Thấp">Thấp</option>
                </select>
            </div>
            <div class="col-md-6 mx-auto">
                <label for="inputState" class="form-label">Phòng khoa</label>
                <select id="inputState" class="form-select" name="phongkhoa">
                    <option selected value="Công tác chính trị - Quản Lý sinh viên">Công tác chính trị - Quản Lý sinh viên </option>
                    <option value="Phòng đào tạo">Phòng đào tạo </option>
                    <option value="Khoa Công nghệ thông tin">Công nghệ thông tin</option>
                    <option value="Khoa Kinh tế">Kinh tế</option>
                    <option value="Khoa Sư phạm">Sư phạm</option>
                    <option value="Khoa nông nghiệp">Khoa nông nghiệp</option>
                    <option value="Phòng kế toán">Phòng kế toán</option>
                </select>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="duyet">Gửi</button>
            </div>
        </form>

    </div>
    </div>
</main>