<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Laporan extends MY_Controller
{

  public function __construct()
  {
    parent::__construct();
    $this->load->model('Laporan_Model');
    not_admin();
  }

  public function index()
  {

    $data['judul'] = 'Generate Laporan';
    $data['subjudul'] = '';
    $data['menu'] = $this->subJudul();
    $data['navbar_admin'] = $this->navBarAdmin();
    $user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
    $data['nama'] = $user['nama_petugas'];


    $this->load->view('templete/header', $data);
    $this->load->view('templete/sidebar', $data);
    $this->load->view('v_index', $data);
    $this->load->view('templete/footer');
    $this->load->view('templete/script');
  }

  public function periode()
  {

    $data['judul'] = 'Generate Laporan';
    $data['subjudul'] = '';
    $data['menu'] = $this->subJudul();
    $data['navbar_admin'] = $this->navBarAdmin();
    $user = $this->Crud_Model->getWhere('tb_petugas', 'id_petugas', $this->session->userdata('id_petugas'));
    $data['nama'] = $user['nama_petugas'];
    $data['tahun'] = $this->Laporan_Model->getTahun();
    $data['bulan'] = $this->Laporan_Model->getBulan();


    $this->load->view('templete/header', $data);
    $this->load->view('templete/sidebar', $data);
    $this->load->view('v_periode', $data);
    $this->load->view('templete/footer');
    $this->load->view('templete/script');
  }

  ////GENERATE LAPORAN/////

  public function semua_laporan()
  {

    $data['pembayaran'] = $this->Laporan_Model->getAll();
    $data['total'] = $this->Laporan_Model->getTotal();

    $mpdf = new \Mpdf\Mpdf();
    $html =  $this->load->view('semua_laporan_pdf', $data, TRUE);
    $mpdf->WriteHTML($html);
    $mpdf->Output('semua_laporan_spp.pdf', 'I');
  }


  public function laporan_bulanan()
  {
    $bulan = $this->input->post('bulan', true);
    $tahun = $this->input->post('tahun', true);

    $periode = $bulan . ' ' . $tahun;

    $data['pembayaran'] = $this->Laporan_Model->getLaporanBulanan($periode);
    $data['total'] = $this->Laporan_Model->getTotalBulanan($periode);
    $data['tahun'] = $periode;

    if ($data['pembayaran']) {

      $mpdf = new \Mpdf\Mpdf();
      $html =  $this->load->view('laporan_bulanan_pdf', $data, TRUE);
      $mpdf->WriteHTML($html);
      $mpdf->Output('laporan_bulanan_spp.pdf', 'I');
    } else {
      $this->load->view('v_tidak_ada_laporan');
    }
  }

  public function laporan_tahunan()
  {
    $tahun = $this->input->post('tahun', true);

    $data['pembayaran'] = $this->Laporan_Model->getLaporanTahunan($tahun);
    $data['total'] = $this->Laporan_Model->getTotalTahunan($tahun);

    $data['tahun'] = $tahun;


    $mpdf = new \Mpdf\Mpdf();
    $html =  $this->load->view('laporan_tahunan_pdf', $data, TRUE);
    $mpdf->WriteHTML($html);
    $mpdf->Output('laporan_tahunan_spp.pdf', 'I');
  }
}
