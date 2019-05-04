<!DOCTYPE html>
<html>

<head>
    <?php $this->load->view('backend/_part/head.php') ?>
    <link rel="stylesheet" href="<?= base_url('assets/css/main.css') ?>">
</head>

<body>
    <div class="container">
        <div class="login">
            <div class="kotak">
                <center>
                    <img src="<?= base_url('assets/img/logo.png') ?>" alt="logo" width="200px">
                </center><br>
                <h3>Login Tukang Kolam Bali</h3>
                <hr>

                <!-- alert -->
                <?php if($this->session->flashdata('login')): ?>
                    <div class="alert alert-warning alert-dismissible fade show" role="alert">
                        <?= $this->session->flashdata('login') ?>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                <?php endif ?>

                <form action="<?= site_url('backend/home/login') ?>" method="POST">
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <div class="form-group">
                        <input type="password" name="pass" class="form-control" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <input type="submit" value="Login" class="btn btn-primary btn-block">
                    </div>
                </form>
                <center>
                    <p style="font-size:0.8em;">
                        Copyright &copy; 2019 imazin.id, All Rights Reserved.
                    </p>
                </center>
            </div>
        </div>
    </div>

    <!-- modal -->
    <?php $this->load->view('backend/_part/modal.php') ?>

    <!-- jQuery CDN - Slim version (=without AJAX) -->
    <?php $this->load->view('backend/_part/javascript.php') ?>
</body>

</html>