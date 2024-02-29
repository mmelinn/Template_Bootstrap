<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DetailMahasiswaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $ttl = date('Y-m-d', strtotime('22-02-2005'));
        DB::insert('insert into tabel_mahasiswa (id_mhs, nama_mahasiswa, alamat, ttl, status) values (?, ?, ?, ?, ?)',[41220380, 'gasti', 'Gresik', $ttl, 'active']);
    }
}
