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
                    <a href="<?= site_url('backend/user/add') ?>" class="btn btn-primary">+ Tambah Data</a>
                </div>
                <div class="card-body">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php 
                            $no = 1;
                        ?>
                        <?php foreach($user as $row): ?>
                        <tbody>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->username ?></td>
                                <td>*****</td>
                                <td>
                                    <a href="<?= site_url('backend/user/reset/'.$row->id_user) ?>" class="btn btn-warning">Reset Password</a>
                                    <a href="<?= site_url('backend/user/edit/'.$row->id_user) ?>" class="btn btn-success">Edit</a> 
                                    <a href="<?= site_url('backend/user/delete/'.$row->id_user) ?>" class="btn btn-danger" onClick="return confirm('Hapus data?')">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach ?>
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