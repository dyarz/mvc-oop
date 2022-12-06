<div class="container mt-3">
  <div class="row">
    <div class="col-lg-6">
      <?php Flasher::flash(); ?>
    </div>
    <div class="row mb-4">
      <div class="col-lg-6">
        <button type="button" class="btn btn-primary tombolTambahData" data-bs-toggle="modal" data-bs-target="#formModal">Tambah Data Mahasiswa</button>

      </div>
    </div>
    <div class="row mb-4">
      <div class="col-lg-6">
        <form action="<?= BASEURL; ?>/mahasiswa/cari" method="POST">
          <div class="input-group ">
            <input type="text" class="form-control" placeholder="Cari Mahasiswa" aria-label="Recipient's username" aria-describedby="button-addon2" name="keyword" id="keyword" autocomplete="off">
            <button class="btn btn-primary" type="submit" id="cari" id="tombolCari">Cari</button>
          </div>
        </form>

      </div>
    </div>
  </div>
  <div class="row">
    <div class="col-lg-6">

      <h3>Daftar Mahasiswa</h3>
      <?php foreach ($data['mhs'] as $mhs) : ?>
        <div class="list-group list-group-horizontal">
          <li class="list-group-item list-group-item-action list-group-item-primary">
            <?= $mhs['nama']; ?>
          </li>
          <li class="list-group-item list-group-item-info">
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge rounded-pill btn btn-info stretched-link">Detail</a>

          </li>
          <li class="list-group-item list-group-item-success">
            <a href="<?= BASEURL; ?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge rounded-pill btn btn-success stretched-link tampilModalUbah" data-bs-toggle="modal" data-bs-target="#formModal" data-id=<?= $mhs['id']; ?>>Ubah</a>

          </li>
          <li class="list-group-item list-group-item-danger">
            <a class="tombol-hps badge rounded-pill  btn btn-danger stretched-link" href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" onclick="return confirm('Yakin ?')">Hapus</a>
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
          <input type="hidden" name="id" id="id">
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
            <select class="form-select" aria-label="Default select example" id="jurusan" name="jurusan">
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