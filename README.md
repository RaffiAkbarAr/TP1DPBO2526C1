# TP1

## janji

Saya Raffi Akbar Ardiansyah dengan NIM 2511604 mengerjakan TP 1 dalam mata kuliah DPBO untuk keberkahanNya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

# Penjelasan Kode

Jadi pada program saya ini terdapat satu file class yaitu Tiket dan file utama untuk menjalankan program. Disini alur program yang saya buat ialah proses pengelolaan data tiket bioskop. Program ini menggunakan array/list untuk menyimpan data dari inputan user. Pada file C++, Java, dan Python, user disajikan dengan sebuah tampilan menu yang bisa dipilih sesuai dengan kemauan user. User dapat memilih opsi yang tersedia mulai dari opsi 1 sampai 6. Dikarenakan penyimpanan data hasil inputan tidak memakai database, jadi data hanya disimpan selama program sedang berjalan dan menggunakan perulangan menu yang akan berhenti pada saat user memasukkan nomor 6 sebagai indikasi untuk keluar dari program.

Atribut yang ada pada class masing-masing bahasa terdiri dari:

1. ID Tiket
2. Nama Film
3. Jenis Tiket
4. Harga

Pada PHP terdapat tambahan atribut:
5. Gambar

# Penjelasan Fitur

## 1. Tambah Data
Kalau user menginput angka 1, maka user akan dibawa ke menu tambah data tiket. User dapat memasukkan ID tiket, nama film, jenis tiket, dan harga. Data yang telah dimasukkan kemudian disimpan ke dalam array/list.

## 2. Tampilkan Data
Kalau user menginput angka 2, maka user akan dibawa ke menu display tiket yang akan menampilkan semua data tiket yang telah dimasukkan.

## 3. Update Data
Kalau user menginput angka 3, maka user akan dibawa ke menu update tiket. Proses update ini dimulai dengan user menginput ID tiket yang akan di-update. Kemudian program akan melakukan pencarian ke seluruh data tiket yang ada. Jika ID ditemukan, maka user dapat melakukan update data tiket tersebut.

## 4. Hapus Data
Kalau user menginput angka 4, maka user masuk ke menu hapus tiket. Prosesnya kurang lebih sama dengan proses update, yaitu dengan cara ID tiket dicari terlebih dahulu. Jika ID ditemukan, maka data tiket tersebut akan dihapus.

## 5. Cari Data
Kalau user menginput angka 5, maka user masuk ke menu cari tiket. User dapat memasukkan ID tiket yang ingin dicari, kemudian program akan melakukan pencarian pada data tiket yang tersedia. Jika data ditemukan, maka data tiket akan ditampilkan.

## 6. Keluar
Kalau user menginput angka 6, maka program akan berhenti dan user keluar dari program.

## Cpp



Tampilan awal



<img width="381" height="307" alt="Tampilan Awal" src="https://github.com/user-attachments/assets/f0ea02fa-30c8-48fc-81c1-0bfaa8813e99" />



Tambah Tiket



<img width="471" height="417" alt="Tambah Tiket" src="https://github.com/user-attachments/assets/d7d62d2b-1a3b-4010-bbe6-7f25f694dc00" />



Tampilkan Semua Tiket




<img width="513" height="772" alt="Tampilkan semua tiket" src="https://github.com/user-attachments/assets/a2a9d18b-778d-4d2b-9a5d-392167e25cb4" />



Update Tiket



<img width="574" height="441" alt="update data" src="https://github.com/user-attachments/assets/ab214f9e-0c27-4ea8-9ffa-d2d4d071d9e1" />



Hapus Tiket



<img width="402" height="349" alt="Hapus Tiket" src="https://github.com/user-attachments/assets/65d6fbd4-6f03-424b-a0f4-b0a1d52d58d3" />



Cari Tiket



<img width="510" height="486" alt="Cari Tiket" src="https://github.com/user-attachments/assets/1f64c00a-09da-4cb5-9238-8f2f783f0753" />



## Java



Tampilan awal



<img width="350" height="196" alt="Tampilan Awal" src="https://github.com/user-attachments/assets/963f818e-cdb5-4753-9f3d-85db4b4f592c" />



Tambah Tiket



<img width="455" height="274" alt="tambah tiket" src="https://github.com/user-attachments/assets/ec020b80-9bcc-43c3-8af4-10ee7619dccd" />



Tampilkan Semua Tiket



<img width="598" height="284" alt="tampilkan semua tiket" src="https://github.com/user-attachments/assets/420c2dd7-a416-403b-9c5a-1873956ad4c3" />



Update Tiket



<img width="429" height="265" alt="Update Tiket" src="https://github.com/user-attachments/assets/3a2c1c5f-1091-4471-8019-94cf71e033ba" />



Hapus Tiket



<img width="383" height="222" alt="Hapus Tiket" src="https://github.com/user-attachments/assets/87db1117-5e88-489e-9a04-c5aae5db8170" />



Cari Tiket


<img width="624" height="228" alt="Cari Tiket" src="https://github.com/user-attachments/assets/5e27b6f9-9bce-4e2e-abf9-1f6d49658be6" />


## Python


Tampilan Awal



<img width="379" height="276" alt="Tampilan awal" src="https://github.com/user-attachments/assets/29154cfd-cb37-49cc-90ad-a16667b9876a" />



Tambah Tiket



<img width="481" height="414" alt="Tambah Data" src="https://github.com/user-attachments/assets/e6493aa9-c1b7-4ed7-af4a-ecf9a706f260" />



Tampilkan Semua Tiket



<img width="663" height="406" alt="Tampikan semua Tiket" src="https://github.com/user-attachments/assets/a6eed5ae-b416-4f9b-a23b-a7e967ebc93c" />




Update Tiket



<img width="407" height="360" alt="Update Tiket" src="https://github.com/user-attachments/assets/1515f4ef-050e-40e4-85ff-1eedfae16f5d" />




Hapus Tiket



<img width="416" height="294" alt="Hapus Tiket" src="https://github.com/user-attachments/assets/7e850b1f-d340-4030-9578-e152a4d8e5b9" />



Cari Tiket



<img width="593" height="282" alt="Cari tiket" src="https://github.com/user-attachments/assets/d86e57f4-b361-4fd7-8b64-c64d56fe1b88" />



## PHP

Tampilan Awal



<img width="1917" height="988" alt="Tampilan Awal" src="https://github.com/user-attachments/assets/a27cd42c-54cc-4882-99b0-6ca95c478770" />



Tambah Tiket



<img width="1509" height="992" alt="Tambah" src="https://github.com/user-attachments/assets/10d42356-7748-42e3-ad47-7a6a8f486030" />



Tampilkan Semua Tiket



<img width="1573" height="944" alt="Data Tiket" src="https://github.com/user-attachments/assets/7783355d-96fa-4402-8927-90bed1cf570f" />



Update Tiket



<img width="1633" height="952" alt="Update" src="https://github.com/user-attachments/assets/0f16260a-902f-4ead-b372-86a8b6437f66" />



Hapus Tiket



<img width="1697" height="893" alt="Hapus" src="https://github.com/user-attachments/assets/03596578-a07a-4307-bfe2-cd8c3e4b7456" />





Cari Tiket



<img width="1761" height="883" alt="Cari" src="https://github.com/user-attachments/assets/4ea2b8ce-086f-47da-b32a-dfe0a4a86323" />
