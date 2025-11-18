# 📝 Laporan Praktikum 10 Pemrograman Web📌

## Tujuan Praktikum

Mempelajari dan mempraktikkan penggunaan struktur kontrol kondisional if, if...else, if...elseif...else, if bersarang (nested if), serta operator logika (&& dan ||) dalam bahasa pemrograman PHP.

### 1. File 'if1.php'
| Kategori | Detail |
| :--- | :--- |
| **Konsep** | Struktur `if` tunggal (Single `if`) |
| **Variabel** | `$bil = 10` |
| **Kondisi** | `$bil == 5` (10 == 5) |
| **Kode Sumber** | ```php |
```
<?php $bil = 10; if ($bil > 5) { echo "Bilangan lebih besar dari 5"; } ?>
```
| **Hasil Eksekusi** | `Bilangan lebih besar dari 5` |

---

### 2. File `if2.php`

| Kategori | Detail |
| :--- | :--- |
| **Konsep** | Struktur `if` tunggal (Single `if`) |
| **Variabel** | `$bil = 10` |
| **Kondisi** | `$bil == 5` (10 == 5) |
| **Kode Sumber** | ```php |
```
<?php
$bil = 10;
if ($bil == 5) {
    echo "Bilangan sama dengan 5";
}
?>
```
| **Hasil Eksekusi** |`Tidak menampilkan apa-apa / Kosong`|

---

### 3. File `logika2.php` dan `logika3.php`

*(Kedua file memiliki kode dan hasil yang sama. Saya akan mencantumkannya sekali.)*

| Kategori | Detail |
| :--- | :--- |
| **Konsep** | Struktur `if...else` |
| **Variabel** | `logika2.php`: `$bil = 10` <br> `logika3.php`: `$bil = 12` |
| **Kondisi** | `$bil == 10` |
| **Kode Sumber** | ```php

```

<?php
$bil = 10; // atau 12
if ($bil == 10) {
    echo "Bilangan sama dengan 10";
}
else {
    echo "Bilangan tidak sama dengan 10";
}
?>
```
| **Hasil Eksekusi** |` **Untuk $bil = 10:** `Bilangan sama dengan 10<br>` **Untuk $bil = 12:** `Bilangan tidak sama dengan 10 |

---

### 4. File `logikahuruf.php`

| Kategori | Detail |
| :--- | :--- |
| **Konsep** | Struktur `if...else` dengan **Operator Logika OR (`||`)** |
| **Variabel** | `$huruf = "A"` |
| **Kondisi** | `$huruf` adalah vokal |
| **Kode Sumber** | ```php |

```

<?php
$huruf = "A";
if (($huruf == "A") || ($huruf == "I") || ($huruf == "U") || ($huruf == "E") || ($huruf == "O")) {
    echo "Termasuk huruf vokal";
}
else {
    echo "Tidak termasuk huruf vokal";
}
?>
```

| **Hasil Eksekusi** | `Termasuk huruf vokal` |

---

### 5. File `logika1.php`

| Kategori | Detail |
| :--- | :--- |
| **Konsep** | Struktur `if` tunggal dengan **Operator Logika OR (`||`)** |
| **Variabel** | `$hobi = "makan"` |
| **Kondisi** | `$hobi` adalah "makan" atau "ngemil" |
| **Kode Sumber** | ```php |
```
<?php
$hobi = "makan";
if (($hobi == "makan") || ($hobi == "ngemil")){
    echo "Hati-hati, jangan terlalu banyak. <br />";
    echo "Jangan lupa olahraga ..";
}
?>
```
| **Hasil Eksekusi** | `Hati-hati, jangan terlalu banyak. <br />Jangan lupa olahraga ..` |

---

### 6. File `logika4.php`

| Kategori | Detail |
| :--- | :--- |
| **Konsep** | Struktur `if...elseif...else` |
| **Variabel** | `$nilai = 70` |
| **Kondisi** | Memeriksa apakah nilai > 50, < 50, atau = 50 |
| **Kode Sumber** | ```php |
```

<?php
$nilai = 70;
if ($nilai > 50) {
    echo "Nilai lebih besar dari 50";
}
else if ($nilai < 50) {
    echo "Nilai lebih kecil dari 50";
}
else {
    echo "Nilai sama dengan 50";
}
?>
```
| **Hasil Eksekusi** | `Nilai lebih besar dari 50` |

---

### 7. File `logika5.php`

| Kategori | Detail |
| :--- | :--- |
| **Konsep** | Struktur `if` bersarang (`Nested if`) (dengan penanganan kasus sama dengan 50 yang *belum* lengkap) |
| **Variabel** | `$nilai = 50` |
| **Kondisi** | Memeriksa apakah nilai > 50, atau < 50 |
| **Kode Sumber** | ```php |
```

