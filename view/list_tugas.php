<?php
// menginclude kan file tugas harian.php agar bisa memanggil function select
include '../model/tugas_harian.php';

//ambil semua data pada table tugas harian
$data   = select("SELECT * FROM tugas_harian");
//ambil semua data pada table tugas mingguan 
$data2  = select("SELECT * FROM tugas_minggun");
?>
<!-- header -->
<?php include '../layout/header.php'; ?>
<!-- header -->

<h1>LIST TUGAS</h1>

<a href="tambah_tugas.php" class="btn btn-primary">Tambah Tugas </a>
<!-- Table Tugas Harian -->
<table class="table table-striped">
    <thead>
        <tr>
            <td>No</td>
            <td>Mata Kuliah</td>
            <td>Tugas</td>
            <td>Deadline</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row["matkul"]; ?></td>
                <td><?= $row["tugas"]; ?></td>
                <td><?= date("l, d-M-Y", strtotime($row["deadline"])); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br></br>

<!-- Table Mingguan -->
<table class="table table-striped">
    <thead>
        <tr>
            <td>No</td>
            <td>Mata Kuliah</td>
            <td>Tugas</td>
            <td>Deadline</td>
        </tr>
    </thead>
    <tbody>
        <?php $no = 1; ?>
        <?php foreach ($data2 as $row) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row["matkul"]; ?></td>
                <td><?= $row["tugas"]; ?></td>
                <td><?= date("l, d-M-Y", strtotime($row["deadline"])); ?></td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>
<br></br>
<!-- footer -->
<?php include '../layout/footer.php' ?>
<!-- footer -->