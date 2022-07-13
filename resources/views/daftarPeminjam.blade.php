<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjam</title>
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
        <main class="daftarP">
            <p>Daftar Peminjam Buku</p>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Nama Lengkap</th>
                        <th>Kelas</th>
                        <th>Jenis Kelamin</th>
                        <th>Nomor Telepon</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Tanggal Meminjam</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($daftarP as $daftar)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$daftar->nama_peminjam}}</td>
                        <td>{{$daftar->kelas}}</td>
                        <td>{{$daftar->jenis_kelamin}}</td>
                        <td>{{$daftar->nomor_tlpn}}</td>
                        <td>{{$daftar->kode_buku}}</td>
                        <td>{{$daftar->judul_buku}}</td>
                        <td>{{$daftar->tanggal_meminjam}}</td>
                        <td>{{$daftar->tanggal_pengembalian}}</td>
                        <td class="action">
                            <a href="/editpeminjam/{{$daftar->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <div></div>
                            <form action="/deletepeminjam/{{$daftar->id}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button>
                                    <i class="fa-solid fa-trash-can"></i>
                                </button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </main>
    </section>
    @include('sweetalert::alert')
</body>
</html>