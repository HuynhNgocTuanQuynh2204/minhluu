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

            else if($tam =='xacnhanmaudon'){
                include("main/xacnhanmaudon.php");
            }

            else if($tam =='suamaudon'){
                include("main/suamaudon.php");
            }

            else if($tam =='timkiemdondaguiquanly'){
                include("main/timkiemdondaguiquanly.php");
            }

            else if($tam =='timkiemmaudon'){
                include("main/timkiemmaudon.php");
            }

            else if($tam =='danhsachdonxinsv'){
                include("main/danhsachdonxinsv.php");
            }

            else if($tam =='capnhaptrangthaichosinhvien'){
                include("main/capnhaptrangthaichosinhvien.php");
            }

            else if($tam =='timkiemquanly'){
                include("main/timkiemquanly.php");
            }

            else if($tam =='doimatkhausv'){
                include("main/doimatkhausv.php");
            }

            else if($tam =='capnhapmaudonquanly'){
                include("main/capnhapmaudonquanly.php");
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

            else if($tam =='goigam'){
                include("sinhvien/goigam.php");
            }

            else if($tam =='goigamform'){
                include("sinhvien/goigamform.php");
            }


            else if($tam =='danhsachquanly'){
                include("main/danhsachquanly.php");
            }

            else if($tam =='xacnhanformgui'){
                include("main/xacnhanformgui.php");
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
            
            else if($tam =='danhsachmaudonxinsvcntt'){
                include("CNTT/danhsachmaudonxinsvcntt.php");
            }

            else if($tam =='capnhaptrangthaichosinhviencntt'){
                include("CNTT/capnhaptrangthaichosinhviencntt.php");
            }

            else if($tam =='capnhapmaudoncntt'){
                include("CNTT/capnhapmaudoncntt.php");
            }

            else if($tam =='timkiemdondaguicntt'){
                include("CNTT/timkiemdondaguicntt.php");
            }

            else if($tam =='caonhapformsvcntt'){
                include("CNTT/caonhapformsvcntt.php");
            }

            else if($tam =='xacnhanhoanthanh'){
                include("CNTT/xacnhanhoanthanh.php");
            }

            else if($tam =='giaiquyetphanhoicnttxong'){
                include("CNTT/giaiquyetphanhoicnttxong.php");
            }

            else if($tam =='danhsachformguisvcntt'){
                include("CNTT/danhsachformguisvcntt.php");
            }

            else if($tam =='xacnhanhoanthanhform'){
                include("CNTT/xacnhanhoanthanhform.php");
            }

            else if($tam =='giaiquyetformcnttxong'){
                include("CNTT/giaiquyetformcnttxong.php");
            }

            else if($tam =='timkiemformcntt'){
                include("CNTT/timkiemformcntt.php");
            }

            else if($tam =='caonhapformsvcntt'){
                include("CNTT/caonhapformsvcntt.php");
            }

            else if($tam =='xacnhanformsvcntt'){
                include("CNTT/xacnhanformsvcntt.php");
            }

            else if($tam =='danhsachmaudonxinsvqlsv'){
                include("CTTT&QLSV/danhsachmaudonxinsvqlsv.php");
            }

            else if($tam =='capnhaptrangthaichosinhvienqlsv'){
                include("CTTT&QLSV/capnhaptrangthaichosinhvienqlsv.php");
            }

            else if($tam =='capnhapmaudonqlsv'){
                include("CTTT&QLSV/capnhapmaudonqlsv.php");
            }

            else if($tam =='timkiemdondaguiqlsv'){
                include("CTTT&QLSV/timkiemdondaguiqlsv.php");
            }

            else if($tam =='xacnhanhoanthanhqlsv'){
                include("CTTT&QLSV/xacnhanhoanthanhqlsv.php");
            }

            else if($tam =='giaiquyetphanhoiqlsvxong'){
                include("CTTT&QLSV/giaiquyetphanhoiqlsvxong.php");
            }

            else if($tam =='danhsachformguisvqlsv'){
                include("CTTT&QLSV/danhsachformguisvqlsv.php");
            }

            else if($tam =='xacnhanhoanthanhformqlsv'){
                include("CTTT&QLSV/xacnhanhoanthanhformqlsv.php");
            }

            else if($tam =='giaiquyetformqlsvxong'){
                include("CTTT&QLSV/giaiquyetformqlsvxong.php");
            }

            else if($tam =='timkiemformqlsv'){
                include("CTTT&QLSV/timkiemformqlsv.php");
            }

            else if($tam =='caonhapformsvqlsv'){
                include("CTTT&QLSV/caonhapformsvqlsv.php");
            }

            else if($tam =='xacnhanformsvqlsv'){
                include("CTTT&QLSV/xacnhanformsvqlsv.php");
            }

            else if($tam =='danhsachmaudonxinsvdaotao'){
                include("DAOTAO/danhsachmaudonxinsvdaotao.php");
            }

            else if($tam =='capnhaptrangthaichosinhviendaotao'){
                include("DAOTAO/capnhaptrangthaichosinhviendaotao.php");
            }

            else if($tam =='capnhapmaudondaotao'){
                include("DAOTAO/capnhapmaudondaotao.php");
            }

            else if($tam =='timkiemdondaguidaotao'){
                include("DAOTAO/timkiemdondaguidaotao.php");
            }

            else if($tam =='xacnhanhoanthanhdaotao'){
                include("DAOTAO/xacnhanhoanthanhdaotao.php");
            }

            else if($tam =='giaiquyetphanhoidaotaoxong'){
                include("DAOTAO/giaiquyetphanhoidaotaoxong.php");
            }

            else if($tam =='danhsachformguisvdaotao'){
                include("DAOTAO/danhsachformguisvdaotao.php");
            }

            else if($tam =='xacnhanhoanthanhformdaotao'){
                include("DAOTAO/xacnhanhoanthanhformdaotao.php");
            }

            else if($tam =='giaiquyetformdaotaoxong'){
                include("DAOTAO/giaiquyetformdaotaoxong.php");
            }

            else if($tam =='timkiemformdaotao'){
                include("DAOTAO/timkiemformdaotao.php");
            }

            else if($tam =='caonhapformsvdaotao'){
                include("DAOTAO/caonhapformsvdaotao.php");
            }

            else if($tam =='xacnhanformsvdaotao'){
                include("DAOTAO/xacnhanformsvdaotao.php");
            }

            else if($tam =='danhsachmaudonxinsvkinhte'){
                include("KINHTE/danhsachmaudonxinsvkinhte.php");
            }

            else if($tam =='capnhaptrangthaichosinhvienkinhte'){
                include("KINHTE/capnhaptrangthaichosinhvienkinhte.php");
            }

            else if($tam =='capnhapmaudonkinhte'){
                include("KINHTE/capnhapmaudonkinhte.php");
            }

            else if($tam =='timkiemdondaguikinhte'){
                include("KINHTE/timkiemdondaguikinhte.php");
            }

            else if($tam =='xacnhanhoanthanhkinhte'){
                include("KINHTE/xacnhanhoanthanhkinhte.php");
            }

            else if($tam =='giaiquyetphanhoikinhtexong'){
                include("KINHTE/giaiquyetphanhoikinhtexong.php");
            }

            else if($tam =='danhsachformguisvkinhte'){
                include("KINHTE/danhsachformguisvkinhte.php");
            }

            else if($tam =='xacnhanhoanthanhformkinhte'){
                include("KINHTE/xacnhanhoanthanhformkinhte.php");
            }

            else if($tam =='giaiquyetformkinhtexong'){
                include("KINHTE/giaiquyetformkinhtexong.php");
            }

            else if($tam =='timkiemformkinhte'){
                include("KINHTE/timkiemformkinhte.php");
            }

            else if($tam =='caonhapformsvkinhte'){
                include("KINHTE/caonhapformsvkinhte.php");
            }

            else if($tam =='xacnhanformsvkinhte'){
                include("KINHTE/xacnhanformsvkinhte.php");
            }

            else if($tam =='danhsachmaudonxinsvsupham'){
                include("SUPHAM/danhsachmaudonxinsvsupham.php");
            }

            else if($tam =='capnhaptrangthaichosinhviensupham'){
                include("SUPHAM/capnhaptrangthaichosinhviensupham.php");
            }

            else if($tam =='capnhapmaudonsupham'){
                include("SUPHAM/capnhapmaudonsupham.php");
            }

            else if($tam =='timkiemdondaguisupham'){
                include("SUPHAM/timkiemdondaguisupham.php");
            }

            else if($tam =='xacnhanhoanthanhsupham'){
                include("SUPHAM/xacnhanhoanthanhsupham.php");
            }

            else if($tam =='giaiquyetphanhoisuphamxong'){
                include("SUPHAM/giaiquyetphanhoisuphamxong.php");
            }

            else if($tam =='danhsachformguisvsupham'){
                include("SUPHAM/danhsachformguisvsupham.php");
            }

            else if($tam =='xacnhanhoanthanhformsupham'){
                include("SUPHAM/xacnhanhoanthanhformsupham.php");
            }

            else if($tam =='giaiquyetformsuphamxong'){
                include("SUPHAM/giaiquyetformsuphamxong.php");
            }

            else if($tam =='timkiemformsupham'){
                include("SUPHAM/timkiemformsupham.php");
            }

            else if($tam =='caonhapformsvsupham'){
                include("SUPHAM/caonhapformsvsupham.php");
            }

            else if($tam =='xacnhanformsvsupham'){
                include("SUPHAM/xacnhanformsvsupham.php");
            }

            else if($tam =='danhsachmaudonxinsvnongnghiep'){
                include("NONGNGHIEP/danhsachmaudonxinsvnongnghiep.php");
            }

            else if($tam =='capnhaptrangthaichosinhviennongnghiep'){
                include("NONGNGHIEP/capnhaptrangthaichosinhviennongnghiep.php");
            }

            else if($tam =='capnhapmaudonnongnghiep'){
                include("NONGNGHIEP/capnhapmaudonnongnghiep.php");
            }

            else if($tam =='timkiemdondaguinongnghiep'){
                include("NONGNGHIEP/timkiemdondaguinongnghiep.php");
            }

            else if($tam =='xacnhanhoanthanhnongnghiep'){
                include("NONGNGHIEP/xacnhanhoanthanhnongnghiep.php");
            }

            else if($tam =='giaiquyetphanhoinongnghiepxong'){
                include("NONGNGHIEP/giaiquyetphanhoinongnghiepxong.php");
            }

            else if($tam =='danhsachformguisvnongnghiep'){
                include("NONGNGHIEP/danhsachformguisvnongnghiep.php");
            }

            else if($tam =='xacnhanhoanthanhformnongnghiep'){
                include("NONGNGHIEP/xacnhanhoanthanhformnongnghiep.php");
            }

            else if($tam =='giaiquyetformnongnghiepxong'){
                include("NONGNGHIEP/giaiquyetformnongnghiepxong.php");
            }

            else if($tam =='timkiemformnongnghiep'){
                include("NONGNGHIEP/timkiemformnongnghiep.php");
            }

            else if($tam =='caonhapformsvnongnghiep'){
                include("NONGNGHIEP/caonhapformsvnongnghiep.php");
            }

            else if($tam =='xacnhanformsvnongnghiep'){
                include("NONGNGHIEP/xacnhanformsvnongnghiep.php");
            }

            else if($tam =='danhsachmaudonxinsvketoan'){
                include("KETOAN/danhsachmaudonxinsvketoan.php");
            }

            else if($tam =='capnhaptrangthaichosinhvienketoan'){
                include("KETOAN/capnhaptrangthaichosinhvienketoan.php");
            }

            else if($tam =='capnhapmaudonketoan'){
                include("KETOAN/capnhapmaudonketoan.php");
            }

            else if($tam =='timkiemdondaguiketoan'){
                include("KETOAN/timkiemdondaguiketoan.php");
            }

            else if($tam =='xacnhanhoanthanhketoan'){
                include("KETOAN/xacnhanhoanthanhketoan.php");
            }

            else if($tam =='giaiquyetphanhoiketoanxong'){
                include("KETOAN/giaiquyetphanhoiketoanxong.php");
            }

            else if($tam =='danhsachformguisvketoan'){
                include("KETOAN/danhsachformguisvketoan.php");
            }

            else if($tam =='xacnhanhoanthanhformketoan'){
                include("KETOAN/xacnhanhoanthanhformketoan.php");
            }

            else if($tam =='giaiquyetformketoanxong'){
                include("KETOAN/giaiquyetformketoanxong.php");
            }

            else if($tam =='timkiemformketoan'){
                include("KETOAN/timkiemformketoan.php");
            }

            else if($tam =='caonhapformsvketoan'){
                include("KETOAN/caonhapformsvketoan.php");
            }

            else if($tam =='xacnhanformsvketoan'){
                include("KETOAN/xacnhanformsvketoan.php");
            }


            else {
                include("main/index.php");
            }
          ?>
</div>