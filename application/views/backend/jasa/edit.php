<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('backend/_part/head.php') ?>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar Holder -->
        <?php $this->load->view('backend/_part/sidebar.php') ?>

        <!-- Page Content Holder -->
        <div id="content">
            <!-- navbar -->
            <?php $this->load->view('backend/_part/navbar.php') ?>
            
            <div class="card">
                <div class="card-header">
                    <h3>Update Data Jasa</h3>
                </div>
                <div class="card-body">
                <form action="<?= site_url('backend/jasa/update') ?>" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="id_jasa" value="<?= $jasa->id_jasa ?>">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama Jasa</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama_jasa" class="form-control" value="<?= $jasa->nama_jasa ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keyword</label>
                        <div class="col-sm-10">
                            <input type="text" name="keyword" class="form-control col-6" value="<?= $jasa->keyword ?>">
                            <small class="form-text text-muted">Pisahkan setiap kata dengan koma (,)</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Gambar</label>
                        <div class="col-sm-10">
                            <input type="file" name="gambar" class="form-control">
                            <input type="hidden" name="gambar_lama" value="<?= $jasa->gambar ?>">
                            <small class="form-text text-muted">Tidak perlu diisi jika tidak ada perubahan gambar.</small>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Harga</label>
                        <div class="col-sm-10">
                            <input type="number" name="harga" class="form-control" value="<?= $jasa->harga ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Keterangan</label>
                        <div class="col-sm-10">
                            <textarea name="keterangan" cols="5" rows="5" class="form-control"><?= $jasa->keterangan ?></textarea>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">&nbsp;</label>
                        <div class="col-sm-10">
                            <input type="submit" name="btn" class="btn btn-primary" value="Simpan">
                        </div>
                    </div>
                </form>
                </div>
            </div>
        </div>
    </div>

    <!-- modal -->
    <?php $this->load->view('backend/_part/modal.php') ?>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <?php $this->load->view('backend/_part/javascript.php') ?>
</body>

</html>