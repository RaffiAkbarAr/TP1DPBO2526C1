from tiket import Tiket

data = [
    Tiket("T001", "Sendirian Di Rumah", "Regular", 35000),
    Tiket("T002", "Manusia Kekelawar", "Regular", 50000),
    Tiket("T003", "Monster", "Regular", 35000)
]

def tambah():
    print("\n=== Tambah Tiket TIKET ===")
    id = input("ID Tiket: ")
    nama = input("Nama Film: ")
    jenis = input("Jenis Tiket: ")
    harga = int(input("Harga: "))
    data.append(Tiket(id, nama, jenis, harga))
    print("Data berhasil ditambahkan.")

def tampil():
    print("\n=== DATA TIKET ===")
    if not data:
        print("Belum ada data.")
        return
    for t in data:
        print(f"{t.get_id()} | {t.get_namaFilm()} | {t.get_jenisTiket()} | Rp {t.get_harga()}")

def update():
    id = input("Masukkan ID: ")
    for t in data:
        if t.get_id() == id:
            t.set_namaFilm(input("Nama Film baru: "))
            t.set_jenisTiket(input("Jenis Tiket baru: "))
            t.set_harga(int(input("Harga baru: ")))
            print("Data berhasil diupdate.")
            return
    print("ID tidak ditemukan.")

def hapus():
    id = input("Masukkan ID: ")
    for t in data:
        if t.get_id() == id:
            data.remove(t)
            print("Data berhasil dihapus.")
            return
    print("ID tidak ditemukan.")

def cari():
    keyword = input("Masukkan ID atau nama film: ").lower()
    ditemukan = False
    for t in data:
        if keyword in t.get_id().lower() or keyword in t.get_namaFilm().lower():
            print(f"{t.get_id()} | {t.get_namaFilm()} | {t.get_jenisTiket()} | Rp {t.get_harga()}")
            ditemukan = True
    if not ditemukan: print("Data tidak ditemukan.")

while True:
    print("\n==========================")
    print("     DATA TIKET BIOSKOP")
    print("==========================")
    print("1. Tambah Tiket")
    print("2. Tampilkan semua tiket")
    print("3. Update Tiket")
    print("4. Hapus Tiket")
    print("5. Cari Tiket")
    print("0. Exit")
    pilihan = input("Pilih menu: ")
    if pilihan == "1": tambah()
    elif pilihan == "2": tampil()
    elif pilihan == "3": update()
    elif pilihan == "4": hapus()
    elif pilihan == "5": cari()
    elif pilihan == "0": break
    else: print("Pilihan tidak valid.")
