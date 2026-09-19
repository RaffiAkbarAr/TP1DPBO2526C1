import java.util.ArrayList;
import java.util.Scanner;

public class Main {
    static ArrayList<Tiket> data = new ArrayList<>();
    static Scanner in = new Scanner(System.in);

    public static void main(String[] args) {
        data.add(new Tiket("T001", "Sendirian Di Rumah", "Regular", 35000));
        data.add(new Tiket("T002", "Manusia Kekelawar", "Regular", 50000));
        data.add(new Tiket("T003", "Monster", "Regular", 35000));
        while (true) {
            System.out.println("\n1. Tambah Tiket");
            System.out.println("2. Tampilkan semua tiket");
            System.out.println("3. Update Tiket");
            System.out.println("4. Hapus Tiket");
            System.out.println("5. Cari Tiket");
            System.out.println("0. Exit");
            System.out.print("Pilih menu: ");
            int p = in.nextInt(); in.nextLine();
            if (p == 1) tambah(); else if (p == 2) tampil(); else if (p == 3) update(); else if (p == 4) hapus(); else if (p == 5) cari(); else if (p == 0) break;
        }
    }
    static void tambah() {
        System.out.print("ID Tiket: "); String id=in.nextLine();
        System.out.print("Nama Film: "); String n=in.nextLine();
        System.out.print("Jenis Tiket: "); String j=in.nextLine();
        System.out.print("Harga: "); int h=in.nextInt(); in.nextLine();
        data.add(new Tiket(id,n,j,h));
    }
    static void tampil() {
        for (Tiket t:data) System.out.println(t.getId()+" | "+t.getNamaFilm()+" | "+t.getJenisTiket()+" | Rp "+t.getHarga());
    }
    static void update() {
        System.out.print("ID: "); String id=in.nextLine();
        for (Tiket t:data) if(t.getId().equals(id)){
            System.out.print("Nama Film: "); t.setNamaFilm(in.nextLine());
            System.out.print("Jenis Tiket: "); t.setJenisTiket(in.nextLine());
            System.out.print("Harga: "); t.setHarga(in.nextInt()); in.nextLine(); return;
        }
        System.out.println("ID tidak ditemukan.");
    }
    static void hapus() {
        System.out.print("ID: "); String id=in.nextLine();
        for(int i=0;i<data.size();i++) if(data.get(i).getId().equals(id)){ data.remove(i); System.out.println("Data berhasil dihapus."); return; }
        System.out.println("ID tidak ditemukan.");
    }
    static void cari() {
        System.out.print("ID atau nama film: "); String k=in.nextLine().toLowerCase();
        for(Tiket t:data) if(t.getId().toLowerCase().contains(k)||t.getNamaFilm().toLowerCase().contains(k)) System.out.println(t.getId()+" | "+t.getNamaFilm()+" | "+t.getJenisTiket()+" | Rp "+t.getHarga());
    }
}
