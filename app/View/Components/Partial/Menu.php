<?php

namespace App\View\Components\Partial;

use Illuminate\View\Component;

class Menu extends Component
{
    public $arrayMenu;

    public function __construct()
    {
        $this->arrayMenu = $this->arrayMenu();
    }

    public function render()
    {
        return view('components.partial.menu');
    }

    public function arrayMenu()
    {
        return [
            [
                'name' => 'Home',
                'url' => '/',
            ],
            [
                'name' => 'Profil',
                'group' => [
                    [
                        'name' => 'Admen',
                        'url' => '/profil/admin',
                    ],
                    [
                        'name' => 'Mutu',
                        'url' => '/profil/mutu',
                    ],
                    [
                        'name' => 'UKP',
                        'url' => '/profil/ukp',
                    ],
                    [
                        'name' => 'UKM',
                        'url' => '/profil/ukm',
                    ],
                    [
                        'name' => 'Visi & Misi',
                        'url' => '/profil/visi-misi',
                    ],
                    [
                        'name' => 'Hak & Kewajiban Pasien',
                        'url' => '/profil/hak-kewajiban',
                    ],
                ],
            ],
            [
                'name' => 'Pelayanan',
                'group' => [
                    [
                        'name' => 'UKP',
                        'url' => '/poliukp/',
                    ],
                    [
                        'name' => 'UKM',
                        'url' => '/poliukm',
                    ],
                    [
                        'name' => 'RUJUK',
                        'url' => '/polirujuk',
                    ],
                ],
            ],
            [
                'name' => 'Standar Pelayanan',
                'url' => '/standar-pelayanan',
            ],
            [
                'name' => 'Jaringan',
                'group' => [
                    [
                        'name' => 'Menteng Dalam',
                        'url' => '/puskesmas/menteng-dalam',
                    ],
                    [
                        'name' => 'Tebet Barat',
                        'url' => '/puskesmas/tebet-barat',
                    ],
                    [
                        'name' => 'Kebon Baru',
                        'url' => '/puskesmas/kebon-baru',
                    ],
                    [
                        'name' => 'Bukit Duri',
                        'url' => '/puskesmas/bukit-duri',
                    ],
                    [
                        'name' => 'Manggarai Selatan',
                        'url' => '/puskesmas/manggarai-selatan',
                    ],
                    [
                        'name' => 'Manggarai',
                        'url' => '/puskesmas/manggarai',
                    ],
                ],
            ],
            [
                'name' => 'Jejaring',
                'url' => '/jejaring',
            ],
            [
                'name' => 'News',
                'url' => '/news',
            ],

            [
                'name' => 'Gallery',
                'url' => '/gallery',
            ],
            [
                'name' => 'Karir',
                'url' => '/karir',
            ],


            [
                'name' => 'Aplikasi',
                'group' => [
                    [
                        'name' => 'E-Kinerja',
                        'url' => 'https://e-kinerja.pkctebet.com/',
                    ],
                    [
                        'name' => 'Heroes',
                        'url' => 'https://puskesmastebet.co.id/heroes/',
                    ],
                    [
                        'name' => 'Emoticon',
                        'url' => 'https://puskesmastebet.co.id/pilihan_emoticon.html',
                    ],
                    [
                        'name' => 'E-mon Indikator Kinerja',
                        'url' => 'https://puskesmastebet.co.id/kecamatan-tebet/e-mon/',
                    ],
                ],
            ],
            [
                'name' => 'Si Patuh',
                'group' => [
                    [
                        'name' => 'Si Patuh Penerapan',
                        'url' => '/sipatuhpenerapan',
                    ],
                    [
                        'name' => 'Si Patuh Pemantauan',
                        'url' => '/sipatuhpemantauan',
                    ],
                    [
                        'name' => 'Si Patuh Pembinaan',
                        'url' => '/sipatuhpembinaan',
                    ],
                    [
                        'name' => 'Si Patuh Pengaduan',
                        'url' => '/sipatuhpengaduan',
                    ],
                ],
            ],
            [
                'name' => 'Kontak',
                'url' => '/kontak-kami',
            ],
        ];
    }
}
