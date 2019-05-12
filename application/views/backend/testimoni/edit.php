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
                    <h3>Edit Data</h3>
                </div>
                <div class="card-body">
                <form action="<?= site_url('backend/testimoni/update') ?>" method="POST">
                    <input type="hidden" name="id_testimoni" class="form-control" value="<?= $testimoni->id_testimoni ?>">
                    <input type="hidden" name="stat" class="form-control" value="<?= $testimoni->stat ?>">

                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Nama</label>
                        <div class="col-sm-10">
                            <input type="text" name="nama" class="form-control" value="<?= $testimoni->nama ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Email</label>
                        <div class="col-sm-10">
                            <input type="email" name="email" class="form-control" value="<?= $testimoni->email ?>">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label">Testimoni</label>
                        <div class="col-sm-10">
                            <textarea name="testimoni" id="" rows="5" class="form-control"><?= $testimoni->testimoni ?></textarea>
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