<?php
include '../config/connection.php';
function create($request)
{
    global $conn;
    $matkul = $request["matkul"];
    $tugas = $request["tugas"];
    $deaedline = $request["deadline"];

    if ($request["waktu"] == "HARIAN") {
        mysqli_query($conn, "INSERT INTO tugas_harian VALUES('','$matkul','$tugas','$deaedline')");
    } else if ($request["waktu"] == "MINGGUAN") {
        mysqli_query($conn, "INSERT INTO tugas_minggun VALUES('','$matkul','$tugas','$deaedline')");
    }

    $cek = mysqli_affected_rows($conn);

    if ($cek) {
        echo '<script>
        alert("Data Berhasil Ditambahkan")
        document.location.href = "list_tugas.php"
        </script>';
    } else {
        echo '<script>
        alert("Data Gagal Ditambahkan")
        document.location.href = "list_tugas.php"
        </script>';
    }
}
