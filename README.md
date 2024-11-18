# GovDefaceMonitor

GovDefaceMonitor adalah aplikasi sederhana berbasis PHP yang digunakan untuk memantau potensi defacement pada situs `.go.id` yang terkait dengan konten "slot". Aplikasi ini menggunakan **Google Custom Search API** untuk melakukan pencarian otomatis, dan mengirimkan notifikasi ke Telegram jika ditemukan hasil yang mencurigakan.

---

## Fitur

- Memantau situs `.go.id` menggunakan kata kunci spesifik.
- Menggunakan Google Custom Search API untuk hasil yang akurat.
- Mengirimkan notifikasi otomatis ke Telegram dengan detail hasil pencarian.
- Dapat dijalankan secara otomatis menggunakan cron job.

---

## Persyaratan Sistem

1. **Server**:
   - PHP 7.4 atau lebih baru.
   - Modul PHP:
     - `curl`
     - `file_get_contents`
   - Web server seperti Apache atau Nginx.
2. **Google API Key** dan **Custom Search Engine ID**.
3. **Telegram Bot Token** dan Chat ID.

---

## Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/username/GovDefaceMonitor.git
cd GovDefaceMonitor
