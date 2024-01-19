<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use SimpleSoftwareIO\QrCode\Facades\QrCode; // Add this line
use App\Models\Patient;

class QrCodeController extends Controller
{
    public function generateQrCode()
    {
        $url = "/form";
        $qrCode = QrCode::size(400)->generate($url);
        return view('welcome', compact('qrCode'));
    }

    public function showForm()
    {
        return view('pages.profile');
    }

    public function store(Request $request)
    {
        // Your store logic
    }
}