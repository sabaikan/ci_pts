<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class NasiBekeporSeeder extends Seeder
{
    public function run()
    {
        $data = [
            [
                'nama_makanan' => 'Nasi Bekepor Komplit Daging Masak Bumi',
                'kategori'     => 'Paket Komplit',
                'asal_daerah'  => 'Kalimantan Timur',
                'harga'        => 38000,
                'stok'         => 25,
                'rating'       => 4.9,
                'deskripsi'    => 'Nasi liwet khas Kutai dimasak dengan rempah pilihan, disajikan bersama Daging Masak Bumi berbumbu pekat, sambal raja, dan irisan mentimun segar.',
                'gambar'       => base_url('images/nasi_bekepor_ai.jpg'),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Nasi Bekepor Ikan Haruan Goreng',
                'kategori'     => 'Olahan Ikan',
                'asal_daerah'  => 'Kalimantan Timur',
                'harga'        => 32000,
                'stok'         => 18,
                'rating'       => 4.8,
                'deskripsi'    => 'Nasi bekepor beraroma daun kemangi dengan lauk ikan gabus/haruan goreng renyah bumbu kuning khas Sungai Mahakam serta lalapan.',
                'gambar'       => 'https://images.unsplash.com/photo-1519708227418-c8fd9a32b7a2?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Nasi Bekepor Ayam Cincane Rempah',
                'kategori'     => 'Olahan Ayam',
                'asal_daerah'  => 'Kalimantan Timur',
                'harga'        => 35000,
                'stok'         => 22,
                'rating'       => 4.9,
                'deskripsi'    => 'Perpaduan nasi gurih bekepor dengan Ayam Cincane bakar berlumur bumbu merah pedas manis gurih legendaris Samarinda.',
                'gambar'       => 'https://images.unsplash.com/photo-1598515214211-89d3c73ae83b?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Nasi Bekepor Sayur Asam Kutai',
                'kategori'     => 'Menu Tradisional',
                'asal_daerah'  => 'Kalimantan Timur',
                'harga'        => 24000,
                'stok'         => 15,
                'rating'       => 4.7,
                'deskripsi'    => 'Sajian nasi bekepor hangat disandingkan dengan kuah sayur asam Kutai berisi potongan terong asam, kangkung, dan kepala ikan gabus segar.',
                'gambar'       => 'https://images.unsplash.com/photo-1547592180-85f173990554?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Nasi Bekepor Sambal Raja 6 Rasa',
                'kategori'     => 'Menu Spesial',
                'asal_daerah'  => 'Kalimantan Timur',
                'harga'        => 29000,
                'stok'         => 30,
                'rating'       => 4.9,
                'deskripsi'    => 'Paket nasi bekepor dengan bintang utama Sambal Raja (kombinasi cabai, bawang merah, terasi, terong ungu goreng, telur rebus, dan kacang panjang cacah).',
                'gambar'       => 'https://images.unsplash.com/photo-1565299585323-38d6b0865b47?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Nasi Bekepor Hemat Telur Bumbu Bali',
                'kategori'     => 'Menu Hemat',
                'asal_daerah'  => 'Kalimantan Timur',
                'harga'        => 18000,
                'stok'         => 40,
                'rating'       => 4.6,
                'deskripsi'    => 'Pilihan hemat nikmat dengan nasi bekepor gurih, telur rebus goreng berbumbu balado khas pesisir, tahu goreng, dan kerupuk.',
                'gambar'       => 'https://images.unsplash.com/photo-1540420773420-3366772f4999?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Nasi Bekepor Ikan Baung Bakar Madu',
                'kategori'     => 'Olahan Ikan',
                'asal_daerah'  => 'Kalimantan Timur',
                'harga'        => 45000,
                'stok'         => 12,
                'rating'       => 5.0,
                'deskripsi'    => 'Ikan baung air tawar Kalimantan Timur bertekstur lembut dibakar lumur madu kelulut dan rempah khas Kutai, disantap bersama nasi bekepor liwet.',
                'gambar'       => 'https://images.unsplash.com/photo-1534422298391-e4f8c172dddb?auto=format&fit=crop&w=600&q=80',
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
            [
                'nama_makanan' => 'Nasi Bekepor Royal Sultan Kutai (Porsi Jumbo)',
                'kategori'     => 'Paket Komplit',
                'asal_daerah'  => 'Kalimantan Timur',
                'harga'        => 55000,
                'stok'         => 8,
                'rating'       => 5.0,
                'deskripsi'    => 'Hidangan istimewa adat Keraton Kutai berisi nasi bekepor liwet besar, daging masak bumi, ayam cincane, ikan haruan, sambal raja, dan lalapan lengkap.',
                'gambar'       => base_url('images/nasi_bekepor_detail_ai.jpg'),
                'created_at'   => date('Y-m-d H:i:s'),
                'updated_at'   => date('Y-m-d H:i:s'),
            ],
        ];

        $this->db->table('nasi_bekepor')->emptyTable();
        $this->db->table('nasi_bekepor')->insertBatch($data);
    }
}
