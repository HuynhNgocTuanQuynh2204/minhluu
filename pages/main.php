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

            else if($tam =='caonhapformsv'){
                include("main/caonhapformsv.php");
            }

            else if($tam =='suaquanly'){
                include("main/suaquanly.php");
            }

            else if($tam =='danhsachformguisv'){
                include("main/danhsachformguisv.php");
            }

            else if($tam =='timkiemformquanly'){
                include("main/timkiemformquanly.php");
            }

            else if($tam =='xacnhanformsv'){
                include("xuly/xacnhanformsv.php");
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

            else if($tam =='guimaudon'){
                include("xuly/guimaudon.php");
            }

            else if($tam =='xacnhansinhviendonxin'){
                include("xuly/xacnhansinhviendonxin.php");
            }

            else if($tam =='xacnhansinhvienform'){
                include("xuly/xacnhansinhvienform.php");
            }

            else if($tam =='capnhapmaudon'){
                include("xuly/capnhapmaudon.php");
            }

            else if($tam =='guiform'){
                include("xuly/guiform.php");
            }

            else if($tam =='themquanly'){
                include("main/themquanly.php");
            }

            else if($tam =='danhsachmaudon'){
                include("main/danhsachmaudon.php");
            }

            else if($tam =='timkiemsinhvien'){
                include("main/timkiemsinhvien.php");
            }

            else if($tam =='suamaudon'){
                include("main/suamaudon.php");
            }

            else if($tam =='timkiemdondaguiquanly'){
                include("main/timkiemdondaguiquanly.php");
            }

            else if($tam =='capnhaptrangthaichosinhvien'){
                include("main/capnhaptrangthaichosinhvien.php");
            }

            else if($tam =='timkiemmaudon'){
                include("main/timkiemmaudon.php");
            }

            else if($tam =='danhsachdonxinsv'){
                include("main/danhsachdonxinsv.php");
            }

            else if($tam =='timkiemquanly'){
                include("main/timkiemquanly.php");
            }

            else if($tam =='doimatkhausv'){
                include("main/doimatkhausv.php");
            }

            else if($tam =='lichsuform'){
                include("sinhvien/lichsuform.php");
            }

            else if($tam =='maudonxinsv'){
                include("sinhvien/maudonxinsv.php");
            }

            else if($tam =='timkiemmaudoncosan'){
                include("sinhvien/timkiemmaudoncosan.php");
            }

            else if($tam =='formxacnhan'){
                include("sinhvien/formxacnhan.php");
            }

            else if($tam =='timkiemform'){
                include("sinhvien/timkiemform.php");
            }

            else if($tam =='timkiemdondagui'){
                include("sinhvien/timkiemdondagui.php");
            }

            else if($tam =='suaform'){
                include("sinhvien/suaform.php");
            }


            else if($tam =='danhsachdongui'){
                include("sinhvien/danhsachdongui.php");
            }

            else if($tam =='quanlythongtin'){
                include("sinhvien/quanlythongtin.php");
            }

            else if($tam =='xemhuongdan'){
                include("sinhvien/xemhuongdan.php");
            }

            else if($tam =='suadongui'){
                include("sinhvien/suadongui.php");
            }

            

            else if($tam =='guidon'){
                include("sinhvien/guidon.php");
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