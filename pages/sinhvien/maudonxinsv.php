<link rel="stylesheet" href="css/table.css">
<main class="main container" id="main" >
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Danh sách mẫu đơn</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>
        </section>
        <?php
              $sql = "SELECT * FROM maudon ORDER BY id_md DESC";
                $query = mysqli_query($mysqli,$sql);
        ?>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th> Id <span class="icon-arrow"></span></th>
                        <th> Tên mẫu đơn <span class="icon-arrow"></span></th>
                        <th>File<span class="icon-arrow"></span></th>
                        <th>Hướng dẫn<span class="icon-arrow"></span></th>
                        <th>Tải mẫu đơn<span class="icon-arrow"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $i=0;
                    while($row = mysqli_fetch_assoc($query)){
                        $file_path ="images/maudon/".$row['file'];
                        $i++;
                    ?>
                    <tr>
                        <td><?php echo $i; ?></td>
                        <td><?php echo $row['tenmd']; ?></td>
                        <td><?php echo $row['file']; ?></td>
                        <td> <a class="status pending" href="index.php?quanly=xemhuongdan&idmd=<?php echo $row['id_md']; ?>">Xem hướng dẫn</a></td>
                        <td><a href="<?php echo $file_path; ?>" class="btn btn-primary" download>Download</a></td>
                    </tr>
                   <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</main>
