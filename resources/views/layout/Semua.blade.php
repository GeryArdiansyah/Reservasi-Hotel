<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Title', 'Landing Page')</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Nav.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Kontak.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Beranda.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Footer.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/LandingPage.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/TentangKami.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/LihatKamar.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Kamar Junior.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Kamar Executive.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Kamar Precidential.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Kamar Deluxe.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Kamar Premiere.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Kamar Premiere Twin.css') }}">
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
</head>

<body>
    <!-- Header -->
    <header>
        <a href="{{ url('/') }}" class="logo">Hotel Cava</a>

        <div class="menu-toggle">
            <input type="checkbox" />
            <i><img src="{{ asset('images/menu-line.png') }}"></i>
        </div>

        <nav class="navbar">
            <ul>
                <li><a href="{{ url('/Beranda') }}" class="@if (Request::is('Beranda')) aktif @endif"><i
                            class="fas fa-home"></i>Beranda</a></li>
                <li><a href="{{ url('/Kontak') }}"><i class="fas fa-info-circle"></i>Kontak</a></li>
                <li><a href="{{ url('/TentangKami') }}" class="@if (Request::is('TentangKami')) aktif @endif"><i
                            class="fas fa-users"></i>Tentang Kami</a></li>
                <li><a href="{{ url('/Masuk') }}" class="tepi" id="bl"><i class="fas fa-sign-in-alt"
                            id="lo"></i>Masuk!</a></li>
            </ul>
        </nav>
    </header>

    <!-- Konten -->
    <main>
        @yield('Konten')
    </main>

    <!-- Footer -->
    <footer>
        <div class="footer-container">
            <div class="footer-logo">
                <img src="images/Logo.jpg" alt="HotelCava.com">
            </div>
            <div class="footer-links">
                <h3>Tentang Kami</h3>
                <ul>
                    <li><a href="#">Sejarah</a></li>
                    <li><a href="#">Tim Kami</a></li>
                    <li><a href="#">Karir</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Bantuan</h3>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Panduan Pemesanan</a></li>
                    <li><a href="#">Layanan Pelanggan</a></li>
                </ul>
            </div>
            <div class="footer-links">
                <h3>Pembayaran</h3>
                <ul>
                    <li><a href="#">Metode Pembayaran</a></li>
                    <li><a href="#">Kebijakan Pembayaran</a></li>
                    <li><a href="#">Ketentuan Pembayaran</a></li>
                </ul>
            </div>
            <div class="footer-social">
                <h3>Temukan Kami</h3>
                <ul>
                    <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                    <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                </ul>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Hak Cipta &copy; 2023 HotelCava.com. Seluruh hak cipta dilindungi.</p>
        </div>
    </footer>

    <script src="{{ asset('js/Nav.js') }}"></script>
    <script src="{{ asset('js/log.js') }}"></script>
    <script src="{{ asset('js/NavAktif.js') }}"></script>
    <script src="{{ asset('js/Login.js') }}"></script>
</body>

</html>
