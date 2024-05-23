<main class="main container" id="main">
    <?php
      if(isset($_SESSION['id_ql'])){
    ?>
         <h1 style="text-align: center;color: black;">Xin chào: <?php echo $_SESSION['tenql'] ?></h1>
         <?php
      if($_SESSION['quyenhan']==0){
    ?>
         <!DOCTYPE html>
         <html>
<head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart", "table"]});
      
      google.charts.setOnLoadCallback(drawCharts);

      function drawCharts() {
        drawChart1();
        drawChart2();
        drawTable1();
        drawTable2();
      }
      
      function drawChart1() {
        var data1 = google.visualization.arrayToDataTable([
          ['Tình trạng', 'Số lượng'],
          <?php
          // Truy vấn dữ liệu cho biểu đồ đầu tiên
          $sql1 = "SELECT tinhtrang, COUNT(*) as count FROM dongui GROUP BY tinhtrang";
          $result1 = $mysqli->query($sql1);

          if ($result1->num_rows > 0) {
              while($row = $result1->fetch_assoc()) {
                  if ($row['tinhtrang'] == 'Đã xác nhận') {
                      echo "['Đã xác nhận', ".$row['count']."],";
                  } else {
                      echo "['Đang trong quá trình giải quyết', ".$row['count']."],";
                  }
              }
          }
          ?>
        ]);

        var options1 = {
          title: 'Thống kê đơn gửi',
          pieHole: 0.4,
        };

        var chart1 = new google.visualization.PieChart(document.getElementById('donutchart1'));
        chart1.draw(data1, options1);
      }

      function drawTable1() {
        var data3 = new google.visualization.DataTable();
        data3.addColumn('string', 'Tên đơn vị');
        data3.addColumn('number', 'Đã xác nhận');
        data3.addColumn('number', 'Đang trong quá trình giải quyết');
        data3.addColumn('number', 'Tổng số đơn'); // Thêm cột "Tổng số đơn"
        data3.addRows([
          <?php
          // Truy vấn dữ liệu cho bảng
          $sql3 = "
            SELECT 
                donvicolienquan, 
                SUM(CASE WHEN tinhtrang = 'Đã xác nhận' THEN 1 ELSE 0 END) AS da_xac_nhan,
                SUM(CASE WHEN tinhtrang != 'Đã xác nhận' THEN 1 ELSE 0 END) AS dang_giai_quyet,
                COUNT(*) AS tong_so_don -- Tính tổng số đơn
            FROM dongui
            GROUP BY donvicolienquan";

          $result3 = $mysqli->query($sql3);

          if ($result3->num_rows > 0) {
              while($row = $result3->fetch_assoc()) {
                  if ($row['donvicolienquan'] != 0) { 
                      echo "['".$row['donvicolienquan']."', ".$row['da_xac_nhan'].", ".$row['dang_giai_quyet'].", ".$row['tong_so_don']."],"; // Thêm dữ liệu cho cột "Tổng số đơn"
                  }
              }
          }
          ?>
        ]);

        var options3 = {
          showRowNumber: true,
          width: '100%',
          height: '100%'
        };

        var table = new google.visualization.Table(document.getElementById('table_div'));
        table.draw(data3, options3);
      }

      function drawChart2() {
        var data2 = google.visualization.arrayToDataTable([
          ['Tình trạng', 'Số lượng'],
          <?php
          // Truy vấn dữ liệu cho biểu đồ thứ hai
          $sql2 = "SELECT tinhtrang, COUNT(*) as count FROM form GROUP BY tinhtrang";
          $result2 = $mysqli->query($sql2);

          if ($result2->num_rows > 0) {
              while($row = $result2->fetch_assoc()) {
                  if ($row['tinhtrang'] == 'Đã xác nhận') {
                      echo "['Đã xác nhận', ".$row['count']."],";
                  } else {
                      echo "['Đang trong quá trình giải quyết', ".$row['count']."],";
                  }
              }
          }
          ?>
        ]);

        var options2 = {
          title: 'Thống kê đơn xác nhận',
          pieHole: 0.4,
        };

        var chart2 = new google.visualization.PieChart(document.getElementById('donutchart2'));
        chart2.draw(data2, options2);
      }

      function drawTable2() {
        var data4 = new google.visualization.DataTable();
        data4.addColumn('string', 'Tên đơn vị');
        data4.addColumn('number', 'Đã xác nhận');
        data4.addColumn('number', 'Đang trong quá trình giải quyết');
        data4.addColumn('number', 'Tổng số đơn'); // Thêm cột "Tổng số đơn"
        data4.addRows([
          <?php
          // Truy vấn dữ liệu cho bảng
          $sql4 = "
            SELECT 
                donvi, 
                SUM(CASE WHEN tinhtrang = 'Đã xác nhận' THEN 1 ELSE 0 END) AS da_xac_nhan,
                SUM(CASE WHEN tinhtrang != 'Đã xác nhận' THEN 1 ELSE 0 END) AS dang_giai_quyet,
                COUNT(*) AS tong_so_don -- Tính tổng số đơn
            FROM form
            GROUP BY donvi";

          $result4 = $mysqli->query($sql4);

          if ($result4->num_rows > 0) {
              while($row = $result4->fetch_assoc()) {
                  if ($row['donvi'] != 0) { 
                      echo "['".$row['donvi']."', ".$row['da_xac_nhan'].", ".$row['dang_giai_quyet'].", ".$row['tong_so_don']."],"; // Thêm dữ liệu cho cột "Tổng số đơn"
                  }
              }
          }
          ?>
        ]);

        var options4 = {
          showRowNumber: true,
          width: '100%',
          height: '100%'
        };

        var table = new google.visualization.Table(document.getElementById('table_div2'));
        table.draw(data4, options4);
      }
   
</script>
</head>
<body>
    <h3 style="text-align: center;">Thống kê tất cả đơn xin phép đã và đang giải quyết</h3>
    <div id="donutchart1" style="width: 900px; height: 500px;"></div>

    <h3 style="text-align: center;">Thống kê tổng số đơn của từng đơn vị ở đơn gửi</h3>
    <div id="table_div"></div>

    <h3 style="text-align: center;">Thống kê tất cả đơn xác nhận đã và đang giải quyết</h3>
    <div id="donutchart2" style="width: 900px; height: 500px;"></div>

    <h3 style="text-align: center;">Thống kê tổng số đơn của từng đơn vị ở đơn xác nhận</h3>
    <div id="table_div2"></div>

</body>
</html>
<?php
      }
      ?>
       <img src="images/DHBACLIEU.jpg" alt="">
<?php
      } else { 
      ?>
       <h1 style="text-align: center;color: black;">Xin chào: <?php echo $_SESSION['tensv'] ?></h1>
       <img src="images/DHBACLIEU.jpg" alt="">
      <?php
      }
      ?>
</main>
