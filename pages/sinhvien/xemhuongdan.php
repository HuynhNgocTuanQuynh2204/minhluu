<link rel="stylesheet" href="css/table.css">
<main class="main container" id="main" >
    <main class="table" id="customers_table">
        <section class="table__header">
            <h1>Hướng dẫn làm đơn</h1>
            <div class="input-group">
                <input type="search" placeholder="Search Data...">
                <img src="images/search.png" alt="">
            </div>
        </section>
        <?php
              $sql = "SELECT * FROM maudon WHERE id_md = '$_GET[idmd]'";
                $query = mysqli_query($mysqli,$sql);
        ?>
        <section class="table__body">
            <table>
                <thead>
                    <tr>
                        <th>Hướng dẫn<span class="icon-arrow"></span></th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    while($row = mysqli_fetch_assoc($query)){
                    ?>
                    <tr>
                        <td> <textarea class="form-control" id="tomtat" rows="5" style="resize: none;"
                            name="huongdan"><?php echo $row['huongdan'] ?></textarea></td>
                    </tr>
                   <?php
                    }
                    ?>
                </tbody>
            </table>
        </section>
    </main>
</main>
