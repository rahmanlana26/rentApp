<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class KomerceShippingController extends Controller
{
    protected $apiKey;
    protected $baseUrl;

    public function __construct()
    {
        $this->apiKey = env('KOMERCE_API_KEY');
        $this->baseUrl = env('KOMERCE_BASE_URL');
    }

    // 1. Mencari Destinasi (Kota/Kabupaten/Kecamatan)
    // Komerce menggunakan sistem pencarian berbasis kata kunci (search)
    public function searchDestination(Request $request)
    {
        $keyword = $request->input('search', 'Malang'); // Default cari 'Malang' jika kosong

        $response = Http::withHeaders([
            'key' => $this->apiKey
        ])->get($this->baseUrl . '/destination/domestic-destination', [
            'search' => $keyword
        ]);

        return $response->json();
    }

    // 2. Mengecek Ongkos Kirim Domestik
    public function calculateCost(Request $request)
    {
        // Simulasi data untuk CetakPro
        $originId = 256; // ID Lokasi Asal (Misal: Kota Malang) - Dapatkan ID ini dari endpoint searchDestination
        $destinationId = $request->input('destination', 108); // ID Lokasi Tujuan
        $weight = 1000; // Berat cetakan dalam gram (1kg)
        $courier = $request->input('courier', 'jne'); // Pilihan kurir: jne, sicepat, dll

        $response = Http::asForm()->withHeaders([
            'key' => $this->apiKey
        ])->post($this->baseUrl . '/calculate/domestic-cost', [
            'origin' => $originId,
            'destination' => $destinationId,
            'weight' => $weight,
            'courier' => $courier
        ]);

        return $response->json();
    }
}
