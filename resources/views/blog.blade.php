<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HalamanBlog</title>
</head>
<body>
    <h2>{{ $judul }}</h2>
    @foreach ($artikel as $artik)
    <h3>{{ $artik['judul'] }}</h3>
    <p>{{ $artik['deskripsi'] }}</p>
    <b>{{ $artik['author'] }}</b>
    @endforeach
</body>
</html>