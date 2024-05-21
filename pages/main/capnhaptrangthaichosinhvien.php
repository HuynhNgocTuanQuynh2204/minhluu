<?php

$sql = "SELECT * FROM dongui WHERE id_dg = '$_GET[iddg]'";
   $query = mysqli_query($mysqli,$sql);
   $row = mysqli_fetch_array($query);
?>
<main class="main container" id="main" >
    <div class="container" style="margin-left: 100p;">
        <div class="row d-flex justify-content-right align-items-right">
            <div class="col-5">
                <h1 class="mb-5">Cập nhập trạng thái đơn</h1>
                <form action="index.php?quanly=capnhapmaudonquanly&iddg=<?php echo $row['id_dg'] ?>" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Nội dung cập nhập</label>
                        <textarea class="form-control" id="noidung" rows="5" style="resize: none;" name="noidung"><?php echo $row['tinhtrang'] ?></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="capnhap">Cập nhập</button>
                </form>
            </div>

            <div class="col-1"></div>

            <div class="col-6 position-relative">
                <img src="images/them.jpeg" class="w-75 position-absolute top-50 start-50 translate-middle" />
            </div>
        </div>
    </div>

</main>