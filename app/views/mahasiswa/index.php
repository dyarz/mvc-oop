<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6">
      <?php if(isset($_)) Flasher::flash(); ?>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">
      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Mahasiswa</button>
      <br>
      <br>
      <h3>Daftar Mahasiswa</h3>
      <?php foreach ($data['mhs'] as $mhs) : ?>
        <div class="list-group list-group-horizontal">
          <li class="list-group-item list-group-item-action list-group-item-primary">
            <?= $mhs['nama']; ?>
          </li>
          <li class="list-group-item list-group-item-info">
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge rounded-pill btn btn-info stretched-link">Detail</a>

          </li>
          <li class="list-group-item list-group-item-danger">
            <a class="tombol-hps badge rounded-pill  btn btn-danger stretched-link" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>">Hapus</a>
          </li>
        </div>
      <?php endforeach; ?>

    </div>
  </div>
</div>
<div class=" modal fade" id="formModal" tabindex="-1" aria-labelledby="judulModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Form Tambah Data Mahasiswa</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="POST">
          <div class="mb-3">
            <label for="nama" class="col-form-label">Nama</label>
            <input type="text" class="form-control" id="nama" name="nama" autofocus autocomplete="off" required>
          </div>
          <div class="mb-3">
            <label for="nim" class="col-form-label">NIM</label>
            <input type="number" class="form-control" id="nim" name="nim" required>
          </div>
          <div class="mb-3">
            <label for="email" class="col-form-label">Email</label>
            <input type="email" class="form-control" id="email" name="email" autocomplete="off" required>
          </div>
          <div class="mb-3">
            <label for="jurusan" class="col-form-label">Jurusan</label>
            <select class="form-select" aria-label="Default select example" name="jurusan">
              <option selected>Pilih Jurusan</option>
              <option value="Teknik Informatika">Teknik Informatika</option>
              <option value="Teknik Industri">Teknik Industri</option>
              <option value="Teknik Kimia">Teknik Kimia</option>
              <option value="Matematika Industri">Matematika Industri</option>
              <option value="Sastra Inggris">Sastra Inggris</option>
            </select>
          </div>


      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>