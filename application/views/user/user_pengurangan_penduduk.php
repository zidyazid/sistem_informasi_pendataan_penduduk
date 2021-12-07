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
                  <!-- button modal tambah data -->

                  <div class="card bg-default shadow">
                      <div class="card-header bg-transparent border-0">
                          <h3 class="text-white mb-0">Pengurangan Penduduk</h3>
                          <a href="<?= base_url('laporancontroller/laporanPenguranganPenduduk') ?>" class="mt-3 btn btn-danger">
                              <i class="fas fa-file-pdf"></i> PDF
                          </a>
                      </div>
                      <div class="table-responsive table-bordered">
                          <table class="table align-items-center table-dark table-flush">
                              <thead class="thead-dark">
                                  <tr>
                                      <th>NO</th>
                                      <th>RW</th>
                                      <th>MATI L</th>
                                      <th>MATI P</th>
                                      <th>PINDAH L</th>
                                      <th>PINDAH P</th>
                                      <th>JUMLAH</th>
                                  </tr>
                              </thead>
                              <tbody class="list text-white">
                                  <?php $i = 1; ?>
                                  <?php foreach ($data_pengurangan_penduduk as $k) : ?>
                                      <tr>
                                          <td><?= $i; ?>
                                          </td>
                                          <td>
                                              <?= $k['id_rw'] ?>
                                          </td>
                                          <td>
                                              <?= $k['mati_l'] ?>
                                          </td>
                                          <td>
                                              <?= $k['mati_p'] ?>
                                          </td>
                                          <td>
                                              <?= $k['pindah_l'] ?>
                                          </td>
                                          <td>
                                              <?= $k['pindah_p'] ?>
                                          </td>
                                          <td>
                                              <?= $k['jumlah'] ?>
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
                                  <form method="post" action="<?= base_url('Admincontroller/tambah_data_kurang') ?>">

                                      <div class="form-group">
                                          <label for="kode_rw">RW</label>
                                          <select class="form-control" id="kode_rw" name="kode_rw">
                                              <?php foreach ($kode_rw as $rw) : ?>
                                                  <option value="<?= $rw['rw'] ?>">0<?= $rw['rw'] ?></option>
                                              <?php endforeach; ?>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                          <label for="mati_l">MATI L</label>
                                          <input type="text" class="form-control" id="mati_l" name="mati_l" placeholder="masukan jumlah penduduk">
                                      </div>
                                      <div class="form-group">
                                          <label for="mati_p">MATI P</label>
                                          <input type="text" class="form-control" id="mati_p" name="mati_p" placeholder="masukan jumlah penduduk">
                                      </div>
                                      <div class="form-group">
                                          <label for="pindah_l">PINDAH L</label>
                                          <input type="text" class="form-control" id="pindah_l" name="pindah_l" placeholder="masukan jumlah penduduk">
                                      </div>
                                      <div class="form-group">
                                          <label for="pindah_p">PINDAH P</label>
                                          <input type="text" class="form-control" id="pindah_p" name="pindah_p" placeholder="masukan jumlah penduduk">
                                      </div>
                                      <button type="submit" class="btn btn-primary">Simpan</button>
                                  </form>
                              </div>

                          </div>
                      </div>
                  </div>
                  <!-- modal Ubah Data -->
                  <?php foreach ($data_pengurangan_penduduk as $k) : ?>
                      <div class="modal fade" id="modalUbah<?= $k['id'] ?>" tabindex="-1" aria-labelledby="modalUbahLabel" aria-hidden="true">
                          <div class="modal-dialog">
                              <div class="modal-content">
                                  <div class="modal-header">
                                      <h5 class="modal-title" id="modalUbahLabel">Ubah Data</h5>
                                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                      </button>
                                  </div>
                                  <div class="modal-body">
                                      <form method="post" action="<?= base_url('Admincontroller/update_data_kurang/' . $k['id']) ?>">
                                          <div class="form-group">
                                              <label for="id">ID</label>
                                              <input type="text" class="form-control" id="id" name="id" value="<?= $k['id'] ?>" readonly placeholder="masukan id">
                                          </div>
                                          <div class="form-group">
                                              <label for="kode_rw">RW</label>
                                              <select class="form-control" id="kode_rw" name="kode_rw" value="<?= $k['id_rw'] ?>">
                                                  <?php foreach ($kode_rw as $rw) : ?>
                                                      <option value="<?= $rw['rw'] ?>">0<?= $rw['rw'] ?></option>
                                                  <?php endforeach; ?>
                                              </select>
                                          </div>
                                          <div class="form-group">
                                              <label for="mati_l">Mati Laki-Laki</label>
                                              <input type="text" class="form-control" id="mati_l" name="mati_l" value="<?= $k['mati_l'] ?>" placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <label for="mati_p">Mati Perempuan</label>
                                              <input type="text" class="form-control" id="mati_p" name="mati_p" value="<?= $k['mati_p'] ?>" placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <label for="pindah_l">Pindah Laki-Laki</label>
                                              <input type="text" class="form-control" id="pindah_l" name="pindah_l" value="<?= $k['pindah_l'] ?>" placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <label for="pindah_p">Pindah Perempuan</label>
                                              <input type="text" class="form-control" id="pindah_p" name="pindah_p" value="<?= $k['pindah_p'] ?>" placeholder="masukan jumlah penduduk">
                                          </div>
                                          <div class="form-group">
                                              <label for="jumlah">JUMLAH</label>
                                              <input type="text" class="form-control" id="jumlah" name="jumlah" value="<?= $k['jumlah'] ?>" readonly placeholder="masukan jumlah penduduk">
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