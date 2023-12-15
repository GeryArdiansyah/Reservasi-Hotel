@extends('layout.Semua')

@section('Title', 'Beranda')

@section('Konten')
    <section class="hero">
        <div class="hero-content">
            <h1>Selamat datang di Hotel Cava</h1>
            <p>Nikmati pengalaman menginap yang tak terlupakan bersama kami</p>
            <a href="{{ url('/LihatKamar') }}" class="hero-content-btn">Lihat Kamar</a>
        </div>
    </section>

    <!-- Formulir Reservasi -->
    <section class="reservation">
        <div class="container">
            <form action="{{ url('/LihatKamar') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="check-in">Check-in</label>
                    <input type="date" id="check-in" name="check_in" required>
                </div>
                <div class="form-group">
                    <label for="check-out">Check-out</label>
                    <input type="date" id="check-out" name="check_out" required>
                </div>
                <div class="form-group">
                    <label for="jumlah-dewasa">Jumlah Dewasa</label>
                    <input type="number" id="jumlah-dewasa" name="jumlah_dewasa" min="1" required>
                </div>
                <div class="form-group">
                    <label for="jumlah-anak">Jumlah Anak</label>
                    <input type="number" id="jumlah-anak" name="jumlah_anak" min="0" required>
                </div>
                <button type="submit" class="btn">Cari</button>
            </form>
        </div>
    </section>

    <div class="container">
        <h2>Fasilitas Hotel yang Menggoda</h2>

        <section class="features">
            <div class="feature">
                <i class="fas fa-bed"></i>
                <h3>Kamar yang Nyaman</h3>
                <p>Rasakan kenyamanan di kamar kami yang luas dan dilengkapi dengan segala kebutuhan untuk istirahat
                    yang sempurna.</p>
            </div>
            <div class="feature">
                <i class="fas fa-wifi"></i>
                <h3>Wi-Fi Gratis</h3>
                <p>Tetap terhubung dengan Wi-Fi berkecepatan tinggi secara gratis di seluruh area hotel.</p>
            </div>
            <div class="feature">
                <i class="fas fa-utensils"></i>
                <h3>Restoran Mewah</h3>
                <p>Menikmati hidangan lezat di restoran mewah kami yang menawarkan pengalaman kuliner yang tak
                    terlupakan.</p>
            </div>
        </section>
    </div><br>

    <section class="contact">
        <div class="contact-content">
            <h2>Hubungi Kami</h2>
            <p>Jangan ragu untuk menghubungi staf kami yang ramah jika Anda memiliki pertanyaan atau
                permintaan khusus.
                Kami siap membantu Anda!</p>
            <a href="#" class="btn">Hubungi Sekarang</a>
        </div>
    </section><br>

@endsection
