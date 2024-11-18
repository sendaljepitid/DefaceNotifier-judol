# DefaceNotifier

DefaceNotifier adalah aplikasi sederhana berbasis PHP yang digunakan untuk memantau potensi defacement pada situs `.ac.id` ataupun `.go.id` bisa juga domain lainnya yang terkait dengan konten "slot". Aplikasi ini menggunakan **Google Custom Search API** untuk melakukan pencarian otomatis, dan mengirimkan notifikasi ke Telegram jika ditemukan hasil yang mencurigakan.

---

## Fitur

- Memantau situs misalkan `.ac.id` ataupun `.go.id` menggunakan kata kunci spesifik.
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

# Defacement Monitor Setup Guide

Panduan ini menjelaskan cara menginstal dan menjalankan aplikasi **Defacement Monitor** untuk memantau situs web dan mengirimkan notifikasi terkait potensi defacement.

---

## 1. Siapkan Server

Pastikan server Anda memiliki PHP dan web server seperti **Apache** atau **Nginx** yang sudah terinstal. Jika belum, instal PHP dan web server dengan perintah berikut:

### **Untuk Ubuntu/Debian**:
```bash
sudo apt update
sudo apt install apache2 php libapache2-mod-php
```

### **Untuk CentOS / RHEL**:
```bash
sudo yum update
sudo yum install httpd php
sudo systemctl enable httpd
sudo systemctl start httpd
```

---

## 2. Konfigurasi PHP

1. Periksa apakah PHP sudah terinstal dengan perintah:
   ```bash
   php -v
   ```
   Pastikan versi PHP kompatibel (disarankan PHP 7.4 atau lebih baru).

2. Periksa apakah modul `cURL` aktif:
   ```bash
   php -m | grep curl
   ```

3. Jika modul `cURL` tidak tersedia, instal dengan perintah berikut:

   - **Untuk Ubuntu/Debian**:
     ```bash
     sudo apt install php-curl
     ```

   - **Untuk CentOS / RHEL**:
     ```bash
     sudo yum install php-curl
     ```

---

## 3. Buat Direktori untuk Skrip

Simpan skrip PHP di direktori yang dapat diakses oleh web server Anda, seperti `/var/www/html/`.

### Langkah:

1. Akses direktori web server:
   ```bash
   cd /var/www/html/
   ```

2. Buat file untuk skrip:
   ```bash
   nano defacement_monitor.php
   ```

3. Tempelkan kode PHP Anda ke dalam file tersebut.

4. Simpan perubahan dengan langkah berikut:
   - Tekan `CTRL + O` untuk menyimpan.
   - Tekan `CTRL + X` untuk keluar dari editor Nano.

---

## 4. Jalankan Skrip

Uji jalankan skrip dengan perintah:
```bash
php /var/www/html/defacement_monitor.php
```

Jika skrip berjalan tanpa error, maka instalasi berhasil.

---

## 5. Google API Key dan Custom Search Engine ID
Langkah Konfigurasi:
Google API Key dan Custom Search Engine ID

 - Daftar di Google Developers Console.
 - Aktifkan Custom Search API.
 - Buat mesin pencari kustom di Google Custom Search dan ambil Search Engine ID.


## 6. Telegram Bot

- Buat bot Telegram menggunakan BotFather.
- Dapatkan bot token dan chat ID Anda.
- Gunakan API Telegram getUpdates untuk mendapatkan chat ID.

  
## 7. Server dan Cron Job

Simpan skrip ini di server Anda, misalnya defacement_monitor.php.
Atur cron job untuk menjalankan skrip setiap jam:
```bash


0 * * * * php /path/to/defacement_monitor.php


```

Catatan:
Ubah YOUR_GOOGLE_API_KEY, YOUR_SEARCH_ENGINE_ID, YOUR_TELEGRAM_BOT_TOKEN, dan YOUR_CHAT_ID sesuai dengan kredensial Anda.
Pastikan server Anda memiliki akses ke API Google dan Telegram.




Skrip akan mengirimkan notifikasi ke Telegram jika mendeteksi hasil baru. Pastikan Anda telah mengonfigurasi **Telegram Bot Token** dan **Chat ID** di dalam skrip.
contoh hasil penggunaan domain `*.ac.id` 
Fokus pada pelacakan aktivitas terkait defacement situs didaftarkan 


---



![judol](https://github.com/user-attachments/assets/dd9d5761-c627-4aee-bd98-8d7fc29adb43)

