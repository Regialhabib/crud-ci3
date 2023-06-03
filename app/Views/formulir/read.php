<?php $this->extend('layout/template'); ?>

<?php $this->section('content'); ?>
<div class="container">
  <a href="/regi">
    <button class="btn btn-primary ">Tambah Data</button>
    
  </a>
  <a href="/regi/read"><button class="btn btn-success none" id="kembali">Kembali</button></a>
  <a href="/regi/read"><button class="btn btn-primary   ">Kembali</button></a>
  <table class="table mt-3 table-bordered">
    <form action="" method="post">
      <div class="col-4 d-flex mt-4">
        <input type="search" name="keyword" class="form-control me-2" placeholder="CARI"><button type="submit" name="submit" class="btn btn-outline-primary"> Cari</button>
      </div>
    </form>
  
  <table class="table mt-3 table-bordered">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nama</th>
        <th scope="col">Nim</th>
        <th scope="col">Email</th>
        <th>Aksi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 1; ?>
      <?php foreach ($dataForm as $data) : ?>
        <tr>
          <th scope="row"><?= $no++ ?></th>
          <td><?= $data['nama'] ?></td>
          <td><?= $data['nim'] ?></td>
          <td><?= $data['email'] ?></td>
          <td><a href="/regi/update/<?= $data['id'] ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="blue" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit">
                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
              </svg></a> | <a href="/regi/delete/<?= $data['id'] ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="blue" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2">
                <polyline points="3 6 5 6 21 6"></polyline>
                <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                <line x1="10" y1="11" x2="10" y2="17"></line>
                <line x1="14" y1="11" x2="14" y2="17"></line>
              </svg></a> | <a href="/regi/detail/<?= $data['id'] ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="blue" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-eye">
                <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                <circle cx="12" cy="12" r="3"></circle>
              </svg></a></td>
        </tr>
      <?php endforeach; ?>

    </tbody>
  </table>
</div>
<?php $this->endSection(); ?>