import java.util.ArrayList;
import java.util.Scanner;

public class main {
    public static void main(String[] args) {
        ArrayList<film> daftarFilm = new ArrayList<>();
        Scanner input = new Scanner(System.in);
        int menu = 0;

        while (menu != 6) {
            System.out.println("\n=== BIOSKOP BIOSKOP AN ===");
            System.out.println("1. Tambah Data Film");
            System.out.println("2. Tampilkan Semua Data");
            System.out.println("3. Update Data Film");
            System.out.println("4. Hapus Data Film");
            System.out.println("5. Cari Data Film");
            System.out.println("6. Keluar");
            System.out.print("Pilih menu: ");
            
            menu = input.nextInt();
            input.nextLine(); 

            if (menu == 1) {
                System.out.println("\n-- Tambah Data --");
                System.out.print("ID Film       : "); String id = input.nextLine();
                System.out.print("Judul         : "); String judul = input.nextLine();
                System.out.print("Genre         : "); String genre = input.nextLine();
                System.out.print("Durasi (menit): "); int durasi = input.nextInt();
                input.nextLine(); 
                System.out.print("Path Gambar   : "); String path = input.nextLine();
                
                film filmBaru = new film(id, judul, genre, durasi, path);
                daftarFilm.add(filmBaru);
                System.out.println("Berhasil: Data film ditambahkan!");

            } else if (menu == 2) {
                System.out.println("\n-- Daftar Film --");
                if (daftarFilm.isEmpty()) {
                    System.out.println("Data bioskop masih kosong.");
                } else {
                    for (int i = 0; i < daftarFilm.size(); i++) {
                        film f = daftarFilm.get(i);
                        System.out.println("- ID: " + f.getId() + " | Judul: " + f.getJudul() + " | Genre: " + f.getGenre() + " | Durasi: " + f.getDurasi() + " mnt | Path: " + f.getPathGambar());
                    }
                }

            } else if (menu == 3) {
                System.out.println("\n-- Update Data --");
                System.out.print("Masukkan ID Film yang ingin diubah: ");
                String searchId = input.nextLine();
                boolean found = false;

                for (int i = 0; i < daftarFilm.size(); i++) {
                    if (daftarFilm.get(i).getId().equals(searchId)) {
                        found = true;
                        System.out.print("Judul Baru         : "); String judulBaru = input.nextLine();
                        System.out.print("Genre Baru         : "); String genreBaru = input.nextLine();
                        System.out.print("Durasi Baru (menit): "); int durasiBaru = input.nextInt();
                        input.nextLine();
                        System.out.print("Path Gambar Baru   : "); String pathBaru = input.nextLine();
                        
                        daftarFilm.get(i).setJudul(judulBaru);
                        daftarFilm.get(i).setGenre(genreBaru);
                        daftarFilm.get(i).setDurasi(durasiBaru);
                        daftarFilm.get(i).setPathGambar(pathBaru);
                        System.out.println("Berhasil: Data film di-update!");
                        break;
                    }
                }
                if (!found) System.out.println("Gagal: ID Film tidak ditemukan.");

            } else if (menu == 4) {
                System.out.println("\n-- Hapus Data --");
                System.out.print("Masukkan ID Film yang ingin dihapus: ");
                String searchId = input.nextLine();
                boolean found = false;

                for (int i = 0; i < daftarFilm.size(); i++) {
                    if (daftarFilm.get(i).getId().equals(searchId)) {
                        daftarFilm.remove(i);
                        System.out.println("Berhasil: Data film dihapus!");
                        found = true;
                        break;
                    }
                }
                if (!found) System.out.println("Gagal: ID Film tidak ditemukan.");

            } else if (menu == 5) {
                System.out.println("\n-- Cari Data --");
                System.out.print("Masukkan ID Film yang dicari: ");
                String searchId = input.nextLine();
                boolean found = false;

                for (int i = 0; i < daftarFilm.size(); i++) {
                    if (daftarFilm.get(i).getId().equals(searchId)) {
                        film f = daftarFilm.get(i);
                        System.out.println("Data Ditemukan:");
                        System.out.println("Judul  : " + f.getJudul());
                        System.out.println("Genre  : " + f.getGenre());
                        System.out.println("Durasi : " + f.getDurasi() + " menit");
                        System.out.println("Gambar : " + f.getPathGambar());
                        found = true;
                        break;
                    }
                }
                if (!found) System.out.println("Gagal: ID Film tidak ditemukan.");
            
            } else if (menu == 6) {
                System.out.println("Program selesai. Keluar dari sistem...");
            } else {
                System.out.println("Pilihan tidak valid!");
            }
        }
        input.close();
    }
}