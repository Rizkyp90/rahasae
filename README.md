# Rahasae ✨

Sebuah aplikasi web sederhana dan anonim untuk mengirimkan catatan atau pesan rahasia kepada orang-orang terdekat. Pengguna dapat menulis pesan, menentukannya untuk siapa, dan mendapatkan sebuah kode unik untuk dibagikan. Pesan juga dapat ditemukan secara publik melalui pencarian nama.

---

### ## Fitur Utama 🚀

* **💌 Kirim Pesan Personal:** Tulis dan kirimkan catatan untuk berbagai kategori penerima seperti pasangan, orang tua, sahabat, dan lainnya.
* **👤 Opsi Anonim:** Pengirim dapat memilih untuk tidak mencantumkan nama mereka.
* **🔑 Kode Unik:** Setiap pesan yang berhasil dikirim akan menghasilkan kode unik 8 karakter yang dapat digunakan untuk mengakses pesan tersebut secara langsung dan privat.
* **🔍 Pencarian Ganda:**
    * **Pencarian Publik:** Cari berdasarkan nama penerima untuk melihat semua pesan yang ditujukan untuk nama tersebut.
    * **Pencarian Privat:** Gunakan kode unik untuk langsung membuka pesan spesifik yang dituju.
* **📱 Desain Responsif:** Tampilan website menyesuaikan dengan baik di perangkat desktop maupun mobile (HP).

---

### ## Teknologi yang Digunakan ⚙️

* **Backend:** Laravel 12
* **Database:** MySQL
* **Frontend:** HTML (Blade Templates) & Plain CSS (Tanpa Framework)
* **Deployment:** Shared Hosting (InfinityFree)

---

### ## Instalasi & Setup Lokal 🔧

Jika Anda ingin menjalankan proyek ini di komputer lokal Anda, ikuti langkah-langkah berikut:

1.  **Clone repository ini:**
    ```bash
    git clone [https://github.com/Rizkyp90/rahasae.git]
    ```

2.  **Masuk ke direktori proyek:**
    ```bash
    cd rahasae
    ```

3.  **Install dependensi PHP (Composer):**
    ```bash
    composer install
    ```

4.  **Buat salinan file `.env`:**
    ```bash
    cp .env.example .env
    ```

5.  **Generate `APP_KEY` baru:**
    ```bash
    php artisan key:generate
    ```

6.  **Konfigurasi database Anda:**
    Buka file `.env` dan sesuaikan pengaturan `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD` dengan konfigurasi database lokal Anda.

7.  **Jalankan migrasi database:**
    Perintah ini akan membuat tabel `catatans` di database Anda.
    ```bash
    php artisan migrate
    ```

8.  **Jalankan server pengembangan:**
    ```bash
    php artisan serve
    ```
    Aplikasi sekarang akan berjalan di `http://127.0.0.1:8000`.

---

### ## Catatan Deployment

Aplikasi ini di-deploy di lingkungan shared hosting gratis (InfinityFree). Prosesnya meliputi:
* Upload file proyek secara manual (via ZIP & File Manager).
* Konfigurasi file `.env` di server dengan kredensial database hosting.
* Impor database secara manual melalui phpMyAdmin.
* Modifikasi file `index.php` untuk menyesuaikan *document root* karena keterbatasan pada panel hosting.

---

### ## Lisensi 📄

Proyek ini dilisensikan di bawah Lisensi MIT.
