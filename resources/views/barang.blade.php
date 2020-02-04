<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
        <center>Data Barang</center>
        @foreach($dabar as $data)
            Nama           : {{$data->nama}}<br>
            Kode Barang    : {{$data->kode}}<br>   
            Harga Barang   : Rp. {{$data->harga}}<br>
            <img src="{{$data->foto}}" alt=" ">
            <hr>
        @endforeach    
</body>

</html>