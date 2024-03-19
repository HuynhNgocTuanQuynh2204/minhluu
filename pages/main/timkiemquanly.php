<link rel="stylesheet" href="css/table.css">
<?php
        if(isset($_POST['timkiem'])){
            $tukhoa = $_POST['tukhoa'];
        } else{
            $tukhoa = '';
        }
              $sql = "SELECT * FROM quanly WHERE tenql LIKE '%$tukhoa%' ";
                $query = mysqli_query($mysqli,$sql);
        ?>
<main class="main container" id="main" >
<form class="form-inline" action="index.php?quanly=timkiemquanly" method="POST">
        <div class="input-group w-100">
            <input type="search" name="tukhoa" class="form-control" placeholder="Nhập tên quản lý"
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
            <h1>Danh sách quản lí</h1>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow"></span></th>
                        <th> Tên quản lý <span class="icon-arrow"></span></th>
                        <th>Tài khoản<span class="icon-arrow"></span></th>
                        <th>Mật khẩu<span class="icon-arrow"></span></th>
                        <th>Ngày tạo<span class="icon-arrow"></span></th>
                        <th>Sửa <span class="icon-arrow"></span></th>
                        <th>Xóa <span class="icon-arrow"></span></th>
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
                        <td><?php echo $row['tenql']; ?></td>
                        <td><?php echo $row['taikhoan']; ?></td>
                        <td><?php echo $row['matkhau']; ?></td>
                        <td><?php echo $row['ngaytao']; ?></td>
                        <td> <a class="status pending" href="index.php?quanly=suaquanly&idql=<?php echo $row['id_ql']; ?>">Sửa </a></td>
                        <td> <a class="status cancelled" href="index.php?quanly=xulythemquanly&idql=<?php echo $row['id_ql']; ?>">Xóa </a></td>
                    </tr>
                   <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</main>
