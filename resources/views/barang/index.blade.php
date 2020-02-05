<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Barang</title>
</head>
<body>

    <center>List Barang</center>
        <table border="1">
            <thead>
                <tr>
                    <th>Kode Barang</th>
                    <th>Nama Barang</th>
                    <th>Harga Barang</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($barang as $data)
                <tr>
                    <td>{{$data->kode}}</td>
                    <td>{{$data->nama}}</td>
                    <td>{{$data->harga}}</td>
                    <td><a href="barang/{{$data->id}}">Show</a></td>
                </tr>
                @endforeach
            </tbody>
          </tabel>
</body>
</html>