<?php
$jam_kerja = (int)$_POST['jam_kerja'];
$golongan = $_POST['golongan'];
$tarif_lembur = 3000;
$jam_normal_maks = 48; // Batas jam kerja normal

// 1. Menentukan tarif normal per jam berdasarkan golongan menggunakan SWITCH
switch ($golongan) {
    case 'A': $tarif_normal = 4000; break;
    case 'B': $tarif_normal = 5000; break;
    case 'C': $tarif_normal = 6000; break;
    case 'D': $tarif_normal = 7500; break;
    default: $tarif_normal = 0; break;
}

// 2. Menghitung Jam Normal dan Jam Lembur
if ($jam_kerja > $jam_normal_maks) {
    $jam_normal = $jam_normal_maks;
    $jam_lembur = $jam_kerja - $jam_normal_maks;
} else {
    $jam_normal = $jam_kerja;
    $jam_lembur = 0;
}

// 3. Menghitung Total Upah
$upah_normal = $jam_normal * $tarif_normal;
$upah_lembur = $jam_lembur * $tarif_lembur;
$total_upah = $upah_normal + $upah_lembur;

echo "<h2>Rincian Gaji Golongan **".$golongan."**</h2>";
echo "* Tarif Normal/Jam: **Rp ".number_format($tarif_normal)."**<br>";
echo "* Tarif Lembur/Jam: **Rp ".number_format($tarif_lembur)."**<br>";
echo "---<br>";
echo "* Jam Kerja Total: **".$jam_kerja."** jam<br>";
echo "* Upah Normal: **Rp ".number_format($upah_normal)."**<br>";
echo "* Upah Lembur: **Rp ".number_format($upah_lembur)."**<br>";
echo "<br><h3>Jumlah Upah yang Diperoleh: **Rp ".number_format($total_upah)."**</h3>";
?>