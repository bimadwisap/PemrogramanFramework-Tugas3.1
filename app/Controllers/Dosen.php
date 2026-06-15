<?php
// app/Controllers/Dosen.php
namespace App\Controllers;

class Dosen extends BaseController
{
    public function index()
    {
        $data = [
            'title' => 'Data Dosen',
            'dosen' => [
                [
                    'nip'    => '198501012010011001',
                    'nama'   => 'Dr. Andi Wijaya, M.Kom',
                    'matkul' => 'Algoritma dan Pemrograman',
                    'email'  => 'andi.wijaya@kampus.ac.id',
                ],
                [
                    'nip'    => '197803152005012002',
                    'nama'   => 'Siti Rahayu, S.T., M.T.',
                    'matkul' => 'Basis Data',
                    'email'  => 'siti.rahayu@kampus.ac.id',
                ],
                [
                    'nip'    => '199002202015041003',
                    'nama'   => 'Budi Hartono, M.Cs',
                    'matkul' => 'Pemrograman Web',
                    'email'  => 'budi.hartono@kampus.ac.id',
                ],
            ],
        ];

        return view('pages/dosen', $data);
    }
}