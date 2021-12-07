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
          <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#modalTambah">
            Tambah Data
          </button>
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
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>KATEGORI PENGURANGAN</th>
                    <th>KEWARGANEGARAAN</th>
                    <th>JENIS KELAMIN</th>
                    <th>TINDAKAN</th>
                  </tr>
                </thead>
                <tbody class="list text-white">
                  <?php $i = 1; ?>
                  <?php foreach ($data_pengurangan_penduduk as $k) : ?>
                    <tr>
                      <td><?= $i; ?>
                      </td>
                      <td>
                        0<?= $k['id_rw'] ?>
                      </td>
                      <td>
                        <?= $k['nik'] ?>
                      </td>
                      <td>
                        <?= $k['nama'] ?>
                      </td>
                      <td>
                        <?= $k['kategori_perpindahan'] ?>
                      </td>
                      <td>
                        <?= $k['kewarganegaraan'] ?>
                      </td>
                      <td>
                        <?= $k['jenis_kelamin'] ?>
                      </td>

                      <td>
                        <div class="row">
                          <button class="btn btn-warning" data-toggle="modal" data-target="#modalUbah<?= $k['id'] ?>"><i class=" fas fa-pen-square mr-2"></i>Ubah</button>
                          <a href="<?= base_url('Admincontroller/delete_data_kurang/' . $k['id']) . '/' . $k['id_rw'] ?>" class="btn btn-danger"><i class=" fas fa-trash-alt mr-2"></i>Hapus</a>
                        </div>
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
                      <label for="nik">Nik</label>
                      <input type="text" class="form-control" id="nik" name="nik" placeholder="masukan nik penduduk">
                    </div>
                    <div class="form-group">
                      <label for="kategori_perpindahan">Kategori Perpindahan</label>
                      <select class="form-control" id="kategori_perpindahan" name="kategori_perpindahan">
                        <option value="Mati">Mati</option>
                        <option value="Pindahan">Pindahan</option>
                      </select>
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
                        <label for="kode_rw">RW</label>
                        <select class="form-control" id="kode_rw" name="kode_rw">
                          <?php foreach ($kode_rw as $rw) : ?>
                            <option value="<?= $rw['rw'] ?>">0<?= $rw['rw'] ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" value="<?= $k['nama'] ?>" id="nama" name="nama" placeholder="masukan nama penduduk">
                      </div>
                      <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" value="<?= $k['tempat_lahir'] ?>" id="tempat_lahir" name="tempat_lahir" placeholder="masukan tempat lahir penduduk">
                      </div>
                      <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="text" class="form-control" value="<?= $k['tgl_lahir'] ?>" id="tgl_lahir" name="tgl_lahir" placeholder="masukan tanggal lahir penduduk">
                      </div>
                      <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control" value="<?= $k['umur'] ?>" id="umur" name="umur" placeholder="masukan umur penduduk">
                      </div>
                      <div class="form-group">
                        <label for="status_kawin">Status Pernikahan</label>
                        <select class="form-control" id="status_kawin" name="status_kawin">
                          <option value="Belum">Belum</option>
                          <option value="Sudah">Sudah</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="kategori_perpindahan">Kategori Perpindahan</label>
                        <select class="form-control" id="kategori_perpindahan" name="kategori_perpindahan">
                          <option value="Mati">Mati</option>
                          <option value="Pindahan">Pindahan</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="kewarganegaraan">Kewarganegaraan</label>
                        <select class="form-control" id="kewarganegaraan" name="kewarganegaraan">
                          <option value="Wni">Wni</option>
                          <option value="Wna">Wna</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="jenis_kelamin">Jenis Kelamin</label>
                        <select class="form-control" id="jenis_kelamin" name="jenis_kelamin">
                          <option value="Laki-Laki">Laki-Laki</option>
                          <option value="Perempuan">Perempuan</option>
                        </select>
                      </div>
                      <button type="submit" class="btn btn-primary">Simpan</button>
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