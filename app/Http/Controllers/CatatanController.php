<?php

namespace App\Http\Controllers;

use App\Models\Catatan; // <-- Import model Catatan
use Illuminate\Http\Request;
use Illuminate\Support\Str; // <-- Import Str untuk membuat kode unik

class CatatanController extends Controller
{
    /**
     * Menyimpan catatan baru ke database.
     */
    public function store(Request $request, $penerima)
    {
        // 1. Validasi data yang masuk
        $validated = $request->validate([
            'penerima_nama' => 'required|string|max:255',
            'pesan' => 'required|string',
            'pengirim_nama' => 'nullable|string|max:255',
        ]);

        // 2. Buat instance Catatan baru dan isi datanya
        $catatan = new Catatan();
        $catatan->penerima_tipe = $penerima; // Ambil dari URL
        $catatan->penerima_nama = $validated['penerima_nama'];
        $catatan->pesan = $validated['pesan'];
        
        // Jika pengirim tidak diisi, gunakan 'Anonim'
        $catatan->pengirim_nama = $request->input('pengirim_nama') ?: 'Anonim';
        
        // 3. Buat kode unik yang mudah dibagikan (8 karakter acak)
        $catatan->kode_unik = Str::random(8);

        // 4. Simpan ke database
        $catatan->save();

        // 5. Arahkan ke halaman sukses dengan membawa kode unik
        return redirect('/sukses/' . $catatan->kode_unik);
    }

    public function search(Request $request)
    {
        $query = $request->input('kode'); // Kita tetap pakai nama 'kode' dari form

        // Coba cari dulu berdasarkan KODE UNIK (hasilnya pasti cuma 1 atau tidak ada)
        $catatanByKode = Catatan::where('kode_unik', $query)->first();

        if ($catatanByKode) {
            // ...
            return view('hasil', ['catatans' => collect([$catatanByKode]), 'query' => $query]);
        } else {
            // ...
            $catatansByNama = Catatan::where('penerima_nama', 'like', '%' . $query . '%')
                                    ->orderBy('created_at', 'desc')
                                    ->get();

            return view('hasil', ['catatans' => $catatansByNama, 'query' => $query]);
        }
    }

    public function show(Catatan $catatan)
    {
        // Laravel otomatis akan mencari catatan berdasarkan kode_unik
        // dan mengirimkannya ke view 'tampil'
        return view('tampil', ['catatan' => $catatan]);
    }
}