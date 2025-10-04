<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tulis Catatan - Rahasae</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <main>
        {{-- Ini adalah logika untuk mengubah teks label secara dinamis --}}
        @php
            $labelText = 'Nama...'; // Default text
            if ($penerima == 'pasangan') $labelText = 'Nama pacar kamu';
            elseif ($penerima == 'orang-tua') $labelText = 'Nama orang tua kamu';
            elseif ($penerima == 'saudara') $labelText = 'Nama saudara kamu';
            elseif ($penerima == 'sahabat') $labelText = 'Nama sahabat kamu';
            elseif ($penerima == 'teman') $labelText = 'Nama teman kamu';
            elseif ($penerima == 'untukku-nanti') $labelText = 'Judul catatanmu';
            elseif ($penerima == 'rahasia') $labelText = 'Untuk siapa? (Rahasia)';
            elseif ($penerima == 'lainnya') $labelText = 'Tujuan catatanmu';
        @endphp

        <form action="/tulis/{{ $penerima }}" method="POST" class="message-form">
            @csrf {{-- Token keamanan wajib di Laravel --}}

            {{-- ... (div form-group dan textarea biarkan sama) ... --}}
            <div class="form-group">
                <label class="recipient-label">{{ $labelText }}</label>
                <input type="text" name="penerima_nama" class="recipient-input" placeholder="...................." required>
            </div>

            <p class="message-label">Apa yang ingin kamu sampaikan?</p>
            <textarea class="message-textarea" name="pesan" rows="8" placeholder="Tulis ceritamu di sini..." required></textarea>

            {{-- TAMBAHAN: Input untuk nama pengirim (opsional) --}}
            <p class="message-label" style="margin-top: 1.5rem;">Dari siapa? (Boleh kosong)</p>
            <input type="text" name="pengirim_nama" class="recipient-input" placeholder="Nama kamu (opsional)">

            <button type="submit" class="submit-btn">Kirim!</button>
        </form>
    </main>
</body>
</html>