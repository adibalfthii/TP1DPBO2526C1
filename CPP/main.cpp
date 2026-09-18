#include <iostream>
#include <string>
#include <vector>
#include "film.cpp"

using namespace std;

int main() {
    vector<film> daftarFilm;
    int menu = 0;
    string id, judul, genre, pathGambarnya, searchId;
    int durasi;

    while(menu != 6){
        cout << "\n=== BIOSKOP BIOSKOP AN ===" << endl;
        cout << "1. Tambah Data Film" << endl;
        cout << "2. Tampilkan Semua Data" << endl;
        cout << "3. Update Data Film" << endl;
        cout << "4. Hapus Data Film" << endl;
        cout << "5. Cari Data Film" << endl;
        cout << "6. Keluar" << endl;
        cout << "Pilih menu: ";

        cin >> menu;
        cin.ignore(256, '\n');

        if(menu == 1){
            cout << "\n-- Tambah Data --" << endl;
            cout << "ID Film        : "; getline(cin, id);
            cout << "Judul          : "; getline(cin, judul);
            cout << "Genre          : "; getline(cin, genre);
            cout << "Durasi (menit) : "; cin >> durasi; cin.ignore();
            cout << "Path Gambar    : "; getline(cin, pathGambarnya);

            film filmBaru(id, judul, genre, durasi, pathGambarnya);
            daftarFilm.push_back(filmBaru);
            cout << "Berhasil: Data film ditambahkan!" << endl;

        }
        else if(menu == 2){
            cout << "\n-- Daftar Film --" << endl;
            if(daftarFilm.empty()){
                cout << "Data bioskop masih kosong." << endl;
            }else{
                for(int i = 0; i <daftarFilm.size(); i++){
                    cout << "- ID: " << daftarFilm[i].getId()
                         << " | Judul: " << daftarFilm[i].getJudul()
                         << " | Genre: " << daftarFilm[i].getGenre()
                         << " | Durasi: " << daftarFilm[i].getDurasi() << " mnt"
                         << " | Path: " << daftarFilm[i].getPathGambarnya() << endl;

                }        
            }
        }
        else if(menu == 3){
            cout << "\n-- Update Data --" << endl;
            cout << "Masukkan ID Film yang ingin diubah: "; getline(cin, searchId);
            bool found = false;

            for(int i = 0; i < daftarFilm.size(); i++){
                if(daftarFilm[i].getId() == searchId){
                    found = true;
                    cout << "Judul Baru         : "; getline(cin, judul);
                    cout << "Genre Baru         : "; getline(cin, genre);
                    cout << "Durasi Baru (menit): "; cin >> durasi; cin.ignore();
                    cout << "Path Gambar Baru   : "; getline(cin, pathGambarnya);

                    daftarFilm[i].setJudul(judul);
                    daftarFilm[i].setGenre(genre);
                    daftarFilm[i].setDurasi(durasi);
                    daftarFilm[i].setPathGambarnya(pathGambarnya);
                    cout << "Berhasil: Data film di-update!" << endl;
                    break;
                    }
                }
                if(!found) cout << "Gagal: ID Film tidak ditemukan." << endl;
            }
            else if(menu == 4){
                cout << "\n-- Hapus Data --" << endl;
                cout << "Masukkan ID Film yang ingin dihapus: "; getline(cin, searchId);
                bool found = false;

                for(int i = 0; i < daftarFilm.size(); i++){
                    if(daftarFilm[i].getId() == searchId){
                        daftarFilm.erase(daftarFilm.begin() + i);
                        cout << "Berhasil: Data film dihapus!" << endl;
                        found = true;
                        break;
                    }
                }
                if(!found) cout << "Gagal: ID Film tidak ditemukan." << endl;
            }
            else if(menu == 5){
                cout << "\n-- Cari Data --" << endl;
                cout << "Masukkan ID Film yang dicari: "; getline(cin, searchId);
                bool found = false;

                for(int i =0; i < daftarFilm.size(); i++){
                    if(daftarFilm[i].getId() == searchId){
                        cout << "Data Ditemukan:" << endl;
                        cout << "Judul : " << daftarFilm[i].getJudul() << endl;
                        cout << "Genre : " << daftarFilm[i].getGenre() << endl;
                        cout << "Durasi: " << daftarFilm[i].getDurasi() << " menit" << endl;
                        cout << "Gambar: " << daftarFilm[i].getPathGambarnya() << endl;
                        found = true;
                        break;
                    }
                }
                    if(!found) cout << "Gagal: ID Film tidak ditemukan." << endl;
                }
                else if(menu == 6){
                    cout << "Program selesai. Keluar dari sistem..." << endl;
                }
                else {
                    cout << "Pilihan tidak valid!" << endl;
                }
            }
            return 0;
        }
    
