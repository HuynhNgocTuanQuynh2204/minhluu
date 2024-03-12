<link rel="stylesheet" href="css/table.css">
<main class="main container" id="main" >
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Danh sách sinh viên</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>
        </section>
        <?php
              $sql = "SELECT * FROM sinhvien ORDER BY id_sv DESC";
                $query = mysqli_query($mysqli,$sql);
        ?>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow"></span></th>
                        <th> Mã sv <span class="icon-arrow"></span></th>
                        <th> Hình ảnh <span class="icon-arrow"></span></th>
                        <th> Tên sinh viên <span class="icon-arrow"></span></th>
                        <th>Ngày sinh<span class="icon-arrow"></span></th>
                        <th> Địa chỉ<span class="icon-arrow"></span></th>
                        <th> Số điện thoại <span class="icon-arrow"></span></th>
                        <th>Lớp <span class="icon-arrow"></span></th>
                        <th>Khoa <span class="icon-arrow"></span></th>
                        <th>Chuyên ngành <span class="icon-arrow"></span></th>
                        <th>Sửa <span class="icon-arrow"></span></th>
                        <th>Xóa <span class="icon-arrow"></span></th>
                        <th>Chi tiết<span class="icon-arrow"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($query)){
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['masv']; ?></td>
                        <td> <img src="images/hinhanhsv/<?php echo $row['hinhanh'] ?>"></td>
                        <td><?php echo $row['tensv']; ?></td>
                        <td><?php echo $row['ngaysinh']; ?></td>
                        <td><?php echo $row['diachi']; ?></td>
                        <td><?php echo $row['sodienthoai']; ?></td>
                        <td><?php echo $row['lop']; ?></td>
                        <td><?php echo $row['khoa']; ?></td>
                        <td><?php echo $row['chuyennganh']; ?></td>
                        <td> <a class="status pending" href="index.php?quanly=suasinhvien&idsv=<?php echo $row['id_sv']; ?>">Sửa </a></td>
                        <td> <a class="status cancelled" href="index.php?quanly=xulythemsinhvien&idsv=<?php echo $row['id_sv']; ?>">Xóa </a></td>
                        <td> <a class="status delivered" href="index.php?quanly=xemthongtinsinhvien&idsv=<?php echo $row['id_sv']; ?>">Xem</a></td>
                    </tr>
                   <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</main>
