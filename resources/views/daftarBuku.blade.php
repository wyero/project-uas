<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Buku</title>
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
            <a href="daftarpeminjam">
                <i class="fa-solid fa-address-book"></i>
                Menampilkan Data Peminjam
            </a>
            <a href="/ketentuan">
                <i class="fa-solid fa-circle-exclamation"></i>
                Ketentuan Meminjam Buku
            </a>
        </aside>
        <main class="daftarB">
            <p>Daftar Buku</p>
            <table>
                <thead>
                    <tr>
                        <th>#</th>
                        <th>Kode Buku</th>
                        <th>Judul Buku</th>
                        <th>Tahun Terbit</th>
                        <th>Kota Terbit</th>
                        <th>Pengarang</th>
                        <th>Penerbit</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($dataBuku as $databuku)
                    <tr>
                        <td>{{$loop->iteration}}</td>
                        <td>{{$databuku->kode_buku}}</td>
                        <td>{{$databuku->judul_buku}}</td>
                        <td>{{$databuku->tahun_terbit}}</td>
                        <td>{{$databuku->kota_terbit}}</td>
                        <td>{{$databuku->pengarang}}</td>
                        <td>{{$databuku->penerbit}}</td>
                        <td class="action">
                            <a href="/editdatabuku/{{$databuku->id}}"><i class="fa-solid fa-pen-to-square"></i></a>
                            <div></div>
                            <form action="/deletebuku/{{$databuku->id}}" method="POST">
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