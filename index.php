<?php
$xml = simplexml_load_file('alatMusik.xml') or die('Error: Tidak dapat memuat file XML');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alat Musik Tradisional</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    
</head>
<body class="container my-5">

<h1 class="mb-4 text-center"><b>Alat Musik Tradisional Indonesia</b></h1><br>

<table class='table table-bordered table-striped text-center table-hover'>
    <thead class="table-success">
        <tr>
            <th>No</th>
            <th>Gambar</th>
            <th>Nama</th>
            <th>Asal</th>
            <th>Bahan</th>
            <th>Cara Dimainkan</th>
            <th>Kategori</th>
            <th>Abstrak</th>
        </tr>
    </thead>
    <tbody>
        <?php
        $nomor = 1;

        foreach ($xml->alatMusikTradisional as $alatMusik) {
            echo "<tr>";
            echo "<td>" . $nomor++ . "</td>";
            if (!empty($alatMusik->gambar)) {
                echo "<td><img src='" . $alatMusik->gambar . "' alt='" . $alatMusik->nama . "' style='max-width: 300px; height: auto;' /></td>";
            }
            echo "<td>" . $alatMusik->nama . "</td>";
            echo "<td>" . $alatMusik->asal . "</td>";
            echo "<td>" . $alatMusik->bahan . "</td>";
            echo "<td>" . $alatMusik->caraMain . "</td>";
            echo "<td>" . $alatMusik->kategori . "</td>";
            echo "<td>" . $alatMusik->abstrak . "</td>";
            echo "</tr>";
        }
        ?>
    </tbody>
</table>

</body>
</html>
