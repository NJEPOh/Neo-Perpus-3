# 📚 NeoPerpus — Sistem Informasi Perpustakaan Digital

NeoPerpus adalah aplikasi manajemen perpustakaan berbasis **Laravel 12**, dirancang agar admin dan anggota dapat mengelola data buku, peminjaman, dan denda dengan mudah.  
Proyek ini dikembangkan untuk pembelajaran **Pemrograman Berorientasi Objek** dengan fokus pada kelancaran koneksi database dan tampilan wireframe sederhana.

---

## 🚀 Fitur Utama

| Peran | Fitur |
|:------|:------|
| 👤 **Anggota** | Registrasi akun, login, melihat katalog buku, melihat detail buku |
| 🧑‍💼 **Admin** | Login admin, kelola data buku, anggota, peminjaman, dan denda |
| ⚙️ **Sistem** | Autentikasi manual (tanpa library eksternal), validasi input, session login sederhana |

---

## 🧱 Struktur Proyek

```bash
neo-perpus/
│
├── app/
│ ├── Http/Controllers/
│ │ ├── AdminController.php
│ │ ├── AnggotaController.php
│ │ ├── BukuController.php
│ │ ├── DendaController.php
│ │ ├── PeminjamanController.php
│ │ ├── AuthController.php
│ │ └── HomeController.php
│ ├── Http/Middleware/
│ │ ├── Authenticate.php
│ │ └── AdminMiddleware.php
│ └── Models/
│ ├── Admin.php
│ ├── Anggota.php
│ ├── Buku.php
│ ├── Peminjaman.php
│ └── Denda.php
│
├── database/
│ ├── migrations/ # Struktur tabel database
│ ├── seeders/ # Data awal (AdminSeeder, BukuSeeder)
│ └── factories/
│
├── public/
│ ├── css/style.css
│ ├── js/
│ └── index.php
│
├── resources/views/
│ ├── layouts/ # Template utama
│ ├── auth/ # Login & register
│ ├── home/ # Beranda & katalog
│ └── admin/ # Dashboard & CRUD
│
├── routes/web.php
├── composer.json
└── README.md
```

---

## ⚙️ Langkah Instalasi

### 1️⃣ Clone Repository
```bash
git clone https://github.com/username/neoperpus.git
cd neoperpus
```

### 2️⃣ Install Dependencies
```bash
composer install
npm install
```

### 3️⃣ Copy & Konfigurasi File .env
```bash
cp .env.example .env
```

## Atur koneksi database di .env sesuai kebutuhanmu:
```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=neoperpus
DB_USERNAME=root
DB_PASSWORD=
```

### 4️⃣ Generate Key Aplikasi
```bash
php artisan key:generate
```

### 5️⃣ Jalankan Migrasi & Seeder
```bash
php artisan migrate:fresh --seed
```

## Seeder akan otomatis membuat:
- 👑 Admin default → username: admin, password: admin123
- 📚 5 data buku contoh di tabel buku


### 💻 Menjalankan Aplikasi

## Jalankan server lokal:
```bash
php artisan serve
```

## Lalu buka di browser:
```bash
http://127.0.0.1:8000
```



### 🔑 Akun Login

| Peran    | Username                                    | Password |
| :------- | :------------------------------------------ | :------- |
| Admin    | admin                                       | admin123 |
| User Tes | [test@example.com](mailto:test@example.com) | password |


### 🧩 Alur Fitur

## 👤 Anggota
- /register → daftar akun baru
- /login → masuk ke sistem
- / → melihat beranda
- /katalog → melihat daftar buku
- /buku/{id} → melihat detail buku

## 🧑‍💼 Admin
- /login → login sebagai admin
- /admin → dashboard ringkasan
- /admin/buku → CRUD data buku
- /admin/anggota → CRUD data anggota
- /admin/peminjaman → CRUD data peminjaman
- /admin/denda → CRUD data denda


### 🧠 Konsep Teknis
- Framework: Laravel 12
- Autentikasi: Manual session login
- Desain Tampilan: Wireframe sederhana dengan public/css/style.css
- ORM: Eloquent (relasi antar model buku, anggota, peminjaman, denda)
- Database: MySQL / SQLite


### Seeder Otomatis
| Seeder           | Fungsi                                     |
| :--------------- | :----------------------------------------- |
| `AdminSeeder`    | Membuat akun admin default                 |
| `BukuSeeder`     | Mengisi tabel `buku` dengan data contoh    |
| `DatabaseSeeder` | Menjalankan semua seeder di atas sekaligus |


### 🔐 Middleware (Keamanan)
- AdminMiddleware membatasi akses /admin/... hanya untuk akun admin.
- Anggota hanya bisa mengakses /, /katalog, dan /buku/{id}.


### 🎨 Tampilan (Wireframe)
# Semua tampilan menggunakan Blade sederhana:
- layouts/main.blade.php → layout utama pengguna
- layouts/admin.blade.php → layout dashboard admin
- CRUD admin memiliki tabel & form HTML dasar tanpa framework CSS tambahan.


### 💬 Catatan Pengembang
# NeoPerpus dikembangkan untuk latihan pemrograman Laravel dengan fokus utama pada:
- Struktur MVC yang bersih
- Integrasi database yang lancar
- Autentikasi manual sederhana
- Tampilan wireframe yang ringan dan cepat


### 👨‍💻 Pengembang
- NJEPOh
- Jovan2K
- Hidayah1412
- Arrel99


### Universitas Sebelas Maret (UNS)
## Pendidikan Teknik Informatika dan Komputer
## 2025