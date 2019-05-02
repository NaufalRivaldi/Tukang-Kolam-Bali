<nav id="sidebar">
    <div class="sidebar-header">
        <img src="<?= base_url('assets/img/icon.png') ?>" alt="" width="30"><span class="title"><?= APP_NAME ?></span>
    </div>

    <ul class="list-unstyled components">
        <li>
            <a href="<?= site_url('home/dashboard') ?>"><i class="fas fa-tachometer-alt"></i> Dashboard</a>
        </li>
        <li>
            <a href="#admin" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-user"></i> Menu Admin</a>
            <ul class="collapse list-unstyled" id="admin">
                <li>
                    <a href="<?= site_url('backend/user') ?>">> User</a>
                </li>
            </ul>
        </li>
        <li>
            <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle"><i class="fas fa-money-check"></i> Data Web</a>
            <ul class="collapse list-unstyled" id="homeSubmenu">
                <li>
                    <a href="<?= site_url('backend/jasa') ?>">> Jasa</a>
                    <a href="<?= site_url('backend/konten') ?>">> Konten</a>
                </li>
            </ul>
        </li>
    </ul>
    <p style="font-size:0.8em; padding:10px;">
        Copyright &copy; 2019 imazin.id, All Rights Reserved.
    </p>
</nav>