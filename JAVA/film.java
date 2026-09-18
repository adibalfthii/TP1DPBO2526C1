public class film {
    private String id;
    private String judul;
    private String genre;
    private int durasi;
    private String pathGambar;

    public film() {} // konstruktor kosong

    public film(String id, String judul, String genre, int durasi, String pathGambar) {
        this.id = id;
        this.judul = judul;
        this.genre = genre;
        this.durasi = durasi;
        this.pathGambar = pathGambar;
    }

    public String getId() { return id; }
    public String getJudul() { return judul; } 
    public String getGenre() { return genre; }
    public int getDurasi() { return durasi; }
    public String getPathGambar() { return pathGambar; } 

    public void setId(String id) { this.id = id; }
    public void setJudul(String judul) { this.judul = judul; }
    public void setGenre(String genre) { this.genre = genre; }
    public void setDurasi(int durasi) { this.durasi = durasi; } // Tipe data dipastikan int
    public void setPathGambar(String pathGambar) { this.pathGambar = pathGambar; }
}