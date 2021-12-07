<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Admincontroller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Model_awal');
        $this->load->model('Model_tambah');
        $this->load->model('Model_kurang');
        $this->load->model('Model_sekarang');
        is_logged_in();
    }

    // fix

    public function index()
    {
        $data['title'] = "Info";
        $data['judul'] = "Information Page";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // menyimpan data kevariable
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        $this->load->view('admin/info', $data);
    }

    // fix

    public function info()
    {
        $data['title'] = "Info";
        $data['judul'] = "Information Page";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // menyimpan data kevariable
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        $this->load->view('admin/info', $data);
    }

    // fix

    public function data_awal()
    {
        $data['kode_rw'] = $this->db->get('kode_rw')->result_array();
        $data['data_awal'] = $this->Model_awal->ambil_data();
        $data['title'] = "Penduduk Awal Pencatatan";
        $data['judul'] = "Penduduk Awal Pencatatan";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('admin/admin_penduduk_awal', $data);
        // $this->load->view('komponen/footer', $data);
    }

    // fix

    public function data_pertambahan_penduduk()
    {
        $data['kode_rw'] = $this->db->get('kode_rw')->result_array();
        $data['data_pertambahan_penduduk'] = $this->Model_tambah->tambah_data();
        $data['title'] = "Pertambahan Penduduk";
        $data['judul'] = "Pertambahan Penduduk";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('admin/admin_pertambahan_penduduk', $data);
        // $this->load->view('komponen/footer', $data);
    }

    // fix

    public function data_pengurangan_penduduk()
    {
        $data['kode_rw'] = $this->db->get('kode_rw')->result_array();
        $data['data_pengurangan_penduduk'] = $this->Model_kurang->kurang_data();
        $data['title'] = "Pengurangan Penduduk";
        $data['judul'] = "Pengurangan Penduduk";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        // $data['menu'] = $this->db->get_where('user_sub_menu', ['role_id' => $this->session->userdata('role_id')])->row_array();
        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('admin/admin_pengurangan_penduduk', $data);
        // $this->load->view('komponen/footer', $data);
    }

    // fix

    public function setDataSekarang()
    {
        $dataAwal = $this->Model_awal->ambil_data();
        $query = $this->db->query("SELECT * FROM penduduk_awal_pencatatan");
        $total = $query->num_rows();
        // $jumlahData = mysqli_num_rows($dataAwal->num_rows());
        for ($i = 0; $i < $total; $i++) {
            # code...
            $data = [
                'id_rw' => $dataAwal[$i]['id_rw'],
                'nik' => $dataAwal[$i]['nik'],
                'nama' => $dataAwal[$i]['nama'],
                'tempat_lahir' => $dataAwal[$i]['tempat_lahir'],
                'tgl_lahir' => $dataAwal[$i]['tgl_lahir'],
                'umur' => $dataAwal[$i]['umur'],
                'kewarganegaraan' => $dataAwal[$i]['kewarganegaraan'],
                'jenis_kelamin' => $dataAwal[$i]['jenis_kelamin'],
                'status_kawin' => $dataAwal[$i]['status_kawin'],
            ];
            var_dump($data);
            $this->Model_sekarang->input_data('penduduk_sekarang', $data);
        }
        $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
        Data Berhasil Diatur!
        </div>');
        redirect('admincontroller/data_penduduk_sekarang');
    }

    public function data_penduduk_sekarang()
    {
        $data['kode_rw'] = $this->db->get('kode_rw')->result_array();
        $data['data_penduduk_sekarang'] = $this->Model_sekarang->data_sekarang();
        $data['title'] = "Penduduk Sekarang";
        $data['judul'] = "penduduk Sekarang";
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $query = $this->db->query("SELECT * FROM penduduk_sekarang");
        $data['total'] = $query->num_rows();


        $this->load->view('komponen/header', $data);
        $this->load->view('komponen/sidebar', $data);
        // $this->load->view('komponen/topnav', $data);
        $this->load->view('admin/admin_penduduk_sekarang', $data);
        // $this->load->view('komponen/footer', $data);
    }

    // not yet

    public function perbarui_data_sekarang($id)
    {
        $dataPertambahan = $this->Model_tambah->lahir_idrw1($id);
        $jumlah = $dataPertambahan[0]['lahir_l'] + $dataPertambahan[0]['lahir_p'] + $dataPertambahan[0]['datang_l'] + $dataPertambahan[0]['datang_p'];
        $data = [
            'wni_l' => $dataPertambahan[0]['lahir_l'],
            'wni_p' => $dataPertambahan[0]['lahir_p'],
            'wna_l' => $dataPertambahan[0]['datang_l'],
            'wna_p' => $dataPertambahan[0]['datang_p'],
            'jumlah' => $jumlah
        ];

        $this->Model_sekarang->perbaruiDataSekarang($id, $data);
        redirect('admincontroller/data_penduduk_sekarang');
        // var_dump($data);
        // die;
    }

    // fix

    public function tambah_data_tambah()
    {
        $this->form_validation->set_rules('nik', 'Nik', 'required|is_unique[pertambahan_penduduk.nik]');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('status_kawin', 'Status_kawin', 'required');
        $this->form_validation->set_rules('kode_rw', 'Kode_rw', 'required|integer');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kategori_kedatangan', 'Kategori_kedatangan', 'required');
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');

        $nik = $this->input->post('nik');
        $rw = $this->input->post('kode_rw');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $umur = $this->input->post('umur');
        $status_kawin = $this->input->post('status_kawin');
        $nama = $this->input->post('nama');
        $kategori_kedatangan = $this->input->post('kategori_kedatangan');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $jenis_kelamin = $this->input->post('jenis_kelamin');

        // ambil data dari data awal
        $dataAwal = $this->db->get('penduduk_sekarang');
        $total = $dataAwal->num_rows();

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Gagal Ditambahkan!
            </div>');
            redirect('admincontroller/data_pertambahan_penduduk');
        } else {
            $data = [
                'id_rw' => $rw,
                'nik' => $nik,
                'nama' => $nama,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'umur' => $umur,
                'status_kawin' => $status_kawin,
                'kategori_pertambahan' => $kategori_kedatangan,
                'kewarganegaraan' => $kewarganegaraan,
                'jenis_kelamin' => $jenis_kelamin,
            ];

            $dataSekarang = [
                'id_rw' => $rw,
                'nik' => $nik,
                'nama' => $nama,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'umur' => $umur,
                'kewarganegaraan' => $kewarganegaraan,
                'jenis_kelamin' => $jenis_kelamin,
                'status_kawin' => $status_kawin,
            ];

            if ($total > 0) {
                # tambahkan data kedalam tabel penduduk sekarang
                $this->Model_tambah->input_data($data);
                $this->Model_sekarang->input_data('penduduk_sekarang', $dataSekarang);
                $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Data Berhasil Ditambahkan!
            </div>');
                redirect('admincontroller/data_pertambahan_penduduk');
            } else {
                $this->session->set_flashdata('message', '<div class="alert alert-warning text-center" role="alert">
                maaf data tidak dapat ditambahkan, silahkan klik button set data awal terlebih dahulu pada halaman penduduk sekarang!
                </div>');
                redirect('admincontroller/data_pertambahan_penduduk');
            }
        }
    }

    // fix

    public function tambah_data_kurang()
    {

        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('kategori_perpindahan', 'Kategori_perpindahan', 'required');

        $nik = $this->input->post('nik');
        $kategori_perpindahan = $this->input->post('kategori_perpindahan');

        $penduduk  = $this->Model_sekarang->ambilSatuDataNik($nik);



        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Gagal Ditambahkan!
            </div>');
        } else {
            $data = [
                'id_rw' => $penduduk["id_rw"],
                'nama' => $penduduk["nama"],
                'tempat_lahir' => $penduduk["tempat_lahir"],
                'tgl_lahir' => $penduduk["tgl_lahir"],
                'umur' => $penduduk["umur"],
                'status_kawin' => $penduduk["status_kawin"],
                'kategori_perpindahan' => $kategori_perpindahan,
                'kewarganegaraan' => $penduduk["kewarganegaraan"],
                'jenis_kelamin' => $penduduk["jenis_kelamin"],
            ];
            // var_dump($data);
            // die;
            $this->Model_kurang->input_data($data);
            $this->db->delete('penduduk_sekarang', ['nik' => $nik]);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Data Berhasil Ditambahkan!
            </div>');
            redirect('admincontroller/data_pengurangan_penduduk');
        }
    }

    // fix

    public function update_data_tambah($nik)
    {
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
        $this->form_validation->set_rules('nik', 'Nik', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('status_kawin', 'Status_kawin', 'required');
        $this->form_validation->set_rules('kode_rw', 'Kode_rw', 'required|integer');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('kategori_kedatangan', 'Kategori_kedatangan', 'required');
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');

        $nik = $this->input->post('nik');
        $rw = $this->input->post('kode_rw');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $umur = $this->input->post('umur');
        $status_kawin = $this->input->post('status_kawin');
        $nama = $this->input->post('nama');
        $kategori_kedatangan = $this->input->post('kategori_kedatangan');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $jenis_kelamin = $this->input->post('jenis_kelamin');

        // ambil data dari data awal
        // var_dump($nik, $rw, $tempat_lahir, $tgl_lahir, $umur, $status_kawin, $nama, $kategori_kedatangan, $kewarganegaraan, $jenis_kelamin);
        // die;


        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Gagal Diubah!
            </div>');
            redirect('admincontroller/data_pertambahan_penduduk');
        } else {
            $data = [
                'id_rw' => $rw,
                'nama' => $nama,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'umur' => $umur,
                'status_kawin' => $status_kawin,
                'kategori_pertambahan' => $kategori_kedatangan,
                'kewarganegaraan' => $kewarganegaraan,
                'jenis_kelamin' => $jenis_kelamin,
            ];

            $this->Model_tambah->update_data_tambah($nik, $data);

            $dataBaru = [
                'id_rw' => $rw,
                'nama' => $nama,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'umur' => $umur,
                'kewarganegaraan' => $kewarganegaraan,
                'jenis_kelamin' => $jenis_kelamin,
                'status_kawin' => $status_kawin,
            ];
            // var_dump($id, $namalama, $tglLahir);
            // var_dump($dataBaru);
            // die;

            $this->Model_sekarang->perbaruiDataSekarang($nik, $dataBaru);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
                Data Berhasil Diperbarui!
                </div>');
            redirect('admincontroller/data_pertambahan_penduduk');
        }
    }


    public function update_data_kurang($id)
    {
        $this->form_validation->set_rules('kode_rw', 'Kode_rw', 'required|integer');
        $this->form_validation->set_rules('nama', 'Nama', 'required');
        $this->form_validation->set_rules('tempat_lahir', 'Tempat_lahir', 'required');
        $this->form_validation->set_rules('tgl_lahir', 'Tgl_lahir', 'required');
        $this->form_validation->set_rules('umur', 'Umur', 'required');
        $this->form_validation->set_rules('status_kawin', 'Status_kawin', 'required');
        $this->form_validation->set_rules('kategori_perpindahan', 'Kategori_perpindahan', 'required');
        $this->form_validation->set_rules('kewarganegaraan', 'Kewarganegaraan', 'required');
        $this->form_validation->set_rules('jenis_kelamin', 'Jenis_kelamin', 'required');

        $rw = $this->input->post('kode_rw');
        $nama = $this->input->post('nama');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $tgl_lahir = $this->input->post('tgl_lahir');
        $umur = $this->input->post('umur');
        $status_kawin = $this->input->post('status_kawin');
        $kategori_perpindahan = $this->input->post('kategori_perpindahan');
        $kewarganegaraan = $this->input->post('kewarganegaraan');
        $jenis_kelamin = $this->input->post('jenis_kelamin');

        if ($this->form_validation->run() == false) {
            $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
            Data Gagal Diubah!
            </div>');
            redirect('admincontroller/data_pengurangan_penduduk');
        } else {
            $data = [
                'id_rw' => $rw,
                'nama' => $nama,
                'tempat_lahir' => $tempat_lahir,
                'tgl_lahir' => $tgl_lahir,
                'umur' => $umur,
                'status_kawin' => $status_kawin,
                'kategori_perpindahan' => $kategori_perpindahan,
                'kewarganegaraan' => $kewarganegaraan,
                'jenis_kelamin' => $jenis_kelamin,
            ];
            $this->Model_kurang->update_data_kurang($id, $data);
            $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
            Data Berhasil Ditambahkan!
            </div>');
            redirect('admincontroller/data_pengurangan_penduduk');
        }
    }

    // not yet

    public function delete_data_tambah($nik)
    {

        $this->Model_tambah->delete_data_tambah($nik);
        $this->Model_sekarang->delete_data_sekarang($nik);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
                   	Data Berhasil Dihapus!
                  </div>');
        redirect('admincontroller/data_pertambahan_penduduk');
    }

    // fix

    public function importFromExcel()
    {
        if (isset($_POST['import'])) {

            $file = $_FILES['jabatan']['tmp_name'];

            // Medapatkan ekstensi file csv yang akan diimport.
            $ekstensi  = explode('.', $_FILES['jabatan']['name']);

            // Tampilkan peringatan jika submit tanpa memilih menambahkan file.
            if (empty($file)) {
                echo 'File tidak boleh kosong!';
            } else {
                // Validasi apakah file yang diupload benar-benar file csv.
                if (strtolower(end($ekstensi)) === 'csv' || strtolower(end($ekstensi)) == 'xlx') {
                    if ($_FILES["jabatan"]["size"] > 0) {
                        # code...
                        $i = 0;
                        $handle = fopen($file, "r");
                        while (($row = fgetcsv($handle, 2048, ";"))) {
                            // var_dump($row);
                            // die;
                            $i++;

                            if ($i == 1) continue;

                            // var_dump($row[$i][1]);
                            // die;
                            // Data yang akan disimpan ke dalam databse

                            $data = [
                                'kode_jabatan' => $row[1],
                                'nama_jabatan' => $row[2],
                                'tunjangan' => $row[3],
                            ];
                            // var_dump($data);
                            // die;
                            // Simpan data ke database.
                            $this->Jabatan_model->addNewJabatan($data);
                        }

                        fclose($handle);
                        redirect('admincontroller/jabatan');
                    }
                } else {
                    echo 'Format file tidak valid!';
                }
            }
        }
    }

    // public function temukan_penduduk()
    // {

    //     $this->form_validation->set_rules('nik', 'Nik', 'required');
    //     $nik = $this->input->post('nik');
    //     $this->db->like('nik', $nik);
    //     $penduduk = $this->db->get('penduduk_sekarang')->row_array();

    //     if ($this->form_validation->run() == false) {
    //         # code...
    //         echo 'failed';
    //     } else {
    //         $data = [
    //             'id_rw' => $penduduk["id_rw"],
    //             // 'nama' => $penduduk["nama"],
    //             // 'kategori_perpindahan' => $penduduk["kategori_perpindahan"],
    //             // 'kewarganegaraan' => $penduduk["kewarganegaraan"],
    //             // 'jenis_kelamin' => $penduduk["jenis_kelamin"],
    //         ];
    //         var_dump($data);
    //         die;
    //     }
    // }




    // public function update_data_kurang($id)
    // {
    //     $this->form_validation->set_rules('id', 'Id', 'required|integer');
    //     $this->form_validation->set_rules('kode_rw', 'Kode_rw', 'required|integer');
    //     $this->form_validation->set_rules('mati_l', 'Mati_l', 'required|integer');
    //     $this->form_validation->set_rules('mati_p', 'Mati_p', 'required|integer');
    //     $this->form_validation->set_rules('pindah_l', 'Pindah_l', 'required|integer');
    //     $this->form_validation->set_rules('pindah_p', 'Pindah_p', 'required|integer');
    //     $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|integer');
    //     $rw = $this->input->post('kode_rw');
    //     $mati_l = $this->input->post('mati_l');
    //     $mati_p = $this->input->post('mati_p');
    //     $pindah_l = $this->input->post('pindah_l');
    //     $pindah_p = $this->input->post('pindah_p');

    //     $dataPengurangan = $this->Model_kurang->ambilSatuData($id);
    //     $dataSekarang = $this->Model_sekarang->ambilSatuData($rw);



    //     $wni_l = $dataSekarang['wni_l'] + 0;
    //     $wni_p = $dataSekarang['wni_p'] + 0;
    //     $wna_l = $dataSekarang['wna_l'] + 0;
    //     $wna_p = $dataSekarang['wna_p'] + 0;
    //     $total = $wni_l + $wni_p + $wna_l + $wna_p;

    //     if ($this->form_validation->run() == false) {
    //         echo "Gagal";
    //         //redirect('Admincontroller/input_data');
    //     } else {

    //         $jumlah = $mati_l + $mati_p + $pindah_l + $pindah_p;
    //         $data = [
    //             'id_rw' => $rw,
    //             'mati_l' => $mati_l,
    //             'mati_p' => $mati_p,
    //             'pindah_l' => $pindah_l,
    //             'pindah_p' => $pindah_p,
    //             'jumlah' => $jumlah
    //         ];
    //         $this->Model_kurang->update_data_kurang($id, $data);

    //         $total = $dataSekarang['jumlah'] + $dataPengurangan['jumlah'] - $jumlah;


    //         $dataSekarang = [
    //             'wni_l' => $wni_l,
    //             'wni_p' => $wni_p,
    //             'wna_l' => $wna_l,
    //             'wna_p' => $wna_p,
    //             'jumlah' => $total
    //         ];

    //         // var_dump($total);
    //         // die;

    //         $this->Model_sekarang->perbaruiDataSekarang($rw, $dataSekarang);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
    //                	Data Berhasil Dirubah!
    //               </div>');
    //         redirect('admincontroller/data_pengurangan_penduduk');
    //     }
    // }

    // not yet

    public function delete_data_kurang($id, $rw)
    {
        /**
         * saat data pengurangan dihapus maka data penduduk sekarang 
         * akan ditambahkan dengan data pengurang untuk mengembalikan data 
         * ke kondisi seperti sebelum data dikurangi
         */

        $dataDipilih = $this->Model_sekarang->ambilSatuData($rw);
        $dataPengurang = $this->Model_kurang->ambilSatuData($id);


        $id_rw = $dataDipilih['id_rw'];
        $wni_l = $dataDipilih['wni_l'];
        $wni_p = $dataDipilih['wni_p'];
        $wna_l = $dataDipilih['wna_l'];
        $wna_p = $dataDipilih['wna_p'];

        $jumlah = $dataDipilih['jumlah'] + $dataPengurang['jumlah'];

        $data = [
            'id_rw' => $id_rw,
            'wni_l' => $wni_l,
            'wni_p' => $wni_p,
            'wna_l' => $wna_l,
            'wna_p' => $wna_p,
            'jumlah' => $jumlah,
        ];

        $this->Model_sekarang->perbaruiDataSekarang($rw, $data);
        // var_dump($jumlah);
        // die;
        $this->Model_kurang->delete_data_kurang($id);
        $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
                   	Data Berhasil Dihapus!
                  </div>');
        redirect('admincontroller/data_pengurangan_penduduk');
    }

























    // public function tambah_data_awal()
    // {
    //     $this->form_validation->set_rules('kode_rw', 'Kode_rw', 'required|integer');
    //     $this->form_validation->set_rules('wni_l', 'Wni_l', 'required|integer');
    //     $this->form_validation->set_rules('wni_p', 'Wni_p', 'required|integer');
    //     $this->form_validation->set_rules('wna_l', 'Wna_l', 'required|integer');
    //     $this->form_validation->set_rules('wna_p', 'Wna_p', 'required|integer');

    //     if ($this->form_validation->run() == false) {
    //         echo "Gagal";
    //         //redirect('Admincontroller/input_data');
    //     } else {
    //         $rw = $this->input->post('kode_rw');
    //         $wni_l = $this->input->post('wni_l');
    //         $wni_p = $this->input->post('wni_p');
    //         $wna_l = $this->input->post('wna_l');
    //         $wna_p = $this->input->post('wna_p');
    //         $jumlah = $wni_l + $wni_p + $wna_l + $wna_p;
    //         $data = [
    //             'id_rw' => $rw,
    //             'wni_l' => $wni_l,
    //             'wni_p' => $wni_p,
    //             'wna_l' => $wna_l,
    //             'wna_p' => $wna_p,
    //             'jumlah' => $jumlah
    //         ];
    //         $this->Model_awal->input_data('penduduk_awal_pencatatan', $data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
    //                	Data Berhasil Ditambahkan!
    //               </div>');
    //         redirect('Admincontroller/data_awal');
    //     }
    // }





    // public function update_data_awal($id)
    // {
    //     $this->form_validation->set_rules('id', 'Id', 'required|integer');
    //     $this->form_validation->set_rules('kode_rw', 'Kode_rw', 'required|integer');
    //     $this->form_validation->set_rules('wni_l', 'Wni_l', 'required|integer');
    //     $this->form_validation->set_rules('wni_p', 'Wni_p', 'required|integer');
    //     $this->form_validation->set_rules('wna_l', 'Wna_l', 'required|integer');
    //     $this->form_validation->set_rules('wna_p', 'Wna_p', 'required|integer');
    //     $this->form_validation->set_rules('jumlah', 'Jumlah', 'required|integer');

    //     if ($this->form_validation->run() == false) {
    //         echo "Gagal";
    //         //redirect('Admincontroller/input_data');
    //     } else {
    //         $rw = $this->input->post('kode_rw');
    //         $wni_l = $this->input->post('wni_l');
    //         $wni_p = $this->input->post('wni_p');
    //         $wna_l = $this->input->post('wna_l');
    //         $wna_p = $this->input->post('wna_p');
    //         $jumlah = $wni_l + $wni_p + $wna_l + $wna_p;
    //         $data = [
    //             'id_rw' => $rw,
    //             'wni_l' => $wni_l,
    //             'wni_p' => $wni_p,
    //             'wna_l' => $wna_l,
    //             'wna_p' => $wna_p,
    //             'jumlah' => $jumlah
    //         ];
    //         $this->Model_awal->update_data_awal($id, $data);
    //         $this->session->set_flashdata('message', '<div class="alert alert-success text-center" role="alert">
    //                	Data Berhasil Dirubah!
    //               </div>');
    //         redirect('admincontroller/data_awal');
    //     }
    // }

    // public function delete_data_awal($id)
    // {
    //     $this->Model_awal->delete_data_awal($id);
    //     $this->session->set_flashdata('message', '<div class="alert alert-danger text-center" role="alert">
    //                	Data Berhasil Dihapus!
    //               </div>');
    //     redirect('admincontroller/data_awal');
    // }
}
