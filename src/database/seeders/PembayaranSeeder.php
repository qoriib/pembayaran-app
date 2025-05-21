<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Pembayaran;

class PembayaranSeeder extends Seeder
{
    public function run(): void
    {
        $data = [
            [
                'nama' => 'Andi Wijaya',
                'metode' => 'Transfer',
                'jumlah' => 250000,
                'tanggal' => '2024-05-10',
            ],
            [
                'nama' => 'Siti Rahma',
                'metode' => 'Cash',
                'jumlah' => 150000,
                'tanggal' => '2024-05-12',
            ],
            [
                'nama' => 'Budi Santoso',
                'metode' => 'E-Wallet',
                'jumlah' => 300000,
                'tanggal' => '2024-05-14',
            ],
            [
                'nama' => 'Dewi Lestari',
                'metode' => 'Transfer',
                'jumlah' => 500000,
                'tanggal' => '2024-05-15',
            ],
            [
                'nama' => 'Rizky Maulana',
                'metode' => 'Cash',
                'jumlah' => 200000,
                'tanggal' => '2024-05-16',
            ],
        ];

        foreach ($data as $item) {
            Pembayaran::create($item);
        }
    }
}
