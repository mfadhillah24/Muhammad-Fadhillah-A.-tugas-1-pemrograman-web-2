<?php

namespace Database\Seeders;

use App\Models\Divisi;
use Illuminate\Database\Seeder;

class DivisiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        
        Divisi::create(['nama_divisi' => 'Programming', 
                        'deskripsi' => 'Divisi yang bertanggung jawab untuk mengembangkan dan mempelajari sistem perangkat lunak. Anggota divisi ini biasanya memiliki keahlian dalam bahasa pemrograman, pengembangan aplikasi, dan manajemen proyek perangkat lunak.',
                        'ketua_divisi' => 'Athillah',
        
        ]);

        Divisi::create(['nama_divisi' => 'Desain Komunikasi Visual', 
                        'deskripsi' => 'Divisi yang fokus pada mengembangkan dan mempelajari konten multimedia, seperti desain grafis, animasi, video editing, dan produksi audio. Anggota divisi ini biasanya memiliki keahlian dalam perangkat lunak desain grafis, animasi, dan produksi multimedia.',
                        'ketua_divisi' => 'Erlan',

        
        ]);

        Divisi::create(['nama_divisi' => 'Networking', 
                        'deskripsi' => 'Divisi yang bertanggung jawab untuk mengembangkan dan mempelajari sistem jaringan komputer. Anggota divisi ini biasanya memiliki keahlian dalam konfigurasi jaringan, keamanan jaringan, dan manajemen infrastruktur jaringan.',
                        'ketua_divisi' => 'Sakinah',

        
        ]);

        Divisi::create(['nama_divisi' => 'Humas', 
                        'deskripsi' => 'Divisi yang fokus pada mengembangkan dan mempelajari keterampilan komunikasi, dan hubungan masyarakat. Anggota divisi ini biasanya memiliki keahlian dalam komunikasi efektif, strategi pemasaran, dan manajemen hubungan masyarakat.',
                        'ketua_divisi' => 'Alfian',

        
        ]);
        


    }
}
