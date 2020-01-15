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
Route::get('/halo1/{nama?}',function($nama='Pekoy') {
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

Route::get('/testmodel',function(){
    $testmodel = App\Post::all();
    return $testmodel;
});

Route::get('/testmodel1',function(){
    $testmodel = App\Post::find(1);
    return $testmodel;
});

Route::get('/testmodel2',function(){
    $testmodel = App\Post::where('title','like','%Haruskah Menunda Nikah?%')->get();
    return $testmodel;
});

Route::get('/testmodel3',function(){
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah Warahmah";
    $post->save();
    return $post;
});

Route::get('/testmodel4',function(){
    $post = App\Post::find(1);
    $post->delete();
    
});

Route::get('/testmodel5',function(){
    $post = new App\Post;
    $post->title = "Cara Ampuh Mencintai Dia";
    $post->content = "Cinta,Senyum,Bikin Seneng,Sabar,Saling Ngerti,Dan Saling Support";
    $post->save();
    return $post;
});

Route::get('/gaji',function(){
    $query = App\Penggajihan::all();
    return $query;
});

Route::get('/data-gaji-1',function(){
    $query = App\Penggajihan::where('agama','=','atheis')->get();
    return $query;
});

Route::get('/data-gaji-2',function(){
    $query = App\Penggajihan::select('id','nama','agama')
    ->where('agama','=','islam')->get();
    return $query;
});

Route::get('/data-gaji/{id}',function(){
    $query = App\Penggajihan::findOrFail($id);
    return $query;
});

Route::get('/tambah-data-gaji',function(){
    $query = New App\Penggajihan();
    $query->nama = 'Firminho';
    $query->jabatan = 'Sekertaris';
    $query->jk = 'Laki-Laki';
    $query->alamat = 'Bojong Citepus';
    $query->total_gaji = 'Rp.500000';
    $query->agama = 'Islam';
    $query->save();
    return $query;
});

Route::get('/halo', 'SekolahController@HalloGais');
Route::get('/halo-1', 'SekolahController@HalloSemua');
Route::get('/halo-2', 'SekolahController@HalloOi');
Route::get('/halo-3', 'SekolahController@HalloErik');
Route::get('/halo-4', 'SekolahController@HalloAndrian');
Route::get('/halo-5', 'SekolahController@HalloPekoy');
Route::get('/halo-6', 'SekolahController@HalloPersib');
Route::get('/halo-7', 'SekolahController@HalloKardi');
Route::get('/halo-8', 'SekolahController@HalloUyung');
Route::get('/halo-9', 'SekolahController@HalloSayang');
Route::get('/halo-10', 'SekolahController@HalloKamu');
Route::get('/warnakucing/{warna}', 'SekolahController@jeniskucing');
Route::get('/warnakucing1/{warna?}', 'SekolahController@jeniskucing');
Route::get('/belimakanan/{makan?}/{harga?}', 'SekolahController@beli');

//CRUD BOOK
Route::get('books','BooksController@index');
Route::get('book-create/{jdl}','BooksController@create');
Route::get('book/{id}','BooksController@show');
Route::get('book-edit/{id}/{jdl}','BooksController@edit');
Route::get('book-delete/{id}','BooksController@delete');
Route::get('koyy','BooksController@koy');

//CRUD ARTIKEL
// Route::get('artikel','ArtikelController@index');
// Route::get('artikel/create','ArtikelController@create');
// Route::POST('artikel','ArtikelController@store');
// Route::get('artikel/{id}','ArtikelController@show');
// Route::get('artikel/{id}/edit','ArtikelController@edit');
// Route::PUT('artikel/{id}','ArtikelController@update');
// Route::DELETE('artikel/{id}','ArtikelController@destroy');
   Route::resource('artikel','ArtikelController');


