<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HalamanForm</title>
</head>
<body>
    <h2>Halaman Form</h2>
    <form action="{{ route('userCreateProses') }}" method="post">
        <input type="hidden" name="_token" value="<?php echo csrf_token(); ?>">
        Nama :
        <input type="text" name="nama" placeholder="Masukan Nama Anda"> <br>
        Email :
        <input type="email" name="email" placeholder="Masukan Email Anda"> <br>
        <input type="submit" value="SIMPAN">
    </form>
</body>
</html>