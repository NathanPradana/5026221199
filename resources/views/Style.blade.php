<!-- latihan_css_inline.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan CSS</title>
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}">
</head>
<body>
    <h1 style="color: rgb(226, 101, 43);">Hallo Selamat Datang</h1>
    <h1 class="headingmerah">Hallo Selamat Datang Juga</h1>
    <p style="font-size: small; color: aqua;">Jurusan Sistem Informasi ITS</p>
    <p class="parratakanan">Jurusan Sistem Informasi ITS 2</p>
    <p class="partengah">Jurusan Sistem Informasi ITS 3</p>

    <a href="https://www.google.com" target="_blank">Google</a>
    <a href="https://www.its.ac.id" target="_self">ITS</a>
    <a href="{{ url('hello') }}"> File Pertemuan 1 </a>
</body>
</html>
