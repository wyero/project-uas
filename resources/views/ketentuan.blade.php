<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Buku</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="/fontawesome/css/all.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Estonia&family=Open+Sans:wght@700;800&family=Roboto&display=swap" rel="stylesheet">
</head>
<body>
    <nav>
        <a href="/"><img src="/img/logo2.jpeg" alt="logo"></a>
        <h1>PERPUSTAKAAN</h1>
    </nav>
    <section class="hal-utama">
        <aside>
            <a href="/databuku">
                <i class="fa-solid fa-book-bookmark"></i>
                Data Buku
            </a>
            <a href="/daftarbuku">
                <i class="fa-solid fa-book-open"></i>
                 Menampilkan Data Buku
            </a>
            <a href="/datapeminjam">
                <i class="fa-solid fa-user-pen"></i>
                Data Peminjam
            </a>
            <a href="/daftarpeminjam">
                <i class="fa-solid fa-address-book"></i>
                Menampilkan Data Peminjam
            </a>
            <a href="/ketentuan">
                <i class="fa-solid fa-circle-exclamation"></i>
                Ketentuan Meminjam Buku
            </a>
        </aside>
        <main class="buku">
            <div class="ketentuan">
                <p>Ketentuan Meminjam Buku Di Perpustakaan</p>
                <ul>
                    <li>Syarat Masuk</li>
                    <ol>
                        <li>Setiap Peminjam harus memperlihatkan kartu anggota perpustakaan yang masih berlaku</li>
                        <li>Setiap Peminjam tidak diperkenankan menggunakan kartu anggota perpustakaan milik orang lain.</li>
                        <li>Mengisi buku pengunjung</li>
                        <li>Menitipkan semua barang bawaan kecuali barang berharga.</li>
                        <li>Bersikap dan berpakaian sopan, tidak memakai sandal jepit, berkaos oblong</li>
                    </ol>
                    <li>Syarat Keluar</li>
                    <ol>
                        <li>Pemeriksaan barang bawaan</li>
                        <li>Pemeriksaan buku yang ingin di pinjam </li>
                    </ol>
                    <li>Larangan</li>
                    <ol>
                        <li>Memutilasi bahan pustaka berupa buku atau non buku</li>
                        <li>Mempraktekan vandalisme</li>
                        <li>Melakukan tindakan dan perilaku asusila</li>
                        <li>Menimbulkan suara berisik, gaduh.</li>
                        <li>Membuang sampah sembarangan</li>
                        <li>Makan, minum dan merokok di ruangan perpustakaan</li>
                    </ol>
                    <li>Anjuran</li>
                    <ol>
                        <li>Berpakaian sewajarnya kaum intelektual</li>
                        <li>Mengembalikan bahan pustaka tepat waktu</li>
                        <li>Responsif terhadap semua niat baik staf dalam memberikan layanan.</li>
                    </ol>
                    <li>Sanksi Bagi Pengunjung Perpustakaan</li>
                    <p>Pengguna perpustakaan yang merusakkan sebagian dan atau keseluruhan atau 
                        menghilangkan bahan pustaka yang menjadi tanggungjawab peminjamannya 
                        dikenakan ketentuan sebagai berikut :
                    </p>
                    <ol>
                        <li>
                            Pengguna perpustakaan yang terlambat mengembalikan buku 
                            pinjaman di bagian sirkulasi dikenakan denda Rp 1000,00 per buku 
                            tiap hari keterlambatan (sesuai tata tertib peminjaman).
                        </li>
                        <li>
                        	Mengganti bahan pustaka yang rusak sebagian dan atau keseluruhan 
                            atau hilang tersebut dengan bahan pustaka yang sama atau diganti 
                            dengan uang senilai 2 kali harga(terbaru) dari bahan pustaka yang hilang.
                        </li>
                        <li>Tidak boleh mengganti bahan pustaka dengan hasil fotocopy-an.</li>
                        <li>
                        	Pengguna yang tidak mentaati tata tertib dan peraturan, baik 
                            sebagian atau keseluruhan, tidak diperkenankan memanfaatkan 
                            fasilitas  yang ada di perpustakaan.
                        </li>
                        <li>
                        	Pengguna yang dengan sengaja atau direncanakan melanggar peraturan 
                            dan tata tertib akan dikenakan sanksi administratif dan atau akademik.
                        </li>
                    </ol>
                </ul>
            </div>
        </main>
    </section>
    @include('sweetalert::alert')
</body>
</html>