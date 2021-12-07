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
                                      <th>WNI L</th>
                                      <th>WNI P</th>
                                      <th>WNA L</th>
                                      <th>WNA P</th>
                                      <th>JUMLAH</th>
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
                                              <?= $d['wni_l'] ?>
                                          </td>
                                          <td>
                                              <?= $d['wni_p'] ?>
                                          </td>
                                          <td>
                                              <?= $d['wna_l'] ?>
                                          </td>
                                          <td>
                                              <?= $d['wna_p'] ?>
                                          </td>
                                          <td>
                                              <?= $d['jumlah'] ?>
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
                                  <form method="post" action="<?= base_url('Admincontroller/tambah_data_awal') ?>">
                                      <div class="form-group">
                                          <label for="kode_rw">RW</label>
                                          <select class="form-control" id="kode_rw" name="kode_rw">
                                              <?php foreach ($kode_rw as $rw) : ?>
                                                  <option value="<?= $rw['rw'] ?>">0<?= $rw['rw'] ?></option>
                                              <?php endforeach; ?>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="wni_l">WNI L</label>
                                          <input type="text" class="form-control" id="wni_l" name="wni_l" placeholder="masukan jumlah penduduk">
                                      </div>
                                      <div class="form-group">
                                          <label for="wni_p">WNI P</label>
                                          <input type="text" class="form-control" id="wni_p" name="wni_p" placeholder="masukan jumlah penduduk">
                                      </div>
                                      <div class="form-group">
                                          <label for="wna_l">WNA L</label>
                                          <input type="text" class="form-control" id="wna_l" name="wna_l" placeholder="masukan jumlah penduduk">
                                      </div>
                                      <div class="form-group">
                                          <label for="wna_p">WNA P</label>
                                          <input type="text" class="form-control" id="wna_p" name="wna_p" placeholder="masukan jumlah penduduk">
                                      </div>
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                  </form>
                              </div>

                          </div>
                      </div>
                  </div>
                  <!-- modal Ubah Data -->
                  <?php foreach ($data_awal as $d) : ?>
                      <div class="modal fade" id="modalUbah<?= $d['id'] ?>" tabindex="-1" aria-labelledby="modalUbahLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="modalUbahLabel">Ubah Data</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="post" action="<?= base_url('Admincontroller/update_data_awal/' . $d['id']) ?>">
                                          <div class="form-group">
                                              <label for="id">ID</label>
                                              <input type="text" class="form-control" id="id" name="id" value="<?= $d['id'] ?>" readonly placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <label for="kode_rw">RW</label>
                                              <select class="form-control" id="kode_rw" name="kode_rw" value="<?= $d['id_rw'] ?>">
                                                  <?php foreach ($kode_rw as $rw) : ?>
                                                      <option value="<?= $rw['rw'] ?>">0<?= $rw['rw'] ?></option>
                                                  <?php endforeach; ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label for="wni_l">WNI L</label>
                                              <input type="text" class="form-control" id="wni_l" name="wni_l" value="<?= $d['wni_l'] ?>" placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <label for="wni_p">WNI P</label>
                                              <input type="text" class="form-control" id="wni_p" name="wni_p" value="<?= $d['wni_p'] ?>" placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <label for="wna_l">WNA L</label>
                                              <input type="text" class="form-control" id="wna_l" name="wna_l" value="<?= $d['wna_l'] ?>" placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <label for="wna_p">WNA P</label>
                                              <input type="text" class="form-control" id="wna_p" name="wna_p" value="<?= $d['wna_p'] ?>" placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <label for="jumlah">JUMLAH</label>
                                              <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $d['jumlah'] ?>" readonly placeholder="masukan jumlah penduduk">
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