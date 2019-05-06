<!doctype html>
<html lang="en">
    <head>
        <?php $this->load->view('frontend/_part/head'); ?>
    </head>
    
    <body>
        <!-- navbar -->
        <?php $this->load->view('frontend/_part/navbar'); ?>
        <!-- navbar -->

        <!-- jumbotron -->
        <div class="jumbotron">
            <div class="container">
                <center>
                <h1 class="display-2"><?= strtoupper(APP_NAME) ?></h1>
                <p class="lead">This is a simple hero unit, a simple jumbotron-style component for calling extra attention to featured content or information.</p>
                <hr class="my-4">
                <p>It uses utility classes for typography and spacing to space content out within the larger container.</p>
                <a class="btn btn-primary btn-lg" href="#" role="button">Kenali Kami</a>
                </center>
            </div>
        </div>

        <!-- Jasa -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <center>
                    <h3>JASA KAMI</h3>
                    <hr class="hr-custom">
                    <p class="text-center text-muted text-padding">Berikut beberapa jasa yang kami miliki untuk anda.</p>
                </center>
                </div>
            </div>
            <div class="row">
                <?php foreach($jasa as $row): ?> 
                    <div class="col-md-4">
                        <br>
                        <div class="card">
                            <a href="">
                                <div class="card-img" style="background:url('<?= base_url('assets/img/upload/'.$row->gambar) ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href=""><?= $row->nama_jasa ?></a>
                                </h5>
                                <span class="badge badge-primary">Rp. <?= number_format($row->harga) ?></span>
                                <p class="card-text">
                                    <?= $row->keterangan ?>
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <!-- contak -->
        <div class="container" style="margin-top:10%">
            <div class="row" style="margin-bottom: 3%">
                <div class="col-md-12">
                <center>
                    <h3>KONTAK KAMI</h3>
                    <hr class="hr-custom">
                </center>
                </div>
            </div>

            <div class="row">
                <div class="col-md-4">
                    <center>
                        <img src="<?= base_url('assets/img/pin.png') ?>" alt="icon" width="70px">
                        <p>Jln. asd asd asd</p>
                    </center>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="<?= base_url('assets/img/wa.png') ?>" alt="icon" width="70px">
                        <p>+62 865 2154 2458</p>
                    </center>
                </div>
                <div class="col-md-4">
                    <center>
                        <img src="<?= base_url('assets/img/email.png') ?>" alt="icon" width="70px">
                        <p>admin@tukangkolambali.com</p>
                    </center>
                </div>
            </div>
        </div>

        <!-- footer -->
        <div class="container-fluid">
            <div class="row">
                <div class="footer">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <b>Kontak</b><br><br>
                                <i class="fas fa-map-marker-alt"></i> Jln. asd asd asd<br>
                                <i class="fas fa-phone"></i> +62 865 2154 2458<br>
                                <i class="fas fa-envelope"></i> admin@tukangkolambali.com<br>
                            </div>
                            <div class="col-md-4">
                                <b>Link</b><br><br>
                                Jasa Kami
                            </div>
                            <div class="col-md-4">
                                <b>Sosial Media</b><br><br>
                                Facebook<br>
                                Instagram
                            </div>
                        </div>
                        <div class="row" style="padding-top:4%">
                            <div class="col-md-12">
                                Copyright &copy; 2019 | Tukang Kolam Bali<br>
                                Denpasar - Bali
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <?php $this->load->view('frontend/_part/js'); ?>
    </body>
</html>