#include <string>
using namespace std;

class Tiket {
private:
    string id;
    string namaFilm;
    string jenisTiket;
    int harga;

public:
    Tiket(string id, string namaFilm, string jenisTiket, int harga) {
        this->id = id;
        this->namaFilm = namaFilm;
        this->jenisTiket = jenisTiket;
        this->harga = harga;
    }

    string getId() {
        return id;
    }

    string getNamaFilm() {
        return namaFilm;
    }

    string getJenisTiket() {
        return jenisTiket;
    }

    int getHarga() {
        return harga;
    }

    void setNamaFilm(string namaFilm) {
        this->namaFilm = namaFilm;
    }

    void setJenisTiket(string jenisTiket) {
        this->jenisTiket = jenisTiket;
    }

    void setHarga(int harga) {
        this->harga = harga;
    }
};