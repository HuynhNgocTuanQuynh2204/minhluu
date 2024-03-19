<main class="main container" id="main" >
    <div class="container" style="margin-left: 100p;">
    <a href="index.php?quanly=danhsachdongui" Class="btn btn-success" style="margin-left: 500px;">Lịch sử gửi đơn</a>
        <div class="row d-flex justify-content-right align-items-right">
            <div class="col-5">
                <h1 class="mb-5">Gửi đơn</h1>
                <form action="index.php?quanly=guimaudon" method="POST" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label class="form-label">Tên mẫu đơn</label>
                        <input name="name" type="text" class="form-control" required >
                    </div>
                    <div class="mb-3">
                        <label class="form-label">file</label>
                        <input name="file" type="file" class="form-control" required>
                    </div>

                    <div class="mb-3">
                        <label class="form-label">Lí do làm đơn</label>
                        <textarea class="form-control" id="noidung" rows="5" style="resize: none;" name="noidung"></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" name="guimaudon">Gửi mẫu đơn</button>
                </form>
                <textarea name="" id="" cols="30" rows="4" style="resize: none;">Vui lòng điền đẩy đủ thông tin ở tờ đơn trước khi nộp file,nếu thiếu thông tin trong tờ đơn thì sẽ ko được giải quyết.Xin cảm ơn!</textarea>
            </div>
              
            <div class="col-1"></div>

            <div class="col-6 position-relative">
                <img src="images/them.jpeg" class="w-75 position-absolute top-50 start-50 translate-middle" />
            </div>
        </div>
    </div>

</main>