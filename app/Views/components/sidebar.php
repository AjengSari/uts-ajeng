<!-- ======= Sidebar ======= -->
<aside id="sidebar" class="sidebar">

<ul class="sidebar-nav" id="sidebar-nav">

    <?php if (session()->get('role') == 'user') { ?>
        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == '') ? '' : 'collapsed' ?>" href="/">
                <i class="bi bi-grid"></i>
                <span>Home</span>
            </a>
        </li><!-- End Home Nav -->

        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'keranjang') ? '' : 'collapsed' ?>" href="<?= base_url('keranjang') ?>">
                <i class="bi bi-cart-check"></i>
                <span>Keranjang</span>
            </a>
        </li><!-- End Keranjang Nav -->

        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'produk') ? '' : 'collapsed' ?>" href="<?= base_url('produk') ?>">
                <i class="bi bi-receipt"></i>
                <span>Produk</span>
            </a>
        </li><!-- End Produk Nav -->

    <?php } elseif (session()->get('role') == 'admin') { ?>
        
        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'dashboard') ? '' : 'collapsed' ?>" href="<?= base_url('dashboard') ?>">
                <i class="bi bi-speedometer2"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'users') ? '' : 'collapsed' ?>" href="<?= base_url('users') ?>">
                <i class="bi bi-people"></i>
                <span>Manage Users</span>
            </a>
        </li><!-- End Manage Users Nav -->

        <li class="nav-item">
            <a class="nav-link <?= (uri_string() == 'produk') ? '' : 'collapsed' ?>" href="<?= base_url('produk') ?>">
                <i class="bi bi-box"></i>
                <span>Manage Produk</span>
            </a>
        </li><!-- End Manage Produk Nav -->

    <?php } ?>

</ul>

</aside><!-- End Sidebar -->
