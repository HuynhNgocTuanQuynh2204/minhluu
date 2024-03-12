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

            else if($tam =='suaquanly'){
                include("main/suaquanly.php");
            }

            else if($tam =='xulythemsinhvien'){
                include("xuly/xulythemsinhvien.php");
            }

            else if($tam =='xulythemquanly'){
                include("xuly/xulythemquanly.php");
            }

            else if($tam =='xulythemmaudonxin'){
                include("xuly/xulythemmaudonxin.php");
            }


            else if($tam =='themquanly'){
                include("main/themquanly.php");
            }

            else if($tam =='danhsachmaudon'){
                include("main/danhsachmaudon.php");
            }

            
            else if($tam =='suamaudon'){
                include("main/suamaudon.php");
            }


            else if($tam =='maudonxinsv'){
                include("sinhvien/maudonxinsv.php");
            }

            else if($tam =='xemhuongdan'){
                include("sinhvien/xemhuongdan.php");
            }

            else if($tam =='danhsachquanly'){
                include("main/danhsachquanly.php");
            }

            else if($tam =='suasinhvien'){
                include("main/suasinhvien.php");
            }

            else if($tam =='themttsinhvien'){
                include("main/themttsinhvien.php");
            }

            else if($tam =='xemthongtinsinhvien'){
                include("main/xemthongtinsinhvien.php");
            }

            else if($tam =='danhsachsinhvien'){
                include("main/danhsachsinhvien.php");
            }

            else if($tam =='donxin'){
                include("main/donxin.php");
            }
            
            else {
                include("main/index.php");
            }
          ?>
</div>