<?php

namespace Database\Seeders;

use App\Models\Desease;
use App\Models\Indication;
use App\Models\Rule;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Spatie\Permission\Models\Role;
use Whoops\Run;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(1)->create();

        //Role Creation
        Role::create(['name' => 'admin']);
        Role::create(['name' => 'user']);

        $admin = User::create([
            'name' => 'admin',
            'email' => 'muhainun059@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);

        $user = User::create([
            'name' => 'user',
            'email' => 'muhainun058@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('12345678'),
            'remember_token' => Str::random(10),
        ]);

        // Register Role  & Permission to Users
        $admin->assignRole('admin');
        $user->assignRole('user');




        Desease::create([
            'nama_penyakit' => 'Croup',
            'detail_penyakit' => 'Croup',
            'solusi_penyakit' => 'Croup',
        ]);

        Desease::create([
            'nama_penyakit' => 'Sinusitis Akut',
            'detail_penyakit' => 'Sinusitis Akut',
            'solusi_penyakit' => 'Sinusitis Akut',
        ]);

        Desease::create([
            'nama_penyakit' => 'Pertusis (Batuk Rejan)',
            'detail_penyakit' => 'Pertusis (Batuk Rejan)',
            'solusi_penyakit' => 'Pertusis (Batuk Rejan)',
        ]);

        Desease::create([
            'nama_penyakit' => 'Bronchitis',
            'detail_penyakit' => 'Bronchitis',
            'solusi_penyakit' => 'Bronchitis',
        ]);

        Desease::create([
            'nama_penyakit' => 'Pneumonia',
            'detail_penyakit' => 'Pneumonia',
            'solusi_penyakit' => 'Pneumonia',
        ]);

        Desease::create([
            'nama_penyakit' => 'Epiglotitis',
            'detail_penyakit' => 'Epiglotitis',
            'solusi_penyakit' => 'Epiglotitis',
        ]);

        Desease::create([
            'nama_penyakit' => 'Tonsilitis Akut',
            'detail_penyakit' => 'Tonsilitis Akut',
            'solusi_penyakit' => 'Tonsilitis Akut',
        ]);

        Desease::create([
            'nama_penyakit' => 'Faringitis (Radang Tenggorokan)',
            'detail_penyakit' => 'Faringitis (Radang Tenggorokan)',
            'solusi_penyakit' => 'Faringitis (Radang Tenggorokan)',
        ]);

        Desease::create([
            'nama_penyakit' => 'Laringitis Akut',
            'detail_penyakit' => 'Laringitis Akut',
            'solusi_penyakit' => 'Laringitis Akut',
        ]);

        Desease::create([
            'nama_penyakit' => 'Asma',
            'detail_penyakit' => 'Asma',
            'solusi_penyakit' => 'Asma',
        ]);

        // Indication::create([
        //     'nama_gejala' => 'kesulitan bernafas',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'suara yang serak',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'suara batuk seperti monggong yang keras',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'suara kasar bernada tinggi saat menghirup nafas',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'mudah merasa kesal',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'tidak selera makan',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'bernafas melalui mulut',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'suara terdengar sengau',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'munculnya lendir berwarna kuning atau hijau dari hidung',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'mengeluarkan bunyi saat bernafas',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'muntah akibat rejan yang parah',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'tubuh menjadi memerah dan membiru (sianosis)',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'batuk berlangsung selama 5 hari atau lebih',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'keluar dahak bening, kuning, hijau atau putih',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'dada terasa sakit atau nyeri saat batuk',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'demam (suhu tubuh di atas 38 derajat Celsius)',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'hidung tersumbat',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'terasa sakit pada bagian perut saat batuk',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'tidak nafsu makan sehingga memicu dehidrasi',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'Ngiler',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'Nyeri tenggorokan',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'Gangguan menelan',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'Mengi, ditandai dengan suara terjepit seperti siulan ketika penderita bernapas',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'Batuk kering dikarenakan lapisan pada paru-paru mengalami iritasi dan lendir yang muncul pada bronkial sulit dihilangkan',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'Hypoxia atau kekurangan oksigen pada beberapa bagian tubuh, ditandai dengan kulit yang membiru dan rasa sakit pada atau di sekitar bagian tubuh yang kekurangan oksigen',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'jeda antara nafas yang berlangsung 20 detik atau lebih',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'nafas terengah-engah',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'Tersedak',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'detak jantung lambat',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'Dyspnea / Sesak Nafas (mungkin beraktivitas atau dengan istirahat, tergantung pada tingkat keparahan stenosis)',
        // ]);

        // Indication::create([
        //     'nama_gejala' => 'Pneumonitis berulang',
        // ]);

        Indication::create([
            'nama_gejala' => 'kesulitan bernafas',
        ]);

        Indication::create([
            'nama_gejala' => 'suara yang serak',
        ]);

        Indication::create([
            'nama_gejala' => 'suara batuk seperti monggong yang keras',
        ]);

        Indication::create([
            'nama_gejala' => 'suara kasar bernada tinggi saat menghirup nafas',
        ]);

        Indication::create([
            'nama_gejala' => 'Bau Nafas Tidak Sedap',
        ]);

        Indication::create([
            'nama_gejala' => 'Pilek Tidak Kuncung Membaik',
        ]);

        Indication::create([
            'nama_gejala' => 'bernafas melalui mulut',
        ]);

        Indication::create([
            'nama_gejala' => 'suara terdengar sengau',
        ]);

        Indication::create([
            'nama_gejala' => 'munculnya lendir berwarna kuning atau hijau dari hidung',
        ]);

        Indication::create([
            'nama_gejala' => 'Nyeri Pada bagian wajah terutama ketika bertunduk',
        ]);

        Indication::create([
            'nama_gejala' => 'mengeluarkan bunyi saat bernafas',
        ]);

        Indication::create([
            'nama_gejala' => 'muntah akibat rejan yang parah',
        ]);

        Indication::create([
            'nama_gejala' => 'tubuh menjadi memerah dan membiru (sianosis)',
        ]);

        Indication::create([
            'nama_gejala' => 'batuk berlangsung selama 5hari atau lebih',
        ]);

        Indication::create([
            'nama_gejala' => 'keluar dahak bening, kuning, hijau atau putih',
        ]);

        Indication::create([
            'nama_gejala' => 'dada terasa sakit atau nyeri saat batuk',
        ]);

        Indication::create([
            'nama_gejala' => 'demam (suhu tubuh di atas 38 derajat Celsius)',
        ]);

        Indication::create([
            'nama_gejala' => 'Batuk',
        ]);

        Indication::create([
            'nama_gejala' => 'Nafas cepat',
        ]);

        Indication::create([
            'nama_gejala' => 'terasa sakit pada bagian perut saat batuk',
        ]);

        Indication::create([
            'nama_gejala' => 'tidak nafsu makan sehingga memicu dehidrasi',
        ]);

        Indication::create([
            'nama_gejala' => 'Ngiler',
        ]);

        Indication::create([
            'nama_gejala' => 'Nyeri tenggorokan',
        ]);

        Indication::create([
            'nama_gejala' => 'Gangguan menelan',
        ]);

        Indication::create([
            'nama_gejala' => 'Sesak',
        ]);

        Indication::create([
            'nama_gejala' => 'Nyeri Menelan',
        ]);

        Indication::create([
            'nama_gejala' => 'Ngorok Saat Tidur',
        ]);

        Indication::create([
            'nama_gejala' => 'Amandel Membesar',
        ]);

        Indication::create([
            'nama_gejala' => 'Tenggorokan Berwarna Merah',
        ]);

        Indication::create([
            'nama_gejala' => 'Suara Serak sampai Hilang',
        ]);

        Indication::create([
            'nama_gejala' => 'Mengi, ditandai dengan suara terjepit seperti siulan ketika penderita bernapas',
        ]);

        Indication::create([
            'nama_gejala' => 'Ada Riwayat Alergi',
        ]);


        // // P01
        // Rule::create(['kode_penyakit' => 'P01', 'kode_gejala' => 'G01', 'cf_pakar' => 0.5, 'mb_pakar' => 0.6, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P01', 'kode_gejala' => 'G02', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P01', 'kode_gejala' => 'G03', 'cf_pakar' => 0.6, 'mb_pakar' => 0.6, 'md_pakar' => 0.0]);
        // Rule::create(['kode_penyakit' => 'P01', 'kode_gejala' => 'G04', 'cf_pakar' => 0.7, 'mb_pakar' => 0.8, 'md_pakar' => 0.1]);

        // // P02
        // Rule::create(['kode_penyakit' => 'P02', 'kode_gejala' => 'G05', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P02', 'kode_gejala' => 'G06', 'cf_pakar' => 0.3, 'mb_pakar' => 0.4, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P02', 'kode_gejala' => 'G07', 'cf_pakar' => 0.7, 'mb_pakar' => 0.7, 'md_pakar' => 0.0]);
        // Rule::create(['kode_penyakit' => 'P02', 'kode_gejala' => 'G08', 'cf_pakar' => 0.6, 'mb_pakar' => 0.6, 'md_pakar' => 0.0]);
        // Rule::create(['kode_penyakit' => 'P02', 'kode_gejala' => 'G09', 'cf_pakar' => 0.9, 'mb_pakar' => 0.9, 'md_pakar' => 0.0]);

        // // P03
        // Rule::create(['kode_penyakit' => 'P03', 'kode_gejala' => 'G01', 'cf_pakar' => 0.6, 'mb_pakar' => 0.7, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P03', 'kode_gejala' => 'G10', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P03', 'kode_gejala' => 'G11', 'cf_pakar' => 0.8, 'mb_pakar' => 0.8, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P03', 'kode_gejala' => 'G12', 'cf_pakar' => 0.6, 'mb_pakar' => 0.7, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P03', 'kode_gejala' => 'G16', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);

        // // P04
        // Rule::create(['kode_penyakit' => 'P04', 'kode_gejala' => 'G13', 'cf_pakar' => 0.6, 'mb_pakar' => 0.7, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P04', 'kode_gejala' => 'G14', 'cf_pakar' => 0.8, 'mb_pakar' => 0.8, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P04', 'kode_gejala' => 'G15', 'cf_pakar' => 0.7, 'mb_pakar' => 0.8, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P04', 'kode_gejala' => 'G16', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);

        // // P05
        // Rule::create(['kode_penyakit' => 'P05', 'kode_gejala' => 'G13', 'cf_pakar' => 0.5, 'mb_pakar' => 0.6, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P05', 'kode_gejala' => 'G16', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P05', 'kode_gejala' => 'G17', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P05', 'kode_gejala' => 'G01', 'cf_pakar' => 0.7, 'mb_pakar' => 0.8, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P05', 'kode_gejala' => 'G18', 'cf_pakar' => 0.6, 'mb_pakar' => 0.7, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P05', 'kode_gejala' => 'G19', 'cf_pakar' => 0.5, 'mb_pakar' => 0.6, 'md_pakar' => 0.1]);

        // // P06
        // Rule::create(['kode_penyakit' => 'P06', 'kode_gejala' => 'G20', 'cf_pakar' => 0.3, 'mb_pakar' => 0.4, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P06', 'kode_gejala' => 'G21', 'cf_pakar' => 0.7, 'mb_pakar' => 0.8, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P06', 'kode_gejala' => 'G22', 'cf_pakar' => 0.6, 'mb_pakar' => 0.7, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P06', 'kode_gejala' => 'G04', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P06', 'kode_gejala' => 'G02', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P06', 'kode_gejala' => 'G16', 'cf_pakar' => 0.5, 'mb_pakar' => 0.6, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P06', 'kode_gejala' => 'G12', 'cf_pakar' => 0.5, 'mb_pakar' => 0.6, 'md_pakar' => 0.1]);

        // // P07
        // Rule::create(['kode_penyakit' => 'P07', 'kode_gejala' => 'G23', 'cf_pakar' => 0.5, 'mb_pakar' => 0.6, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P07', 'kode_gejala' => 'G01', 'cf_pakar' => 0.8, 'mb_pakar' => 0.8, 'md_pakar' => 0.0]);
        // Rule::create(['kode_penyakit' => 'P07', 'kode_gejala' => 'G24', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P07', 'kode_gejala' => 'G15', 'cf_pakar' => 0.6, 'mb_pakar' => 0.7, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P07', 'kode_gejala' => 'G25', 'cf_pakar' => 0.6, 'mb_pakar' => 0.7, 'md_pakar' => 0.1]);

        // // P08
        // Rule::create(['kode_penyakit' => 'P08', 'kode_gejala' => 'G26', 'cf_pakar' => 0.9, 'mb_pakar' => 0.9, 'md_pakar' => 0.0]);
        // Rule::create(['kode_penyakit' => 'P08', 'kode_gejala' => 'G27', 'cf_pakar' => 0.6, 'mb_pakar' => 0.7, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P08', 'kode_gejala' => 'G28', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P08', 'kode_gejala' => 'G12', 'cf_pakar' => 0.5, 'mb_pakar' => 0.6, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P08', 'kode_gejala' => 'G29', 'cf_pakar' => 0.6, 'mb_pakar' => 0.7, 'md_pakar' => 0.1]);

        // // P09
        // Rule::create(['kode_penyakit' => 'P09', 'kode_gejala' => 'G30', 'cf_pakar' => 0.7, 'mb_pakar' => 0.8, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P09', 'kode_gejala' => 'G04', 'cf_pakar' => 0.5, 'mb_pakar' => 0.6, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P09', 'kode_gejala' => 'G02', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P09', 'kode_gejala' => 'G13', 'cf_pakar' => 0.4, 'mb_pakar' => 0.5, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P09', 'kode_gejala' => 'G31', 'cf_pakar' => 0.5, 'mb_pakar' => 0.6, 'md_pakar' => 0.1]);
        // Rule::create(['kode_penyakit' => 'P09', 'kode_gejala' => 'G12', 'cf_pakar' => 0.6, 'mb_pakar' => 0.7, 'md_pakar' => 0.1]);

        Rule::create([
            'kode_penyakit' => 'P01',
            'kode_gejala' => 'G01',
            'cf_pakar' => 0.5,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P01',
            'kode_gejala' => 'G02',
            'cf_pakar' => 0.4,
            'mb_pakar' => 0.5,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P01',
            'kode_gejala' => 'G03',
            'cf_pakar' => 0.8,
            'mb_pakar' => 0.8,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P01',
            'kode_gejala' => 'G04',
            'cf_pakar' => 0.7,
            'mb_pakar' => 0.8,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P02',
            'kode_gejala' => 'G05',
            'cf_pakar' => 0.8,
            'mb_pakar' => 0.8,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P02',
            'kode_gejala' => 'G06',
            'cf_pakar' => 0.8,
            'mb_pakar' => 0.8,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P02',
            'kode_gejala' => 'G07',
            'cf_pakar' => 0.5,
            'mb_pakar' => 0.5,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P02',
            'kode_gejala' => 'G08',
            'cf_pakar' => 0.6,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P02',
            'kode_gejala' => 'G09',
            'cf_pakar' => 0.9,
            'mb_pakar' => 0.9,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P02',
            'kode_gejala' => 'G10',
            'cf_pakar' => 0.8,
            'mb_pakar' => 0.8,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P03',
            'kode_gejala' => 'G01',
            'cf_pakar' => 0.6,
            'mb_pakar' => 0.7,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P03',
            'kode_gejala' => 'G11',
            'cf_pakar' => 0.4,
            'mb_pakar' => 0.5,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P03',
            'kode_gejala' => 'G12',
            'cf_pakar' => 0.8,
            'mb_pakar' => 0.8,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P03',
            'kode_gejala' => 'G13',
            'cf_pakar' => 0.6,
            'mb_pakar' => 0.7,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P03',
            'kode_gejala' => 'G17',
            'cf_pakar' => 0.4,
            'mb_pakar' => 0.5,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P03',
            'kode_gejala' => 'G18',
            'cf_pakar' => 0.5,
            'mb_pakar' => 0.5,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P04',
            'kode_gejala' => 'G14',
            'cf_pakar' => 0.6,
            'mb_pakar' => 0.7,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P04',
            'kode_gejala' => 'G15',
            'cf_pakar' => 0.6,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P04',
            'kode_gejala' => 'G16',
            'cf_pakar' => 0.4,
            'mb_pakar' => 0.5,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P04',
            'kode_gejala' => 'G17',
            'cf_pakar' => 0.2,
            'mb_pakar' => 0.3,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P04',
            'kode_gejala' => 'G25',
            'cf_pakar' => 0.5,
            'mb_pakar' => 0.5,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P05',
            'kode_gejala' => 'G14',
            'cf_pakar' => 0.5,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P05',
            'kode_gejala' => 'G17',
            'cf_pakar' => 0.4,
            'mb_pakar' => 0.5,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P05',
            'kode_gejala' => 'G19',
            'cf_pakar' => 0.8,
            'mb_pakar' => 0.8,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P05',
            'kode_gejala' => 'G20',
            'cf_pakar' => 0.3,
            'mb_pakar' => 0.4,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P05',
            'kode_gejala' => 'G21',
            'cf_pakar' => 0.3,
            'mb_pakar' => 0.4,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P05',
            'kode_gejala' => 'G25',
            'cf_pakar' => 0.7,
            'mb_pakar' => 0.8,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P06',
            'kode_gejala' => 'G22',
            'cf_pakar' => 0.3,
            'mb_pakar' => 0.4,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P06',
            'kode_gejala' => 'G23',
            'cf_pakar' => 0.7,
            'mb_pakar' => 0.8,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P06',
            'kode_gejala' => 'G24',
            'cf_pakar' => 0.6,
            'mb_pakar' => 0.7,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P06',
            'kode_gejala' => 'G04',
            'cf_pakar' => 0.4,
            'mb_pakar' => 0.5,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P06',
            'kode_gejala' => 'G02',
            'cf_pakar' => 0.4,
            'mb_pakar' => 0.5,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P06',
            'kode_gejala' => 'G17',
            'cf_pakar' => 0.5,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P06',
            'kode_gejala' => 'G13',
            'cf_pakar' => 0.5,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P07',
            'kode_gejala' => 'G17',
            'cf_pakar' => 0.5,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P07',
            'kode_gejala' => 'G26',
            'cf_pakar' => 0.7,
            'mb_pakar' => 0.7,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P07',
            'kode_gejala' => 'G05',
            'cf_pakar' => 0.5,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P07',
            'kode_gejala' => 'G27',
            'cf_pakar' => 0.8,
            'mb_pakar' => 0.8,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P07',
            'kode_gejala' => 'G28',
            'cf_pakar' => 1.0,
            'mb_pakar' => 1.0,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P08',
            'kode_gejala' => 'G17',
            'cf_pakar' => 0.6,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P08',
            'kode_gejala' => 'G26',
            'cf_pakar' => 0.8,
            'mb_pakar' => 0.8,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P08',
            'kode_gejala' => 'G29',
            'cf_pakar' => 0.8,
            'mb_pakar' => 0.8,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P09',
            'kode_gejala' => 'G17',
            'cf_pakar' => 0.5,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P09',
            'kode_gejala' => 'G18',
            'cf_pakar' => 0.5,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.1
        ]);

        Rule::create([
            'kode_penyakit' => 'P09',
            'kode_gejala' => 'G30',
            'cf_pakar' => 1.0,
            'mb_pakar' => 1.0,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P09',
            'kode_gejala' => 'G26',
            'cf_pakar' => 0.7,
            'mb_pakar' => 0.7,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P10',
            'kode_gejala' => 'G18',
            'cf_pakar' => 0.6,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P10',
            'kode_gejala' => 'G25',
            'cf_pakar' => 0.7,
            'mb_pakar' => 0.7,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P10',
            'kode_gejala' => 'G31',
            'cf_pakar' => 0.9,
            'mb_pakar' => 0.9,
            'md_pakar' => 0.0
        ]);

        Rule::create([
            'kode_penyakit' => 'P10',
            'kode_gejala' => 'G32',
            'cf_pakar' => 0.6,
            'mb_pakar' => 0.6,
            'md_pakar' => 0.0
        ]);
    }
}
