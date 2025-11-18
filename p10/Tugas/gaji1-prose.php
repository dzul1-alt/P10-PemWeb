<?php
$jam_kerja = (int)$_POST['jam_kerja'];
$tarif_normal = 2000;
$tarif_lembur = 3000;
$jam_normal_maks = 48;

if ($jam_kerja > $jam_normal_maks) {
    $jam_normal = $jam_normal_maks;
    $jam_lembur = $jam_kerja - $jam_normal_maks;
} else {
    $jam_normal = $jam_kerja;
    $jam_lembur = 0;
}

$upah_normal = $jam_normal * $tarif_normal;
$upah_lembur = $jam_lembur * $tarif_lembur;
$total_upah = $upah_normal + $upah_lembur;

echo "<h2>Rincian Gaji</h2>";
echo "* Total Jam Kerja: **".$jam_kerja."** jam<br>";
echo "* Jam Normal (Rp ".number_format($tarif_normal).") : **".$jam_normal."** jam (Rp ".number_format($upah_normal).")<br>";
echo "* Jam Lembur (Rp ".number_format($tarif_lembur).") : **".$jam_lembur."** jam (Rp ".number_format($upah_lembur).")<br>";
echo "<br><h3>Jumlah Upah yang Diperoleh: **Rp ".number_format($total_upah)."**</h3>";
?>