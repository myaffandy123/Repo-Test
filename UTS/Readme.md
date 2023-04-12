[![Open in Visual Studio Code](https://classroom.github.com/assets/open-in-vscode-718a45dd9cf7e7f842a935f5ebbe5719a5e09af4491e668f4dbf3b35d5cca122.svg)](https://classroom.github.com/online_ide?assignment_repo_id=10836554&assignment_repo_type=AssignmentRepo)
# UTS Pemrograman Web Kelas C - Genap 2022/2023

## Identitas Mahasiswa
Nama  : Muhammad Yusuf Affandy

NIM   : 215150200111052

## Deskripsi Soal
Buatlah sebuah web sederhana untuk pengelolaan biodata dosen. Aplikasi web ini terdiri dari 4 fungsionalitas dasar meliputi : entry data baru, update data, menampilkan data dan menghapus data. Data disimpan pada sebuah database MySQL dan dikelola oleh aplikasi web berbasis PHP.

### Struktur Database
Tabel ``dosen`` terdiri atas 4 field yaitu :
- ``id`` : integer, primary key, unique, autoincrement
- ``nip`` : varchar(20)
- ``nama`` : varchar(50)
- ``fakultas`` : varchar(50)

### Fungsi tampilkan data dosen
Fungsi ini diimplementasikan pada file ``index.php``. Tampilkan data dosen yang disimpan di database dalam sebuah tabel dengan tambahan kolom ``Action`` untuk link update dan delete data dengan format URL
- update data : ``update.php?id=xxx``
- delete data : ``delete.php?id=xxx``

### Fungsi tambah data dosen
Fungsi tambah data dose diimplementasikan pada file ``create.php``. Field yang perlu dientrykan antara lain :
- ``nip`` : varchar(20)
- ``nama`` : varchar(50)
- ``fakultas`` : varchar(50)

### Fungsi ubah data dosen
Fungsi ubah data dosen diimplementasikan pada file ``update.php``. Field yang perlu dientrykan antara lain :
- ``nip`` : varchar(20)
- ``nama`` : varchar(50)
- ``fakultas`` : varchar(50)

### Fungsi hapus data dosen
Fungsi hapus data dosen diimplementasikan pada file ``delete.php``. Setelah dihapus, redirect ke halaman ``index.php``.

## Pengumpulan Jawaban
Jawaban dikumpulkan dengan cara commit dan push kode ke repositori Github classroom masing-masing. Mahasiswa juga diminta mengisi form self-asessment pada tautan berikut : https://forms.gle/T3Rw8L3GhvcLZ9qMA
