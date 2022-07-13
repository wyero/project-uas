<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Peminjam</title>
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
                <p>Input Data Peminjam</p>
                <form action="/createpinjam" method="POST">
                    @csrf
                    <label for="namap">Nama Lengkap</label><br>
                    <input type="text" name="nama_peminjam" id="namap"><br>
                    <label for="kelas">Kelas</label><br>
                    <input type="text" name="kelas" id="kelas"><br>
                    <label for="jk">Jenis Kelamin</label> <br>
                    <select name="jenis_kelamin" id="jk" class="jk">
                        <option></option>
                        <option>Laki-Laki</option>
                        <option>Perempuan</option>
                    </select><br>
                    <label for="hp">Nomor Telepon</label><br>
                    <input type="text" name="nomor_tlpn" id="hp"><br>
                    <label for="kode">Kode Buku</label><br>
                    <input type="text" name="kode_buku" id="kode"><br>
                    <label for="jdb">Judul Buku</label><br>
                    <input type="text" name="judul_buku" id="jdb"><br>
                    <label for="tglm">Tanggal Meminjam</label><br>
                    <input type="date" name="tanggal_meminjam" id="tglm"><br>
                    <label for="tglp">Tanggal Pengembalian</label><br>
                    <input type="date" name="tanggal_pengembalian" id="tglp"><br>
                    <button>Simpan</button>
                </form>
           </div>
        </main>
    </section>
    @include('sweetalert::alert')
</body>
</html>