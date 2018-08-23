# Android_UAS

Penjelasan tentang Gradle

gradle adalah sebuah build tools  yang disematkan pada apliaksi Android Studio, dimana fungsi utamanya adalah sebagai media untuk mencompile atau menjalankan project aplikasi yang sedang kalian kerjakan , dan mengacu berdasarkan konfigurasi yang berada di bagian Gradle Script.

<p align= "center">
<img src="https://github.com/AnggaHendrawan/Android_UAS/blob/master/g5.png" width="450" height="300" />             
</p>                                                  

Ketika sedang mengerjakan project Aplikasi Android, tentunya kakan melihat suatu bagian disebelah kiri layar monitor dan terletak pada struktur project Android, bagian itulah yang disebut dengan Gradle Script , untuk lebih memahaminya silahkan perhatikan ilustrasi gambar dibawah ini .

<p align= "center">
<img src="https://github.com/AnggaHendrawan/Android_UAS/blob/master/g1.png" width="450" height="300" />             
</p>  
Perlu garis bawahi, bahwa banyak sekali masalah yang akan dihadapi oleh para developer ketika mereka tengah mengerjakan project androidnya, dan hal ini banyak disebabkan karena konfigruasi yang dilakukan pada file di Gradle banyak yang tidak berhasil.  

Dalam artikel kali ini saya akan mencoba membahas, fungsi-fungsi dari setiap konfigurasi file , serta Gradle Script  yang terdapat pada android studuio. Mungkin didalam pembahasan ini, saya tidak terlalu menjelaskan secara terperinci, namun saya telah merangkum bagian-bagian inti dari permasalahan tersebut.

Fungsi - Fungsi Yang Terdapat Pada Gradle

1. Build.gradle (Module :app)
Seperti yang bisa kalian lihat pada file dibawah ini,  bahwasannya file tersebut merupakan konfigurasi file app level , yang disematkan pada code apply dengan tujuan untuk menambahkan plugin Android ke dalam build sistem. Pada block code dependencies terdapat tiga baris code. diantaranya adalah :
<p align= "center">
<img src="https://github.com/AnggaHendrawan/Android_UAS/blob/master/g2.png" width="450" height="300" />             
</p>
2. Proses Building
Proses Building ini merupakan suatu proses yang diklaim memang melibatkan banyak tools, kemudian pada proses tersebut juga akan mengconvert sebuah project ke dalam Android Package (APK). Untuk memperjelas masalah tersebut, silahkan kalian perhatikan ilustrasi gambar dibawah ini 
<p align= "center">
<img src="https://github.com/AnggaHendrawan/Android_UAS/blob/master/g3.png" width="450" height="300" />             
</p>
3. Build.gradle (Project :Nama Project)
Dibawah ini adalah contoh dari file Build.gradle, silahkan kalian simak terlebih dahulu
<p align= "center">
<img src="https://github.com/AnggaHendrawan/Android_UAS/blob/master/g4.png" width="450" height="300" />             
</p>
Pada conroh file diatas, dapat kita jelaskan beberapa kesimpulan seperti dibawah ini :
- Seperti yang bisa kalian lihat , di atas merupakan contoh konfigurasi file top level,  yang mana kalian bisa membuat atau menambahkan pilihan konfigurasi secara umum untuk project turunanan / modules.  Code block buildscript , pada dasarnya difungsikan untuk mendownload sebuah plugin yang di perlukan oleh Gradle. Contoh kecilnya seperti pada kode diatas, dimana fungsi kode tersebut adalah sebagai jalur yang digunakan untuk  mengunduh repository jcenter.
- Secara umum Gradle tidak memasukan fungsi-fungsi Android. Namun untuk mengatasi masalah ini, Google telah menyediakan Android Plugin untuk Gradle ,yang telah terbukti bisa membantu kalian untuk mempermudah melakukan konfigurasi pada file project Android.
- Untuk code allprojects, secara basicnya berfungsi untuk menunjukan bahwa project top level atau project turunan yang di konfigurasi secara bawaan, akan melakukan proses pen-downloadan plugin atau library Java yang berada pada repository jcenter.
-     Untuk code task clean, jika melihat fungsinya, kode ini hampir sama dengan tipe delete, hal ini mengindikasikan bahwa direktori build akan dihapus pada project root atau utama kalian. Karena secara default, hal ini berada pada build di top level.

4. Settings.gradle (include ':app')
Apa keuntungan yang bisa kita dapatkan dari fitur gradle? Salah satu keuntungan yang bisa kita dapatkan dari Gradle adalah kita bisa membuat sebuah multi-project. Dengan demikian, sudah bisa kita tebak, bahwa code include menunjukan suatu project yang berada di dalam suatu aplikasi,  pada bagian settings.gradle ini, kalian bisa menambahkan  suatu library project turunan , dan bisa kalian manfaatkan untuk mendukung project utama dari Aplikasi yang sedang kalian kerjakan.
