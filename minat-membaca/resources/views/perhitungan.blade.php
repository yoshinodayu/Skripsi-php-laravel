@extends('layouts.main')

@section('container')

<style>
    .bgg {
        background-image: linear-gradient(90deg, #cfecd0, #ffc5ca);
    }
</style>

<!--Content-->
<!--Introduction-->
<div class="bgg container-fluid m-0 p-3 row" style="background-color: #EFEEF4; height:400px;">
    <div class="col-sm-12 mt-5" style="display:flex; justify-content:center; align-items:center;">
        <div class="pb-5">
            <h1 class="text-dark">Perhitungan</h1>
        </div>
    </div>
</div>

<!--Metode-->
<div class="container-fluid m-0 p-3 row">
    <div class="col-sm-12 float-left">
        <div class="pt-4">
            <h2 class="text-dark">Apa Metode yang Digunakan ?</h2>
        </div>
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify">
                Metode yang digunakan adalah metode K-Means Clustering dan Naive Bayes. Metode
                K-Means Clustering adalah metode clustering yang paling umum dan sederhana, hal
                ini disebabkan K-Means mempunyai kemampuan mengelompokkan dan memetakan data
                dalam jumlah yang cukup besar dengan waktu komputasi yang relatif efisien dan
                cepat. Sedangkan Metode Naive Bayes adalah pengklasifikasian statistik yang dapat
                digunakan untuk memprediksi probabilitas keanggotaan suatu kelas. Pada penelitian
                ini, Metode K-Means Clustering akan digunakan untuk melakukan penentuan kelas dan
                metode Naive Bayes akan digunakan untuk melakukan klasifikasi terhadap data
                testing. Setelah hasil klasifikasi di dapatkan maka selanjutnya kita dapat
                menghitung seberapa besar Minat Anak Muda dalam Membaca Berita. Dalam penelitian
                ini terdapat 3 kelas yang digunakan yaitu Berminat, Cukup Berminat, dan Tidak
                Berminat. Untuk memperjelas bagaimana proses perhitungan yang dilakukan pada sistem 
                ini, maka di bawah ini adalah contoh perhitungannya. 
            </p>
        </div>
    </div>
</div>

<!--Contoh Perhitungan-->
<div class="container-fluid m-0 p-3 row">
    <div class="col-sm-12 float-left">
        <div>
            <h2 class="text-dark">Contoh Perhitungan</h2>
        </div>
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify">
                Sebelum kita masuk ke dalam contoh perhitungannya, tabel di bawah ini adalah keterangan 
                dataset pada kuisioner berdasarkan indikator yang digunakan. Di mana data yang akan 
                digunakan dalam akan di bagi menjadi 2, yaitu data training dan data testing. 
            </p>
        </div>
        <!--tabel keterangan dataset-->
    </div>
</div>

<div class="container-fluid m-0 p-3 row">
    <div class="col-sm-12 float-left">
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify">
                Data di bawah ini adalah contoh dataset kuisioner yang akan digunakan sebagai data training 
                pada contoh perhitungan ini. P1 sampai P18 merupakan pernyataan pada tabel di atas ini, 
                sedangkan R1 sampai R30 merupakan seluruh responden pada kuisioner pada data training ini. 
            </p>
        </div>
        <!--tabel dataset kuisioner 1-->
    </div>
</div>

<div class="container-fluid m-0 p-3 row">
    <div class="col-sm-12 float-left">
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify">
                Data di bawah ini adalah contoh dataset kuisioner yang akan digunakan sebagai data testing 
                pada contoh perhitungan ini. P1 sampai P18 merupakan pernyataan pada tabel di atas ini, 
                sedangkan R1 sampai R5 merupakan seluruh responden pada kuisioner pada data testing ini. 
            </p>
        </div>
        <!--tabel dataset kuisioner 2-->
    </div>
</div>

<div class="container-fluid m-0 p-3 row">
    <div class="col-sm-12 float-left">
        <div class="pt-3">
            <p class="text-dark" style="text-align:justify">
                Proses pertama yang dilakukan pada penelitian ini adalah melakukan penentuan 
                kelas dengan menggunakan K-Means Clustering. Kemudian setelah di dapatkan 
                kelas pada responden data training maka selanjutnya dapat dilakukan klasifikasi 
                dengan menggunakan metode Naive Bayes untuk menentukan apakah responden pada dataset 
                testing masuk ke dalam kelas mana. Setelah didapatkan hasil kelas pada keseluruhan 
                responden maka dapat dihitung seberapa besar Minat Anak Muda dalam Membaca Berita.   
            </p>
            <p class="text-dark" style="text-align:justify">
                Berikut adalah tahapan pada metode K-Means Clustering :  
                <ol>
                    <!--Step 1-->
                    <li>
                        Memasukkan data yang akan dikelompokkan <i>(clustering)</i>
                    </li>

                    <!--Step 2-->
                    <li>
                        Menentukan nilai K sebagai jumlah <i>cluster</i> yang akan dibentuk
                    </li>
                    <p>
                        Pada tahap ini, nilai K sebagai jumlah <i>cluster</i> yang akan dibentuk adalah 3. 
                        C1 adalah Berminat, C2 adalah Cukup Berminat, C3 adalah Tidak Berminat. 
                    </p>

                    <!--Step 3-->
                    <li>
                        Inisialisasi K dari data sebanyak jumlah <i>cluster</i> secara acak sebagai pusat 
                        <i>cluster (Centroid)</i>. Tabel di bawah ini merupakan pusat <i>Centroid</i> acaknya.
                        <!--tabel pusat centroid acak-->
                    </li>

                    <!--Step 4-->
                    <li>
                        Menghitung jarak antara masing-masing data dengan pusat <i>cluster (Centroid)</i>, 
                        dengan menggunakan persamaan <i>Euclidean Distance</i>
                    </li>
                    <img src="images/perhitungan/4 kmeans.PNG" class="w-10" />
                    <p>
                        Dan seterusnya sampai d(R5,C1), kemudian d(R1, C2) sampai d(R5,C2), dan d(R1,C3) sampai d(R5,C3).
                        Tabel di bawah ini merukan hasil perhitungannya. 
                    </p>
                        <!--tabel iterasi pertama-->

                    <!--Step 5-->
                    <li>
                        Kelompokan setiap data berdasarkan jarak terdekat antara data dengan <i>centroid</i>nya
                    </li>
                    <p>
                        Pada tahap ini, dilakukan perbandingan antara C1, C2, dan C3. Dari semua perhitungan 
                        manakah yang memiliki angka lebih kecl itulah jarak terdekatnya. bandingkan hal ini 
                        pada semua responden yang telah dihitung sebelumnya. Jika dilihat pada data di atas, 
                        di dapatkan kelompok data yaitu C1 (R1), C2 (R2, R3), dan C3 (R4, R5).
                    </p>

                    <!--Step 6-->
                    <li>
                        Tentukan posisi pusat <i>cluster (Centroid)</i> baru (k), jika pusat <i>cluster</i> 
                        tidak berubah, maka proses <i>cluster</i> telah selesai. Jika belum, maka ulang langkah 
                        keempat sampai pusat <i>cluster (Centroid)</i> tidak berubah lagi. 
                    </li>
                    <p>
                        Tabel di bawah ini merupakah Pusat <i>Centroid</i> baru. 
                    </p>
                        <!--tabel pusat centroid baru-->
                    <p>
                        Dari tabel di bawah ini, dapat dilihat bahwa iterasi pertama dan kedua memiliki kelompok 
                        data yang sama, maka dari itu proses dinyatakan selesai. Berdasarkan 5 responden di 
                        dapatkan hasil yaitu pada kategori C1 (Berminat) terdapat 1 responden, kategori C2 
                        (Cukup Berminat) terdapat 2 responden, dan kategori C3 (Tidak Berminat) terdapat 2 
                        responden. 
                    </p>
                        <!--tabel iterasi kedua-->
                </ol>
            </p>
            
            <!--Naive Bayes-->
            <p class="text-dark" style="text-align:justify">
                Setelah didapatkan hasil penentuan kelas dengan menggunakan metode K-Means Clustering, 
                maka tahap selanjutnya adalah melakukan klasifikasi dengan menggunakan metode Naive 
                Bayes pada data testing. Terdaoat data testing yang berisi 2 orang responden yang dapat 
                dilihat pada tabel di bawah ini. 
            </p>
             <!--tabel data testing-->
            <p class="text-dark" style="text-align:justify">
                Berdasarkan data testing di atas, perlu ditentukan apakah kedua orang tersebut masuk ke 
                dalam kategori Berminat, Cukup Berminat atau Tidak Berminat dalam membaca berita dengan 
                menggunakan metode Naive Bayes. berikut adalah tahap perhitungan menggunakan metode 
                Naive Bayes:
            </p>
            <ol>
                <!--Step 1-->
                <li>
                     Menghitung jumlah kelas pada data training
                </li>
                <p>
                    Hitung jumlah sampel atau kelas yang muncul ditambah 1, kemudian dibagi 
                    dengan jumlah seluruh sampe atau kelas yang ditambah jumlah kategori atau 
                    kelas. Hal ini dilakukan sehingga bisa menghidari kasus nilai probabilitas 0 (nol).
                </p>
                <img src="images/perhitungan/1 naive bayes.PNG" class="w-10" />

                <!--Step 2-->
                <li>
                    Menghitung jumlah kasus yang sama dengan kelas yang sama pada data testing
                </li>
                <p>
                    Hitung jumlah sampel atau kelas yang sama ditambah 1, kemudian dibagi dengan jumlah seluruh 
                    sampel atau kelas c yang muncul yang ditambah jumlah atribut yang ada. 
                </p>
                <img src="images/perhitungan/2.1 naive bayes.PNG" class="w-10" />
                <img src="images/perhitungan/2.2 naive bayes.PNG" class="w-10" />
                <img src="images/perhitungan/2.3 naive bayes.PNG" class="w-10" /> 
                <p><br/></p>
                <img src="images/perhitungan/2.4 naive bayes.PNG" class="w-10" />
                <img src="images/perhitungan/2.5 naive bayes.PNG" class="w-10" />
                <img src="images/perhitungan/2.6 naive bayes.PNG" class="w-10" />
                <p><br/></p>
                <img src="images/perhitungan/2.7 naive bayes.PNG" class="w-10" />

                <!--Step 3-->
                <li>
                    Mengalikan semua hasil sesuai dengan data testing
                </li>
                <p>
                    Pada tahap ini, diperlukan untuk mengalikan semua hasil dari tahap 2 sesuai dengan kelasnya 
                    masing-masing. 
                </p>
                <img src="images/perhitungan/3.2 naive bayes.PNG" class="w-10" />
                <p>
                    Setelah mengalikan semua hasil pada tahap 2 sesuai dengan kelasnya, selanjutnya mengalikan 
                    dengan hasil pada tahap 1. 
                </p>
                <img src="images/perhitungan/3.2 naive bayes.PNG" class="w-10" />

                <!--Step 4-->
                <li>
                    Membandingkan hasil per kelas
                </li>
                <p>
                    Setelah dilakukan perhitungan pada tahap 1 sampai 3, pada tahap ini yang perlu dilakukan 
                    adalah membandingkan hasil pada tahap 3. Maka dapat disimpulkan bahwa probabilitas 
                    Minat Membaca Berita pada responden pertama adalah Berminat. 
                </p>

                <p>
                    Dan dilakukan kembali tahap 1 sampai dengan tahap 4 untuk responden kedua pada data 
                    testing dan hasilnya adalah Tidak Berminat. 
                </p>
                <img src="images/perhitungan/3.2 responden 2 naive bayes.PNG" class="w-10" />
                <p>
                    Berdasarkan hasil perhitungan dengan metode K-Means Clustering dan Naive Bayes, maka 
                    dapat dihitung besaran Minat Membaca Berita. 
                </p>
                <img src="images/perhitungan/Persentase akhir.PNG" class="w-10" />
            </ol>
        </div>
    </div>
</div>

@endsection