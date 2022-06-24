<!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    <center>
        <h2>Verifikasi Akun Bengkel AE</h2>
    </center>
    <h3>Hello, {{ $name }}</h3>
    <p>Berikut ini adalah kode OTP anda, untuk selanjutnya anda dapat memasukkan kode  tersebut ke dalam kolom yang disediakan untuk melanjutkan langkah berikutnya</p>
    <center>
    <h1 class="text-3xl font-bold underline ">
         {{$otp}}
    </h1>
    </center>

    <h4 class="text-3xl font-bold underline">
        Nama : {{$name}}
        OTP : {{ $otp }}
    </h4>

</body>
</html>



