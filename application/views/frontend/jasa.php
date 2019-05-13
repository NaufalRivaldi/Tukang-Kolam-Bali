<!doctype html>
<html lang="en">
    <head>
        <meta name="keywords" content="jasa, jasa kolam, tukang kolam bali, tukang kolam, bali, kolam">
        <meta property="og:title" content="<?= $title ?> - Tukang Kolam Bali">
        <meta property="og:image" content="<?= base_url('assets/img/logo-putih.jpg') ?>">
        <meta property="image" content="<?= base_url('assets/img/logo-putih.jpg') ?>">
        <meta property="description" content="<?= $description ?>">
        <meta name="description" content="<?= $description ?>">
        <meta property="og:description" content="<?= $description ?>">

        <?php $this->load->view('frontend/_part/head'); ?>
    </head>
    
    <body>
        <!-- navbar -->
        <?php $this->load->view('frontend/_part/navbar'); ?>
        <!-- navbar -->

        <!-- Jasa -->
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                <center>
                    <h3>DAFTAR JASA KAMI</h3>
                    <hr class="hr-custom">
                    <p class="text-center text-muted text-padding">Berikut pelayanan apa yang kami miliki untuk anda.</p>
                </center>
                </div>
            </div>
            <div class="row justify-content-md-center">
                <?php foreach($jasa as $row): ?> 
                    <div class="col-md-4">
                        <br>
                        <div class="card">
                            <a href="<?= site_url('home/jasa/'.$row->slug) ?>">
                                <div class="card-img" style="background:url('<?= base_url('assets/img/upload/'.$row->gambar) ?>'); background-position: center; background-repeat: no-repeat; background-size: cover;"></div>
                            </a>
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?= site_url('home/jasa/'.$row->slug) ?>"><?= $row->nama_jasa ?></a>
                                </h5>
                                <span class="badge badge-primary">Info Harga Hubungi : <?= $setting->no_telp ?></span>
                                <p class="card-text">
                                    <?= substr($row->keterangan,0,100) ?> ....
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <!-- contak -->
        <?php $this->load->view('frontend/_part/kontak'); ?>

        <!-- footer -->
        <?php $this->load->view('frontend/_part/footer'); ?>
        
        <?php $this->load->view('frontend/_part/modal'); ?>

        <?php $this->load->view('frontend/_part/js'); ?>
    </body>
</html>