<main class="main container" id="main" >
    <div class="container" style="margin-left: 100p;">
    <a href="index.php?quanly=danhsachmaudon" Class="btn btn-success" style="margin-left: 500px;">Danh sách các loại đơn xin</a>
        <div class="row d-flex justify-content-right align-items-right">
            <div class="col-5">
                <h1 class="mb-5">Thêm các loại đơn xin</h1>
                <form action="index.php?quanly=xulythemmaudonxin" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Tên mẫu đơn</label>
                        <input name="name" type="text" class="form-control" required >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">file</label>
                        <input name="file" type="file" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Hướng dẫn đơn</label>
                        <textarea class="form-control" id="tomtat" rows="5" style="resize: none;" name="huongdan"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="themmaudon">Thêm mẫu đơn</button>
                </form>
            </div>

            <div class="col-1"></div>

            <div class="col-6 position-relative">
                <img src="images/them.jpeg" class="w-75 position-absolute top-50 start-50 translate-middle" />
            </div>
        </div>
    </div>

</main>