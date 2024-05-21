<?php
  $sql_sua = "SELECT * FROM dongui WHERE id_dg='$_GET[iddg]' LIMIT 1";
    $query_sua = mysqli_query($mysqli, $sql_sua);
    $row = mysqli_fetch_array($query_sua);
?>
<main class="main container" id="main"></main>
<div class="main p-3">
    <div class="text-center">
        <h1 style="text-align: center;padding: 10px;">Nội dung cần gửi đến sinh viên</h1>
        <form class="row g-3 needs-validation" method="POST"
            action="index.php?quanly=giaiquyetphanhoiqlsvxong&iddg=<?php echo $row['id_dg'] ?>" novalidate
            enctype="multipart/form-data">
            <div class="col-md-12">
                <label for="validationCustom02" class="form-label">Nội dung giải quyết xong </label>
                <textarea class="form-control" id="noidung" rows="5" style="resize: none;" name="noidung"></textarea>
            </div>
            <div class="col-12">
                <button class="btn btn-primary" type="submit" name="gui">Gửi</button>
            </div>
        </form>
    </div>
</div>
</main>