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
                    <a href="<?= site_url('backend/jasa/add') ?>" class="btn btn-primary">+ Tambah Data</a>
                </div>
                <div class="card-body">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Jasa</th>
                                <th>Gambar</th>
                                <th>Harga</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php 
                            $no = 1;
                        ?>
                        <?php foreach($jasa as $row): ?>
                        <tbody>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->nama_jasa ?></td>
                                <td><img src="<?= base_url('assets/img/upload/'.$row->gambar) ?>" alt="gambar_jasa" width="100px"></td>
                                <td><?= $row->harga ?></td>
                                <td><?= $row->keterangan ?></td>
                                <td>
                                    <a href="<?= site_url('backend/jasa/edit/'.$row->id_jasa) ?>" class="btn btn-success">Edit</a> 
                                    <a href="<?= site_url('backend/jasa/delete/'.$row->id_jasa) ?>" class="btn btn-danger" onClick="return confirm('Hapus data?')">Hapus</a>
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