<?php
$nilai = 50;
if ($nilai > 50)
{
    echo "Nilai lebih besar dari 50";
}
else
    if ($nilai < 50)
    {
        echo "Nilai lebih kecil dari 50";
    }
?>
```
| **Hasil Eksekusi** | (Tidak menampilkan apa-apa / Kosong, karena `$nilai = 50` tidak memenuhi kedua kondisi) |

---

### 8. File `logika6.php`

| Kategori | Detail |
| :--- | :--- |
| **Konsep** | Struktur `if` bersarang (`Nested if`) (dengan penanganan kasus sama dengan 50 yang **lengkap**) |
| **Variabel** | `$nilai = 50` |
| **Kondisi** | Memeriksa apakah nilai > 50, < 50, atau = 50 |
| **Kode Sumber** | ```php |
```

<?php
$nilai = 50;
if ($nilai > 50)
{
    echo "Nilai lebih besar dari 50";
}
else
    if ($nilai < 50)
    {
        echo "Nilai lebih kecil dari 50";
    }
    else
    {
        echo "Nilai sama dengan 50";
    }
?>
```
| **Hasil Eksekusi** | `Nilai sama dengan 50` |

---

### 9. File `input.html` (Formulir Input)

| Kategori | Detail |
| :--- | :--- |
| **Konsep** | HTML Form untuk mengirim data ke PHP |
| **Method/Action** | `method="post"`, `action="script7-1.php"` |
| **Input Fields** | `username` (text), `pass` (password) |
| **Kode Sumber** | ```html |
```

<form method="post" action="script7-1.php">
    Username <input type="text" name="username"> <br />
    Password <input type="password" name="pass"> <br />
    <input type="submit" name="submit" value="Submit">
</form>
```
| **Tampilan / Keterangan** | Formulir sederhana yang meminta input Username dan Password, yang datanya akan diproses oleh `script7-1.php` menggunakan metode POST. |

---

🏁 Kesimpulan Laporan Praktikum Struktur Kontrol
Praktikum ini berhasil menguji berbagai bentuk struktur kontrol kondisional dan logika dalam pemrograman PHP, yang merupakan fondasi penting dalam pengambilan keputusan (decision making) pada sebuah program.

1. Struktur Kondisional
- if Tunggal: Digunakan untuk menjalankan blok kode hanya jika satu kondisi terpenuhi (contoh: if1.php).
- if...else: Digunakan untuk menjalankan salah satu dari dua blok kode berdasarkan apakah kondisi bernilai TRUE atau FALSE (contoh: logika2.php).
- if...elseif...else: Digunakan untuk menangani lebih dari dua kemungkinan kondisi secara berurutan, memberikan struktur yang lebih rapi untuk logika multi-cabang (contoh: logika4.php).
- if Bersarang (Nested if): Digunakan untuk melakukan pengecekan kondisi di dalam kondisi lain. Metode ini efektif dalam pemrosesan hierarkis, seperti penentuan status bilangan (positif, negatif, nol) di script7-2proses.php atau pencarian nilai maksimum di script7-1proses.php (Cara Ke-3).

2. Logika dan Operator Boolean
- Operator Logika (AND &&, OR ||): Penggunaan operator ini sangat vital untuk menggabungkan beberapa kondisi.
- OR (||): Digunakan untuk mengizinkan salah satu dari beberapa kondisi benar agar blok kode dieksekusi (contoh: Pengecekan huruf vokal di logikahuruf.php).
- AND (&&): Digunakan untuk memastikan semua kondisi yang digabungkan harus benar, sering dipakai dalam otentikasi ketat (contoh: Logika login di login.php, di mana username DAN password harus cocok).

3. Struktur Switch
- switch...case: Struktur ini terbukti lebih efisien dan mudah dibaca daripada serangkaian panjang if...elseif ketika membandingkan sebuah variabel dengan banyak nilai diskrit yang berbeda. Ini diilustrasikan dengan jelas dalam konversi angka bulan ke nama bulan di switch01.php. Penggunaan perintah break; sangat krusial untuk mencegah eksekusi kode pada case berikutnya (fall-through).

4. Studi Kasus
- Mencari Nilai Maksimum: Praktikum berhasil mengimplementasikan tiga cara berbeda untuk menemukan nilai terbesar dari tiga bilangan (script7-1proses.php), menunjukkan bahwa satu masalah dapat dipecahkan dengan berbagai pendekatan logika. Cara yang menggunakan variabel perantara (logikamax.php dan Cara Ke-1) cenderung lebih mudah diikuti langkah demi langkah.

Formulir Interaktif: Penggunaan formulir HTML (input.html, script7-1.php, script7-2.php) dan penanganan data POST dalam PHP menunjukkan bagaimana struktur kontrol PHP digunakan secara praktis untuk memproses masukan pengguna, menjadikannya responsif dan dinamis.

---
