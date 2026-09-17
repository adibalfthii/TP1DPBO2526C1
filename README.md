**Tugas Praktikum 1 - (DPBO)**

**Nama:** Muh. Adib Al-Fathi
**NIM:** 2500418  
**Kelas:** C1  

**Janji**
Saya Muh. Adib Al-Fathi dengan NIM 2500418 mengerjakan Tugas Praktikum 1 dalam mata kuliah Desain dan Pemrograman Berorientasi Objek untuk keberkahan-Nya maka saya tidak melakukan kecurangan seperti yang telah dispesifikasikan. Aamiin.

**Penjelasan**
Di tugas praktikum pertama ini, saya bikin program sederhana buat ngelola data bioskop pakai konsep OOP (Object-Oriented Programming). Programnya bisa ngelakuin operasi CRUD (Create, Read, Update, Delete) dan dibuat ke dalam 4 bahasa pemrograman sekaligus, yaitu C++, Java, Python, dan PHP.

**1. Desain Class Utama (`Film`)**
Supaya konsep OOP-nya kena, di tiap bahasa aku bikin satu class utama bernama `Film` (atau `film`). Di dalam class ini ada 5 atribut penting:
- id`: Buat tanda pengenal atau ID unik tiap film.
- `judul`: Buat nyimpen nama filmnya.
- `genre`: Buat kategori filmnya apa.
- `durasi`: Nyimpen lama waktu filmnya (dalam bentuk angka/menit).
- `pathGambar`: Buat nyimpen nama file atau path poster filmnya.
Selain atribut itu, ada juga konstruktor sama fungsi *getter-setter* biar data-datanya bisa diakses dan diubah dengan aman.

**2. Detail Code dari tiap bahasanya**
**C++ (`Folder CPP`)**
  - Untuk nyimpen banyak data film sekaligus, aku manfaatin `vector<Film>` dari STL C++ biar ukuran array-nya bisa dinamis.
  - Tampilan programnya pakai basis teks (CLI) dengan perulangan `while` dan menu interaktif. 
  - Bagian `cin.ignore()` dipasang pas setelah nginput angka, tujuannya biar *buffer* keyboard gak nyangkut dan gak bikin input *string* di bawahnya loncat-loncat.
**Java (`Folder Java`)**
  - Konsep OOP-nya di Java dibikin lebih ketat pakai *encapsulation* (atributnya diset `private` terus diakses lewat fungsi `get` dan `set`).
  - Penampung datanya pakai `ArrayList<film>`.
  - Buat interaksi sama terminalnya, aku pakai class `Scanner` supaya user bisa ngetik pilihan menu dan data film dengan gampang.
**Python (`Folder Python`)**
  - Di Python, kodenya jauh lebih ringkas karena tinggal manfaatin tipe data *List* bawaan buat nampung objek-objek filmnya.
  - Perulangan menu utamanya pakai `while True` yang dipaduin sama percabangan `if-elif-else` biar rapi.
  - Tiap nambah data baru, tinggal panggil class `Film` terus di-*append* deh ke dalam list.
**PHP (`Folder PHP`)**
  - Nah, kalau yang PHP ini agak beda karena bentuknya web (pakai HTML Form & Tabel).
  - Karena gak pakai database dulu, data sementaranya ditampung pakai sesi (`$_SESSION['films']`). Jadi pas webnya di-refresh, datanya gak langsung ilang selama browsernya masih kebuka.
  - Logika CRUD-nya disesuaikan ke web pakai method form POST.

**Dokumentasi Output Program**
Berikut adalah bukti screenshot hasil running program dari keempat bahasa:

**1. Output C++**


<img width="489" height="359" alt="output_cpp" src="https://github.com/user-attachments/assets/c4a28397-da2c-4acd-901a-c2bfe0425018" />
<img width="569" height="305" alt="output_cpp_2" src="https://github.com/user-attachments/assets/cc5e9f7b-23d9-4c62-9cb6-ce67113eca39" />
<img width="457" height="370" alt="output_cpp_3" src="https://github.com/user-attachments/assets/8cb2f8fc-12b0-4c92-98da-6f22592338b4" />
<img width="381" height="296" alt="output_cpp_4" src="https://github.com/user-attachments/assets/cb1e1190-6b9d-4b1e-a756-e234330d5e07" />
<img width="371" height="379" alt="output_cpp_5png" src="https://github.com/user-attachments/assets/7e3ececb-e83c-4025-a814-bebd93ce5e38" />
<img width="427" height="302" alt="output_cpp_6" src="https://github.com/user-attachments/assets/53b1928a-b80a-497f-8ae0-35363142fa08" />

### 2. Output Java (Terminal)


### 3. Output Python (Terminal)


### 4. Output PHP (Web Browser)

