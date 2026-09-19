class Tiket:
    def __init__(self, id, namaFilm, jenisTiket, harga):
        self.__id = id
        self.__namaFilm = namaFilm
        self.__jenisTiket = jenisTiket
        self.__harga = harga

    def get_id(self): return self.__id
    def get_namaFilm(self): return self.__namaFilm
    def get_jenisTiket(self): return self.__jenisTiket
    def get_harga(self): return self.__harga

    def set_namaFilm(self, value): self.__namaFilm = value
    def set_jenisTiket(self, value): self.__jenisTiket = value
    def set_harga(self, value): self.__harga = value
