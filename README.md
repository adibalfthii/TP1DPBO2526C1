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


### 2. Output Java (Terminal)
![Java](Folder%20Dokumentasi/output_java.png)

### 3. Output Python (Terminal)
![Python](Folder%20Dokumentasi/output_python.png)

### 4. Output PHP (Web Browser)
![PHP](Folder%20Dokumentasi/output_php.png)
