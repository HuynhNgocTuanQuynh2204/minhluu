<link rel="stylesheet" href="css/table.css">
<main class="main container" id="main">
    <form class="form-inline" action="index.php?quanly=timkiemform" method="POST">
        <div class="input-group w-100">
            <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên mẫu đơn" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm
                    kiếm</button>
            </div>
        </div>
    </form>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Lịch sử gửi form</h1>
        </section>
        <?php
              $sql = "SELECT * FROM form,sinhvien WHERE form.id_sinhvien = sinhvien.id_sv  ORDER BY form.id_form DESC";
                $query = mysqli_query($mysqli,$sql);
        ?>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow"></span></th>
                        <th> Tên sinh viên<span class="icon-arrow"></span></th>
                        <th> Tên mẫu đơn <span class="icon-arrow"></span></th>
                        <th>file <span class="icon-arrow"></span></th>
                        <th>Thời gian <span class="icon-arrow"></span></th>
                        <th>Tình trạng<span class="icon-arrow"></span></th>
                        <th>Sửa <span class="icon-arrow"></span></th>
                        <th>Xóa <span class="icon-arrow"></span></th>
                        <th>Xác nhận<span class="icon-arrow"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($query)){
                        $i++;
                        if($row['id_sinhvien'] == $_SESSION['id_sv']){
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['tensv']; ?></td>
                        <td><?php echo $row['tenmaudon']; ?></td>
                        <td> <?php echo $row['file']; ?></td>
                        <td><?php echo $row['thoigian']; ?></td>
                        <td><?php echo $row['tinhtrang']; ?></td>
                        <?php 
                        if($row['tinhtrang'] != 'Đã tiếp nhận đơn' && $row['tinhtrang'] != 'Đã xác nhận'){
                            ?>
                        <td> <a class="status pending"
                                href="index.php?quanly=suaform&idform=<?php echo $row['id_form']; ?>">Sửa </a></td>
                                <?php
                        }
                        ?>
                        <td> <a class="status cancelled"
                                href="index.php?quanly=guiform&idform=<?php echo $row['id_form']; ?>">Xóa </a></td>
                                <?php
                                if($row['tinhtrang'] != 'Đã xác nhận' && $row['tinhtrang'] == 'Đã tiếp nhận đơn'){
                            ?>
                        <td> <a class="status cancelled"
                                href="index.php?quanly=xacnhansinhvienform&idform=<?php echo $row['id_form']; ?>">Xác nhận </a></td>
                                <?php
                        }
                        ?>
                    </tr>
                    <?php
                    }}
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</main>