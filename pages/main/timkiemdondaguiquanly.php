<link rel="stylesheet" href="css/table.css">
<?php
         if(isset($_POST['timkiem'])){
            $tukhoa = $_POST['tukhoa'];
        } else{
            $tukhoa = '';
        }
              $sql = "SELECT * FROM dongui,sinhvien WHERE dongui.id_sinhvien = sinhvien.id_sv  AND dongui.tendon LIKE '%$tukhoa%'";
                $query = mysqli_query($mysqli,$sql);
        ?>
<main class="main container" id="main">
    <form class="form-inline" action="index.php?quanly=timkiemdondaguiquanly" method="POST">
        <div class="input-group w-100">
            <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên mẫu đơn"
                aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm
                    kiếm</button>
            </div>
        </div>
    </form>
    <h6 style="text-align: center;padding: 10px;">Tìm kiếm: <?php echo $_POST['tukhoa'];  ?></h6>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Lịch sử gửi đơn</h1>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow"></span></th>
                        <th> Tên sinh viên<span class="icon-arrow"></span></th>
                        <th> Tên mẫu đơn <span class="icon-arrow"></span></th>
                        <th>file <span class="icon-arrow"></span></th>
                        <th>Lí do làm đơn <span class="icon-arrow"></span></th>
                        <th>Thời gian <span class="icon-arrow"></span></th>
                        <th>Tình trạng<span class="icon-arrow"></span></th>
                        <th>Cập nhập trạng thái <span class="icon-arrow"></span></th>
                        <th>Xác nhận <span class="icon-arrow"></span></th>
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
                        <td><?php echo $row['tensv']; ?></td>
                        <td><?php echo $row['tendon']; ?></td>
                        <td> <?php echo $row['file']; ?></td>
                        <td><?php echo $row['noidung']; ?></td>
                        <td><?php echo $row['ngaygui']; ?></td>
                        <td><?php echo $row['tinhtrang']; ?></td>
                        <td> <a class="status pending"
                                href="index.php?quanly=capnhaptrangthaichosinhvien&iddg=<?php echo $row['id_dg']; ?>">Cập nhập </a></td>
                        <td> <a class="status cancelled"
                                href="index.php?quanly=xacnhan&iddg=<?php echo $row['id_dg']; ?>">Xác Nhận </a></td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</main>