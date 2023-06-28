<?php 
include '../model/tugas_harian.php';
$data = select("SELECT * FROM tugas_harian where matkul = 'kalkulus'");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table border="1" cellspacing="0" cellpadding="2">
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
            <?php foreach($data as $row): ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $row["matkul"]; ?></td>
                <td><?= $row["tugas"]; ?></td>
                <td><?= date("l, d-M-Y", strtotime($row["deadline"])); ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>
</html>