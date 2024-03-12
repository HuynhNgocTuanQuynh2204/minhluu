<main class="main container" id="main">
    <?php

$sql = "SELECT * FROM quanly WHERE id_ql = '$_GET[idql]'";
   $query = mysqli_query($mysqli,$sql);
   $row = mysqli_fetch_array($query);
?>
    <div class="container" style="margin-left: 100p;">
        <a href="index.php?quanly=danhsachquanly" Class="btn btn-success" style="margin-left: 500px;">Danh sách quản
            lí</a>
        <div class="row d-flex justify-content-right align-items-right">
            <div class="col-5">
                <h1 class="mb-5">Sửa quản lí</h1>
                <form action="index.php?quanly=xulythemquanly&idql=<?php echo $row['id_ql'] ?>" method="POST"
                    enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Tên quản lí</label>
                        <input name="name" type="text" class="form-control" value="<?php echo $row['tenql'] ?>">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Tài khoản</label>
                        <input name="taikhoan" type="email" class="form-control" value="<?php echo $row['taikhoan'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mật khẩu</label>
                        <input name="matkhau" type="password" class="form-control"
                            value="<?php echo $row['matkhau'] ?>">
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Quyền hạn</label>
                        <input name="quyenhan" type="text" class="form-control" value="<?php echo $row['quyenhan'] ?>">
                    </div>

                    <button type="submit" class="btn btn-primary" name="suaquanly">Sửa quản lý</button>
                </form>
            </div>

            <div class="col-1"></div>

            <div class="col-6 position-relative">
                <img src="images/quanly.jpeg" class="w-75 position-absolute top-50 start-50 translate-middle" />
            </div>
        </div>
    </div>

</main>