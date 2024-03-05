<div class="wrapper">
    <style>
    .wrapper {
        display: flex;
    }
    </style>
    <?php
        include("sidebar/sidebar.php")
        ?>

    <?php
            if(isset($_GET['quanly'])){
                $tam = $_GET['quanly'];
            } else {
                $tam = '';
            }
            if($tam =='hoso'){
                include("main/hoso.php");
            }

            else if($tam =='themsinhvien'){
                include("main/themsinhvien.php");
            }

            else if($tam =='xulythemsinhvien'){
                include("xuly/xulythemsinhvien.php");
            }

            else if($tam =='danhsachsinhvien'){
                include("main/danhsachsinhvien.php");
            }
            
            else {
                include("main/index.php");
            }
          ?>
</div>