<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <fieldset>
        <legend>Show Data</legend>
        Kode Barang   : <b>{{$barang->kode}}</b><br>
        Nama Barang   : <b>{{$barang->nama}}</b><br>
        Harga Barang  : <b>{{$barang->harga}}</b><br>
        Foto          : <img src="{{$barang->foto}}">
     </fieldset>

</body>
</html>