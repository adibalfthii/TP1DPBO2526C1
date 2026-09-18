#include <iostream>
#include <string>
using namespace std;

class film{
    private:
    string id;
    string judul;
    string genre;
    int durasi;
    string pathGambarnya;

    public:
    film(){} //konstruktor kosong
    film(string id, string judul, string genre, int durasi, string pathGambarnya) {
        this->id = id;
        this->judul = judul;
        this->genre = genre;
        this->durasi = durasi;
        this->pathGambarnya = pathGambarnya;
    }
    string getId(){
        return id;
    }
    string getJudul(){
        return judul;
    }
    string getGenre(){
        return genre;
    }
    int getDurasi(){
        return durasi;
    }
    string getPathGambarnya(){
        return pathGambarnya;
    }

    void setId(string id) {this->id = id;}
    void setJudul(string judul) {this->judul = judul;}
    void setGenre(string genre) {this->genre = genre;}
    void setDurasi(int durasi){this->durasi = durasi;}
    void setPathGambarnya(string pathGambarnya){this->pathGambarnya = pathGambarnya;}

    ~film(){} //destruktor


};