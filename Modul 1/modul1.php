<?php
            $nama= ["Tarman", "Elfrida S", "Kevin Jeremia", "Erik Ezekiel"];

            function vokal($kalimat) {
              $a = substr_count($kalimat, 'a');
              $i = substr_count($kalimat, 'i');
              $u = substr_count($kalimat, 'u');
              $e = substr_count($kalimat, 'e');
              $o = substr_count($kalimat, 'o');
              $A = substr_count($kalimat, 'A');
              $I = substr_count($kalimat, 'I');
              $U = substr_count($kalimat, 'U');
              $E = substr_count($kalimat, 'E');
              $O = substr_count($kalimat, 'O');
            
            $count = ($a+$i+$u+$e+$o+$A+$I+$U+$E+$O);

            return $count;
          }

          function konsonan($kalimat) {
            $jumlah = strlen($kalimat)-substr_count($kalimat, ' ');
            $a = substr_count($kalimat, 'a');
            $i = substr_count($kalimat, 'i');
            $u = substr_count($kalimat, 'u');
            $e = substr_count($kalimat, 'e');
            $o = substr_count($kalimat, 'o');
            $A = substr_count($kalimat, 'A');
            $I = substr_count($kalimat, 'I');
            $U = substr_count($kalimat, 'U');
            $E = substr_count($kalimat, 'E');
            $O = substr_count($kalimat, 'O');
            
            $count = $jumlah - ($a+$i+$u+$e+$o+$A+$I+$U+$E+$O);

            return $count;
        }
        
        function jumlahHuruf($kalimat){
          return strlen($kalimat) - substr_count($kalimat, ' ');
            }

    ?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
Nama : Kevin Jeremia S. P
<Br>NIM  : 193020503034<Br>
<h3 align=center>Pengolahan Nama Anggota Keluarga</h3>
      <table border="2" cellpadding="10" cellspacing="1" align=center>
          <thead>
            <tr>
              <th>No</th>
              <th>Nama</th>
              <th>Jumlah Kata</th>
              <th>Jumlah Huruf</th>
              <th>Kebalikan Nama</th>
              <th>Konsonan</th>
              <th>Vokal</th>
            </tr>
          </thead>
                  <?php $i = 1; ?>
           <?php foreach ($nama as $name) :  ?>

                    <tr>
                        <td><?= $i; ?></td>
                        <td><?php echo $name."<br>"; ?></td>

                        <td><?php echo str_word_count($name)."<br>"; ?></td>
                        <td><?php echo jumlahHuruf($name)."<br>"; ?></td>

                       

                        <td><?php echo strrev($name)."<br>"; ?></td>
                        
                        <td><?= konsonan( $name);  ?></td>
                        <td><?= vokal(  $name);  ?></td>
                        
                    </tr>
                    <?php $i++; ?>
            <?php endforeach; ?>

      </table>
      
</body>
</html>