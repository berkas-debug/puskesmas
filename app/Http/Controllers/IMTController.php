<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IMTController extends Controller
{
    public function hitung(Request $request)
    {
        $request->validate([
            'berat' => 'required|numeric|min:1',
            'tinggi' => 'required|numeric|min:1',
        ]);

        $berat = $request->input('berat');
        $tinggiCm = $request->input('tinggi');
        $tinggiM = $tinggiCm / 100;

        $imt = $berat / pow($tinggiM, 2);
        $imt = round($imt, 2);

        $kategori = match (true) {
            $imt < 18.5 => 'Kurus',
            $imt < 25 => 'Normal',
            $imt < 30 => 'Gemuk',
            default => 'Obesitas',
        };

        return redirect()->back()->with([
            'imt' => $imt,
            'kategori' => $kategori,
        ]);
    }
}
