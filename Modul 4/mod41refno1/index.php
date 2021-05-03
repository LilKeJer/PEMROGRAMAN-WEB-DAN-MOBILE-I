<html>
<head>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="   dules/accessibility.js"></script>
<link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="row">
        <div class = "column">
         <h1>Data Survei Bahasa Pemrograman</h1>
            <table border="1" align = "center">
                <thead>
                    <tr>
                        <th>NIM</th>
                        <th>Nama</th>
                        <th>Bahasa Pemrograman</th>
                        
                    </tr>
                </thead>
                    <?php
                       require 'koneksi.php';
                        $view = $koneksi -> query("SELECT * FROM mahasiswa");
                        while($row=$view->fetch_array()){

                    ?> 
                     <tr>
                          <td><?php echo $row['nim']; ?></td>  
                          <td><?php echo $row['nama']; ?></td>                                                      
                          <td><?php echo $row['bhs_pemrograman']; ?></td>                                                          
                     </tr>						
                        <?php }?>
                </tbody>
            </table>
        </div>
    </div>

    <figure class="highcharts-figure">
        <div id="container"></div>
          <p class="highcharts-description"> Hasil Dari survei Bahasa Pemrograman Favorit di Kelas</p>
         <table id="datatable">
            <thead>
                 <tr>
                    <th>Bahasa Pemrograman</th>
                    <th>hasil</th>
                </tr>
             </thead>
            <tbody>
                    <?php
                    require 'koneksi.php';
                    $view = $koneksi -> query("SELECT bhs_pemrograman,COUNT(*) AS hasil FROM `mahasiswa` GROUP BY bhs_pemrograman");
                    while($row=$view->fetch_array()){ ?> 
                <tr>
                    <td><?php echo $row['bhs_pemrograman']; ?></td>  
                    <td><?php echo $row['hasil']; ?></td>                                                      
                </tr>						
                 <?php }?>
             </tbody>
        </table>
</figure>
<script>
Highcharts.chart('container', {
    data: {
        table: 'datatable'
    },
    chart: {
        type: 'bar'
    },
    title: {
        text: 'Data extracted from a HTML table in the page'
    },
    yAxis: {
        allowDecimals: false,
        title: {
            text: 'Units'
        }
    },
    tooltip: {
        formatter: function () {
            return '<b>' + this.series.name + '</b><br/>' +
                this.point.y + ' ' + this.point.name.toLowerCase();
        }
    }
});
</script>
</body>
</html>
</body>
</html>