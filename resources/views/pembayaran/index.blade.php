@extends('layout')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pesanan</title>
</head>
<body>
<!DOCTYPE html>
<html>
<head>
 <title>HijabQu</title>

 <style type="text/css">

    body {
        background: url(gambar/ry.jpg) no-repeat fixed;
       background-size: 100% 100%;

    }
    </style>

 <script src="js/alert.js"></script>
</head>
<body>
 <div style="text-align: center;">
  
 </div>
 <div id="content">
  <form name="output" method="post" action="php/output.php">
   <table width="500" border="0" align="center" cellpadding="3" cellspacing="1">
    <tr>
     <td height="60" colspan="10" align="center">KASIR PEMBAYARAN</td>
    </tr>
    <tr>
     <td>Nama Barang</td>
     <td>:</td>
     <td>
      <input name="nama" type="text" size="30" maxlength="30">
     </td>
    </tr>
    <tr>
     <td>Harga Barang</td>
     <td>:</td>
     <td>
      <input name="harga" type="text" size="30" maxlength="30">
     </td>
    </tr>
    <tr>
     <td>Jumlah Pembelian</td>
     <td>:</td>
     <td>
      <input name="jumlah" type="text" size="30" maxlength="30">
     </td>
    </tr>
    <tr>
     <td>&nbsp;</td>
     <td>&nbsp;</td>s
     <td>
      <input type="submit" name="bayar" id="bayar" value="Bayar">
      <input type="submit" name="reset" id="restart" value="Restart">
     </td>
    </tr>
   </table>
  </form>
  <p align="center"><b>
   NB : Barang yang sudah dibeli TIDAK dapat dikembalikan atau ditukar <br>
   <br>
   Happy Shopping  &#127773<br>
   <br>
  &copy;HijabQu</b>
  </p>
 </div>       
</body>
</html>
@endsection