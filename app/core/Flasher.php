<?php
class Flasher
{
  public static function setFlash($pesan, $aksi, $type)
  {

    $_SESSION['flash'] = [
      'pesan' => "$pesan",
      'aksi' => "$aksi",
      'type' => $type
    ];
  }
  public static function flash()
  {
    # code...
    if (isset($_SESSION['flash'])) {

      echo '<div class="flash-data" data-pesan="' . $_SESSION['flash']['pesan'] . '" 
            data-aksi="' . $_SESSION['flash']['aksi'] . '"
            data-type="' . $_SESSION['flash']['type'] . '"></div>';
      //   echo '<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible" role="alert">
      //     <div> <strong >Data Mahasiswa ' . $_SESSION['flash']['pesan'] . '</strong> ' . $_SESSION['flash']['aksi'] . '</div>
      //  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      //  </div>';

      unset($_SESSION['flash']);
    } else {
      echo '<div class="flash-data" data-pesan="" data-aksi="" data-type=""></div>';
    }
  }
}
