<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class procurementSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('procurements')->insert([
            [
                'no' => '1',
                'regional' => 'Reg.5',
                'unit_bisnis' => 1,
                'juspeng' => 'Pekerjaan Pengadaan Manage Servise Operational Gudang Logee Di STO Kenjeran Surabaya',
                'tgl_terima_juspeng' => '2022/10/11',
                'custommer' => 2,
                'portofolio' => 2,
                'jenis_anggaran' => 1,
                'customer' => '136.089.018',
                'anggaran' => '174.864.887',
                'margin_presentase' => '-28.49%',
                'margin_nominal' => '0',
                'nama_PIC' => 'Trias dan Andika',
                'metode_pengadaan' => 'Pemilihan Langsung',
                'mitra_peserta' => 'PT Nusa Karya Indonesia, PT Rehabi Bangun Jaya &  CV Griya Solusi Mandiri',
                'penetapan_mitra' => 'PT Nusa Karya Indonesia',
                'status' => 1,
                'bidang_pekerjaan' => 'Pengadaan Umum',
                'kontrak' => '1023/HK.810/GSD-550/2022',
                'tgl_penetapan' => '2022/10/14',
                'tgl_kontrak' => '2022/10/14',
                'kesepakatan' => '110.461.868',
                'margin_presentase_regional' => '36.83%',
                'margin_nominal_regional' => '64.403.018',
                'tgl_mulai_pekerjaan' => '2023/01/01',
                'tgl_selesai_pekerjaan' => '2023/12/31',
                'keterangan' => 'ssssssss',
                'tgl_tagihan_mitra' => '2023/01/01',
                'tgl_kirim_tagihan_mitra' => '2023/01/01',
                'tgl_bayar_tagihan_mitra' => '2023/01/01',
            ],
            ]);
    }
}
