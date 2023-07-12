<?php
// menginclude kan isi dari connection.php atau dengan kata lain mengambil variabel $conn
include '../config/connection.php';


//flexible
//membuat function untuk mengambil data dari tabel pada database
function select($row)
{
    global $conn;
    $query = mysqli_query($conn, $row);
    $rows = [];
    while ($row = mysqli_fetch_assoc($query)) {
        $rows[] = $row;
    }
    return $rows;
}
