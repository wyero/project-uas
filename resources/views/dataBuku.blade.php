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
           <div class="inputbuku">
                <p>Input Data Buku</p>
                <form action="/createdatabuku" method="POST">
                    @csrf
                    <label for="kode">Kode Buku</label><br>
                    <input type="text" name="kode_buku" id="kode"><br>
                    <label for="jdl">Judul Buku</label><br>
                    <input type="text" name="judul_buku" id="jdl"><br>
                    <label for="thn">Tahun Terbit</label><br>
                    <input type="text" name="tahun_terbit" id="thn"><br>
                    <label for="kota">Kota Terbit</label><br>
                    <input type="text" name="kota_terbit" id="kota"><br>
                    <label for="png">Pengarang</label><br>
                    <input type="text" name="pengarang" id="png"><br>
                    <label for="pen">Penerbit</label><br>
                    <input type="text" name="penerbit" id="pen"><br>
                    <button>Simpan</button>
                </form>
           </div>
        </main>
    </section>
    @include('sweetalert::alert')
</body>
</html>