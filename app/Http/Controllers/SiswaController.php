<?php

namespace App\Http\Controllers;

use App\Models\Siswa;

class SiswaController extends Controller
{
    public function index_view()
    {
        return view('pages.siswa.siswa-data', [
            'siswa' => Siswa::class,
        ]);
    }
}
