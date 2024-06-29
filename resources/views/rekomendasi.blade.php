<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL('storage/images/ULM.png') }}" type="image/x-icon">
    <title>Halaman Surat Rekomendasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            font-family: 'Poppins', sans-serif;
        }

        body {
            width: 100%;
            height: 100%;
        }

        header {
            width: 100%;
            position: static;
            display: flex;
            justify-content: space-between;
            border-bottom: 1px #E6EBF2 solid
        }

        .left {
            display: flex;
            align-items: center;
            padding: 20px;
            gap: 65px
        }

        .left .univ {
            display: flex;
            align-items: center;
            gap: 10px;
            cursor: pointer;
        }

        .left .univ img {
            width: 40px;
        }

        .right,
        .profile {
            display: flex;
            align-items: center;
        }

        .right {
            margin-right: 70px;
        }

        .right i {
            background-color: #E0F2FE;
            color: #35B4ED;
            padding: 5px 9px;
            border-radius: 20px;
            cursor: pointer;
        }

        .profile {
            cursor: pointer;
        }

        .profile img {
            margin: 0 10px 0 20px;
            width: 32px;
            height: 32px;
            border-radius: 20px;
        }

        .univ-text p:nth-child(1) {
            font-size: .9rem;
            font-weight: 600;
        }

        .univ-text p:nth-child(2) {
            font-size: .7rem;
            font-weight: 500;
            color: #8592A4;
        }

        form i {
            color: #9FACBF;
            font-size: 1.2rem;
        }

        form input {
            border: none;
            outline: none;
            padding-left: 10px;
        }

        form input::placeholder {
            color: #9FACBF;
        }

        section {
            display: flex;
        }

        nav {
            width: 320px;
            height: 100%;
            padding: 20px 18px;
        }

        .btn {
            display: flex;
            align-items: center;
        }

        .menu p,
        .layanan p,
        .other p {
            color: #CDD7E3;
            font-size: 1rem;
        }

        .menu a {
            width: 100%;
            display: block;
            margin: 10px 0;
            padding: 10px 15px;
            font-size: 1rem;
            border-radius: 8px;
            color: #91A0B6;
            font-weight: 500;
        }

        .menu i {
            color: #91A0B6;
            margin-right: 15px;
            font-size: 1.2rem;
        }

        .layanan a,
        .other a {
            display: block;
            margin: 10px 0;
            padding: 10px 15px;
            font-size: 1rem;
            border-radius: 8px;
            color: #91A0B6;
            font-weight: 500;
        }

        .menu a:hover,
        .layanan a:hover,
        .other a:hover {
            background-color: #F1F5F9;
        }

        .layanan i,
        .other i {
            font-size: 1.2rem;
            color: #91A0B6;
            margin-right: 15px;
        }

        .active {
            color: #0E8BCA !important;
            background-color: #BAE6FD;
        }

        .active i {
            color: #0E8BCA !important;
        }

        .active:hover {
            background-color: #BAE6FD !important;
        }

        main {
            width: 100%;
            height: 100%;
            background-color: #F8FAFC;
            padding: 30px 20px;
        }

        .title {
            display: flex;
            align-items: center;
        }

        .title i {
            margin-right: 15px;
            padding: 12px 20px;
            border-radius: 5px;
            color: #35B4ED;
            background-color: #fff;
            font-size: 2rem;
        }

        .text p:nth-child(1) {
            font-size: 1.2rem;
            font-weight: 600;
        }

        .text p:nth-child(2) {
            font-size: 1rem;
            color: #91A0B6;
        }

        .container {
            background-color: #fff;
            margin: 0 10px;
            padding: 20px;
        }


        .container-header {
            display: flex;
            align-items: center;
            border-bottom: 1px #E6EBF2 solid;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }

        .container-header a {
            font-size: 1.1rem;
            font-weight: 500;
            color: #35B4ED;
        }

        .wrap-content {
            display: flex;
            flex-direction: column;
            gap: 40px;
        }

        .content-1 {
            display: flex;
            align-items: center;
            gap: 20px;
        }

        .card {
            width: 320px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 110px;
            padding: 0 20px;
            background-color: #EAB308;
            border-radius: 5px;
        }

        .flex {
            display: flex;
            padding: 0 0 0 20px;
            flex-direction: row;
            align-items: center;
        }

        .flex img {
            width: 200px;
            height: 100%;
            border-radius: 0 5px 5px 0;
            filter: brightness(75%);
        }


        .card p:nth-child(1) {
            color: #fff;
            font-weight: normal;
            font-size: .9rem;
            margin-bottom: 5px;
            font-style: italic;
        }

        .card p:nth-child(2) {
            color: #fff;
            font-weight: 600;
            width: 45%;
            font-size: .9rem;
            line-height: 17px;
        }

        .content-2 p:nth-child(1),
        .content-3 p:nth-child(1),
        .content-4 p:nth-child(1) {
            font-weight: 600;
            font-size: 1rem;
            margin-bottom: 5px;
        }

        .content-2 p:nth-child(2),
        li {
            line-height: 30px;
            font-size: .8rem;
            color: #91A0B6;
        }

        .content-4 {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .header-content-4 {
            display: flex;
            justify-content: space-between;
            align-items: flex-start;
            margin-bottom: 20px;
        }

        .header-content-4 a {
            display: block;
            background-color: #35B4ED;
            color: #fff;
            padding: 15px 15px;
            font-size: 1rem;
            border-radius: 5px;
        }

        .header-content-4 a:hover {
            background-color: #0284C7;
        }

        .header-content-4 i {
            font-size: 1rem;
        }

        table {
            text-align: center;
            border-collapse: collapse;
        }

        th {
            background-color: #F1F5F9;
            padding: 20px 5px;
            color: #64748B;
            border-bottom: 1px solid #b6c2d4;
            border-radius: 5px 5px 0 0;
        }

        .pesan {
            padding: 30px;
            font-size: .8rem;
            color: #64748B;
        }

        .status {
            font-size: .8rem;
            background-color: #BBF7D0;
            color: #23A955;
            border-radius: 40px;
            padding: 5px 30px;
            font-weight: 500;
        }

        td {
            padding: 20px 0;
            font-size: .8rem;
            color: #64748B;
            border-bottom: 1px solid #b6c2d4;
        }

        table button {
            font-size: .8rem;
            padding: 5px 15px;
            border-radius: 5px;
            border: none;
            color: #fff;
            margin-left: 5px;
        }

        .detail {
            background-color: #6366F1;
        }

        .detail:hover {
            background-color: #4F46E5;
        }

        .lacak {
            background-color: #EAB308;
        }

        .lacak:hover {
            background-color: #CA8A04
        }

        .unduh {
            background-color: #0EA5E9;
        }

        .unduh:hover {
            background-color: #0284C7
        }
    </style>
</head>

<body>
    <header>
        <div class="left">
            <div class="univ">
                <img src="{{ URL('storage/images/ULM.png') }}" alt="">
                <div class="univ-text">
                    <p>Fakultas Teknik</p>
                    <p>Universitas Lambung Mangkurat</p>
                </div>
            </div>
            <form action="">
                <i class="bi bi-search"></i>
                <input type="text" name="layanan" id="layanan" placeholder="Cari Layanan..">
            </form>
        </div>
        <div class="right">
            <i class="bi bi-bell"></i>
            <div class="profile">
                <img src="{{ URL('storage/images/Shandy.jpg') }}" alt="">
                <p>{{ Auth::user()->nama_lengkap }}</p>
            </div>
        </div>
    </header>
    <section>
        <nav>
            <div class="menu">
                <p>Menu</p>
                <div class="btn">
                    <a href="{{ route('dashboard') }}"><i class="bi bi-grid"></i> Dashboard</a>
                </div>
            </div>
            <div class="layanan">
                <p>Layanan</p>
                <a class="active" href="{{ route('e-service') }}"><i class="bi bi-envelope"></i> e-Service</a>
                <a href=""><i class="bi bi-chat-square-text"></i> e-Command Center</a>
                <a href=""><i class="bi bi-display"></i></i> e-Response</a>
                <a href=""><i class="bi bi-credit-card"></i> e-Commerce</a>
                <a href=""><i class="bi bi-suitcase-lg"></i> e-Office</a>
            </div>
            <div class="other">
                <p>Other</p>
                <a href=""><i class="bi bi-clipboard2-check"></i> Kuisioner</a>
                <a href=""><i class="bi bi-question-circle"></i> FAQ</a>
                <a href=""><i class="bi bi-person"></i> Profile</a>
                <a href="{{ route('logout') }}"><i class="bi bi-box-arrow-in-left"></i> Logout</a>
            </div>
        </nav>
        <main>
            <div class="container">
                <div class="container-header">
                    <a href="{{ route('e-service') }}"><i class="bi bi-chevron-left"></i> Kembali</a>
                </div>
                <div class="wrap-content">
                    <div class="content-1">
                        <div class="card flex">
                            <div class="card-text">
                                <p>e-Service</p>
                                <p>Surat Rekomendasi Mahasiswa</p>
                            </div>
                            <img src="{{ URL('storage/images/suratRekomendasi.png') }}" alt="">
                        </div>
                        <div class="text">
                            <p>Surat Rekomendasi Mahasiswa</p>
                            <p>Pengajuan Surat Rekomendasi untuk beberapa keperluan seperti keperluan Lomba, Beasiswa,
                                Pengajuan Cuti Akademik, dan lainnya.</p>
                        </div>
                    </div>
                    <div class="content-2">
                        <p>Deskripsi</p>
                        <p>Layanan pengajuan surat rekomendasi mahasiswa adalah sistem yang disediakan untuk
                            menfasilitasi mahasiswa yang membutuhkan surat rekomendasi untuk keperluan seperti
                            penggantian KTM (Kartu Tanda Mahasiswa), pengajuan cuti akademik, pengambilan ijazah lebih
                            awal, pengajuan dispensasi keterlambatan pembayaran UKT/SPP, pindah kuliah, pengunduran diri
                            mahasiswa, mengikuti lomba mahasiswa, pengajuan beasiswa, dan pembuatan VISA.</p>
                    </div>
                    <div class="content-3">
                        <p>Alur Pengajuan</p>
                        <ol>
                            <li>1. Mahasiswa mengisi data formulir</li>
                            <li>2. Admin akademik memeriksa data dan kelengkapan berkas</li>
                            <li>3. WD 1 menyetujui pengajuan</li>
                            <li>4. Surat siap didownload oleh mahasiswa</li>
                        </ol>
                    </div>
                    <div class="content-4">
                        <div class="header-content-4">
                            <p>Tabel Pengajuan</p>
                            <div class="btn">
                                <a href="{{ route('e-service/rekomendasi/pengajuan') }}"><i class="bi bi-plus-lg"></i>
                                    Tambah Pengajuan</a>
                            </div>
                        </div>
                        <table>
                            <tr>
                                <th>No</th>
                                <th>ID Pengajuan</th>
                                <th>Jenis Pengajuan</th>
                                <th>Tanggal Pengajuan</th>
                                <th>Status</th>
                                <th>Aksi</th>
                            </tr>
                            @if (isset($pesan))
                                <tr>
                                    <td class="pesan" colspan="6">{{ $pesan }}</td>
                                </tr>
                            @else
                                @foreach ($pengajuans as $pengajuan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $pengajuan->id_pengajuan }}</td>
                                        <td>{{ $pengajuan->jenis_pengajuan }}</td>
                                        <td>{{ $pengajuan->created_at->format('d F Y') }}</td>
                                        <td>
                                            <span class="status">Disetujui</span>
                                        </td>
                                        <td>
                                            <button class="detail"><i class="bi bi-eye"></i> Detail</button>
                                            <button class="lacak"><i class="bi bi-file-earmark"></i> Lacak</button>
                                            <button class="unduh"><i class="bi bi-download"></i> Unduh</button>
                                        </td>
                                    </tr>
                                @endforeach
                            @endif
                        </table>
                    </div>
                </div>
            </div>
        </main>
    </section>
</body>

</html>
