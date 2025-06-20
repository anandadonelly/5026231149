<!DOCTYPE html>
<html lang="en">

<head>
    <title>Ananda Donelly Reksana : 5026231149</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{-- Bootstrap CSS --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    {{-- Font Awesome CSS --}}
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css"
        integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">

    {{-- Custom CSS --}}
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa; /* Light gray background */
        }

        .jumbotron {
            background-color: #e0f2f7; /* Lighter blue */
            height: 120px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 0;
            border-bottom: 3px solid #007bff;
            color: #007bff;
        }

        .jumbotron h1 {
            font-size: 2.5rem;
            font-weight: 600;
        }

        /* Container untuk gambar banner dan navbar overlay */
        .banner-container {
            position: relative; /* Penting: agar navbar absolute terhadap ini */
            width: 100%;
            overflow: hidden; /* Pastikan tidak ada scrollbar aneh jika gambar terlalu besar */
        }

        .banner-container img {
            width: 100%;
            height: 350px; /* Atur tinggi banner sesuai keinginan */
            object-fit: cover; /* Pastikan gambar mengisi area tanpa distorsi */
            display: block; /* Menghilangkan spasi ekstra di bawah gambar */
        }

        .navbar {
            position: absolute; /* Penting: Agar bertumpuk */
            top: 0; /* Letakkan navbar di bagian paling atas dari parent relatif (.banner-container) */
            left: 0;
            width: 100%; /* Pastikan navbar mengisi lebar penuh */
            background-color: rgba(255, 255, 255, 0.7) !important; /* Semi-transparan */
            box-shadow: none !important; /* Hapus shadow default jika tidak diinginkan */
            z-index: 1000; /* Penting: Agar navbar di atas gambar */
            padding: 0.5rem 1rem;
        }

        .navbar-nav .nav-link {
            color: #343a40 !important; /* Warna teks link yang kontras dengan gambar */
            padding: 0.8rem 1.2rem;
            transition: background-color 0.3s ease;
            border-radius: 5px;
            margin: 0 5px;
            font-weight: bold; /* Agar lebih mudah dibaca di atas gambar */
        }

        .navbar-nav .nav-link:hover {
            background-color: rgba(255, 255, 255, 0.9); /* Sedikit lebih solid saat hover */
            color: #007bff !important;
        }

        /* Modifikasi untuk area konten utama */
        .content-area {
            margin-top: 20px; /* Angka ini perlu disesuaikan. Negatif karena kita 'mengangkat' konten ke atas banner. */
            position: relative;
            z-index: 1; /* Di atas banner, tapi di bawah navbar */
            padding-bottom: 30px; /* Tambahkan padding bawah agar tidak terpotong */
        }

        /* Tambahkan container Bootstrap di dalam content-area untuk menjaga lebar konten */
        .content-area .container {
            padding-top: -180px; /* Padding di bagian atas konten */
            padding-bottom: 30px; /* Padding di bagian bawah konten */
        }

        .footer {
            background-color: #343a40;
            color: white;
            text-align: center;
            padding: 20px 0;
            margin-top: 50px; /* Mungkin perlu disesuaikan tergantung tinggi konten */
            font-size: 0.9rem;
        }
    </style>
</head>

<body>
    {{-- Jumbotron / Header --}}
    <div class="jumbotron text-center">
        <h1>5026231149 : Ananda Donelly Reksana</h1>
    </div>

     {{-- Banner Container (Parent Relatif) --}}
     <div class="banner-container">
        {{-- Gambar Banner --}}
        <img src="{{ asset('bannersikar.png') }}" alt="Banner Image">

        {{-- Navigation Bar (sekarang berada di dalam banner-container dan akan bertumpuk) --}}
        <nav class="navbar navbar-expand-sm">
            {{-- >>> PINDAHKAN div.container DARI SINI <<< --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav">
                <span class="navbar-toggler-icon"><i class="fas fa-bars" style="color:#555;"></i></span>
            </button>
            {{-- >>> MULAI div.container DI SINI UNTUK MEMBATASI LEBAR KONTEN NAVBAR <<< --}}
            <div class="container">
                <div class="collapse navbar-collapse" id="navbarNav">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item">
                            <a class="nav-link" href="/portofolio"><i class="fas fa-address-card"></i> Portofolio</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/pegawai"><i class="fas fa-users"></i> Pegawai</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/processor"><i class="fas fa-database"></i> Tugas CRUD</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/counter"><i class="fas fa-pencil-alt"></i> Latihan 1</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/karyawan"><i class="fas fa-clipboard-list"></i> Latihan 2</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/karyawan"><i class="fas fa-clipboard-list"></i> Latihan 3</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/eas"><i class="fas fa-clipboard-list"></i> EAS</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto">
                    </ul>
                </div>
            </div> {{-- Akhir dari div.container untuk konten navbar --}}
        </nav>
    </div>
    {{-- End Banner Container --}}

    {{-- Main Content Area --}}
    <div class="content-area">
        <div class="container">
            @yield('content')
        </div>
    </div>

    {{-- Footer --}}
    <footer class="footer">
        <div class="container text-center">
            <p>&copy; {{ date('Y') }} Ananda Donelly Reksana. All Rights Reserved.</p>
            <p>Built with <i class="fas fa-heart" style="color:red;"></i> and Laravel.</p>
        </div>
    </footer>

    {{-- Bootstrap JS, Popper.js, jQuery --}}
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.7.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2fCYmFVyXykcMbNFt7+LhY4BqQeP5yq+2dHQf2o3g5aK+L7w9x+T" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9tiU4+zP" crossorigin="anonymous"></script>

</body>

</html>
