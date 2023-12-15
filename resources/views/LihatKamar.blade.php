@extends('layout.Semua')

@section('Title', 'Lihat Kamar')

@section('Konten')
    <section class="hero1">
        <div class="hero1-content">
            <h1>Explore Our <span>Rooms</span></h1>
            <h3>Nikmati Nyamannya Kemewahan Cava Hotel Yang Sejuk dan Asri</h3>
        </div>
    </section>
    <div class="container">
        <span>ROOM'S</span>
        <section class="features2">
            <div class="feature2">
                <img src="images/junior suite.jpg" alt="">
                <div class="harga">Rp520.000/Malam</div>
                <h3>Junior suite</h3>
                <div class="ps-2">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                </div>
                <div class="d-flex-mb-3">
                    <small class="border-end-me-3-pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed |</small>
                    <small class="border-end-me-3-pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath |</small>
                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                </div>
                <table border-collapse="collapse">
                    <tr>
                        <td>Bed Size</td>
                        <td>:</td>
                        <td>2m x 2m(One king-sized bed)</td>
                    </tr>
                    <tr>
                        <td>Kapasitas</td>
                        <td>:</td>
                        <td>2 Person</td>
                    </tr>
                    <tr>
                        <td>Space</td>
                        <td>:</td>
                        <td>60 m2</td>
                    </tr>
                    <tr>
                        <td>View</td>
                        <td>:</td>
                        <td>Kebun atau Kolam Renang</td>
                    </tr>
                </table>
                <a href="{{ url('/Kamar Junior') }}" class="hero1-content-btn">Lihat Detail</a>
            </div>
            <div class="feature2">
                <img src="images/executive.jpg" alt="">
                <div class="harga">Rp1.620.000/Malam</div>
                <h3>Executive Suite</h3>
                <div class="ps-2">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                </div>
                <div class="d-flex-mb-3">
                    <small class="border-end-me-3-pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed |</small>
                    <small class="border-end-me-3-pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath |</small>
                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                </div>
                <table border-collapse="collapse">
                    <tr>
                        <td>Bed Size</td>
                        <td>:</td>
                        <td>2m x 2m(One king-sized bed)</td>
                    </tr>
                    <tr>
                        <td>Kapasitas</td>
                        <td>:</td>
                        <td>2 Person</td>
                    </tr>
                    <tr>
                        <td>Space</td>
                        <td>:</td>
                        <td>80 m2</td>
                    </tr>
                    <tr>
                        <td>View</td>
                        <td>:</td>
                        <td>Kolam Renang</td>
                    </tr>
                </table>
                <a href="{{ url('/Kamar Executive') }}" class="hero1-content-btn">Lihat Detail</a>
            </div>
            <div class="feature2">
                <img src="images/presidential.jpg" alt="">
                <div class="harga">Rp5.220.000/Malam</div>
                <h3>Precidential Suite</h3>
                <div class="ps-2">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                </div>
                <div class="d-flex-mb-3">
                    <small class="border-end-me-3-pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed |</small>
                    <small class="border-end-me-3-pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath |</small>
                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                </div>
                <table border-collapse="collapse">
                    <tr>
                        <td>Bed Size</td>
                        <td>:</td>
                        <td>2m x 2m(One king-sized bed)</td>
                    </tr>
                    <tr>
                        <td>Kapasitas</td>
                        <td>:</td>
                        <td>2 Person</td>
                    </tr>
                    <tr>
                        <td>Space</td>
                        <td>:</td>
                        <td>100 m2</td>
                    </tr>
                    <tr>
                        <td>View</td>
                        <td>:</td>
                        <td>Kolam Renang</td>
                    </tr>
                </table>
                <a href="{{ url('/Kamar Precidential') }}" class="hero1-content-btn">Lihat Detail</a>
            </div>
            <div class="feature2">
                <img src="images/deluxe twin.jpg" alt="">
                <div class="harga">Rp2.520.000/Malam</div>
                <h3>Deluxe Twin</h3>
                <div class="ps-2">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                </div>
                <div class="d-flex-mb-3">
                    <small class="border-end-me-3-pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed |</small>
                    <small class="border-end-me-3-pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath |</small>
                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                </div>
                <table border-collapse="collapse">
                    <tr>
                        <td>Bed Size</td>
                        <td>:</td>
                        <td> 1.2m x 2m (Two Single beds)</td>
                    </tr>
                    <tr>
                        <td>Kapasitas</td>
                        <td>:</td>
                        <td>2 Person</td>
                    </tr>
                    <tr>
                        <td>Space</td>
                        <td>:</td>
                        <td>40 m2</td>
                    </tr>
                    <tr>
                        <td>View</td>
                        <td>:</td>
                        <td>Kota, Kebun atau Kolam Renang</td>
                    </tr>
                </table>
                <a href="{{ url('/Kamar Deluxe') }}" class="hero1-content-btn">Lihat Detail</a>
            </div>
            <div class="feature2">
                <img src="images/premiere king.jpg" alt="">
                <div class="harga">Rp2.720.000/Malam</div>
                <h3>Premiere King</h3>
                <div class="ps-2">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                </div>
                <div class="d-flex-mb-3">
                    <small class="border-end-me-3-pe-3"><i class="fa fa-bed text-primary me-2"></i>1 Bed |</small>
                    <small class="border-end-me-3-pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath |</small>
                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                </div>
                <table border-collapse="collapse">
                    <tr>
                        <td>Bed Size</td>
                        <td>:</td>
                        <td>2m x 2m(One king-sized bed)</td>
                    </tr>
                    <tr>
                        <td>Kapasitas</td>
                        <td>:</td>
                        <td>2 Person</td>
                    </tr>
                    <tr>
                        <td>Space</td>
                        <td>:</td>
                        <td>40 m2</td>
                    </tr>
                    <tr>
                        <td>View</td>
                        <td>:</td>
                        <td>Kota, Kebun atau Kolam Renang</td>
                    </tr>
                </table>
                <a href="{{ url('/Kamar Premiere') }}" class="hero1-content-btn">Lihat Detail</a>
            </div>
            <div class="feature2">
                <img src="images/premiere Twin room.jpg" alt="">
                <div class="harga">Rp3.520.000/Malam</div>
                <h3>Premiere Twin</h3>
                <div class="ps-2">
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                    <small class="fa fa-star text-primary"></small>
                </div>
                <div class="d-flex-mb-3">
                    <small class="border-end-me-3-pe-3"><i class="fa fa-bed text-primary me-2"></i>2 Bed |</small>
                    <small class="border-end-me-3-pe-3"><i class="fa fa-bath text-primary me-2"></i>2 Bath |</small>
                    <small><i class="fa fa-wifi text-primary me-2"></i>Wifi</small>
                </div>
                <table border-collapse="collapse">
                    <tr>
                        <td>Bed Size</td>
                        <td>:</td>
                        <td>1.2m x 2m(Two single bed)</td>
                    </tr>
                    <tr>
                        <td>Kapasitas</td>
                        <td>:</td>
                        <td>2 Person</td>
                    </tr>
                    <tr>
                        <td>Space</td>
                        <td>:</td>
                        <td>40 m2</td>
                    </tr>
                    <tr>
                        <td>View</td>
                        <td>:</td>
                        <td>Kota atau kebun</td>
                    </tr>
                </table>
                <a href="{{ url('/Kamar Premiere Twin') }}" class="hero1-content-btn">Lihat Detail</a>
            </div>
        </section>
    </div>
@endsection
