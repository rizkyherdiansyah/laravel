<?php

use Illuminate\Database\Seeder;

class PostPenggajihan extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $posts = [
            ['nama'=>'Ikoy', 'jabatan'=>'Boss', 'jk'=>'Laki-laki', 'alamat'=>'BaruRaya', 'agama'=>'Islam', 'total_gaji'=>'25jt'],
            ['nama'=>'Azis', 'jabatan'=>'Office Boy', 'jk'=>'Laki-laki', 'alamat'=>'Bojong', 'agama'=>'Atheis', 'total_gaji'=>'5jt'],
            ['nama'=>'Raihan Fadzan', 'jabatan'=>'Staff', 'jk'=>'Laki-laki', 'alamat'=>'Rancamanyar', 'agama'=>'Kristen', 'total_gaji'=>'7jt'],
            ['nama'=>'Rani', 'jabatan'=>'Direktur', 'jk'=>'Perempuan', 'alamat'=>'Kopo', 'agama'=>'Khatolik', 'total_gaji'=>'6jt'],
            ['nama'=>'Annisa Rahim', 'jabatan'=>'Keuangan & Istri', 'jk'=>'Perempuan', 'alamat'=>'Kopo', 'agama'=>'Islam', 'total_gaji'=>'15jt']
        ];
        DB::table('penggajihans')->insert($posts);

    }
}
