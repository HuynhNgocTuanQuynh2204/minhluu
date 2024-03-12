<main class="main container" id="main" >
    <div class="container" style="margin-left: 100p;">
    <a href="index.php?quanly=danhsachsinhvien" Class="btn btn-success" style="margin-left: 500px;">Danh sách sinh viên</a>
        <div class="row d-flex justify-content-right align-items-right">
            <div class="col-5">
                <h1 class="mb-5">Thêm sinh viên</h1>
                <form action="index.php?quanly=xulythemsinhvien" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Họ và tên</label>
                        <input name="name" type="text" class="form-control" required >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Hình ảnh</label>
                        <input name="file" type="file" class="form-control" required >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tài khoản</label>
                        <input name="taikhoan" type="email" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Mật khẩu</label>
                        <input name="matkhau" type="password" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày sinh</label>
                        <input name="ngaysinh" type="date" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Địa chỉ</label>
                        <input name="diachi" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Số điện thoại</label>
                        <input name="sodienthoai" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Lớp</label>
                        <input name="lop" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Khoa</label>
                        <input name="khoa" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Chuyên ngành</label>
                        <input name="chuyennganh" type="text" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="themsinhvien">Thêm sinh viên</button>
                </form>
            </div>

            <div class="col-1"></div>

            <div class="col-6 position-relative">
                <img src="images/sinhvien.jpg" class="w-75 position-absolute top-50 start-50 translate-middle" />
            </div>
        </div>
    </div>

</main>