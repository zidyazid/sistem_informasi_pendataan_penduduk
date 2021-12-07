  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->

          <!-- Navbar links -->

          <ul class="navbar-nav align-items-center  ml-md-auto ">
            <li class="nav-item d-xl-none">
              <!-- Sidenav toggler -->
              <div class="pr-3 sidenav-toggler sidenav-toggler-dark" data-action="sidenav-pin" data-target="#sidenav-main">
                <div class="sidenav-toggler-inner">
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                  <i class="sidenav-toggler-line"></i>
                </div>
              </div>
            </li>

          </ul>

          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
                    <!-- <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg">s -->
                    <i class="fas fa-user-circle"></i>
                  </span>
                  <div class="media-body  ml-2  d-none d-lg-block">
                    <span class="mb-0 text-sm  font-weight-bold"><?= $user['name'] ?></span>
                  </div>
                </div>
              </a>

            </li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- Header -->
    <!-- Header -->
    <div class="header bg-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <!-- Card stats -->
          <center>
            <h2 class="text-white"><?= $judul ?></h2>
          </center>
        </div>
      </div>
    </div>
    <!-- Page content -->



    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col-xl-12">
          <?php if ($total <= 0 || $total == null) : ?>
            <a class="btn btn-success btn-lg mb-3" href="<?= base_url('admincontroller/setDataSekarang') ?>">Set Data Awal</a>
          <?php endif; ?>
          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Penduduk Sekarang</h3>

              <a href="<?= base_url('laporancontroller/laporanPendudukSekarang/'); ?>" class="mt-3 btn btn-danger">
                <i class="fas fa-file-pdf"></i> PDF
              </a>
            </div>
            <div class="table-responsive table-bordered">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th>NO</th>
                    <th>RW</th>
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>tEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>UMUR</th>
                    <th>STATUS KAWIN</th>

                  </tr>
                </thead>
                <tbody class="list text-white">
                  <?php $i = 1; ?>
                  <?php foreach ($data_penduduk_sekarang as $s) : ?>
                    <tr>
                      <td>
                        <?= $i; ?>
                      </td>
                      <td>
                        <?= $s['id_rw'] ?>
                      </td>
                      <td>
                        <?= $s['nik'] ?>
                      </td>
                      <td>
                        <?= $s['nama'] ?>
                      </td>
                      <td>
                        <?= $s['tempat_lahir'] ?>
                      </td>
                      <td>
                        <?= $s['tgl_lahir'] ?>
                      </td>
                      <td>
                        <?= $s['umur'] ?>
                      </td>
                      <td>
                        <?= $s['status_kawin'] ?>
                      </td>

                    </tr>
                    <?php $i++; ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>



























          <script src="<?= base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
          <script src="<?= base_url(); ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
          <script src="<?= base_url(); ?>/assets/vendor/js-cookie/js.cookie.js"></script>
          <script src="<?= base_url(); ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
          <script src="<?= base_url(); ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
          <!-- Optional JS -->
          <script src="<?= base_url(); ?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
          <script src="<?= base_url(); ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
          <!-- Argon JS -->
          <script src="<?= base_url(); ?>/assets/js/argon.js?v=1.2.0"></script>
        </div>