<?php
$tahun = $_POST['tahun'];

if (($tahun % 400 == 0) || (($tahun % 4 == 0) && ($tahun % 100 != 0))) {
    $status = "adalah Tahun Kabisat.";
} else {
    $status = "bukan Tahun Kabisat.";
}

echo "<h2>Hasil Pengecekan</h2>";
echo "<p>Tahun **".$tahun."** ".$status."</p>";
?>