<main class="main container" id="main">
    <?php
      if(isset($_SESSION['id_ql'])){
    ?>
         <h1 style="text-align: center;color: black;">Xin chào: <?php echo $_SESSION['tenql'] ?></h1>
         <!DOCTYPE html>
<html>
<head>
  <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
  <script type="text/javascript">
    google.charts.load('current', {'packages':['corechart', 'bar']});
    google.charts.setOnLoadCallback(drawStuff);

    function drawStuff() {
      var button = document.getElementById('change-chart');
      var chartDiv = document.getElementById('chart_div');

      var data = google.visualization.arrayToDataTable([
        ['Trạng thái', 'Số lượng'],
        <?php
          $sql = "SELECT tinhtrang, COUNT(*) AS soluong FROM dongui GROUP BY tinhtrang";
          $result = $mysqli->query($sql);

          $data = array();
          while ($row = $result->fetch_assoc()) {
            if ($row['tinhtrang'] == 'Đã xác nhận') {
              $data[] = array('Đã xác nhận', (int)$row['soluong']);
            } else {
              $data[] = array('Đang trong quá trình giải quyết', (int)$row['soluong']);
            }
          }

          foreach ($data as $row) {
            echo "['" . $row[0] . "', " . $row[1] . "],";
          }
        ?>
      ]);

      var options = {
        title: 'Thống kê số lượng đơn đã hoàn thành và đang trong quá trình giải quyết',
        bars: 'vertical',
        series: {
          0: { color: 'green' }
        }
      };

      var chart = new google.charts.Bar(chartDiv);

      chart.draw(data, google.charts.Bar.convertOptions(options));

      button.innerText = 'Chuyển sang cổ điển';
      button.onclick = drawClassicChart;
    }

    function drawClassicChart() {
      var button = document.getElementById('change-chart');
      var chartDiv = document.getElementById('chart_div');

      var data = google.visualization.arrayToDataTable([
        ['Trạng thái', 'Số lượng'],
        <?php
          $sql = "SELECT tinhtrang, COUNT(*) AS soluong FROM dongui GROUP BY tinhtrang";
          $result = $mysqli->query($sql);

          $data = array();
          while ($row = $result->fetch_assoc()) {
            if ($row['tinhtrang'] == 'Đã xác nhận') {
              $data[] = array('Đã xác nhận', (int)$row['soluong']);
            } else {
              $data[] = array('Đang trong quá trình giải quyết', (int)$row['soluong']);
            }
          }

          foreach ($data as $row) {
            echo "['" . $row[0] . "', " . $row[1] . "],";
          }
        ?>
      ]);

      var options = {
        title: 'Thống kê số lượng theo trạng thái',
        bars: 'vertical',
        series: {
          0: { color: 'green' }
        }
      };

      var chart = new google.visualization.ColumnChart(chartDiv);

      chart.draw(data, options);

      button.innerText = 'Thay đổi thành Material';
      button.onclick = drawStuff;
    }
  </script>
</head>
<body>
  <button id="change-chart">Thay đổi thành Material</button>
  <br><br>
  <div id="chart_div" style="width: 800px; height: 500px;"></div>
</body>
</html>

         <?php
      }else{ 
      ?>
       <h1 style="text-align: center;color: black;">Xinh chào: <?php echo $_SESSION['tensv'] ?></h1>
      <?php
      }
      ?>
</main>