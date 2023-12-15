@extends('layout.Semua')

@section('Title', 'Kontak')

@section('Konten')
    <div class="container5">
        <div style="text-align:center">
            <h2>Kontak Kami</h2>
            <p>Jika ada yang bisa kami bantu bisa hubungi kami:</p>
        </div>
        <div class="row">
            <div class="column">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3953.398262566381!2d110.35284127370248!3d-7.747512792271243!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e7a58f2d747cc8d%3A0xba7c703a016a750e!2sUniversitas%20Teknologi%20Yogyakarta!5e0!3m2!1sid!2sid!4v1686495721297!5m2!1sid!2sid"
                    width="680" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="column">
                <form action="/action_page.php">
                    <label for="fname">Nama Depan</label>
                    <input type="text" id="fname" name="firstname" placeholder="Nama Depan..">
                    <label for="lname">Nama Belakang</label>
                    <input type="text" id="lname" name="lastname" placeholder="Nama Belakang..">
                    <label for="subject">Subjek</label>
                    <textarea id="subject" name="subject" placeholder="Ketik pesan.." style="height:170px"></textarea>
                    <input type="submit" value="Kirim">
                </form>
            </div>
        </div>
    </div>
@endsection
