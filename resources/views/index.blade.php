@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>

    <style type="text/css">

    body {
        background: url(gambar/k.jpg) no-repeat fixed;
       background-size: 100% 100%;

    }
    </style>
</head>
<body>

    <center>
    <marquee square="up"><h1><font face="Courier" color="black">Selamat Datang di website Toko HijabQu</font></h1></marquee>
    <p><img src="{{asset('gambar/lg.jpg')}}" width="300px"></p>
    <b><p><font size="6" face="Century Gothic" color="Fusia">HijabQu</font>
    <br>
    Jl. K.H. Wahid Hasyim, Mertapada Wetan, Kec. Astanajapura, Cirebon, Jawa Barat 45181</p>
  <br><br><br>
  <p>&copy;HijabQu</p></b>
    </center>  
</body>
</html>

@endsection