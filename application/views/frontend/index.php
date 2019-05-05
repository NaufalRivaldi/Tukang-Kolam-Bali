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
                    <hr>
                    <p class="text-center text-muted">Berikut beberapa jasa yang kami miliki untuk anda.</p>
                </center>
                </div>
            </div>
            <div class="row">
                
            </div>
        </div>

        <?php $this->load->view('frontend/_part/js'); ?>
    </body>
</html>