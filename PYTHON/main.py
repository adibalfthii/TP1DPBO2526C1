from film import Film

def main():
    daftar_film = []
    menu = 0

    while menu != 6:
        print("\n=== BIOSKOP BIOSKOP AN ===")
        print("1. Tambah Data Film")
        print("2. Tampilkan Semua Data")
        print("3. Update Data Film")
        print("4. Hapus Data Film")
        print("5. Cari Data Film")
        print("6. Keluar")
        
        try:
            menu = int(input("Pilih menu: "))
        except ValueError:
            print("Pilihan tidak valid! Harap masukkan angka.")
            continue

        if menu == 1:
            print("\n-- Tambah Data --")
            id_film = input("ID Film           : ")
            judul = input("Judul               : ")
            genre = input("Genre               : ")
            durasi = int(input("Durasi (menit) : "))
            path = input("Path Gambar          : ")

            film_baru = Film(id_film, judul, genre, durasi, path)
            daftar_film.append(film_baru)
            print("Berhasil: Data film ditambahkan!")

        elif menu == 2:
            print("\n-- Daftar Film --")
            if len(daftar_film) == 0:
                print("Data bioskop masih kosong.")
            else:
                for f in daftar_film:
                    print(f"- ID: {f.getId()} | Judul: {f.getJudul()} | Genre: {f.getGenre()} | Durasi: {f.getDurasi()} mnt | Path: {f.getPathGambar()}")

        elif menu == 3:
            print("\n-- Update Data --")
            search_id = input("Masukkan ID Film yang ingin diubah: ")
            found = False
            
            for f in daftar_film:
                if f.getId() == search_id:
                    judul_baru = input("Judul Baru         : ")
                    genre_baru = input("Genre Baru         : ")
                    durasi_baru = int(input("Durasi Baru (menit): "))
                    path_baru = input("Path Gambar Baru   : ")

                    f.setJudul(judul_baru)
                    f.setGenre(genre_baru)
                    f.setDurasi(durasi_baru)
                    f.setPathGambar(path_baru)
                    
                    print("Berhasil: Data film di-update!")
                    found = True
                    break
                    
            if not found:
                print("Gagal: ID Film tidak ditemukan.")

        elif menu == 4:
            print("\n-- Hapus Data --")
            search_id = input("Masukkan ID Film yang ingin dihapus: ")
            found = False
            
            for i in range(len(daftar_film)):
                if daftar_film[i].getId() == search_id:
                    daftar_film.pop(i) 
                    print("Berhasil: Data film dihapus!")
                    found = True
                    break
                    
            if not found:
                print("Gagal: ID Film tidak ditemukan.")

        elif menu == 5:
            print("\n-- Cari Data --")
            search_id = input("Masukkan ID Film yang dicari: ")
            found = False
            
            for f in daftar_film:
                if f.getId() == search_id:
                    print("Data Ditemukan:")
                    print(f"Judul : {f.getJudul()}")
                    print(f"Genre : {f.getGenre()}")
                    print(f"Durasi: {f.getDurasi()} menit")
                    print(f"Gambar: {f.getPathGambar()}")
                    found = True
                    break
                    
            if not found:
                print("Gagal: ID Film tidak ditemukan.")

        elif menu == 6:
            print("Program selesai. Keluar dari sistem...")
        else:
            print("Pilihan tidak valid!")

if __name__ == "__main__":
    main()