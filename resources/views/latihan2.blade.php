<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>

<body>
    <center>Data Pegawai</center>
        @foreach ($data as $val)
            @if ($val['jabatan'] == "Manager")
                @php $jab = 500000; @endphp
        @elseif ($val['jabatan'] == "Sekretaris")
                @php $jab = 350000; @endphp        
        @elseif ($val['jabatan'] == "Staff")
                @php $jab = 250000; @endphp
        @endif

        @if ($val['jamker'] > 250 )
            @php $bonus = 0.10 * $jab; @endphp        
        @elseif ($val['jamker'] > 200 )
            @php $bonus = 0.05 * $jab; @endphp
        @else
            @php $bonus = 0; @endphp
        @endif

            @php $ppn = 0.025 * $jab; @endphp
            @php $gaber = ($jab + $bonus) - $ppn; @endphp
            Nama           : {{$val['nama']}} <br>
            Agama          :  {{$val['agama']}} <br>
            Jabatan        : {{$val['jabatan']}} <br>
            Jam Bekerja    : {{$val['jamker']}} <br>
            Gaji           : {{$jab}} <br>
            Bonus          : {{$bonus}} <br>
            PPN            : {{$ppn}} <br>
            Gaji Bersih    : {{$gaber}} <br>
            <hr>
        @endforeach            
</body>

</html>