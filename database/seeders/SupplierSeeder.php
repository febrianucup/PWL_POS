<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SupplierSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = [
            [
                'supplier_id' => 1, 
                'supplier_kode' => 'SP1', 
                'supplier_nama' => 'Supplier Jaya',
                'supplier_alamat' => 'Malang'
            ],
            [
                'supplier_id' => 2, 
                'supplier_kode' => 'SP2', 
                'supplier_nama' => 'Indo Food Central',
                'supplier_alamat' => 'Surabaya'
            ],
            [
                'supplier_id' => 3, 
                'supplier_kode' => 'SP3', 
                'supplier_nama' => 'Gudang Sembako',
                'supplier_alamat' => 'Jakarta'
            ],
        ];
        DB::table('m_supplier')->insert($data);
    }
}
