<div class="container mt-5">
  <div class="row">
    <div class="col-6">
      <h3>Daftar Mahasiswa</h3>

      <?php foreach ($data['mhs'] as $mhs) : ?>
        <div class="list-group">
          <li class="list-group-item list-group-item-action list-group-item-primary d-flex justify-content-between align-items-start"><?= $mhs['nama']; ?>
            <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge rounded-pill text-bg-primary stretched-link">Detail</a>
          </li>
          </ul>
        <?php endforeach; ?>

        </div>
    </div>
  </div>