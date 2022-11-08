<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Tabel</title>
    <style>
        table, tr, td{
            border: solid 1px;
        }
    </style>
</head>
<body>
    <?php
    $nama1 = "Apri";
    $nama2 = "Simon";
    $nilaiApri1 = 50;
    $nilaiApri2 = 90;
    $nilaiSimon1 = 88;
    $nilaiSimon2 = 77;
    ?>

    <h1>Daftar Nilai Siswa</h1>
    <table style="border: solid 1px;">
        <tr>
            <th> No </th>
            <th> Nama </th>
            <th> Nilai </th>
        </tr>
        <tr>
            <td> 1 </td>
            <td> <?php echo $nama1; ?> </td>
            <td> <?php echo $nilaiApri1 + $nilaiApri2; ?> </td>
        </tr>
        <tr>
            <td> 2 </td>
            <td> <?php echo $nama2; ?> </td>
            <td> <?php echo $nilaiSimon1 + $nilaiSimon2; ?> </td>
        </tr>
    </table>
</body>
</html>