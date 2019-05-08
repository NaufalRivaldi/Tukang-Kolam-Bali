<!doctype html>
<html lang="en">
    <head>
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
                                <span class="badge badge-primary">Rp. <?= number_format($row->harga) ?></span>
                                <p class="card-text">
                                    <?= substr($row->keterangan,0,200) ?> ....
                                </p>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>

        <!-- contak -->
        <?php $this->load->view('frontend/_part/kontak'); ?>

        <!-- testimoni -->
        <div class="container" style="margin-top:10%">
            <div class="row">
                <div class="col-md-12">
                <center>
                    <h3>TESTIMONI</h3>
                    <hr class="hr-custom">
                    <p>Testimoni anda membantu kami untuk menjadi lebih baik. <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#testimoni">Beri Testimoni <i class="fas fa-pencil-alt"></i></a></p>
                    <p class="text-center text-muted text-padding">Penilaian orang - orang terhadap pelayanan kami.</p>
                </center>
                </div>
            </div>
            <div class="row justify-content-md-center" style="margin-bottom:3%">
                <div class="col-md-3 col-sm-6">
                    <div class="testi"><br>
                        <img src="<?= base_url('assets/img/user-testi.jpg') ?>" alt="user" width="50%" class="testi-img"><br><br>
                        <p><b>Nama User</b></p>
                        <p>
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum nulla unde culpa, consectetur ut velit repudiandae iste omnis ipsam nam. Nemo unde repudiandae in sed aperiam beatae ipsa odio commodi!"
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="testi"><br>
                        <img src="<?= base_url('assets/img/user-testi.jpg') ?>" alt="user" width="50%" class="testi-img"><br><br>
                        <p><b>Nama User</b></p>
                        <p>
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum nulla unde culpa, consectetur ut velit repudiandae iste omnis ipsam nam. Nemo unde repudiandae in sed aperiam beatae ipsa odio commodi!"
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="testi"><br>
                        <img src="<?= base_url('assets/img/user-testi.jpg') ?>" alt="user" width="50%" class="testi-img"><br><br>
                        <p><b>Nama User</b></p>
                        <p>
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum nulla unde culpa, consectetur ut velit repudiandae iste omnis ipsam nam. Nemo unde repudiandae in sed aperiam beatae ipsa odio commodi!"
                        </p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6">
                    <div class="testi"><br>
                        <img src="<?= base_url('assets/img/user-testi.jpg') ?>" alt="user" width="50%" class="testi-img"><br><br>
                        <p><b>Nama User</b></p>
                        <p>
                            "Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsum nulla unde culpa, consectetur ut velit repudiandae iste omnis ipsam nam. Nemo unde repudiandae in sed aperiam beatae ipsa odio commodi!"
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- footer -->
        <?php $this->load->view('frontend/_part/footer'); ?>
        
        <?php $this->load->view('frontend/_part/modal'); ?>

        <?php $this->load->view('frontend/_part/js'); ?>
    </body>
</html>