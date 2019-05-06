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
            <div class="row">
                <div class="col-md-12">
                <center>
                    <h3>KONTAK KAMI</h3>
                    <hr class="hr-custom">
                </center>
                </div>
            </div>

            <div class="row">
                <div class="col-md-6"></div>
                <div class="col-md-6">
                    <p>
                        asasdasd
                        asdasd
                        asd
                    </p>
                </div>
            </div>
        </div>

        <?php $this->load->view('frontend/_part/js'); ?>
    </body>
</html>