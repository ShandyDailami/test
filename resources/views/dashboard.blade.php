<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL('storage/images/ULM.png') }}" type="image/x-icon">
    <title>Halaman Dashboard</title>
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
            width: 350px;
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
            color: #0E8BCA;
            background-color: #BAE6FD;
            font-weight: 500;
        }

        .menu i {
            color: #0E8BCA;
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

        main {
            width: 100%;
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
            font-size: .9rem;
            color: #91A0B6;
        }

        .box-peringatan {
            display: flex;
            margin: 30px 0;
            padding: 15px 20px;
            background-color: #FFF7ED;
            gap: 10px;
            border-radius: 5px;
        }

        .box-peringatan i {
            color: #FA934B;
        }

        .box-peringatan-text p:nth-child(1) {
            color: #414c5a;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .box-peringatan-text a {
            color: #0E8BCA;
            text-decoration: underline;
        }

        .box-peringatan-text p:nth-child(2) {
            font-size: .9rem;
            color: #848B95;
            line-height: 25px;
        }

        .box-selamat-datang {
            background-color: #26AEEB;
            padding: 40px 30px;
            border-radius: 5px;
            margin-bottom: 30px;
        }

        .box-selamat-datang p:nth-child(1) {
            font-size: 1.4rem;
            font-weight: 600;
            color: #fff;
            margin-bottom: 15px;
        }

        .box-selamat-datang p:nth-child(2) {
            width: 50%;
            color: #fff;
            font-size: .9rem;
        }

        .ringkasan {
            margin-bottom: 30px;
        }

        .ringkasan p:nth-child(1),
        .fitur p:nth-child(1) {
            color: #91A0B6;
            font-weight: 500;
            margin-bottom: 10px;
        }

        .ringkasan-card-wrapper {
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        .ringkasan-card {
            width: 20%;
            background-color: #fff;
            padding: 20px 0 15px 20px;
            border-radius: 5px;
        }

        .ringkasan-card p:nth-child(1) {
            color: #26AEEB;
            font-size: 1.5rem;
            margin-bottom: 0;
        }

        .ringkasan-card p:nth-child(2) {
            color: #848B95;
            font-size: .9rem;
        }

        .fitur-card-wrapper {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-between;
            gap: 15px;
        }

        .fitur-card {
            width: 295px;
            background-color: #fff;
            border-radius: 5px;
            border-radius: 5px
        }

        .card-img {
            display: flex;
            flex-direction: column;
            justify-content: center;
            height: 120px;
            padding: 0 20px;
            background-color: #EAB308;
            border-radius: 5px 5px 0 0;
        }

        .card-img p:nth-child(1) {
            color: #fff;
            font-weight: normal;
            font-size: .9rem;
            margin-bottom: 5px;
        }

        .card-img p:nth-child(2) {
            color: #fff;
            font-weight: 600;
            width: 45%;
            font-size: .9rem;
            line-height: 17px;
        }

        .card-text {
            padding: 20px 25px;
        }

        .card-text p {
            text-align: center;
        }

        .card-text p:nth-child(1) {
            color: #000;
            font-weight: 600;
            margin-bottom: 5px;
        }

        .card-text p:nth-child(2) {
            font-size: .7rem;
            color: #848B95;
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
            @auth
                <div class="profile">
                    <img src="{{ URL('storage/images/Shandy.jpg') }}" alt="">
                    <p>{{ Auth::user()->nama_lengkap }}</p>
                </div>
            @endauth
        </div>
    </header>
    <section>
        <nav>
            <div class="menu">
                <p>Menu</p>
                <div class="btn">
                    <a href="" class="active"><i class="bi bi-grid"></i> Dashboard</a>
                </div>
            </div>
            <div class="layanan">
                <p>Layanan</p>
                <a href="{{ route('e-service') }}"><i class="bi bi-envelope"></i> e-Service</a>
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
            <div class="title">
                <i class="bi bi-grid"></i>
                <div class="text">
                    <p>Dashboard</p>
                    <p>Akses menu dan informasi penting lainnya di sini</p>
                </div>
            </div>
            <div class="box-peringatan">
                <i class="bi bi-exclamation-triangle"></i>
                <div class="box-peringatan-text">
                    <p>Kamu belum mengisi kuisioner pada periode semester ini, silahkan isi kuisioner <a
                            href="">Disini</a></p>
                    <p>Kamu tidak dapat melakukan pengajuan layanan jika belum mengisi kuisioner. Oleh karena itu, kami
                        mengharapkan agar setiap mahasiswa mengisi kuisioner pada awal setiap semester sebagai bagian
                        dari proses yang diperlukan untuk memberikan pelayanan yang terbaik dan peningkatan kualitas
                        serta evaluasi layanan FT ULM</p>
                </div>
            </div>
            <div class="box-selamat-datang">
                @auth
                    <p>Selamat Datang {{ Auth::user()->nama_lengkap }}!</p>
                @endauth
                <p>Di website ini kamu dapat mengajukan layanan dan mengecek status pengajuannya</p>
            </div>
            <div class="ringkasan">
                <p>Ringkasan</p>
                <div class="ringkasan-card-wrapper">
                    <div class="ringkasan-card">
                        <p>4</p>
                        <p>Layanan diajukan</p>
                    </div>
                    <div class="ringkasan-card">
                        <p>2</p>
                        <p>Menunggu persetujuan</p>
                    </div>
                    <div class="ringkasan-card">
                        <p>1</p>
                        <p>Layanan disetujui</p>
                    </div>
                    <div class="ringkasan-card">
                        <p>1</p>
                        <p>Layanan ditolak</p>
                    </div>
                </div>
            </div>
            <div class="fitur">
                <p>Mungkin yang kamu butuhkan</p>
                <div class="fitur-card-wrapper">
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Keterangan Lulus</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Keterangan Lulus</p>
                            <p>Dapatkan surat kelulusanmu dengan mudah melalui layanan pengajuan surat keterangan lulus
                                kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Pengantar Izin PKL</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Pengantar Izin PKL</p>
                            <p>Bersiaplah untuk pengalaman belajar di dunia nyata, manfaatkan layanan pengajuan surat
                                pengantar izin PKL kami.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Pengantar Izin Penelitian</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Pengantar Izin Penelitian</p>
                            <p>Manfaatkan layanan kami untuk mempercepat proses pengajuan surat pengantar izin
                                penelitian dan fokuslah pada penelitianmu.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Permintaan Data MK/PKL/TA</p>
                        </div>
                        <div class="card-text">
                            <p>Permintaan Data MK/PKL/TA</p>
                            <p>Pengajuan surat permintaan data mata kuliah/praktek kerja lapangan/tugas akhir mahasiswa
                                FT ULM.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>Surat Tugas KP/TA</p>
                        </div>
                        <div class="card-text">
                            <p>Surat Tugas KP/TA</p>
                            <p>Pengajuan tugas untuk kerja praktek/tugas akhir mahasiswa Fakultas Teknik Universitas
                                Lambung Mangkurat.</p>
                        </div>
                    </div>
                    <div class="fitur-card">
                        <div class="card-img">
                            <p>e-Service</p>
                            <p>MBKM FT ULM</p>
                        </div>
                        <div class="card-text">
                            <p>MBKM FT ULM</p>
                            <p>Layanan ini digunakan untuk pendataan dan penerbitan surat tugas pelaksanaan program MBKM
                                FT ULM.</p>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </section>
</body>

</html>
