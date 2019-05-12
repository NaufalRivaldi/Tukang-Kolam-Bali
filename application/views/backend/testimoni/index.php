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
                    <!--  -->
                </div>
                <div class="card-body">
                    <table id="table_id" class="display">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Email</th>
                                <th>Testimoni</th>
                                <th>Stat</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <?php 
                            $no = 1;
                        ?>
                        <?php if(!empty($testimoni)): ?>
                        <?php foreach($testimoni as $row): ?>
                        <tbody>
                            <tr>
                                <td><?= $no++ ?></td>
                                <td><?= $row->nama ?></td>
                                <td><?= $row->email ?></td>
                                <td width="30%"><?= substr($row->testimoni,0,200) ?> ...</td>
                                <td><?= $row->stat ?></td>
                                <td>
                                    <?php if($row->stat == '2'): ?>
                                    <a href="<?= site_url('backend/testimoni/acc/'.$row->id_testimoni) ?>" class="btn btn-success">Post</a>
                                    <?php endif ?>
                                    <a href="<?= site_url('backend/testimoni/edit/'.$row->id_testimoni) ?>" class="btn btn-success">Edit</a> 
                                    <a href="<?= site_url('backend/testimoni/delete/'.$row->id_testimoni) ?>" class="btn btn-danger" onClick="return confirm('Hapus data?')">Hapus</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php endforeach ?>
                        <?php endif ?>
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