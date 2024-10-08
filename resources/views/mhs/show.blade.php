<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Struktur Kontrol anggii.com</title>
</head>
<body>
    @if (count($mhs) == 1)
        <p>Jumlah Mahasiswa ada 1</p>
    @elseif (count($mhs) == 2)
        <p>Jumlah Mahasiswa ada 2</p>
    @else
        <p>Jumlah mahasiswa lebih dari 2</p>
    @endif
</body>
</html>