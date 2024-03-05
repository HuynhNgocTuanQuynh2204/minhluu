<main class="main container" id="main">
    <?php
      if(isset($_SESSION['id_ql'])){
    ?>
         <h1 style="text-align: center;color: aliceblue;">Xinh chào: <?php echo $_SESSION['tenql'] ?></h1>
         <?php
      }else{ 
      ?>
       <h1 style="text-align: center;color: aliceblue;">Xinh chào: <?php echo $_SESSION['tensv'] ?></h1>
      <?php
      }
      ?>
</main>