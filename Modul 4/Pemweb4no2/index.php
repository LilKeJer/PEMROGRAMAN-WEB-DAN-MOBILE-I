<?php
require("function.php");
$pemilu     = show("SELECT * FROM pemilih");
$hasil =show("SELECT Suara,COUNT(*) AS hasil FROM `pemilih` GROUP BY Suara");
?>

<!DOCTYPE html>
<html lang="en">

<head>         
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modul4no2</title>
    <link rel="stylesheet" href="style.css">    
</head>

<body>
<h1>Pemilihan Umum</h1>
    <div class = "row">
        <div class = "column">
          <h2>Tabel Pemilih Yang sudah Memilih</h2>
            <table border="1">
                <tr>
                    <th>ID Pemilih</th>
                    <th>Nama</th>
                    <th>Suara</th> 
                </tr>
                <?php
                foreach ($pemilu  as $p) {
                ?>
                 <tr>
                    <td><?php echo $p["id_pemilih"]; ?></td>
                    <td><?php echo $p["Nama"]; ?></td>
                    <td><?php echo $p["Suara"]; ?></td>  
                 </tr>
                    <?php } ?>
            </table>
            <form action="insert_pemilu.php">
            <p>Tekan Tombol Ini Untuk masuk ke halaman Pemilihan <button>Pemilu</button> </p> 
            </form>
        </div>
        <div class = "column">
         <h2>Perolehan Suara</h2>
         <table border="1">
                <tr>
                    <th>Kandidat</th>
                    <th>Suara</th>
                </tr>
                <?php
                foreach ($hasil  as $h) {
                ?>
                 <tr>
                    <td><?php echo $h["Suara"]; ?></td>
                    <td><?php echo $h["hasil"]; ?></td> 
                 </tr>
                    <?php } ?>
            </table>
            
        </div>
  
     </div>
</body>
</html>