<section id="kontak">
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
                <p><?= $setting->alamat ?></p>
            </center>
        </div>
        <div class="col-md-4">
            <center>
                <img src="<?= base_url('assets/img/wa.png') ?>" alt="icon" width="70px">
                <p><?= $setting->no_telp ?></p>
            </center>
        </div>
        <div class="col-md-4">
            <center>
                <img src="<?= base_url('assets/img/email.png') ?>" alt="icon" width="70px">
                <p><?= $setting->email ?></p>
            </center>
        </div>
    </div>
</div>
</section>