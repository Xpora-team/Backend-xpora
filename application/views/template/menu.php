<div id="wrapper">
  <!-- Sidebar -->
  <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion mr-n5" id="accordionSidebar">
    <!-- Nav Item - Dashboard -->
    <li class="nav-item">
      <a class="nav-link" href="index.html"> <span>Dashboard</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="<?= site_url('akun'); ?>"> <span>Akun</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="prosesverifikasi.html"> <span>Proses Verifikasi</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="clb.html"> <span>Cek Level Bisnis</span></a>
    </li>

    <!-- Nav Item - Pages Collapse Menu -->
    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <span>Ekspansi Bisnis</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="buttons.html">Matchmaking log</a>
          <a class="collapse-item" href="cards.html">Commodities</a>
          <a class="collapse-item" href="cards.html">Request</a>
        </div>
      </div>
    </li>

    <li class="nav-item">
      <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
        <span>Inspirasi</span>
      </a>
      <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
          <a class="collapse-item" href="buttons.html">Post</a>
          <a class="collapse-item" href="cards.html">User</a>
        </div>
      </div>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="charts.html"> <span>Diaspora</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="charts.html"> <span>Produk BNI</span></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="charts.html"> <span>Sistem Digital UMKM</span></a>
    </li>
  </ul>
  <!-- End of Sidebar -->

  <!-- Content Wrapper -->
  <div id="content-wrapper" class="d-flex flex-column" id="accordionSidebar">
    <!-- Main Content -->
    <div id="content">
      <!-- Topbar -->
      <nav class="bg-white mb-4 ml-auto static-top shadow">
        <!-- Topbar Search -->
        <nav class="navbar navbar-expand-md navbar-light">
          <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item">
                <a class="nav-link" href="#">All</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Buyer</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Indirect Exportir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Direct Exportir</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#">Diaspora</a>
              </li>
            </ul>
          </div>
        </nav>
        <!-- Topbar Navbar -->
      </nav>
      <!-- End of Topbar -->
      <div>
        <?php
        $this->load->view($content);
        ?>
      </div>
      <!-- /.container-fluid -->
    </div>

    <!-- End of Main Content -->

    <!-- End of Content Wrapper -->
  </div>

  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>