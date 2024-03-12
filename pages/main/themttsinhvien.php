<main class="main container" id="main" >
    <div class="container" style="margin-left: 100p;">
    <a href="index.php?quanly=danhsachsinhvien" Class="btn btn-success" style="margin-left: 500px;">Danh sách sinh viên</a>
        <div class="row d-flex justify-content-right align-items-right">
            <div class="col-5">
                <h1 class="mb-5">Thêm thông tin sinh viên</h1>
                <form action="index.php?quanly=xulythemsinhvien" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">CCCD/CMND</label>
                        <input name="cccd" type="text" class="form-control" required >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">BHYT</label>
                        <input name="bhyt" type="text" class="form-control" required >
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Chương trình</label>
                        <input name="chuongtrinh" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày vào trường</label>
                        <input name="ngayvaotruong" type="date" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Ngày tốt nghiệp</label>
                        <input name="ngaytotnghiep" type="date" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tên cha</label>
                        <input name="tencha" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Số điện thoại cha</label>
                        <input name="sodienthoaicha" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Tên mẹ</label>
                        <input name="tenme" type="text" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Số điện thoại me</label>
                        <input name="sodienthoaime" type="text" class="form-control" required>
                    </div>

                    <button type="submit" class="btn btn-primary" name="themttsinhvien">Thêm thông tin sinh viên</button>
                </form>
            </div>

            <div class="col-1"></div>

            <div class="col-6 position-relative">
                <img src="images/sinhvien.jpg" class="w-75 position-absolute top-50 start-50 translate-middle" />
            </div>
        </div>
    </div>

</main>