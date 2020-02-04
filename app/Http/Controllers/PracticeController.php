<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PracticeController extends Controller
{
    public function pass(){
        $a = "Aku Cinta Bandung Dan Seseorang Didalamnya";
    }


    public function pass1(){
        $data=[
            ['nama' => 'Ucup', 'kelas' => 'XI RPL 2'],
            ['nama' => 'Icip', 'kelas' => 'XI RPL 1'],
            ['nama' => 'Ecep', 'kelas' => 'XI RPL 3'],
        ];
            return view('latihan1', ['siswa' => $data]);
   }

   public function pass2(){
       $data=[
            ['nama' => 'Rizky', 'nip' => '45321', 'agama' => 'Islam', 'jk' => 'Laki-Laki', 'jabatan' => 'Manager',
            'jamker' => '250'],
            ['nama' => 'Andrian', 'nip' => '45322', 'agama' => 'Atheis', 'jk' => 'Laki-Laki', 'jabatan' => 'Sekretaris',
            'jamker' => '150'],
            ['nama' => 'Nathan', 'nip' => '45323', 'agama' => 'Komunis', 'jk' => 'Perempuan', 'jabatan' => 'Staff',
            'jamker' => '100'],
       ];
       return view('latihan2', ['data' => $data]);
   }
}
