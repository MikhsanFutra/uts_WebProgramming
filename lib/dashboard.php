<?php
require '../lib/pesan.php';
require '../koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../style/dash_style.css">
</head>

<body>
    <div class="awal" id="home">
        <header>
            <nav class="navbar navbar-expand-lg bg-body-tertiary fixed-top">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Travel Agency</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav me-auto">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="#home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#destinasi">Destinasi</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#about">About</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#contact">Contact</a>
                            </li>
                        </ul>

                        <h1 class="slmt text-light">Welcome, <?php echo htmlspecialchars($ngaran); ?>!</h1>

                        <li class="nav-item d-flex justify-content-center">
                            <a href="../loginregis/login.php" class="icon active mb-2">
                                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M10 12.5a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-9a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v2a.5.5 0 0 0 1 0v-2A1.5 1.5 0 0 0 9.5 2h-8A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-2a.5.5 0 0 0-1 0z" />
                                    <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 0 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z" />
                                </svg>
                            </a>
                        </li>
                    </div>
                </div>
            </nav>
        </header>

        <!--informasi-->
        <section id="home" class="container">
            <h1 class="text-center mb-4">Selamat Datang di Perusahaan Kami</h1>
            <img src="../image/logo.jpg" class="profile-img">
            <p>
                Travel Agency adalah platform inovatif yang dirancang untuk membantu Anda menemukan kota-kota favorit di luar negeri.
            </p>
        </section>
    </div>
    <div class="divider"></div>

    <!--desatinasi-->
    <section id="destinasi" class="container-fluid bg-light py-5">
        <div class="container">
            <h2 class="text-center mb-4">Destinasi Populer</h2>
            <div class="row g-4">
                <!-- Card 1 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="../image/newyork.jpg" class="card-img-top" alt="Destinasi 1">
                        <div class="card-body">
                            <h5 class="card-title"> Newyork </h5>
                            <p class="card-text"></p>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDestinasi1">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Destinasi 1 -->
                <div class="modal fade" id="modalDestinasi1" tabindex="-1" aria-labelledby="modalDestinasi1Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalDestinasi1Label">Detail Newyork</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="../image/newyork.jpg" class="img-fluid mb-3" alt="Destinasi 1">
                                <p>
                                    New York City (NYC), sering disebut "The Big Apple," adalah kota terbesar di Amerika Serikat dan salah satu pusat keuangan, budaya, dan hiburan dunia.
                                </p>
                                <p>
                                    <strong>Lokasi:</strong> Terletak di negara bagian New York, di pantai timur, Amerika Serikat.<br>
                                    <strong>Harga:</strong> 8.600.000<br>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="../image/rome.jpg" class="card-img-top" alt="Destinasi 2">
                        <div class="card-body">
                            <h5 class="card-title">Rome</h5>
                            <p class="card-text"></p>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDestinasi2">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Destinasi 2 -->
                <div class="modal fade" id="modalDestinasi2" tabindex="-1" aria-labelledby="modalDestinasi2Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalDestinasi2Label">Detail Rome</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="../image/rome.jpg" class="img-fluid mb-3" alt="Destinasi 2">
                                <p>
                                    Roma (Rome), ibu kota Italia, dikenal sebagai "Kota Abadi" karena sejarahnya yang panjang dan pengaruhnya yang mendalam terhadap dunia Barat. Kota ini adalah pusat budaya, agama, dan seni yang penting, menawarkan pemandangan arsitektur kuno, tradisi Italia, dan suasana modern yang semarak.
                                </p>
                                <p>
                                    <strong>Lokasi:</strong> Roma terletak di wilayah Lazio, Italia<br>
                                    <strong>Harga:</strong> 10.330.000<br>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="../image/paris.jpg" class="card-img-top" alt="Destinasi 3">
                        <div class="card-body">
                            <h5 class="card-title">Paris</h5>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDestinasi3">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Destinasi 3 -->
                <div class="modal fade" id="modalDestinasi3" tabindex="-1" aria-labelledby="modalDestinasi3Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalDestinasi3Label">Detail paris</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="../image/paris.jpg" class="img-fluid mb-3" alt="Destinasi 3">
                                <p>
                                    Paris, ibu kota Prancis, dikenal sebagai "Kota Cahaya" (La Ville Lumière) dan pusat seni, mode, gastronomi, serta budaya. Paris adalah salah satu kota paling ikonik dan romantis di dunia, menarik jutaan wisatawan setiap tahun.
                                </p>
                                <p>
                                    <strong>Lokasi:</strong> Terletak di wilayah Île-de-France, di tepi Sungai Seine.<br>
                                    <strong>Harga:</strong> 8.340.000<br>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="../image/tokyo.jpg" class="card-img-top" alt="Destinasi 4">
                        <div class="card-body">
                            <h5 class="card-title">Tokyo</h5>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDestinasi4">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Destinasi 4 -->
                <div class="modal fade" id="modalDestinasi4" tabindex="-1" aria-labelledby="modalDestinasi4Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalDestinasi4Label">Detail Tokyo</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="../image/tokyo.jpg" class="img-fluid mb-3" alt="Destinasi 4">
                                <p>
                                    Tokyo, ibu kota Jepang, adalah kota metropolitan terbesar di dunia, terkenal dengan perpaduan unik antara tradisi Jepang kuno dan modernitas yang futuristik.
                                </p>
                                <p>
                                    <strong>Lokasi:</strong> Tokyo terletak di wilayah Kanto di pulau Honshu, Jepang.<br>
                                    <strong>Harga:</strong> 5.135.000<br>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="../image/marbella.jpg" class="card-img-top" alt="Destinasi 5">
                        <div class="card-body">
                            <h5 class="card-title">Marbella</h5>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDestinasi5">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Destinasi 5 -->
                <div class="modal fade" id="modalDestinasi5" tabindex="-1" aria-labelledby="modalDestinasi5Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalDestinasi5Label">Detail Marbella</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="../image/marbella.jpg" class="img-fluid mb-3" alt="Destinasi 5">
                                <p>
                                    Marbella, sebuah kota pesisir di Costa del Sol, Spanyol, dikenal sebagai destinasi mewah yang memadukan pesona Mediterania, gaya hidup eksklusif, dan sejarah yang kaya. Kota ini populer di kalangan wisatawan internasional karena pantainya, marina mewah, serta budaya lokalnya.
                                </p>
                                <p>
                                    <strong>Lokasi:</strong>Marbella terletak di wilayah otonom Andalusia, di pantai selatan Spanyol, <br>
                                    <strong>Harga:</strong> 9.425.000 <br>
                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- Card 6 -->
                <div class="col-md-4">
                    <div class="card">
                        <img src="../image/amsterdam.jpg" class="card-img-top" alt="Destinasi 6">
                        <div class="card-body">
                            <h5 class="card-title">Amsterdam</h5>

                            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalDestinasi6">
                                Detail
                            </button>
                        </div>
                    </div>
                </div>

                <!-- Modal for Destinasi 6 -->
                <div class="modal fade" id="modalDestinasi6" tabindex="-1" aria-labelledby="modalDestinasi6Label" aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="modalDestinasi6Label">Detail Amsterdam</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                            </div>
                            <div class="modal-body">
                                <img src="../image/amsterdam.jpg" class="img-fluid mb-3" alt="Destinasi 6">
                                <p>
                                    Amsterdam, ibu kota Belanda, dikenal sebagai kota kanal, sepeda, dan seni. Kota ini menggabungkan sejarah kaya dengan suasana modern yang santai, menjadikannya destinasi favorit bagi wisatawan dari seluruh dunia.
                                </p>
                                <p>
                                    <strong>Lokasi:</strong> Terletak di provinsi Noord-Holland, Belanda <br>
                                    <strong>Harga:</strong> 6.385.000 <br>

                                </p>
                            </div>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- akhir desatinasi-->

    <div class="divider"></div>

    <!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>About</h2>
                </div>
            </div>
            <div class="info">
                <div class="col-md-4">
                    <h4>
                        Melalui Travel Agency, Anda dapat:
                    </h4>
                </div>
                <div class="col-md-5">
                    <h3>
                        - Mencari destinasi menarik di seluruh dunia.
                    </h3>
                </div>
                <div class="col-md-8">
                    <h3>
                        - Menyimpan kota favorit Anda untuk rencana perjalanan masa depan.
                    </h3>
                </div>
                <div class="col-md-15">
                    <h3>
                        - Menjelajahi detail informasi mengenai tempat wisata, budaya, dan aktivitas di kota yang Anda pilih.
                    </h3>
                </div>

                <div class="col-md-4">
                    <h4>
                        Visi Kami
                    </h4>
                </div>
                <div class="col-md-15">
                    <h3>
                        Menjadi platform terdepan dalam membantu para pelancong mewujudkan impian mereka menjelajahi dunia dengan mudah dan terorganisir.
                    </h3>
                </div>

                <div class="col-md-4">
                    <h4>
                        Misi Kami
                    </h4>
                </div>
                <div class="col-md-15">
                    <h3>
                        - Menyediakan informasi lengkap dan akurat tentang destinasi favorit.
                    </h3>
                </div>
                <div class="col-md-15">
                    <h3>
                        - Memberikan pengalaman pengguna yang intuitif dan menyenangkan.
                    </h3>
                </div>
                <div class="col-md-15">
                    <h3>
                        - Mendukung perjalanan Anda dengan fitur yang memudahkan perencanaan wisata.
                    </h3>
                </div>
            </div>
    </section>
    <!-- About selesai -->

    <!-- kontak -->
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="kontak col-md-7">
                    <form method="POST">
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" value="<?php echo htmlspecialchars($ngaran); ?>" readonly />
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" value="<?php echo htmlspecialchars($email); ?>" readonly />
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" name="pesan" rows="3" required></textarea>
                        </div>
                        <button type="submit" class="btn">Kirim</button>
                        <?php if ($message): ?>
                        <?php endif; ?>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- kontak selesai -->
    <footer class="text-light text-center py-3 mt-5">
        <p>&copy;Copyright by <a class="cpr fw-bold" href="https://github.com/MikhsanFutra">22552011086_Moch Ikhsan Futra_TIF 22 CID</a></p>
    </footer>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</html>