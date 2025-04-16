# 🏭 ASDP Inventory System - Laravel 8

![Laravel](https://img.shields.io/badge/Laravel-8.x-FF2D20?logo=laravel)
![PHP](https://img.shields.io/badge/PHP-7.3+-777BB4?logo=php)
![MySQL](https://img.shields.io/badge/MySQL-5.7+-4479A1?logo=mysql)
![Docker](https://img.shields.io/badge/Docker-supported-2496ED?logo=docker)

ASDP Inventory System adalah aplikasi manajemen inventaris berbasis web yang dibangun dengan Laravel 8. Sistem ini dirancang untuk membantu pengelolaan stok barang, transaksi, dan pelacakan inventaris secara efisien.

---

## 🧰 Fitur Utama

-   📦 Manajemen Stok Barang
-   🔄 Sistem Transaksi Masuk/Keluar
-   📊 Laporan Inventaris Otomatis
-   🔍 Pencarian & Filter Barang
-   👨‍💼 Manajemen User & Hak Akses
-   📈 Dashboard Analisis Inventaris

---

## 🛠️ Prasyarat Sistem

-   **PHP** 7.3 atau lebih tinggi
-   **Composer** (untuk dependensi PHP)
-   **MySQL** 5.7+ atau MariaDB 10.2+
-   **Node.js** 12+ (untuk asset frontend)
-   **Docker** (opsional untuk development container)

---

## 🚀 Panduan Instalasi

### 1. Clone Repository

```bash
git clone https://github.com/ReGHZ/asdp-inventory.git
cd asdp-inventory
```

2. Install Dependensi

```bash
composer install
npm install && npm run dev
```

3. Konfigurasi Environment

Salin file environment:

```bash
cp .env.example .env
```

Edit konfigurasi database di .env:

```dotenv
### === Container Configuration === ###
APP_CONTAINER=asdp_inventory_app
NGINX_CONTAINER=asdp_inventory_nginx
MYSQL_CONTAINER=asdp_inventory_mysql
PHPMYADMIN_CONTAINER=asdp_inventory_phpmyadmin

### === Port Configuration (non-conflicting) === ###
NGINX_PORT=8100
MYSQL_PORT=3307
PHPMYADMIN_PORT=8180

### === Database Configuration === ###
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=asdp_inventory_db
DB_USERNAME=your_db_user
DB_PASSWORD=your_db_password
DB_ROOT_PASSWORD=your_root_password
DB_VOLUME=asdp_mysql_data
```

4. Setup Aplikasi

```bash
php artisan key:generate
php artisan migrate --seed
php artisan storage:link

```

5. Jalankan Aplikasi

```bash
php artisan serve
```

Akses aplikasi di: http://localhost:8000
🔧 Login Default

Admin:

    Email: admin@asdp.com

    Password: password

User:

    Email: user@asdp.com

    Password: password

🐳 Docker Development

Untuk development menggunakan Docker:

```bash
docker-compose up -d --build

```

Aplikasi akan berjalan di: http://localhost:8080
📦 Struktur Proyek

```
asdp-inventory/
├── app/               # Logic aplikasi
├── bootstrap/         # Bootstrapping
├── config/           # Konfigurasi
├── database/         # Migrasi & seed
├── public/           # Asset publik
├── resources/        # View & asset mentah
├── routes/           # Route definisi
├── storage/          # Penyimpanan
└── tests/            # Unit testing
```

🤝 Kontribusi

Kontribusi terbuka melalui:

    Fork repository

    Buat branch fitur (git checkout -b fitur-baru)

    Commit perubahan (git commit -am 'Tambahkan fitur')

    Push ke branch (git push origin fitur-baru)

    Buat Pull Request

📜 Lisensi

Proyek ini dilisensikan dibawah MIT License.
✉️ Kontak

    Developer: ReGHZ

    Email: your-email@example.com

```
Key improvements from your example:

1. Updated for Laravel 8 specifically
2. Added inventory-specific features
3. Included default login credentials
4. Added project structure visualization
5. More detailed contribution guide
6. Better organized prerequisite section
7. Added contact information section

```

The README maintains all the good elements from your example while being customized for an inventory management system.

```

```
