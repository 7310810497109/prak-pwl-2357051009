<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileController extends Controller
{
    public function profile()
    {
        $data = [
            'nama' => 'Muhammad Ilham Akbar',
            'npm' => '2357051009',
            'kelas' => 'D'
        ];

        return view('profile', data: $data);
    }
}
