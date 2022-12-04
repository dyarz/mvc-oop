<?php
class About extends Controller
{
  public function index($nama = 'Nama', $pekerjaan = 'Pekerjaan', $umur = 30)
  {
    # code...
    $data['nama'] = $nama;
    $data['pekerjaan'] = $pekerjaan;
    $data['umur'] = $umur;
    $data['judul'] = "About Me";
    $this->view('template/header', $data);

    $this->view('about/index', $data);

    $this->view('template/footer');
  }
  public function page()
  {
    $data['judul'] = "My Pages";
    $this->view('template/header', $data);
    $this->view('about/page');
    $this->view('template/footer');
  }
}
