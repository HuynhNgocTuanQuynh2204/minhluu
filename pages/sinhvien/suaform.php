<main class="main container" id="main" >
<?php

$sql = "SELECT * FROM form WHERE id_form = '$_GET[idform]'";
   $query = mysqli_query($mysqli,$sql);
   $row = mysqli_fetch_array($query);
?>
    <div class="container" style="margin-left: 100p;">
    <a href="index.php?quanly=lichsuform" Class="btn btn-success" style="margin-left: 500px;">Lịch sử gửi form</a>
        <div class="row d-flex justify-content-right align-items-right">
            <div class="col-5">
                <h1 class="mb-5">Form xác nhận</h1>
                <form action="index.php?quanly=guiform&idform=<?php echo $row['id_form'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Tên mẫu đơn</label>
                        <input name="name" type="text" class="form-control" value="<?php echo $row['tenmaudon'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Hình ảnh minh chứng đã nộp</label>
                        <input name="file" type="file" class="form-control" value="<?php echo $row['file'] ?>">
                    </div>
                    <button type="submit" class="btn btn-primary" name="suaguiform">Gửi</button>
                </form>
            </div>

            <div class="col-1"></div>

            <div class="col-6 position-relative">
                <img src="images/them.jpeg" class="w-75 position-absolute top-50 start-50 translate-middle" />
            </div>
        </div>
    </div>

</main>