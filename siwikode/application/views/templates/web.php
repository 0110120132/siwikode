<header>
    <!--Judul 1-->
    <div class="container">
        <h2 class="text-center mt-3">Sitem Informasi Wisata Kota Depok - SIWIKODE</h2>
    </div>
    <!--Judul1_selesai-->
    <div class="container">
        <!--Navbar Code-->
        <nav class="navigation navbar navbar-expand-lg navbar-light bg-light mt-3">
            <a class="navbar-brand" href="index.html"><b>Siwikode</b></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link text-primary" href="login.html">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Wisata Rekreasi</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Wisata Kuliner</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="login.html">Registrasi</a>
                    </li>
                </ul>
                <form action="<?= base_url('auth') ?>" method="post">
                    <button class="btn btn-outline-primary my-2 my-sm-0" type="submit">Login</button>
                </form>
            </div>
        </nav>
    </div>
</header>
<!--Judul-->
<div class="container">
    <h3 class="title mt-3">Wisata Rekreasi & Kuliner Kota Depok</h3>
</div>
<!--Judul_selesai-->

<!--Content-->
<div class="container">
    <div class="jumbotron jumbotron-fluid">
        <div class="container">
            <h1 class="display-4 text-center">Selamat Datang di Siwikode</h1>
            <p class="lead text-center">Berbagai macam tempat wisata yang berada di kota Depok</p>
        </div>
    </div>
    <div class="row mt-3">
        <!--Card 1-->
        <div class="col-md-4">
            <div class="card border-dark">
                <div class="row">
                    <h3 class="container text-info ml-2 mt-2">Masjid Kubah Emas</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>template/picture/masjid.jpg" alt="masjid kubah mas" style="width: 121px; height: 125px;" class=" rounded mt-2 ml-2">
                    </div>
                    <div class="col-md-8">
                        <p class="card-text ml-3 mr-3">Masjid Kubah Emas merupakan salah satu masjid yang sangat terkenal sampai saat ini, selain menjadi tempat ibadah kompleks masjid ini juga menjadi kawasan wisata keluarga dan menarik perhatian banyak orang karena kubahnya yang dibuat dari emas.</p>
                        <a href="<?= base_url('web/detailwisata') ?>" class="btn btn-primary ml-3 mb-3 ">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Card 2-->
        <div class="col-md-4">
            <div class="card border-dark">
                <div class="row">
                    <h3 class="container text-info ml-2 mt-2">Taman Wiladatika</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>template/picture/wiladatika.jpg" alt="" style="width: 121px; height: 125px;" class=" rounded mt-2 ml-2">
                    </div>
                    <div class="col-md-8">
                        <p class="card-text ml-3 mr-3">Taman Wiladatika merupakan tempat wisata Pusat Pendidikan, Pelatihan Pramuka Nasional, aula yang biasa digunakan untuk acara resepsi pernikahan, dan halaman hijau yang biasa di gunakan para pengunjung untuk piknik bersama keluarga.</p>
                        <a href="login.html" class="btn btn-primary ml-3 mb-3 ">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Card 3-->
        <div class="col-md-4">
            <div class="card border-dark">
                <div class="row">
                    <h3 class="container text-info ml-2 mt-2">Depok Fantasy Waterpark</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <img src="<?= base_url() ?>template/picture/fantasi.jpg" alt="" style="width: 121px; height: 125px;" class=" rounded mt-2 ml-2">
                    </div>
                    <div class="col-md-8">
                        <p class="card-text ml-3 mr-3">Depok Fantasy Waterpark atau yang biasa disebut Aladin Waterpark merupakan rekreasi pertama dan terbesar yang berada di Grand City Depok. Waterpark dengan tema unik Negeri 1001 malam ini menyediakan berbagai permainan air yang seru dan menarik.</p>
                        <a href="login.html" class="btn btn-primary ml-3 mb-3 ">Detail</a>
                    </div>
                </div>
            </div>
        </div>
        <!--card_selesai-->
    </div>
</div>