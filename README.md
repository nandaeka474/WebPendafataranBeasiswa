# Sistem Pendaftaran Beasiswa - Panduan Pengembangan

Selamat datang di panduan pengembangan untuk Sistem Pendaftaran Beasiswa. Dokumen ini memberikan panduan tentang struktur proyek, penamaan file, dan pedoman pengkodean yang dianjurkan untuk memastikan konsistensi dan kerapihan dalam pengembangan aplikasi.

## Struktur Direktori

Berikut adalah struktur direktori dari proyek ini:
- `index.php`: Halaman utama aplikasi, memberikan informasi umum tentang program beasiswa.
- `form_pendaftaran.php`: Halaman formulir dan pengelolaan pendaftaran beasiswa
- `hasil.php`: Halaman hasil pendaftaran beasiswa, menampilkan informasi pendaftaran terakhir.
- `verifikasi.php` : Halaman untuk mengedit status beasiswa atau status ajuan.
- `hapus.php`: Memproses penghapusan record pada tabel

- `aset/`: Direktori yang berisi aset-aset seperti gambar dan file gaya (CSS).
- `bootstrap/`: Direktori yang berisi teplate design dari css dan javascript.

## Panduan Penggunaan

1. **Form Pendaftaran**:
   - File `form_pendaftaran.php` digunakan untuk menampilkan form pendaftaran bagi calon pendaftar beasiswa. Pastikan form ini terkoneksi dengan `koneksi.php` untuk menyimpan data ke dalam database.

2. **Koneksi Database**:
   - File `koneksi.php` mengatur koneksi ke database. Pastikan pengaturan username, password, dan nama database sesuai dengan server yang digunakan.

3. **Penghapusan Data**:
   - File `hapus.php` digunakan untuk menghapus data yang tidak diperlukan. Pastikan keamanan penghapusan data dengan menggunakan metode POST atau mekanisme keamanan lain.

4. **Tampilan Hasil**:
   - `hasil.php` menampilkan data atau hasil dari pendaftaran atau aksi lainnya. Pastikan data yang ditampilkan diambil dengan benar dari database.

5. **Verifikasi**:
   - File `verifikasi.php` digunakan untuk memverifikasi data pendaftaran, baik melalui email atau metode lainnya.

## Styling

- Terdapat beberapa file CSS (`style_form.css`, `style_index.css`, `style.css`) yang digunakan untuk memperindah tampilan aplikasi. Setiap file CSS memiliki fungsi spesifik:
  - `style_form.css`: Khusus untuk halaman form pendaftaran.
  - `style_index.css`: Khusus untuk halaman index atau halaman utama.
  - `style.css`: Umum digunakan untuk styling dasar aplikasi.

## Catatan Tambahan

- Pastikan Anda menggunakan versi PHP yang sesuai dan mendukung fitur yang diperlukan.
- Gunakan mekanisme sanitasi input untuk mencegah serangan SQL Injection atau XSS.
- Jaga konsistensi penamaan file dan folder untuk memudahkan pengembangan di masa mendatang.
