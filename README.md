# 🌐 Pengembangan Aplikasi Web (PAW)

> 📘 Kumpulan hasil **Proyek Akhir**, **Praktikum**, dan **Tugas Mingguan** dari mata kuliah **Pengembangan Aplikasi Web (PAW)**  
> Program Studi Teknik Informatika – Universitas Trunojoyo Madura  

---

## 🏁 Proyek Akhir – Sistem Informasi Rental Buku Niddle  

![PHP](https://img.shields.io/badge/PHP-7.4.19-blue?logo=php)
![Laravel](https://img.shields.io/badge/Laravel-Framework-red?logo=laravel)
![MySQL](https://img.shields.io/badge/MySQL-Database-yellow?logo=mysql)
![Bootstrap](https://img.shields.io/badge/Bootstrap-5-purple?logo=bootstrap)
![HTML5](https://img.shields.io/badge/HTML5-orange?logo=html5)
![CSS3](https://img.shields.io/badge/CSS3-blue?logo=css3)

---

### 🧩 Deskripsi  
**Sistem Informasi Rental Buku Niddle** adalah aplikasi web berbasis **Laravel** untuk mengelola penyewaan buku secara digital.  
Sistem ini memiliki dua peran utama: **Admin** dan **Penyewa**, yang dapat melakukan pengelolaan dan transaksi buku secara mudah dan efisien.

---

### 🚀 Fitur Utama  
#### 👩‍💼 Admin  
- CRUD data buku dan kategori  
- Kelola data penyewa  
- Validasi transaksi peminjaman & pengembalian  
- Pengaturan denda keterlambatan  

#### 📖 Penyewa  
- Melihat daftar buku berdasarkan kategori  
- Melakukan peminjaman & pengembalian  
- Registrasi akun dan melihat riwayat transaksi  

---

### ⚙️ Teknologi yang Digunakan  
- **Framework** : Laravel  
- **Bahasa Pemrograman** : PHP v7.4.19  
- **Database** : MySQL  
- **Front-End** : HTML5, CSS3, Bootstrap  
- **Server** : Apache / Laravel Artisan  

---

### 💡 Kesimpulan  
Aplikasi ini membantu digitalisasi proses penyewaan buku di toko buku dengan sistem berbasis web yang interaktif dan efisien.  
Dikembangkan dengan Laravel untuk kemudahan maintain dan skalabilitas jangka panjang.

---

## ⚙️ Praktikum Modul 1–6  

> 💡 Bagian ini berisi rangkaian praktikum PAW yang bertujuan melatih konsep dasar hingga penggunaan framework Laravel.

### 🧩 Modul 1 — Pengenalan PHP & Variabel  
- Instalasi web server (XAMPP/Laragon)  
- Operasi aritmetika dasar (penjumlahan, perkalian, pembagian)  
- Variabel lokal & global  
- Menampilkan tanggal dan waktu dalam Bahasa Indonesia  

---

### 🧩 Modul 2 — Fungsi & Array  
- Fungsi `jumlah()`, `kali()`, `bagi()` dengan parameter  
- Menampilkan faktor pembagi dan FPB dari dua bilangan  
- Menyimpan hasil ke dalam array  

---

### 🧩 Modul 3 — Form & Validasi Input  
- Form dengan field: name, email, website, comment, gender  
- Validasi form kosong dan format salah  
- Value tidak hilang setelah submit  

---

### 🧩 Modul 4 — Login & Session  
- Form login dengan *Remember Me*  
- Menggunakan **session** untuk menyimpan status login  
- Menampilkan data mahasiswa dari array multidimensi  
- Logout untuk menghapus session  

---

### 🧩 Modul 5 — CRUD Database Mahasiswa  
- Membuat tabel `tbl_mahasiswa` (nrp, nama, email, alamat)  
- Fitur:
  - **Create** – Tambah data  
  - **Read** – Tampilkan data  
  - **Update** – Edit data  
  - **Delete** – Hapus data  

---

### 🧩 Modul 6 — Laravel Basic Page  
- Implementasi halaman menggunakan **Laravel Framework**  
- Halaman:
  1. 🏠 **Home** – Tentang UTM & Teknik Informatika  
  2. 👤 **About** – Biodata mahasiswa  
  3. 🧠 **Tugas Pendahuluan** – Jawaban pendahuluan Modul 6  
- Menggunakan **Route, Controller, dan Blade Template**

---

## 💻 Tugas 

---

### 🔹 **Tugas 1 — Instalasi Git & Perintah Dasar**  
- Instalasi Git dan inisialisasi repositori  
- Menjalankan perintah dasar (`init`, `add`, `commit`, `push`, `clone`)  
- Sinkronisasi proyek lokal dengan GitHub  

---

### 🔹 **Tugas 2 — Fungsi Perhitungan Volume Balok**  
- File PHP berisi fungsi volume balok  
- Variabel: panjang, lebar, tinggi  

---

### 🔹 **Tugas 3 — Form Upload Gambar**  
- Form HTML untuk upload gambar  
- File ditampilkan di halaman menggunakan PHP  

---

### 🔹 **Tugas 4 — Query SQL Dasar**  
- Membuat tabel **fakultas** dan **mahasiswa**  
- Manipulasi data: `INSERT`, `UPDATE`, `DELETE`, `SELECT`  
- Join tabel mahasiswa & fakultas  

---

### 🔹 **Tugas 5 — Relasi Tabel Mahasiswa & Prodi**  
- Tabel `tbl_mhs` dan `tbl_prodi`  
- Relasi dengan `id_prodi`  
- Menampilkan data gabungan menggunakan `JOIN`  

---

### 🔹 **Tugas 6 — Integrasi PHP & MySQL**  
- Menambahkan data menggunakan form HTML  
- Menampilkan hasil input dari database  

---

### 🔹 **Tugas 9 — JavaScript Console Output**  
- File `contoh.js` berisi:
  ```js
  const nama = "Siti Nur Aini";
  const nim = 210411100054;
  const prodi = "Teknik Informatika";
  console.log(nama, nim, prodi);
