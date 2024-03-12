<link rel="stylesheet" href="css/table.css">
<main class="main container" id="main" >
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Thông tin cá nhân</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>
        </section>
        <?php
              $sql = "SELECT * FROM sinhvien,ttsinhvien WHERE sinhvien.id_sv = ttsinhvien.id_sv  ORDER BY ttsinhvien.id_ttsv DESC";
                $query = mysqli_query($mysqli,$sql);
        ?>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow"></span></th>
                        <th>CCCD<span class="icon-arrow"></span></th>
                        <th>BHYT<span class="icon-arrow"></span></th>
                        <th>Chương trình <span class="icon-arrow"></span></th>
                        <th>Ngày vào trường<span class="icon-arrow"></span></th>
                        <th>Ngày tốt nghiệp<span class="icon-arrow"></span></th>
                        <th>Họ và tên cha<span class="icon-arrow"></span></th>
                        <th>SĐT cha<span class="icon-arrow"></span></th>
                        <th>Họ và tên mẹ <span class="icon-arrow"></span></th>
                        <th>Số điện thoại mẹ <span class="icon-arrow"></span></th>
                        <th>Sửa <span class="icon-arrow"></span></th>
                        <th>Xóa <span class="icon-arrow"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    if ($query && mysqli_num_rows($query) > 0) {
                    while($row = mysqli_fetch_array($query)){
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['cccd']; ?></td>
                        <td><?php echo $row['bhyt']; ?></td>
                        <td><?php echo $row['chuongtrinh']; ?></td>
                        <td><?php echo $row['ngayvaotruong']; ?></td>
                        <td><?php echo $row['ngaytotnghiep']; ?></td>
                        <td><?php echo $row['tencha']; ?></td>
                        <td><?php echo $row['sdtcha']; ?></td>
                        <td><?php echo $row['tenme']; ?></td>
                        <td><?php echo $row['sdtme']; ?></td>
                        <td> <a class="status pending" href="index.php?quanly=suasinhvien&idsv=<?php echo $row['id_sv']; ?>">Sửa </a></td>
                        <td> <a class="status cancelled" href="index.php?quanly=xulythemsinhvien&idsv=<?php echo $row['id_sv']; ?>">Xóa </a></td>
                        <td> <a class="status cancelled" href="index.php?quanly=xemthongtinsinhvien&idsv=<?php echo $row['id_sv']; ?>">Xem</a></td>
                    </tr>
                   <?php
                    }}else{
                        echo "<td style='text-align:center;color:red;' colspan='12'>Không có dữ liệu:<a href=\"index.php?quanly=themttsinhvien\">Thêm</a></td>";
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</main>
