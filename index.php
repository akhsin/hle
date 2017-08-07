<!DOCTYPE html>
<html class="" lang="en">

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Beranda</title>
    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">
    <link rel="stylesheet" type="text/css" href="assets/css/foundation.css">
    <link rel="stylesheet" type="text/css" href="assets/css/app.css">
    <meta class="foundation-mq">
</head>

<body>
    <!-- header -->
    <div class="top-bar">
        <div class="row">
            <div class="top-bar-title">
                <span data-responsive-toggle="responsive-menu" data-hide-for="medium">
      <button class="menu-icon dark" type="button" data-toggle></button>
    </span>
                <strong>SRL Training System</strong>
            </div>
            <div id="responsive-menu">
                <div class="top-bar-right">
                    <ul class="dropdown menu" data-dropdown-menu>
                        <li><a href="Index.php">Beranda</a></li>
                        <li><a href="Deskripsi.html">Deskripsi</a></li>
                        <li><a href="panduan.php">Panduan Sistem</a></li>
                        <li><a href="Contact.html">Kontak</a></li>
                        <li><a href="login/login_mhs.php">Login</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Main Header -->
    <div class="main-header">
        <div class="row">
            <h2 class="motto"> SRL Membuat Belajar Menjadi Lebih Mudah dan Efektif.</h2>
            <div class="white-text">
            <h4 class="welcome">  Selamat Datang di Pembelajaran Mata-kuliah Algoritma dan Struktur Data</h4>
            <h6>  Dalam pembelajaran daring ini terdapat banyak pilihan belajar yang disesuaikan dengan kemampuan dan gaya belajar mahasiswa <br> (<i>Self-Regulation Learning</i>)</h6>
            </div>
            <div class="row">
                <div class="hide-for-small large-4 columns"> &nbsp;</div>
                <div class="small-12 large-4 columns">
                    <a class="button expanded" href="#">Mulai</a>
                </div>
                <div class="hide-for-small large-4 columns"> &nbsp;</div>
            </div>
            <div class="row">
                <div class="hide-for-small large-4 columns"> &nbsp;</div>
                <div class="small-12 large-4 columns">
                    <a class="button success expanded" href="panduan.php">Apa itu Self-Regulation Learning?</a>
                </div>
                <div class="hide-for-small large-4 columns"> &nbsp;</div>
            </div>
        </div>
    </div>
    <!-- Second-header -->
    <div class="second-header">
        <div class="row">
            <h2> Self-Regulated Learning </h2>
            <p> Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet <a href="panduan.php"> baca selengkapnya </a> </p>
        </div>
    </div>
    <!-- Description -->
    <div class="description">
        <div class="row">
            <h3>Pembelajaran Algoritma dan Struktur Data</h3>
            <div class="row">
                <hr/>
                <h4> Deskripsi </h4>
                <hr/>
                <div class="small-12 large-3 columns">
                    <i class="fa fa-sticky-note fa-5x" aria-hidden="true"></i>
                </div>
                <div class="small-12 large-9 columns">
                    <p align="left"> Mata kuliah ini mempelajari tentang paradigma pemrograman, pengertian algoritma, syarat-syarat algoritma, flowchart dan pseudocode, kompleksitas waktu eksekusi, iterasi dan rekursi. Sebagai konsep yang mendasari struktur data, dipelajari representasi data, tipe data, deklarasi variabel, deklarasi tipe data dengan ADT, alokasi memori dan struktur, deklarasi struktur, union, struktur data satu dimensi, dua dimensi dan tiga dimensi. Stack & Queue serta implementasinya. </p>
                </div>
                <hr/>
                <h4> Tujuan Pembelajaran </h4>
                <hr/>
                <div class="small-12 large-3 columns">
                    <i class="fa fa-check fa-5x" aria-hidden="true"> </i>
                </div>
                <div class="small-12 large-9 columns" align="left">
                    <ul>
                        <li>Mahasiswa dapat memahami arti dan manfaat algoritma dan struktur data, syarat-syarat algoritma, kopleksitas waktu eksekusi program, teknik dan gaya pemrograman, serta langkah pemrograman yang efektif dan efisien.</li>
                        <li> Mahasiswa dapat memahami dan mengimplementasikan dalam pemrograman untuk membagun berbagai macam model struktur data seperti : tumpukan, queue, list, array, pohon, dan graph. </li>
                        <li> Mahasiswa dapat memahami dan mengimplementasikan cara updating data dari berbagai model struktur data. </li>
                        <li> Mahasiswa dapat memahami berbagai macam algoritma sorting data dan unjukkerjanya masing-masing algoritma itu. </li>
                        <li> Mahasiswa dapat memahami dan mengimplementasikan dalam program berbagai algoritma searchig data dan unjukkerjanya masing-masing.</li>
                    </ul>
                </div>
                <hr/>
            </div>
        </div>
    </div>
    <!-- footer -->
    <div class="footer">
        <div class="row">
            <div class="small-12 large-4 columns">
                <h5> About Us </h5>
                <hr/>
                <p> Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
            </div>
            <div class="small-12 large-4 columns">
                <h5>  Contact </h5>
                <hr/>
                <p> Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet Lorem ipsum dolor sit amet </p>
            </div>
            <div class="small-12 large-4 columns">
                <h5> Contact Admin </h5>
                <hr/>
                <from class="drop-us">
                    <label> NIU
                        <input type="text" name="name"> </input>
                    </label>
                    <label> Message
                        <textarea name="drop-text" rows="1" cols="25"> </textarea>
                    </label>
                    <input type="submit" value="kirim" class="tiny button" />
                </from>
            </div>
        </div>
    </div>
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/foundation.js"></script>
    <script>
    $(document).foundation();
    </script>
</body>

</html>
