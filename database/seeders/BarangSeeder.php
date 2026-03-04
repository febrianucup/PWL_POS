<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BarangSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $names = ['Indomie', 'Aqua', 'Pepsodent', 'Paracetamol', 'Baterai', 'Garam', 'Susu', 'Sabun', 'Masker', 'Lampu', 'Kopi', 'Biskuit', 'Bedak', 'Vitamin', 'Kabel'];
        $data=[];

        for($i=1; $i<=15; $i++){
            $data[]=[
                'barang_id'=>$i,
                'kategori_id'=>ceil($i/3),
                'barang_kode'=>'BRG'.str_pad($i, 2, '0', STR_PAD_LEFT),
                'barang_nama'=>$names[$i-1],
                'harga_beli'=>2000 + ($i * 1000),
                'harga_jual'=>3000 + ($i * 1000)
            ];
        }

        DB::table('m_barang')->insert($data);
    }
}
