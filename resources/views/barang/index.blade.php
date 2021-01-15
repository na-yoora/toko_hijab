 @extends('layout')

@section('content')
<html>
    <head>
        <title>toko-hijab</title>
        <body>
        <center><table border="1">
        <tr>
        <td><a class="fancybox" href="gambar/pashmina.jpg">
            <img class="img-responsive" src="{{asset('gambar/pashmina.jpg')}}" width="250px"></td>
        
        <td><a class="fancybox" href="gambar/pashmina1.jpg">
            <img class="img-responsive" src="{{asset('gambar/pashmina1.jpg')}}" width="250px"></td>
  
        <td><a class="fancybox" href="gambar/bella1.jpg">
            <img class="img-responsive" src="{{asset('gambar/bella1.jpg')}}" width="250px"></td>

        <td><a class="fancybox" href="gambar/bella2.jpg">
        <img class="img-responsive" src="{{asset('gambar/bella2.jpg')}}" width="250px"></td>
            </tr>
        <tr>
								<td><center>Pashmina</center></td>
								<td><center>Pashmina diamond</center></td>
								<td><center>Bella 1</center></td>
								<td><center>Bella 2</center></td>
        </tr>
        <tr>
            <td><a class="fancybox" href="gambar/Bella3.jpg">
            <img class="img-responsive" src="{{asset('gambar/bella3.jpg')}}" width="250px"></td>
            <td><a class="fancybox" href="gambar/Saudia1.jpg">
            <img class="img-responsive" src="{{asset('gambar/saudia1.jpg')}}" width="250px"></td>
            <td><a class="fancybox" href="gambar/Saudia2.jpg">
            <img class="img-responsive"src="{{asset('gambar/saudia2.jpg')}}" width="250px"></td>
            <td><a class="fancybox" href="gambar/Bergo.jpg">
            <img class="img-responsive" src="{{asset('gambar/Bergo.jpg')}}" width="250px"></td>
            
        </tr>
        <tr>
                                <td><center>Bella3</center></td>
								<td><center>Saudia1</center></td>
								<td><center>Saudia2</center></td>
                                <td><center>Bergo</center></td>
		</tr>    
            </table></center>
        </body>
    </head>
</html>
    
@endsection
    