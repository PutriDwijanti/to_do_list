<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class WilayahController extends Controller
{

    public function showWilayah()
    {
        $response = Http::withOptions([
            'verify' => 'C:\xampp2\php\extras\ssl\cacert.pem'
        ])->get('https://raw.githubusercontent.com/farizdotid/DAFTAR-API-LOKAL-INDONESIA/master/data/location/id.json');

        if ($response->successful()) {
            $data = $response->json();
            $provinsi = $data['provinsi'] ?? []; // Untuk menghindari error jika key tidak ada

            return view('wilayah', compact('provinsi'));
        } else {
            return view('wilayah', ['provinsi' => []]);
        }
    }

    public function getProvinsiAPI()
    {
        $response = Http::withOptions([
            'verify' => 'C:\xampp2\php\extras\ssl\cacert.pem'
        ])->get('https://raw.githubusercontent.com/farizdotid/DAFTAR-API-LOKAL-INDONESIA/master/data/location/id.json');
        
    if ($response->successful()) {
            $provinsi = $response->json();

            //return view('provinsi', compact('provinsi'));
            return response()->json([
                'status' => true,
                'data' => $provinsi
            ]);
    }else {
        return response()->json([
            'status' => false,
            'message' => 'Gagal mengambil data dari GitHub.'
        ], 500);
    }
  }

  public function showPulau($wilayah)
  {
      $viewPath = strtolower($wilayah) . '.index';
  
      if (view()->exists($viewPath)) {
          return view($viewPath, [
              'wilayah' => ucfirst($wilayah)
          ]);
      }
  
      $viewPulauPath = 'wilayah.' . strtolower($wilayah);
      if (view()->exists($viewPulauPath)) {
          return view($viewPulauPath, [
              'wilayah' => ucfirst($wilayah)
          ]);
      }
  
      abort(404);
  }

    public function showKategori($subwilayah, $kategori)
    {
        $viewPath = strtolower($subwilayah) . '.' . strtolower($kategori);

        if (view()->exists($viewPath)) {
            return view($viewPath, [
                'subwilayah' => ucfirst(str_replace('-', ' ', $subwilayah)),
                'kategori' => ucfirst(str_replace('-', ' ', $kategori)),
            ]);
        }

        abort(404);
    }

    public function showProvinsi($namaProvinsi)
    {
    $pulau = $this->getPulauFromProvinsi(ucwords(str_replace('-', ' ', $namaProvinsi)));

    return view('wilayah.isiWilayah', [
        'provinsi' => ucwords(str_replace('-', ' ', $namaProvinsi)),
        'pulau' => $pulau
    ]);
    }

    public function getPulauFromProvinsi($namaProvinsi)
    {
        $pulauMapping = [
            'jawa' => ['Banten', 'DKI Jakarta', 'Jawa Barat', 'Jawa Tengah', 'DI Yogyakarta', 'Jawa Timur'],
            'sumatera' => ['Aceh', 'Sumatera Utara', 'Sumatera Barat', 'Riau', 'Jambi', 'Sumatera Selatan', 'Bengkulu', 'Lampung', 'Kepulauan Riau', 'Kepulauan Bangka Belitung'],
            'kalimantan' => ['Kalimantan Barat', 'Kalimantan Tengah', 'Kalimantan Selatan', 'Kalimantan Timur', 'Kalimantan Utara'],
            'sulawesi' => ['Sulawesi Utara', 'Sulawesi Tengah', 'Sulawesi Selatan', 'Sulawesi Tenggara', 'Sulawesi Barat', 'Gorontalo'],
            'bali-nusa' => ['Bali', 'Nusa Tenggara Barat', 'Nusa Tenggara Timur'],
            'maluku' => ['Maluku', 'Maluku Utara'],
            'papua' => ['Papua', 'Papua Barat', 'Papua Tengah', 'Papua Pegunungan', 'Papua Selatan', 'Papua Barat Daya'],
        ];

        foreach ($pulauMapping as $pulau => $daftarProvinsi) {
            if (in_array($namaProvinsi, $daftarProvinsi)) {
                return $pulau;
            }
        }

        return 'lainnya';
    }

    public function isiWilayah($namaWilayah)
    {
        $namaWilayah = ucwords(str_replace('-', ' ', $namaWilayah));
        $pulau = $this->getPulauFromProvinsi($namaWilayah);

        return view('wilayah.isiWilayah', [
            'provinsi' => $namaWilayah,
            'pulau' => ucfirst($pulau)
        ]);
    }

    public function show($wilayah)
    {
        // Misal kamu mau ubah kembali "jawa-barat" jadi "Jawa Barat"
        $wilayahNama = ucwords(str_replace('-', ' ', $wilayah));

        $viewPath = 'provinsi.' . str_replace('-', '', strtolower($wilayah)) . '.index';

        if (view()->exists($viewPath)) {
            return view($viewPath, [
                'wilayah' => $wilayahNama,
            ]);
        }

        return abort(404);
    }

    public function showJawaBarat()
    {
        return view('jawaBarat.index');
    }

}

