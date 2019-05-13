<!doctype html>
<html lang="en">
    <head>
        <meta name="keywords" content="<?= $jasa->keyword ?>, jasa, jasa kolam, tukang kolam bali, tukang kolam, bali, kolam">
        <meta property="og:title" content="<?= $jasa->nama_jasa ?> - Tukang Kolam Bali">
        <meta property="og:image" content="<?= base_url('assets/img/upload/'.$jasa->gambar) ?>">
        <meta property="image" content="<?= base_url('assets/img/upload/'.$jasa->gambar) ?>">
        <meta property="description" content="<?= $jasa->keterangan ?>">
        <meta name="description" content="<?= $jasa->keterangan ?>">
        <meta property="og:description" content="<?= $jasa->keterangan ?>">

        <?php $this->load->view('frontend/_part/head'); ?>
    </head>
    
    <body>
        <!-- navbar -->
        <?php $this->load->view('frontend/_part/navbar'); ?>
        <!-- navbar -->

        <!-- konten -->
        <div class="container">
            <div class="row" style="margin-top:3%">
                <div class="col-md-5">
                    <img src="<?= base_url('assets/img/upload/'.$jasa->gambar) ?>" alt="img-jasa" width="100%">
                </div>
                <div class="col-md-7">
                    <p>
                        <h3><?= $jasa->nama_jasa ?></h3>
                        <hr>
                        <span class="badge badge-primary">Info Harga Hubungi : <?= $setting->no_telp ?></span><br>
                        <?= $jasa->keterangan ?>
                    </p>
                </div>
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