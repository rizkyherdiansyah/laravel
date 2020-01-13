<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SekolahController extends Controller
{
    public function HalloGais(){
        return "Hallo World";
    }

    public function HalloSemua(){
        return "Hallo Kalian Sobat Ambyar";
    }

    public function HalloOi(){
        return "Hallo Teman Onlineku";
    }

    public function HalloErik(){
        return "Hallo Kambing";
    }

    public function HalloAndrian(){
        return "Hallo Cemong";
    }

    public function HalloPekoy(){
        return "Hallo Ikoy Ganteng;)";
    }

    public function HalloPersib(){
        return "Hallo Persib Bandung";
    }

    public function HalloKardi(){
        return "Hallo Kardi";
    }

    public function HalloUyung(){
        return "Hallo Uyung";
    }

    public function HalloSayang(){
        return "Hallo Sayangkue";
    }

    public function HalloKamu(){
        return "Hallo Kamu Yang Sayang Aku Jangan Tinggalin Aku";
    }

    // public function jeniskucing($warna){
    //     return "Warna Kucing Kamu : " . $warna;
    // }

    public function jeniskucing($warna = null){
        if(!$warna){
        return "Warna Belum Kamu Pilih";
    }else{
        return "Warna Kucing Kamu : " . $warna;
    }

    }

    public function beli($ayam = null,$harga = null)
    {
    if ($ayam){
        $ayam = " Anda membeli : <b>$ayam</b>";
        echo $ayam;
    }
    if (!$ayam && !$harga) {
        return "Silahkan masukan item terlebih dahulu.";
    }
    if ($harga >= 15000) {
        echo " Anda membeli ayam dengan ukuran Jumbo";
    }
    if ($harga < 15000 && $harga >= 7000) {
        echo " Anda membeli ayam dengan ukuran Medium";
    }
    if ($harga < 7000) {
        echo " Anda membeli ayam dengan ukuran Small";
    }
    
    }

}
