<!doctype html>
<html lang="en">
    <head>
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