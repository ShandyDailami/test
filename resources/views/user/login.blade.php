<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" href="{{ URL('storage/images/ULM.png') }}" type="image/x-icon">
    <title>Halaman Login</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            text-decoration: none;
            list-style: none;
            font-family: "Poppins", sans-serif;
        }

        body {
            display: flex;
        }

        aside {
            width: 35%;
            height: 150vh;
            display: flex;
            align-items: center
        }

        aside img {
            width: 100%;
            height: 100%;
        }

        main {
            width: 65%;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
        }

        .wrapper {
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .univ {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 20px;
            margin-bottom: 60px;
        }

        .univ img {
            width: 100px;
        }

        .univ-text p:nth-child(1) {
            font-weight: 600;
            font-size: 1.8rem
        }

        .univ-text p:nth-child(2) {
            color: #8592A4;
            font-size: 1.1rem
        }

        header {
            margin-bottom: 50px;
        }

        header p {
            text-align: center
        }

        header p:nth-child(1) {
            font-weight: 600;
            font-size: 1.8rem
        }

        header p:nth-child(2) {
            color: #8592A4;
            font-size: 1.1rem
        }

        span {
            color: red;
        }

        .username,
        .password {
            display: flex;
            flex-direction: column;
            margin-bottom: 20px;
        }

        .username label,
        .password label {
            margin-bottom: 10px;
            font-weight: 600;
            font-size: 1.1rem;
        }

        .username input,
        .password input {
            border: 2px #E2E8F0 solid;
            width: 585px;
            height: 60px;
            border-radius: 10px;
            padding-left: 15px;
            font-size: 1rem;
            cursor: pointer;
            outline: none;
        }

        .username input::placeholder,
        .password input::placeholder {
            color: #E2E8F0;
        }

        .password a {
            text-align: right;
            font-size: 1.1rem;
            color: #8592A4;
            margin-top: 10px;
        }

        footer .btn {
            display: block;
            font-weight: normal;
            background-color: #0EA5E9;
            border: none;
            padding: 15px 46%;
            border-radius: 10px;
            font-size: 1.1rem;
            color: white;
            margin-top: 25px;
        }

        footer .btn:hover {
            background-color: #0284C7
        }

        footer p {
            text-align: center;
            font-size: 1.1rem;
            color: #A5B2C3;
            margin-top: 20px;
        }

        footer a {
            color: #000;
            font-weight: 600;
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
    <aside>
        <img src="{{ URL('storage/images/aside.png') }}" alt="">
    </aside>
    <main>
        <div class="wrapper">
            <div class="univ">
                <img src="{{ URL('storage/images/ULM.png') }}" alt="">
                <div class="univ-text">
                    <p>Fakultas Teknik</p>
                    <p>Universitas Lambung Mangkurat</p>
                </div>
            </div>
            <form action="{{ route('login.aksi') }}" method="POST">
                @csrf
                <header>
                    <p>Login ke Akun Anda</p>
                    <p>Masukkan Username dan Password untuk login!</p>
                    @if ($errors->any())
                        @foreach ($errors->all() as $err)
                            <p class="alert">{{ $err }}</p>
                        @endforeach
                    @endif
                </header>
                <div class="username">
                    <label for="username">Username <span>*</span></label>
                    <input type="text" name="nim" id="username" placeholder="Masukkan Username">
                </div>
                <div class="password">
                    <label for="password">Password <span>*</span></label>
                    <input type="password" name="password" id="password" placeholder="Masukkan Password">
                    <a href="">Lupa password?</a>
                </div>
                <footer>
                    <button class="btn" type="submit">Login</button>
                    <p>Belum Mempunyai Akun? <a href="{{ route('daftar') }}">Daftar</a></p>
                </footer>
            </form>
        </div>
    </main>
</body>

</html>
