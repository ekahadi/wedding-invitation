<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WeddingController extends Controller
{
    public function showInvitation($kpd)
    {
        $nama = $kpd;
        return view('invitation', compact('nama'));
    }
}
