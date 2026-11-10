<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function processLogin(Request $request)
    {
        $request->validate([
            'username' => 'required|min:3',
        ]);

        session(['username' => $request->username]);

        return redirect()->route('dashboard');
    }

    public function dashboard()
    {
        $username = session('username', 'Tamu');
        return view('dashboard', compact('username'));
    }

    public function pengelolaan()
    {
        $items = [
            ['id' => 1, 'nama' => 'Pupuk Urea Subsidi', 'kategori' => 'Pertanian', 'stok' => 120, 'harga' => 115000],
            ['id' => 2, 'nama' => 'Benih Padi Inpari 32', 'kategori' => 'Pertanian', 'stok' => 45, 'harga' => 85000],
            ['id' => 3, 'nama' => 'Pestisida Nabati Organik', 'kategori' => 'Perlindungan Tanaman', 'stok' => 30, 'harga' => 45000],
            ['id' => 4, 'nama' => 'Plastik Mulsa Hitam Perak', 'kategori' => 'Sarana Tani', 'stok' => 15, 'harga' => 210000],
        ];

        return view('pengelolaan', compact('items'));
    }

    public function profile()
    {
        $username = session('username', 'Tamu');
        return view('profile', compact('username'));
    }

    public function logout()
    {
        session()->forget('username');
        return redirect()->route('login');
    }
}