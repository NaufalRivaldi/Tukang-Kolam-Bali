<div class="mini-kontak">
    <div class="container">
        <div class="row">
            <div class="col-sm-6">Temukan kami : <?= $setting->alamat ?></div>
            <div class="col-sm-6">
                <p class="text-sm-right">Telp : <?= $setting->no_telp ?></p>
            </div>
        </div>
    </div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light ">
    <div class="container">
        <a class="navbar-brand" href="#">
            <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo" width="30">
        </a>
        <a class="navbar-brand" href="#">
            <?= strtoupper(APP_NAME) ?>    
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav ml-auto">
                <a class="nav-item nav-link active" href="<?= site_url('home') ?>">Beranda <span class="sr-only">(current)</span></a>
                <a class="nav-item nav-link" href="<?= site_url('home/daftar_jasa') ?>">Jasa Kami</a>
                <a class="nav-item nav-link" href="#kontak">Kontak</a>
            </div>
        </div>
    </div>
</nav>