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

**C++**
  - Untuk nyimpen banyak data film sekaligus, aku manfaatin `vector<Film>` dari STL C++ biar ukuran array-nya bisa dinamis.
  - Tampilan programnya pakai basis teks (CLI) dengan perulangan `while` dan menu interaktif. 
  - Bagian `cin.ignore()` dipasang pas setelah nginput angka, tujuannya biar *buffer* keyboard gak nyangkut dan gak bikin input *string* di bawahnya loncat-loncat.
    
**Java**
  - Konsep OOP-nya di Java dibikin lebih ketat pakai *encapsulation* (atributnya diset `private` terus diakses lewat fungsi `get` dan `set`).
  - Penampung datanya pakai `ArrayList<film>`.
  - Buat interaksi sama terminalnya, aku pakai class `Scanner` supaya user bisa ngetik pilihan menu dan data film dengan gampang.
    
**Python**
  - Di Python, kodenya jauh lebih ringkas karena tinggal manfaatin tipe data *List* bawaan buat nampung objek-objek filmnya.
  - Perulangan menu utamanya pakai `while True` yang dipaduin sama percabangan `if-elif-else` biar rapi.
  - Tiap nambah data baru, tinggal panggil class `Film` terus di-*append* deh ke dalam list.
    
**PHP**
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


<img width="377" height="427" alt="output_java" src="https://github.com/user-attachments/assets/62dcf9fd-a77b-4ee2-a44c-9863a2462b7c" />
<img width="512" height="373" alt="output_java_2" src="https://github.com/user-attachments/assets/fd613413-373f-44bf-a6bc-2ce01810ca36" />
<img width="455" height="409" alt="output_java_3" src="https://github.com/user-attachments/assets/62093b01-9f4d-436c-b352-4f0ad0f9243d" />
<img width="433" height="373" alt="output_java_4" src="https://github.com/user-attachments/assets/bfe3c9a2-c89c-4ea1-b594-cd6820d3c984" />
<img width="512" height="428" alt="output_java_5" src="https://github.com/user-attachments/assets/15e8fdb1-f6e1-48f4-9f34-1118a2f0d1d5" />
<img width="431" height="364" alt="output_java_6" src="https://github.com/user-attachments/assets/1f74f044-955e-42f8-a9c0-181830286152" />

### 3. Output Python (Terminal)


<img width="408" height="417" alt="output_python" src="https://github.com/user-attachments/assets/c6c8a494-75b5-46ea-a561-bd4f927bd5f0" />
<img width="545" height="348" alt="output_python 2" src="https://github.com/user-attachments/assets/469a944f-566e-4717-8ceb-a8cecdac8662" />
<img width="488" height="385" alt="output_python 3" src="https://github.com/user-attachments/assets/e8d019fd-e795-4b1a-a6a1-6960db9c0980" />
<img width="275" height="361" alt="output_python 4" src="https://github.com/user-attachments/assets/ed974694-bcbf-4ad1-ac49-f8a428c779c8" />
<img width="331" height="368" alt="output_python 5" src="https://github.com/user-attachments/assets/7619df52-ce55-48b0-934e-438b1b5929d0" />
<img width="353" height="328" alt="output_python 6" src="https://github.com/user-attachments/assets/963895bc-c8d5-4c9f-9887-aefabc0943c9" />

### 4. Output PHP (Web Browser)


<img width="928" height="486" alt="output_php 1" src="https://github.com/user-attachments/assets/1fb62f14-7cd2-4757-a4bb-8f367f502e3c" />
<img width="871" height="505" alt="output_php 2" src="https://github.com/user-attachments/assets/a0de95ea-a365-4972-b6d6-c4f9537ec92f" />
<img width="851" height="476" alt="output_php 3" src="https://github.com/user-attachments/assets/30337ad7-cd99-4511-bbba-20160059e755" />
<img width="929" height="481" alt="output_php 4" src="https://github.com/user-attachments/assets/fe59047e-c3cc-43e5-aa86-e931fc860708" />
<img width="799" height="458" alt="output_php 5" src="https://github.com/user-attachments/assets/ee1dd2d7-22b9-4283-b367-81e1324492b5" />





