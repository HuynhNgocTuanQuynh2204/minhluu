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
    <form class="form-inline" action="index.php?quanly=timkiemdondaguidaotao" method="POST">
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
                        <th> Khoa<span class="icon-arrow"></span></th>
                        <th> Tên mẫu đơn <span class="icon-arrow"></span></th>
                        <th>file <span class="icon-arrow"></span></th>
                        <th>Lí do làm đơn <span class="icon-arrow"></span></th>
                        <th>Thời gian <span class="icon-arrow"></span></th>
                        <th>Tình trạng<span class="icon-arrow"></span></th>
                        <th>Cập nhập trạng thái <span class="icon-arrow"></span></th>
                        <th>Tiếp nhận đơn<span class="icon-arrow"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($query)){
                        $file_path ="images/dongui/".$row['file'];
                        $i++;
                        if($row['donvicolienquan'] == 'Phòng đào tạo' ){
                        
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['tensv']; ?></td>
                        <td><?php echo $row['khoa']; ?></td>
                        <td><?php echo $row['tendon']; ?></td>
                        <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a></td>
                        <td><?php echo $row['noidung']; ?></td>
                        <td><?php echo $row['ngaygui']; ?></td>
                        <td><?php echo $row['tinhtrang']; ?></td>
                        <?php 
                        if($row['tinhtrang'] != 'Đã xác nhận'){
                            ?>
                        <td> <a class="status pending"
                                href="index.php?quanly=capnhaptrangthaichosinhviendaotao&iddg=<?php echo $row['id_dg']; ?>">Cập nhập </a></td>
                                <?php
                        }
                        ?>
                        <?php 
                        if($row['tinhtrang'] == 'Đã tiếp nhận đơn và gửi về đơn vị có liên quan'){
                            ?>
                        <td> <a class="status cancelled"
                                href="index.php?quanly=capnhapmaudondaotao&iddg=<?php echo $row['id_dg']; ?>">Tiếp nhận đơn </a></td>
                        <?php
                        }else{?>
                         <a class="status cancelled"
                                href="index.php?quanly=xacnhanhoanthanhdaotao&iddg=<?php echo $row['id_dg']; ?>">Xác nhận hoàn thành </a></td>
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