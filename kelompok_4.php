nama kelompok 4
1. randes
2. adi
3. radja
4. marchel
5. yesi
6. nabila


<?php
function hitungDiskon($jumlah_bayar) {
    if ($jumlah_bayar >= 500000) {
        return 0.05; // Diskon 5%
    } elseif ($jumlah_bayar >= 100000) {
        return 0.1;  // Diskon 10%
    } elseif ($jumlah_bayar >= 50000) {
        return 0.50; // Diskon 5%
    } else {
        return 0;   // Tidak ada diskon
    }
}

// Contoh penggunaan
$jumlah_pembelian = 100000;
$diskon = hitungDiskon($jumlah_pembelian);
$total_bayar = $jumlah_pembelian - ($jumlah_pembelian * $diskon);

echo "Jumlah pembelian: Rp " . number_format($jumlah_pembelian) . "<br>";
echo "Diskon: " . ($diskon * 100) . "%<br>";
echo "Total bayar: Rp " . number_format($total_bayar);
?>

<?php
// Soal a: Deret naik dengan selisih 5, dimulai dari 1
echo "Soal a:\n";
$angka = 1;
while ($angka <= 16) {
    echo $angka . " ";
    $angka += 5;
}
echo "<br>";

// Soal b: Deret turun dari 10 sampai 0
echo "Soal b:\n";
$angka = 10;
while ($angka >= 0) {
    echo $angka . " ";
    $angka--;
}
echo "<br>";

// Soal c: Deret turun dengan selisih 3, dimulai dari 30
echo "Soal c:\n";
$angka = 30;
do {
    echo $angka . " ";
    $angka -= 3;
} while ($angka >= 0);
echo "<br>";

// Soal d: Deret turun dengan selisih 2, dimulai dari 10
echo "Soal d:\n";
$angka = 10;
do {
    echo $angka . " ";
    $angka -= 2;
} while ($angka >= 0);
echo "<br>";
?>
