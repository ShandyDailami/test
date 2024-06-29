<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL('storage/images/ULM.png') }}" type="image/x-icon">
    <title>Halaman Pengajuan</title>
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

        form {
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

        .content-1 p {
            font-size: 1.5rem;
            font-weight: 600;
            text-align: center;
        }

        span {
            color: red;
        }

        .nama,
        .prodi,
        .nim,
        .phone,
        .semester,
        .tahun,
        .alasan,
        .keperluan {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .nama label,
        .prodi label,
        .nim label,
        .phone label,
        .semester label,
        .alasan label,
        .tahun label,
        .keperluan label {
            margin-bottom: 10px;
            font-weight: bold;
            font-size: 1.1rem;
        }

        .nama input,
        .prodi select,
        .nim input,
        .phone input,
        .semester select,
        .tahun select,
        .alasan input,
        .keperluan select,
        option {
            border: 2px #E2E8F0 solid;
            width: 100%;
            height: 60px;
            border-radius: 10px;
            padding-left: 15px;
            font-size: 1rem;
            cursor: pointer;
            outline: none;
        }

        input[disabled],
        .prodi select {
            background-color: #E2E8F0;
            border: none;
        }

        .semester select,
        .tahun select,
        .keperluan select,
        option::placeholder {
            width: 100%;
        }

        .semester select option[disabled] {
            color: #E2E8F0;
        }

        .nama input::placeholder,
        .nim input::placeholder,
        .handphone input::placeholder,
        .alasan::placeholder,
        .phone input::placeholder {
            color: #E2E8F0;
        }

        .tombol {
            text-align: right;
        }

        .btn-batal {
            display: inline-block;
            background-color: #fff;
            border: 1px solid #E2E8F0;
            padding: 15px 100px;
            border-radius: 10px;
            font-size: 1.1rem;
            color: #000;
            margin-top: 25px;
        }

        .btn-batal:hover {
            border: 1px solid #000;
        }

        .tombol button {
            background-color: #0EA5E9;
            border: none;
            border-radius: 10px;
            width: 230px;
            height: 58px;
            font-size: 1.1rem;
            color: #fff;
            margin-left: 25px;
        }

        .tombol button:hover {
            background-color: #0284C7
        }

        .alert {
            width: 500px;
            margin-bottom: 10px;
            border-radius: 5px;
            padding: 20px 50px;
            background-color: #ffc1c1;
            color: red;
            border: 2px red solid;
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
                    <a href="{{ route('e-service/rekomendasi') }}"><i class="bi bi-chevron-left"></i> Kembali</a>
                </div>
                <div class="wrap-content">
                    <div class="content-1">
                        <p>Tambah Pengajuan Surat Rekomendasi Mahasiswa</p>
                    </div>
                    <div class="content-2">
                        <form action="{{ route('pengajuan.store') }}" method="POST">
                            @csrf
                            @if ($errors->any())
                                @foreach ($errors->all() as $err)
                                    <p class="alert">{{ $err }}</p>
                                @endforeach
                            @endif
                            <input type="hidden" name="jenis_pengajuan" id="jenis_pengajuan"
                                value="Surat Rekomendasi Mahasiswa">
                            <div class="nama">
                                <input type="hidden" name="mahasiswa_id" id="jenis_pengajuan"
                                    value="{{ $mahasiswa->id_mahasiswa }}">
                                <div class="nama">
                                    <label for="nama">Nama Lengkap <span>*</span></label>
                                    <input type="text" name="nama" id="nama"
                                        value="{{ $mahasiswa->nama_lengkap }}" disabled>
                                </div>
                                <div class="nim">
                                    <label for="nim">NIM <span>*</span></label>
                                    <input type="text" name="nim" id="nim" value="{{ $mahasiswa->nim }}"
                                        disabled>
                                </div>
                                <div class="prodi">
                                    <label for="prodi">Program Studi <span>*</span></label>
                                    <select name="prodi" id="prodi" style="pointer-events: none;">
                                        <option value="Teknologi Informasi" selected>Teknologi Informasi</option>
                                    </select>
                                </div>
                                <div class="phone">
                                    <label for="phone">No. Handphone <span>*</span></label>
                                    <input type="text" name="phone" id="phone"
                                        value="{{ $mahasiswa->no_telpon }}" disabled>
                                </div>
                                <div class="semester">
                                    <label for="semester">Semester <span>*</span></label>
                                    <select name="semester" id="semester">
                                        <option style="color: #ddd" value="" selected disabled hidden>Pilih
                                            Semester
                                        </option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                    </select>
                                </div>
                                <div class="tahun">
                                    <label for="tahun">Tahun Akademik <span>*</span></label>
                                    <select name="tahun_akademik" id="tahun">
                                        <option style="color: #ddd" value="" selected disabled hidden>Pilih
                                            Tahun
                                            Akademik
                                        </option>
                                        <option value="2021/2022">2021/2022</option>
                                        <option value="2022/2023">2022/2023</option>
                                        <option value="2023/2024">2023/2024</option>
                                        <option value="2024/2025">2024/2025</option>
                                    </select>
                                </div>
                                <div class="keperluan">
                                    <label for="keperluan">Keperluan <span>*</span></label>
                                    <select name="keperluan" id="keperluan">
                                        <option style="color: #ddd" value="" selected disabled hidden>Pilih
                                            Keperluan
                                        </option>
                                        <option value="Pengajuan Beasiswa">Pengajuan Beasiswa</option>
                                        <option value="Pengajuan Dispensasi keterlambatan Pembayaran UKT">Pengajuan
                                            Dispensasi keterlambatan Pembayaran UKT</option>
                                        <option value="Mengikuti Lomba Mahasiswa">Mengikuti Lomba Mahasiswa</option>
                                    </select>
                                </div>
                                <div class="alasan">
                                    <label for="alasan">Alasan <span>*</span></label>
                                    <input type="text" name="alasan" id="alasan"
                                        placeholder="Nama Beasiswa/Nama Lomba/Alasan Keterlambatan Pembayaran UKT">
                                </div>

                                <div class="tombol">
                                    <a class="btn-batal">Batal</a>
                                    <button>Kirim</button>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </main>
    </section>
</body>

</html>
