  <!-- Main content -->
  <div class="main-content" id="panel">
    <!-- Topnav -->
    <nav class="navbar navbar-top navbar-expand navbar-dark bg-primary border-bottom">
      <div class="container-fluid">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <!-- Search form -->

          <!-- Navbar links -->
          <ul class="navbar-nav align-items-center  ml-md-auto ">

          </ul>
          <ul class="navbar-nav align-items-center  ml-auto ml-md-0 ">
            <li class="nav-item dropdown">
              <a class="nav-link pr-0" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <div class="media align-items-center">
                  <span class="avatar avatar-sm rounded-circle">
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
          <!-- button modal tambah data -->

          <div class="card bg-default shadow">
            <div class="card-header bg-transparent border-0">
              <h3 class="text-white mb-0">Penduduk Awal Pencatatan</h3>
              <a href="<?= base_url('laporancontroller/laporanAwalPendataanPenduduk') ?>" class="btn btn-danger mt-3">
                <i class="fas fa-file-pdf"></i> PDF
              </a>
            </div>
            <div class="table-responsive table-bordered">
              <table class="table align-items-center table-dark table-flush">
                <thead class="thead-dark">
                  <tr>
                    <th>NO</th>
                    <th>RW</th>
                    <th>Nik</th>
                    <th>NAMA</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>UMUR</th>
                    <th>STATUS KAWIN </th>
                    <!-- <th>TINDAKAN</th> -->
                  </tr>
                </thead>
                <tbody class="list text-white">
                  <?php $i = 1; ?>
                  <?php foreach ($data_awal as $d) : ?>
                    <tr>
                      <td>
                        <?= $i ?>
                      </td>
                      <td>
                        <?= $d['id_rw'] ?>
                      </td>
                      <td>
                        <?= $d['nik'] ?>
                      </td>
                      <td>
                        <?= $d['nama'] ?>
                      </td>
                      <td>
                        <?= $d['tempat_lahir'] ?>
                      </td>
                      <td>
                        <?= $d['tgl_lahir'] ?>
                      </td>
                      <td>
                        <?= $d['umur'] ?>
                      </td>
                      <td>
                        <?= $d['status_kawin'] ?>
                      </td>

                    </tr>
                    <?php
                    $i++;
                    ?>
                  <?php endforeach; ?>
                </tbody>
              </table>
            </div>
          </div>
          <!-- modal tambah Data -->



























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