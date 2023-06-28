<?php 
include '../layout/header.php';
include '../config/connection.php';
?>

<?php 
if(isset($_POST["simpan"])) {
    $matkul = $_POST["matkul"];
    $tugas = $_POST["tugas"];
    $deaedline = $_POST["deadline"];

    if($_POST["waktu"]=="HARIAN"){
        mysqli_query($conn, "INSERT INTO tugas_harian VALUES('','$matkul','$tugas','$deaedline')");
    } else if($_POST["waktu"] == "MINGGUAN"){
        mysqli_query($conn, "INSERT INTO tugas_minggun VALUES('','$matkul','$tugas','$deaedline')");
    }
    
    echo '
        <script>
            alert("Data Berhasil Ditambahkan")
            document.location.href = "list_tugas.php"
        </script>
    ';
}

?>
<h1 class="text-center"> Tambah Tugas</h1>
<form action="" method="POST">
<div class="mb-3">
  <label for="matkul" class="form-label">Mata Kuliah</label>
  <input type="text" name="matkul" class="form-control" id="matkul" placeholder="Masukan Matkul">
</div>
<div class="mb-3">
  <label for="tugas" class="form-label">Tugas</label>
  <input type="text" name="tugas" class="form-control" id="tugas" placeholder="Masukan Tugas">
</div>
<div class="mb-3">
  <label for="deadline" class="form-label">Deadline</label>
  <input type="date" name="deadline" class="form-control" id="deadline" placeholder="Deadline">
</div>
<label for="waktu" class="form-label">Waktu</label>
<select class="form-select" id="waktu" name="waktu">
     <option value="HARIAN">HARIAN</option>
     <option value="MINGGUAN">MINGGUAN</option>
</select>
<br></br>
<button type="submit" class="btn btn-primary" name="simpan">Simpan</button>
</form>
<?php include '../layout/footer.php'?>