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
                    <a href="<?= (empty($setting)) ? site_url('backend/setting/add') : '#' ?>" class="btn btn-primary">Set Data</a>
                    <a href="<?= (!empty($setting)) ? site_url('backend/setting/edit/'.$setting->id_setting ) : '' ?>" class="btn btn-success">Edit Data</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <tr>
                            <td width="20%">No Telp</td>
                            <td width="5%">:</td>
                            <td><?= $setting->no_telp ?></td>
                        </tr>
                        <tr>
                            <td width="20%">Email</td>
                            <td width="5%">:</td>
                            <td><?= $setting->email ?></td>
                        </tr>
                        <tr>
                            <td width="20%">Alamat</td>
                            <td width="5%">:</td>
                            <td><?= $setting->alamat     ?></td>
                        </tr>
                    </table>
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