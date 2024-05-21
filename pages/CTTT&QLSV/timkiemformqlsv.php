<link rel="stylesheet" href="css/table.css">
<main class="main container" id="main">
    <form class="form-inline" action="index.php?quanly=timkiemformqlsv" method="POST">
        <div class="input-group w-100">
            <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên mẫu đơn" aria-label="Search">
            <div class="input-group-append">
                <button class="btn btn-outline-success" type="submit" name="timkiem">Tìm
                    kiếm</button>
            </div>
        </div>
    </form>
    <h6 style="text-align: center;padding: 10px;">Tìm kiếm: <?php echo $_POST['tukhoa'];  ?></h6>
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Lịch sử gửi form</h1>
        </section>
        <?php
        if(isset($_POST['timkiem'])){
            $tukhoa = $_POST['tukhoa'];
        } else{
            $tukhoa = '';
        }
              $sql = "SELECT * FROM form,sinhvien WHERE form.id_sinhvien = sinhvien.id_sv   AND form.tenmaudon LIKE '%$tukhoa%'";
                $query = mysqli_query($mysqli,$sql);
        ?>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow"></span></th>
                        <th> Tên sinh viên<span class="icon-arrow"></span></th>
                        <th> Khoa<span class="icon-arrow"></span></th>
                        <th> Tên mẫu đơn <span class="icon-arrow"></span></th>
                        <th>file <span class="icon-arrow"></span></th>
                        <th>Thời gian <span class="icon-arrow"></span></th>
                        <th>Hoàn thành <span class="icon-arrow"></span></th>
                        <th>Tình trạng<span class="icon-arrow"></span></th>
                        <th>Cập nhập trạng thái<span class="icon-arrow"></span></th>
                        <th>Xác nhận <span class="icon-arrow"></span></th>
                        <th>Tiếp nhận đơn<span class="icon-arrow"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_array($query)){
                        $i++;
                        if($row['donvi'] == 'Công tác chính trị - Quản Lý sinh viên' ){
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['tensv']; ?></td>
                        <td><?php echo $row['khoa']; ?></td>
                        <td><?php echo $row['tenmaudon']; ?></td>
                        <td> <?php echo $row['file']; ?></td>
                        <td><?php echo $row['thoigian']; ?></td>
                        <td><?php if($row['thoigianhoanthanh']==0){
                            echo 'Chưa hoàn thành';
                        }else{ echo $row['thoigianhoanthanh']; }?></td>
                        <td><?php echo $row['tinhtrang']; ?></td>
                        <?php 
                        if($row['tinhtrang'] != 'Đã xác nhận'){
                            ?>
                        <td> <a class="status pending"
                                href="index.php?quanly=caonhapformsvqlsv&idform=<?php echo $row['id_form']; ?>">Cập nhập </a></td>
                                <?php
                        }
                        ?>
                                <?php 
                        if($row['tinhtrang'] == 'Đã tiếp nhận đơn và gửi về đơn vị có liên quan'){
                            ?>
                        <td> <a class="status cancelled"
                                href="index.php?quanly=xacnhanformsvqlsv&idform=<?php echo $row['id_form']; ?>">Tiếp nhận đơn </a></td>
                        <?php
                        }else  if($row['tinhtrang'] != 'Đã hoàn thành đơn' && $row['tinhtrang'] != 'Đã xác nhận' ){?>
                         <a class="status cancelled"
                                href="index.php?quanly=xacnhanhoanthanhformqlsv&idform=<?php echo $row['id_form']; ?>">Xác nhận hoàn thành </a></td>
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