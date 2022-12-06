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
    if (isset($_SESSION['flash'])) { ?>
      <div class="alert alert-<?= $_SESSION['flash']['type'] ?> alert-dissmissible fade show" role="alert">

        <?= $_SESSION['flash']['pesan'] ?> <?= $_SESSION['flash']['aksi'] ?>
        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close">

        </button>
      </div>

    <?php
      unset($_SESSION['flash']);
    } ?>
<?php }
}
