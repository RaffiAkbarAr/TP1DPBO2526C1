#include <iostream>
#include <vector>
#include <string>
#include "Tiket.cpp"

using namespace std;

vector<Tiket> daftarTiket;

/* Tambah Tiket */
void tambahData() {
    string id, namaFilm, jenisTiket;
    int harga;

    cout << "\n=== Tambah Tiket TIKET ===\n";

    cout << "ID Tiket    : ";
    cin >> id;

    cin.ignore();

    cout << "Nama Film   : ";
    getline(cin, namaFilm);

    cout << "Jenis Tiket : ";
    getline(cin, jenisTiket);

    cout << "Harga       : ";
    cin >> harga;

    daftarTiket.push_back(
        Tiket(id, namaFilm, jenisTiket, harga)
    );

    cout << "Data berhasil ditambahkan.\n";
}

/* Tampilkan semua tiket */
void tampilkanData() {
    cout << "\n=== DATA TIKET ===\n";

    if (daftarTiket.empty()) {
        cout << "Belum ada data tiket.\n";
        return;
    }

    for (Tiket tiket : daftarTiket) {
        cout << "--------------------------\n";
        cout << "ID          : " << tiket.getId() << endl;
        cout << "Nama Film   : " << tiket.getNamaFilm() << endl;
        cout << "Jenis Tiket : " << tiket.getJenisTiket() << endl;
        cout << "Harga       : Rp" << tiket.getHarga() << endl;
    }
}

/* Update Tiket */
void updateData() {
    string id;

    cout << "\n=== Update Tiket TIKET ===\n";

    cout << "Masukkan ID Tiket: ";
    cin >> id;

    for (Tiket &tiket : daftarTiket) {

        if (tiket.getId() == id) {

            string namaFilm, jenisTiket;
            int harga;

            cin.ignore();

            cout << "Nama Film baru   : ";
            getline(cin, namaFilm);

            cout << "Jenis Tiket baru : ";
            getline(cin, jenisTiket);

            cout << "Harga baru       : ";
            cin >> harga;

            tiket.setNamaFilm(namaFilm);
            tiket.setJenisTiket(jenisTiket);
            tiket.setHarga(harga);

            cout << "Data berhasil diupdate.\n";
            return;
        }
    }

    cout << "ID Tiket tidak ditemukan.\n";
}

/* Hapus Tiket */
void hapusData() {
    string id;

    cout << "\n=== Hapus Tiket TIKET ===\n";

    cout << "Masukkan ID Tiket: ";
    cin >> id;

    for (int i = 0; i < daftarTiket.size(); i++) {

        if (daftarTiket[i].getId() == id) {

            daftarTiket.erase(daftarTiket.begin() + i);

            cout << "Data berhasil dihapus.\n";
            return;
        }
    }

    cout << "ID Tiket tidak ditemukan.\n";
}

/* Cari Tiket */
void cariData() {
    string keyword;

    cout << "\n=== Cari Tiket TIKET ===\n";

    cout << "Masukkan ID atau Nama Film: ";
    cin.ignore();
    getline(cin, keyword);

    bool ditemukan = false;

    for (Tiket tiket : daftarTiket) {

        if (tiket.getId() == keyword ||
            tiket.getNamaFilm() == keyword) {

            cout << "\nData ditemukan:\n";
            cout << "ID          : " << tiket.getId() << endl;
            cout << "Nama Film   : " << tiket.getNamaFilm() << endl;
            cout << "Jenis Tiket : " << tiket.getJenisTiket() << endl;
            cout << "Harga       : Rp" << tiket.getHarga() << endl;

            ditemukan = true;
            break;
        }
    }

    if (!ditemukan) {
        cout << "Data tidak ditemukan.\n";
    }
}

int main() {

    // Data awal
    daftarTiket.push_back(
        Tiket("T001", "Sendirian Di Rumah", "Regular", 35000)
    );

    daftarTiket.push_back(
        Tiket("T002", "Manusia Kekelawar", "Regular", 50000)
    );

    daftarTiket.push_back(
        Tiket("T003", "Monster", "Regular", 35000)
    );

    int pilihan;

    do {

        cout << "\n============================\n";
        cout << "       DATA TIKET BIOSKOP\n";
        cout << "============================\n";
        cout << "1. Tambah Tiket\n";
        cout << "2. Tampilkan semua tiket\n";
        cout << "3. Update Tiket\n";
        cout << "4. Hapus Tiket\n";
        cout << "5. Cari Tiket\n";
        cout << "0. Exit\n";
        cout << "============================\n";

        cout << "Pilih menu: ";
        cin >> pilihan;

        switch (pilihan) {

            case 1:
                tambahData();
                break;

            case 2:
                tampilkanData();
                break;

            case 3:
                updateData();
                break;

            case 4:
                hapusData();
                break;

            case 5:
                cariData();
                break;

            case 0:
                cout << "Program selesai.\n";
                break;

            default:
                cout << "Pilihan tidak valid.\n";
        }

    } while (pilihan != 0);

    return 0;
}