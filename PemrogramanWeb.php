<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pertemuan 9</title>
    <link rel="stylesheet" href="style.css">
</head>

<?php
include 'Variabel.php';
?>

<body>
    <header class="Container-Header">
        <div class="Header">
            <h2><?php echo $Nama;?></h2>
            <h3><?php echo $NIM;?></h3>
            <h3><?php echo $Kelas;?></h3>
        </div>
    </header>
    <div class="Container-Content">
        <div class="Content">
            <p>Perkenalkan Nama saya <?php echo $Nama ?>. Saya adalah mahasiswa di <?php echo $Kampus ?>, dengan
                jurusan <?php echo $Jurusan ?>.Saat duduk dikelas <?php echo $Kelas ?>, Dengan NIM <?php echo $NIM ?>.</p>
            <p>Jawaban Tugas-9 :</p>
            <p>Server-Side Scripting (skrip sisi server) adalah proses di mana kode program dijalankan pada server 
                web untuk menghasilkan konten dinamis yang kemudian dikirimkan ke klien (browser). Dalam hal ini, 
                ketika pengguna mengakses halaman web, server akan memproses permintaan, mengeksekusi kode skrip yang 
                ada di server, dan mengirimkan hasilnya (biasanya berupa HTML, JSON, atau data lainnya) ke browser 
                pengguna.Cara Kerja Server-Side Scripting:Permintaan dari Klien (Browser): Pengguna (klien) mengirimkan 
                permintaan (request) untuk mengakses sebuah halaman web tertentu. Proses pada Server: Server menerima 
                permintaan dan menjalankan skrip yang ada di sisi server (misalnya PHP, Python, Ruby, dll). Skrip tersebut 
                bisa berinteraksi dengan database, melakukan perhitungan, atau menghasilkan konten dinamis. Pengiriman Hasil 
                ke Klien: Setelah skrip dijalankan, server mengirimkan hasilnya ke browser sebagai HTML atau format lain yang 
                diminta oleh klien. Render di Klien: Browser klien kemudian akan merender dan menampilkan halaman web tersebut 
                sesuai dengan hasil dari server. Contoh skrip server-side adalah PHP, di mana server mengeksekusi kode PHP dan 
                mengirimkan HTML yang sudah dihasilkan ke browser.
            </p>
        </div>
    </div>
</body>
</html>