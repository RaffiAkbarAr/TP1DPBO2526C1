public class Tiket {
    private String id;
    private String namaFilm;
    private String jenisTiket;
    private int harga;

    public Tiket(String id, String namaFilm, String jenisTiket, int harga) {
        this.id = id; this.namaFilm = namaFilm; this.jenisTiket = jenisTiket; this.harga = harga;
    }
    public String getId() { return id; }
    public String getNamaFilm() { return namaFilm; }
    public String getJenisTiket() { return jenisTiket; }
    public int getHarga() { return harga; }
    public void setNamaFilm(String value) { namaFilm = value; }
    public void setJenisTiket(String value) { jenisTiket = value; }
    public void setHarga(int value) { harga = value; }
}
