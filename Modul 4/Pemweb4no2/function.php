<?php 
$servername = "localhost";
$database = "pemilu1";
$username = "root";
$password = "";
$conn = mysqli_connect($servername, $username, $password, $database);

function show($query){
    global $conn;
    $result = mysqli_query($conn, $query);
    $rows = [];
    while( $row = mysqli_fetch_assoc($result) ){
        $rows[] = $row;
    }return $rows;
}



function insertSuara($data){
    global $conn;
    $id_pemilih      = $_POST["id_pemilih"];
    $Nama      = $_POST["Nama"];
    $Suara    = $_POST["Suara"];
    mysqli_query($conn, "INSERT INTO pemilih VALUES ('$id_pemilih','$Nama','$Suara')");
    
    return mysqli_affected_rows($conn);
}


?>
