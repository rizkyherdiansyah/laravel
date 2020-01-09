<?php


Route::get('/', function () {
    return view('welcome');
});

//Route Basic
Route::get('/about',function() {
    return '<h1>Halo</h1>'
    .'Selamat datang di webapp saya<br>'
    .'Laravel, emang keren.';
});

// Route::get('profil',function()
// {
    
//     return  view('biodata');
// });



// Route::get('profil1',function()
// {
    
//     return  view('biodata1');
// });

// Route::get('profil2',function()
// {
    
//     return  view('biodata2');
// });

// Route::get('profil3',function()
// {
    
//     return  view('biodata3');
// });

// Route::get('profil4',function()
// {
    
//     return  view('biodata4');
// });

// Route::get('profil5',function()
// {
    
//     return  view('biodata5');
// });

//Route Parameter
Route::get('/pesan/{makan}/{minuman}/{harga}',function($mkn,$kopi,$harga) {
    return '<b>Makanan Yang Saya Pesan Adalah <b>' .$mkn.
           '<br>Tambah Minuman <b>' . $kopi.
           '<br>Dengan Harga <b>' . $harga;
});

//Route Optional Parameter
Route::get('/halo/{nama?}',function($nama='Pekoy') {
    return 'Halo Nama Saya Adalah' .$nama;

});

Route::get('/pesanan/{makanan?}/{minuman?}/{harga?}',function($mkn=null,$mnm=null,$harga=null) {
    if($mkn){
        echo ' <b>Anda Memesan '. $mkn;
    }
    
    if ($mnm){
        echo  ' <b>& ' . $mnm;  
    }

    if($harga){
        echo ' <b>Total Harganya : Rp.' . $harga;
    }

    if ($mkn == null & $mnm == null & $harga == null) {
        echo '<b>Anda Belum Memesan Sesutau';
    }
});