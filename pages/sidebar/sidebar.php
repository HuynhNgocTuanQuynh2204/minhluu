 <!--=============== SIDEBAR ===============-->
 <?php
    if(isset($_GET['dangxuat'])&&$_GET['dangxuat']==1){
        unset($_SESSION['tenql']);
        unset($_SESSION['taikhoan']);
        unset($_SESSION['id_ql']);
        unset($_SESSION['quyenhan']);
        unset($_SESSION['tensv']);
        unset($_SESSION['id_sv']);
        header('location:dangnhap.php');
    }
?>
 <div class="sidebar" id="sidebar" style="background: black;">
     <nav class="sidebar__container">
         <div class="sidebar__logo">
             <img src="images/logo.png" alt="" class="sidebar__logo-img">
         </div>

         <div class="sidebar__content">
             <div class="sidebar__list">
                 <?php
                   if(isset($_SESSION['id_ql'])){
                    if($_SESSION['quyenhan']==0){
                  ?>
                 <a href="index.php" class="sidebar__link active-link">
                     <i class="ri-home-5-line"></i>
                     <span class="sidebar__link-name">Trang chủ</span>
                     <span class="sidebar__link-floating">Trang chủ</span>
                 </a>

                 <a href="index.php?quanly=themsinhvien" class="sidebar__link">
                     <i class="ri-compass-3-line"></i>
                     <span class="sidebar__link-name">Thêm sinh viên</span>
                     <span class="sidebar__link-floating">Thêm sinh viên</span>
                 </a>

                 <a href="index.php?quanly=themquanly" class="sidebar__link">
                     <i class="ri-video-line"></i>
                     <span class="sidebar__link-name">Thêm quản lí</span>
                     <span class="sidebar__link-floating">Thêm quản lí</span>
                 </a>

                 <a href="index.php?quanly=donxin" class="sidebar__link">
                     <i class="ri-add-box-line"></i>
                     <span class="sidebar__link-name">Thêm đơn xin</span>
                     <span class="sidebar__link-floating">Thêm đơn xin</span>
                 </a>
             </div>

             <h3 class="sidebar__title">
                 <span>Danh sách</span>
             </h3>
             <div class="sidebar__list">
                 <a href="index.php?quanly=danhsachdonxinsv" class="sidebar__link">
                     <i class="ri-history-line"></i>
                     <span class="sidebar__link-name">Danh sách đơn xin</span>
                     <span class="sidebar__link-floating">Danh sách đơn xin</span>
                 </a>
                 <a href="index.php?quanly=danhsachformguisv" class="sidebar__link">
                     <i class="ri-history-line"></i>
                     <span class="sidebar__link-name">Danh sách form gửi</span>
                     <span class="sidebar__link-floating">Danh sách form gửi</span>
                 </a>
             </div>
             <?php
                   } else if($_SESSION['quyenhan']==5){?>
             <h3 class="sidebar__title">
                 <span>Danh sách</span>
             </h3>
             <div class="sidebar__list">
                 <a href="index.php?quanly=danhsachmaudonxinsvcntt" class="sidebar__link">
                     <i class="ri-history-line"></i>
                     <span class="sidebar__link-name">Danh sách đơn xin</span>
                     <span class="sidebar__link-floating">Danh sách đơn xin</span>
                 </a>
                 <a href="index.php?quanly=danhsachformguisvcntt" class="sidebar__link">
                     <i class="ri-history-line"></i>
                     <span class="sidebar__link-name">Danh sách form gửi</span>
                     <span class="sidebar__link-floating">Danh sách form gửi</span>
                 </a>
             </div>
             <?php
                } else if($_SESSION['quyenhan']==3){?>
                    <h3 class="sidebar__title">
                        <span>Danh sách</span>
                    </h3>
                    <div class="sidebar__list">
                        <a href="index.php?quanly=danhsachmaudonxinsvqlsv" class="sidebar__link">
                            <i class="ri-history-line"></i>
                            <span class="sidebar__link-name">Danh sách đơn xin</span>
                            <span class="sidebar__link-floating">Danh sách đơn xin</span>
                        </a>
                        <a href="index.php?quanly=danhsachformguisvqlsv" class="sidebar__link">
                            <i class="ri-history-line"></i>
                            <span class="sidebar__link-name">Danh sách form gửi</span>
                            <span class="sidebar__link-floating">Danh sách form gửi</span>
                        </a>
                    </div>
                    <?php
                       }else if($_SESSION['quyenhan']==1){?>
                        <h3 class="sidebar__title">
                            <span>Danh sách</span>
                        </h3>
                        <div class="sidebar__list">
                            <a href="index.php?quanly=danhsachmaudonxinsvdaotao" class="sidebar__link">
                                <i class="ri-history-line"></i>
                                <span class="sidebar__link-name">Danh sách đơn xin</span>
                                <span class="sidebar__link-floating">Danh sách đơn xin</span>
                            </a>
                            <a href="index.php?quanly=danhsachformguisvdaotao" class="sidebar__link">
                                <i class="ri-history-line"></i>
                                <span class="sidebar__link-name">Danh sách form gửi</span>
                                <span class="sidebar__link-floating">Danh sách form gửi</span>
                            </a>
                        </div>
                        <?php
                           }else if($_SESSION['quyenhan']==6){?>
                            <h3 class="sidebar__title">
                                <span>Danh sách</span>
                            </h3>
                            <div class="sidebar__list">
                                <a href="index.php?quanly=danhsachmaudonxinsvkinhte" class="sidebar__link">
                                    <i class="ri-history-line"></i>
                                    <span class="sidebar__link-name">Danh sách đơn xin</span>
                                    <span class="sidebar__link-floating">Danh sách đơn xin</span>
                                </a>
                                <a href="index.php?quanly=danhsachformguisvkinhte" class="sidebar__link">
                                    <i class="ri-history-line"></i>
                                    <span class="sidebar__link-name">Danh sách form gửi</span>
                                    <span class="sidebar__link-floating">Danh sách form gửi</span>
                                </a>
                            </div>
                            <?php
                               }else if($_SESSION['quyenhan']==7){?>
                                <h3 class="sidebar__title">
                                    <span>Danh sách</span>
                                </h3>
                                <div class="sidebar__list">
                                    <a href="index.php?quanly=danhsachmaudonxinsvsupham" class="sidebar__link">
                                        <i class="ri-history-line"></i>
                                        <span class="sidebar__link-name">Danh sách đơn xin</span>
                                        <span class="sidebar__link-floating">Danh sách đơn xin</span>
                                    </a>
                                    <a href="index.php?quanly=danhsachformguisvsupham" class="sidebar__link">
                                        <i class="ri-history-line"></i>
                                        <span class="sidebar__link-name">Danh sách form gửi</span>
                                        <span class="sidebar__link-floating">Danh sách form gửi</span>
                                    </a>
                                </div>
                                <?php
                                   }else if($_SESSION['quyenhan']==4){?>
                                    <h3 class="sidebar__title">
                                        <span>Danh sách</span>
                                    </h3>
                                    <div class="sidebar__list">
                                        <a href="index.php?quanly=danhsachmaudonxinsvnongnghiep" class="sidebar__link">
                                            <i class="ri-history-line"></i>
                                            <span class="sidebar__link-name">Danh sách đơn xin</span>
                                            <span class="sidebar__link-floating">Danh sách đơn xin</span>
                                        </a>
                                        <a href="index.php?quanly=danhsachformguisvnongnghiep" class="sidebar__link">
                                            <i class="ri-history-line"></i>
                                            <span class="sidebar__link-name">Danh sách form gửi</span>
                                            <span class="sidebar__link-floating">Danh sách form gửi</span>
                                        </a>
                                    </div>
                                    <?php
                                       }else if($_SESSION['quyenhan']==8){?>
                                        <h3 class="sidebar__title">
                                            <span>Danh sách</span>
                                        </h3>
                                        <div class="sidebar__list">
                                            <a href="index.php?quanly=danhsachmaudonxinsvketoan" class="sidebar__link">
                                                <i class="ri-history-line"></i>
                                                <span class="sidebar__link-name">Danh sách đơn xin</span>
                                                <span class="sidebar__link-floating">Danh sách đơn xin</span>
                                            </a>
                                            <a href="index.php?quanly=danhsachformguisvketoan" class="sidebar__link">
                                                <i class="ri-history-line"></i>
                                                <span class="sidebar__link-name">Danh sách form gửi</span>
                                                <span class="sidebar__link-floating">Danh sách form gửi</span>
                                            </a>
                                        </div>
                                        <?php
                                           }}else if(isset($_SESSION['id_sv'])){
                   ?>
             <div class="sidebar__list">
                 <a href="index.php?quanly=maudonxinsv" class="sidebar__link">
                     <i class="ri-history-line"></i>
                     <span class="sidebar__link-name">Mẫu đơn xin</span>
                     <span class="sidebar__link-floating">Mẫu đơn xin</span>
                 </a>

                 <a href="index.php?quanly=guidon" class="sidebar__link">
                     <i class="ri-time-line"></i>
                     <span class="sidebar__link-name">Gửi đơn</span>
                     <span class="sidebar__link-floating">Gửi đơn</span>
                 </a>

                 <a href="index.php?quanly=danhsachdongui" class="sidebar__link">
                     <i class="ri-play-circle-line"></i>
                     <span class="sidebar__link-name">Lịch sử gửi đơn</span>
                     <span class="sidebar__link-floating">Lịch sử gửi đơn</span>
                 </a>

                 <a href="index.php?quanly=formxacnhan" class="sidebar__link">
                     <i class="ri-heart-3-line"></i>
                     <span class="sidebar__link-name">Form xác nhận</span>
                     <span class="sidebar__link-floating">Form xác nhận</span>
                 </a>

                 <a href="index.php?quanly=lichsuform" class="sidebar__link">
                     <i class="ri-heart-3-line"></i>
                     <span class="sidebar__link-name">Lịch sử form xác nhận</span>
                     <span class="sidebar__link-floating">Lịch sử form xác nhận</span>
                 </a>
             </div>

             <h3 class="sidebar__title">
                 <span>General</span>
             </h3>

             <div class="sidebar__list">
                 <a href="#" class="sidebar__link">
                     <i class="ri-notification-2-line"></i>
                     <span class="sidebar__link-name">Notifications</span>
                     <span class="sidebar__link-floating">Notifications</span>
                 </a>

                 <a href="index.php?quanly=doimatkhausv" class="sidebar__link">
                     <i class="ri-settings-3-line"></i>
                     <span class="sidebar__link-name">Đổi mật khẩu</span>
                     <span class="sidebar__link-floating">Đổi mật khẩu</span>
                 </a>
                 <?php
                     }
                     ?>
                 <a href="index.php?dangxuat=1" class="sidebar__link">
                     <i class="ri-logout-box-r-line"></i>
                     <span class="sidebar__link-name">Logout</span>
                     <span class="sidebar__link-floating">Logout</span>
                 </a>
             </div>
         </div>
         <?php
   if(isset($_SESSION['id_ql'])){

?>
         <div class="sidebar__account">
             <img src="images/perfil.png" alt="sidebar image" class="sidebar__perfil">

             <div class="sidebar__names">
                 <h3 class="sidebar__name"><?php echo  $_SESSION['tenql']  ?></h3>
                 <span class="sidebar__email"><?php echo  $_SESSION['taikhoan']  ?></span>
             </div>

             <i class="ri-arrow-right-s-line"></i>
         </div>
     </nav>
 </div>
 <?php
   }else if(isset($_SESSION['id_sv'])){
?>
 <div class="sidebar__account">
     <img src="" alt="sidebar image" class="sidebar__perfil">

     <div class="sidebar__names">
         <h3 class="sidebar__name"><?php echo  $_SESSION['tensv']  ?></h3>
         <span class="sidebar__email"><?php echo  $_SESSION['taikhoan']  ?></span>
     </div>

     <i class="ri-arrow-right-s-line"></i>
 </div>
 </nav>
 </div>
 <?php
   }
   ?>