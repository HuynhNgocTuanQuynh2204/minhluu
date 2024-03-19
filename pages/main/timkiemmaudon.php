<link rel="stylesheet" href="css/table.css">
<main class="main container" id="main">
    <?php
        if(isset($_POST['timkiem'])){
            $tukhoa = $_POST['tukhoa'];
        } else{
            $tukhoa = '';
        }
              $sql = "SELECT * FROM maudon WHERE tenmd LIKE '%$tukhoa%'";
                $query = mysqli_query($mysqli,$sql);
        ?>
    <form class="form-inline" action="index.php?quanly=timkiemmaudon" method="POST">
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
            <h1>Danh sách mẫu đơn</h1>
        </section>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow"></span></th>
                        <th> Tên mẫu đơn <span class="icon-arrow"></span></th>
                        <th>File<span class="icon-arrow"></span></th>
                        <th>Hướng dẫn<span class="icon-arrow"></span></th>
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
                        <td><?php echo $row['tenmd']; ?></td>
                        <td><?php echo $row['file']; ?></td>
                        <td><?php echo $row['huongdan']; ?></td>
                        <td> <a class="status pending"
                                href="index.php?quanly=suamaudon&idmd=<?php echo $row['id_md']; ?>">Sửa </a></td>
                        <td> <a class="status cancelled"
                                href="index.php?quanly=xulythemmaudonxin&idmd=<?php echo $row['id_md']; ?>">Xóa </a>
                        </td>
                    </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</main>