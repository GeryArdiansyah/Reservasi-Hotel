@extends('layout.Semua')

@section('Title', 'Tentang Kami')

@section('Konten')
    <br><br><br><br><br>
    <div class="container1">
        <h2 class="section-title">Tentang Kami</h2>
        <p class="section-description">Welcome To Hotel Cava - Surga Menginap Anda</p>
        <div class="vision-mission-container">
            <div class="vision">
                <h4 class="vision-title">Visi</h4>
                <p class="vision-description">Menjadi hotel mewah pilihan utama bagi para wisatawan di seluruh dunia,
                    memberikan pengalaman menginap tak terlupakan.</p>
            </div>
            <div class="mission">
                <h4 class="mission-title">Misi</h4>
                <p class="mission-description">Menyediakan layanan terbaik, fasilitas lengkap, dan staf yang ramah dan
                    profesional untuk menjaga kenyamanan tamu. Kami juga berupaya mempromosikan pariwisata lokal dan
                    memberikan kontribusi positif bagi komunitas sekitar.</p>
            </div>
        </div>
    </div>
    <section class="Location">
        <div class="loc-content">
            <h2>Lokasi Kami</h2>
            <p><img src="images/location.png" alt=""> Jl. Kuturaden No.12 Kutupatran, sinduadi, kec mlati, Kab
                Sleman, DIY</p>
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.398262566381!2d110.35284127370248!3d-7.747512792271243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58f2d747cc8d%3A0xba7c703a016a750e!2sUniversitas%20Teknologi%20Yogyakarta!5e0!3m2!1sid!2sid!4v1686495721297!5m2!1sid!2sid"
                width="1260" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </section>
    <br><br><br><br><br><br>
@endsection
