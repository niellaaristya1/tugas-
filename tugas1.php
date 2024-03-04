
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width , initial-scale=1.0">
    <style>
        table, tr, td, th{
            
            border: 1px solid black;
            border-collapse: collapse;
        }
    </style>
</head>

<?php
function hitung_subtotal($harga, $jumlah) { // Ini adalah fungsi PHP sederhana yang menerima dua parameter, yaitu harga dan jumlah, dan mengembalikan hasil perkalian keduanya sebagai subtotal.
     return $harga * $jumlah;
}

// Data barang = Ini adalah array yang berisi data barang. Setiap elemen array adalah array asosiatif yang mewakili satu item barang. Setiap item barang memiliki informasi seperti nomor, kode, nama barang, harga, dan jumlah.
$data_barang = array(
    array("No" => 1, "Kode" => "B001", "Nama Barang" => "Laptop Asus", "Harga" => 9000000, "Jumlah" => 3),
    array("No" => 2, "Kode" => "B002", "Nama Barang" => "Keyboard Logitech", "Harga" => 850000, "Jumlah" => 4),
    array("No" => 3, "Kode" => "B003", "Nama Barang" => "Speaker", "Harga" => 500000, "Jumlah" => 6),
    array("No" => 4, "Kode" => "B004", "Nama Barang" => "Printer Epson", "Harga" => 3000000, "Jumlah" => 7)
);

// Header tabel = Kode ini mencetak baris pertama dari tabel HTML, yang berisi header untuk kolom-kolom tabel (No, Kode, Nama Barang, Harga, Jumlah, dan Sub total).
echo "<table border='1'>";
echo "<tr><th>No</th><th>Kode</th><th>Nama Barang</th><th>Harga</th><th>Jumlah</th><th>Sub total</th></tr>";

// Menampilkan data barang dan menghitung subtotal 
$total_pembelian = 0;
foreach ($data_barang as $barang) {  // print array pakai multidimensi dan asosaitif dengan foreach 
    $sub_total = hitung_subtotal($barang["Harga"], $barang["Jumlah"]);
    $total_pembelian += $sub_total;
    echo "<tr>";
    echo "<td>{$barang['No']}</td>";
    echo "<td>{$barang['Kode']}</td>";
    echo "<td>{$barang['Nama Barang']}</td>";
    echo "<td>" . number_format($barang['Harga']) . "</td>";
    echo "<td>{$barang['Jumlah']}</td>";
    echo "<td>" . number_format($sub_total) . "</td>";
    echo "</tr>";
}

// Menampilkan total = Setelah loop selesai, kita mencetak satu baris terakhir untuk total pembelian
echo "<tr><td colspan='5' align='right'><b>TOTAL</b></td>";
echo "<td><b>" . number_format($total_pembelian) . "</b></td></tr>";
echo "</table>";
?>
