<?php
require("function.php");

if (isset($_POST["Suara"])) {
    $id_pemilih = $_POST['id_pemilih'];
    $data1 = mysqli_query($conn,"select * from pemilih where id_pemilih=' $id_pemilih'");
    $cek = mysqli_num_rows($data1);
    if($cek <= 0){ 
        insertSuara($_POST);
        echo "<script>
            alert('Terimakasih telah Memilih');
            document.location.href = 'index.php';
        </script>"; 
    } else {
        echo "<script>
            alert('ID Anda telah Memilih');
        </script>";
    }
} 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Insert</title>
</head>

<body>
  <h1>Masukan Pilihan Anda</h1>
    <form action="" method="POST">

        <table width="75%" cellpadding="5px">
            <tr colspan="4">
                <td width="20%">ID Pemilih</td>
                <td width="2%"> : </td>
                <td><input type="text" name="id_pemilih" id="id_pemilih"></td>
             </tr>
             <tr>
                <td>Nama</td>
                <td> : </td>
                <td> <input type="text" name="Nama" id="Nama"> </td>
            </tr>
            <tr>
                <td>Suara</td>
                <td> : </td>
                <td>  <button type="" name="Suara" id="Suara" value="Kevin">Kevin</button>
                      <button type="" name="Suara" id="Suara" value="Jeremia">Jeremia</button>
                      <button type="" name="Suara" id="Suara" value="Soaduon">Soaduon</button>
                      <button type="" name="Suara" id="Suara" value="Soaduon">Pasaribu</button>
                      <button type="" name="Suara" id="Suara" value="Soaduon">KeJer</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="index.php">HOME    </a>
</body>
</html>