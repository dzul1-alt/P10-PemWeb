<?php
$angkaBln = date("n");

$namaBln = date("F");

switch ($angkaBln) {
    case 1:  // Januari
    case 3:  // Maret
    case 5:  // Mei
    case 7:  // Juli
    case 8:  // Agustus
    case 10: // Oktober
    case 12: // Desember
        $jumlahHari = 31;
        break;
    case 4:  // April
    case 6:  // Juni
    case 9:  // September
    case 11: // November
        $jumlahHari = 30;
        break;
    case 2:  // Februari
        // Asumsi sederhana 28 hari, tanpa pengecekan kabisat, fokus pada SWITCH
        $jumlahHari = 28; 
        break;
    default:
        $jumlahHari = "Tidak diketahui";
        break;
}

echo "<h2>Jumlah Hari dalam Bulan Saat Ini</h2>";
echo "Bulan saat ini adalah **".$namaBln."** (Angka: ".$angkaBln.")<br>";
echo "Jumlah hari pada bulan **".$namaBln."** adalah **".$jumlahHari."** hari.";
?>