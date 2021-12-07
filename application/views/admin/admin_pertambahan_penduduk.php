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
          <?= $this->session->flashdata('message') ?>
          <!-- button modal tambah data -->
          <button type="button" class="btn btn-success mb-3" data-toggle="modal" data-target="#modalTambah">
            Tambah Data
          </button>
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
                    <th>NIK</th>
                    <th>NAMA</th>
                    <th>TEMPAT LAHIR</th>
                    <th>TANGGAL LAHIR</th>
                    <th>UMUR</th>
                    <th>STATUS PERNKAHAN</th>
                    <th>KATEGORI PERTAMBAHAN</th>
                    <th>KEWARGANEGARAAN</th>
                    <th>JENIS KELAMIN</th>
                    <th>TINDAKAN</th>
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
                        <?= $p['nik'] ?>
                      </td>
                      <td>
                        <?= $p['nama'] ?>
                      </td>
                      <td>
                        <?= $p['tempat_lahir'] ?>
                      </td>
                      <td>
                        <?= $p['tgl_lahir'] ?>
                      </td>
                      <td>
                        <?= $p['umur'] ?>
                      </td>
                      <td>
                        <?= $p['status_kawin'] ?>
                      </td>
                      <td>
                        <?= $p['kategori_pertambahan'] ?>
                      </td>
                      <td>
                        <?= $p['kewarganegaraan'] ?>
                      </td>
                      <td>
                        <?= $p['jenis_kelamin'] ?>
                      </td>
                      <td>
                        <div class="row">
                          <button class="btn btn-warning" data-toggle="modal" data-target="#modalUbah<?= $p['id'] ?>"><i class=" fas fa-pen-square mr-2"></i>Ubah</button>
                          <a href="<?= base_url('Admincontroller/delete_data_tambah/' . $p['nik']) ?>" class="btn btn-danger"><i class=" fas fa-trash-alt mr-2"></i>Hapus</a>
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
                      <label for="nik">Nik</label>
                      <input type="text" class="form-control" id="nik" name="nik" placeholder="masukan nama penduduk">
                    </div>
                    <div class="form-group">
                      <label for="nama">Nama</label>
                      <input type="text" class="form-control" id="nama" name="nama" placeholder="masukan nama penduduk">
                    </div>
                    <div class="form-group">
                      <label for="tempat_lahir">Tempat Lahir</label>
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="masukan tempat lahir penduduk">
                    </div>
                    <div class="form-group">
                      <label for="tgl_lahir">Tanggal Lahir</label>
                      <input type="text" class="form-control" id="tgl_lahir" name="tgl_lahir" placeholder="masukan tanggal lahir penduduk">
                    </div>
                    <div class="form-group">
                      <label for="umur">Umur</label>
                      <input type="text" class="form-control" id="umur" name="umur" placeholder="masukan umur penduduk">
                    </div>

                    <div class="form-group">
                      <label for="status_kawin">Status Pernikahan</label>
                      <select class="form-control" id="status_kawin" name="status_kawin">
                        <option value="Belum">Belum</option>
                        <option value="Sudah">Sudah</option>
                      </select>
                    </div>
                    <div class="form-group">
                      <label for="kategori_kedatangan">Kategori Kedatangan</label>
                      <select class="form-control" id="kategori_kedatangan" name="kategori_kedatangan">
                        <option value="Datang">Datang</option>
                        <option value="Lahir">Lahir</option>
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
          <!-- modal Ubah Data -->
          <?php foreach ($data_pertambahan_penduduk as $p) : ?>
            <div class="modal fade" id="modalUbah<?= $p['id'] ?>" tabindex="-1" aria-labelledby="modalUbahLabel" aria-hidden="true">
              <div class="modal-dialog">
                <div class="modal-content">
                  <div class="modal-header">
                    <h5 class="modal-title" id="modalUbahLabel">Modal title</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body">
                    <form method="post" action="<?= base_url('Admincontroller/update_data_tambah/' . $p['nik']) ?>">
                      <div class="form-group">
                        <label for="kode_rw">RW</label>
                        <select class="form-control" id="kode_rw" name="kode_rw">
                          <?php foreach ($kode_rw as $rw) : ?>
                            <option value="<?= $rw['rw'] ?>">0<?= $rw['rw'] ?></option>
                          <?php endforeach; ?>
                        </select>
                      </div>
                      <!-- <div class="form-group">
                        <input type="text" class="form-control" value="<?= $p['id'] ?>" id="id" name="id" placeholder="masukan nama penduduk" disabled hidden>
                      </div> -->
                      <div class="form-group">
                        <input type="text" class="form-control" value="<?= $p['nik'] ?>" id="nik" name="nik" placeholder="masukan nama penduduk" hidden>
                      </div>
                      <div class="form-group">
                        <label for="nama">Nama</label>
                        <input type="text" class="form-control" value="<?= $p['nama'] ?>" id="nama" name="nama" placeholder="masukan nama penduduk">
                      </div>
                      <div class="form-group">
                        <label for="tempat_lahir">Tempat Lahir</label>
                        <input type="text" class="form-control" value="<?= $p['tempat_lahir'] ?>" id="tempat_lahir" name="tempat_lahir" placeholder="masukan tempat lahir penduduk">
                      </div>
                      <div class="form-group">
                        <label for="tgl_lahir">Tanggal Lahir</label>
                        <input type="text" class="form-control" value="<?= $p['tgl_lahir'] ?>" id="tgl_lahir" name="tgl_lahir" placeholder="masukan tanggal lahir penduduk">
                      </div>
                      <div class="form-group">
                        <label for="umur">Umur</label>
                        <input type="text" class="form-control" value="<?= $p['umur'] ?>" id="umur" name="umur" placeholder="masukan umur penduduk">
                      </div>

                      <div class="form-group">
                        <label for="status_kawin">Status Pernikahan</label>
                        <select class="form-control" id="status_kawin" name="status_kawin">
                          <option value="Belum">Belum</option>
                          <option value="Sudah">Sudah</option>
                        </select>
                      </div>
                      <div class="form-group">
                        <label for="kategori_kedatangan">Kategori Kedatangan</label>
                        <select class="form-control" id="kategori_kedatangan" name="kategori_kedatangan">
                          <option value="Datang">Datang</option>
                          <option value="Lahir">Lahir</option>
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