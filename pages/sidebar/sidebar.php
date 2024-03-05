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
 <div class="sidebar" id="sidebar">
         <nav class="sidebar__container">
            <div class="sidebar__logo">
               <img src="images/logo.png" alt="" class="sidebar__logo-img">
            </div>

            <div class="sidebar__content">
               <div class="sidebar__list">
                  <?php
                   if(isset($_SESSION['id_ql'])){
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

                  <a href="#" class="sidebar__link">
                     <i class="ri-video-line"></i>
                     <span class="sidebar__link-name">Shorts</span>
                     <span class="sidebar__link-floating">Shorts</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-add-box-line"></i>
                     <span class="sidebar__link-name">Subscription</span>
                     <span class="sidebar__link-floating">Subscription</span>
                  </a>
               </div>

               <h3 class="sidebar__title">
                  <span>Danh sách</span>
               </h3>
<?php
                   }
                   ?>
               <div class="sidebar__list">
                  <a href="index.php?quanly=danhsachsinhvien" class="sidebar__link">
                     <i class="ri-history-line"></i>
                     <span class="sidebar__link-name">Danh sách sinh viên</span>
                     <span class="sidebar__link-floating">Danh sách sinh viên</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-time-line"></i>
                     <span class="sidebar__link-name">Watch Later</span>
                     <span class="sidebar__link-floating">Watch Later</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-play-circle-line"></i>
                     <span class="sidebar__link-name">Playlists</span>
                     <span class="sidebar__link-floating">Playlists</span>
                  </a>

                  <a href="#" class="sidebar__link">
                     <i class="ri-heart-3-line"></i>
                     <span class="sidebar__link-name">Liked Videos</span>
                     <span class="sidebar__link-floating">Liked Videos</span>
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

                  <a href="#" class="sidebar__link">
                     <i class="ri-settings-3-line"></i>
                     <span class="sidebar__link-name">Settings</span>
                     <span class="sidebar__link-floating">Settings</span>
                  </a>

                  <a href="index.php?dangxuat=1" class="sidebar__link">
                     <i class="ri-logout-box-r-line"></i>
                     <span class="sidebar__link-name">Logout</span>
                     <span class="sidebar__link-floating">Logout</span>
                  </a>
               </div>
            </div>

            <div class="sidebar__account">
               <img src="images/perfil.png" alt="sidebar image" class="sidebar__perfil">

               <div class="sidebar__names">
                  <h3 class="sidebar__name">Will Lens</h3>
                  <span class="sidebar__email">willens@email.com</span>
               </div>

               <i class="ri-arrow-right-s-line"></i>
            </div>
         </nav>
      </div>