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
                                      <!-- <img alt="Image placeholder" src="../assets/img/theme/team-4.jpg"> -->
                                      <i class="fas fa-user-circle"></i>
                                  </span>
                                  <div class="media-body  ml-2  d-none d-lg-block">
                                      <span class="mb-0 text-sm  font-weight-bold"><?= $user['name'] ?></span>
                                  </div>
                              </div>
                          </a>
                          <div class="dropdown-menu  dropdown-menu-right ">
                              <div class="dropdown-header noti-title">
                                  <h6 class="text-overflow m-0">Welcome!</h6>
                              </div>

                              <div class="dropdown-divider"></div>
                              <a href="#!" class="dropdown-item">
                                  <i class="ni ni-user-run"></i>
                                  <span>Logout</span>
                              </a>
                          </div>
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
                  <?= $this->session->flashdata('message') ?>
                  <!-- button modal tambah data -->
                  <div class="card bg-default shadow">
                      <div class="card-header bg-transparent border-0">
                          <h3 class="text-white mb-0">Pertambahan Penduduk</h3>
                          <a href="<?= base_url('laporancontroller/laporanPertambahanPenduduk') ?>" class="mt-3 btn btn-danger">
                              <i class="fas fa-file-pdf"></i> PDF
                          </a>
                      </div>
                      <div class="table-responsive table-bordered">
                          <table class="table align-items-center table-dark table-flush">
                              <thead class="thead-dark">
                                  <tr>
                                      <th>NO</th>
                                      <th>RW</th>
                                      <th>LAHIR L</th>
                                      <th>LAHIR P</th>
                                      <th>DATANG L</th>
                                      <th>DATANG P</th>
                                      <th>JUMLAH</th>
                                  </tr>
                              </thead>
                              <tbody class="list text-white">
                                  <?php $i = 1; ?>
                                  <?php foreach ($data_pertambahan_penduduk as $p) : ?>
                                      <tr>
                                          <td><?= $i; ?></td>
                                          <td>
                                              00<?= $p['id_rw'] ?>
                                          </td>
                                          <td>
                                              <?= $p['lahir_l'] ?>
                                          </td>
                                          <td>
                                              <?= $p['lahir_p'] ?>
                                          </td>
                                          <td>
                                              <?= $p['datang_l'] ?>
                                          </td>
                                          <td>
                                              <?= $p['datang_p'] ?>
                                          </td>
                                          <td>
                                              <?= $p['jumlah'] ?>
                                          </td>
                                      </tr>
                                      <?php $i++; ?>
                                  <?php endforeach; ?>
                              </tbody>
                          </table>
                      </div>
                  </div>
                  <!-- modal tambah Data -->
                  <div class="modal fade" id="modalTambah" tabindex="-1" aria-labelledby="modalTambahLabel" aria-hidden="true">
                      <div class="modal-dialog">
                          <div class="modal-content">
                              <div class="modal-header">
                                  <h5 class="modal-title" id="modalTambahLabel">Tambahkan Data Baru</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                      <span aria-hidden="true">&times;</span>
                                  </button>
                              </div>
                              <div class="modal-body">
                                  <form method="post" action="<?= base_url('Admincontroller/tambah_data_tambah') ?>">
                                      <div class="form-group">
                                          <label for="kode_rw">RW</label>
                                          <select class="form-control" id="kode_rw" name="kode_rw">
                                              <?php foreach ($kode_rw as $rw) : ?>
                                                  <option value="<?= $rw['rw'] ?>">0<?= $rw['rw'] ?></option>
                                              <?php endforeach; ?>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="lahir_l">LAHIR L</label>
                                          <input type="text" class="form-control" id="lahir_l" name="lahir_l" placeholder="masukan jumlah penduduk">
                                      </div>
                                      <div class="form-group">
                                          <label for="lahir_p">LAHIR P</label>
                                          <input type="text" class="form-control" id="lahir_p" name="lahir_p" placeholder="masukan jumlah penduduk">
                                      </div>
                                      <div class="form-group">
                                          <label for="datang_l">DATANG L</label>
                                          <input type="text" class="form-control" id="datang_l" name="datang_l" placeholder="masukan jumlah penduduk">
                                      </div>
                                      <div class="form-group">
                                          <label for="datang_p">DATANG P</label>
                                          <input type="text" class="form-control" id="datang_p" name="datang_p" placeholder="masukan jumlah penduduk">
                                      </div>
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                  </form>
                              </div>
                          </div>
                      </div>
                  </div>
                  <!-- modal Ubah Data -->
                  <?php foreach ($data_pertambahan_penduduk as $p) : ?>
                      <div class="modal fade" id="modalUbah<?= $p['id'] ?>" tabindex="-1" aria-labelledby="modalUbahLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="modalUbahLabel">Ubah Data</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="post" action="<?= base_url('Admincontroller/update_data_tambah/' . $p['id']) ?>">
                                          <div class="form-group">
                                              <label for="id">ID</label>
                                              <input type="text" class="form-control" id="id" name="id" value="<?= $p['id'] ?>" readonly placeholder="masukan id">
                                          </div>
                                          <div class="form-group">
                                              <label for="kode_rw">RW</label>
                                              <select class="form-control" id="kode_rw" name="kode_rw" value="<?= $p['id_rw'] ?>">
                                                  <?php foreach ($kode_rw as $rw) : ?>
                                                      <option value="<?= $rw['rw'] ?>">0<?= $rw['rw'] ?></option>
                                                  <?php endforeach; ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label for="lahir_l">Lahir Laki-Laki</label>
                                              <input type="text" class="form-control" id="lahir_l" name="lahir_l" value="<?= $p['lahir_l'] ?>" placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <label for="lahir_p">Lahir Perempuan</label>
                                              <input type="text" class="form-control" id="lahir_p" name="lahir_p" value="<?= $p['lahir_p'] ?>" placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <label for="datang_l">Datang Laki-Laki</label>
                                              <input type="text" class="form-control" id="datang_l" name="datang_l" value="<?= $p['datang_l'] ?>" placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <label for="datang_p">Datang Perempuan</label>
                                              <input type="text" class="form-control" id="datang_p" name="datang_p" value="<?= $p['datang_p'] ?>" placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <button type="submit" class="btn btn-primary">Save changes</button>
                                          </div>
                                      </form>
                                  </div>
                              </div>
                          </div>
                      </div>
                  <?php endforeach; ?>


























                  <script src="<?= base_url(); ?>/assets/vendor/jquery/dist/jquery.min.js"></script>
                  <script src="<?= base_url(); ?>/assets/vendor/bootstrap/dist/js/bootstrap.bundle.min.js">
                  </script>
                  <script src="<?= base_url(); ?>/assets/vendor/js-cookie/js.cookie.js"></script>
                  <script src="<?= base_url(); ?>/assets/vendor/jquery.scrollbar/jquery.scrollbar.min.js">
                  </script>
                  <script src="<?= base_url(); ?>/assets/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
                  <!-- Optional JS -->
                  <script src="<?= base_url(); ?>/assets/vendor/chart.js/dist/Chart.min.js"></script>
                  <script src="<?= base_url(); ?>/assets/vendor/chart.js/dist/Chart.extension.js"></script>
                  <!-- Argon JS -->
                  <script src="<?= base_url(); ?>/assets/js/argon.js?v=1.2.0"></script>
              </div>