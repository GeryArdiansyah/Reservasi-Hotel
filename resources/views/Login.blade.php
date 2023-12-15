<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('css/Login.css') }}">
</head>

<body>
    <h1>Login</h1>
    <div class="kotak_login">
        <p class="tulisan_login">Silahkan login</p>
        <form method="post" action="{{ route('processLogin') }}">
            @csrf
            <label>Username</label>
            <input type="text" name="username" class="form_login" placeholder="Username .." required="required">
            <label>Password</label>
            <input type="password" name="password" class="form_login" placeholder="Password .." required="required">
            <input type="submit" class="tombol_login" value="LOGIN">
            <br />
            <br />
            <center>
                {{-- <a class="link" href="{{ route('#') }}">kembali</a> --}}
            </center>
        </form>
    </div>
</body>

</html>
