<div class="container mt-4">

    <div class="row">
      <div class="col-lg-6">
        <?php Flasher::flash(); ?>
      </div>
    </div>

    <div class="row">
      <div class="col-lg-6">
        <form action="<?= BASEURL ?>/mahasiswa/cari" method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control" name="keyword" id="keyword" placeholder="cari mahasiswa.." aria-label="Recipient's username" aria-describedby="button-addon2" nama="keyword" id="keyword">
          <div class="input-group-append">
            <button class="btn btn-outline-secondary" type="submit" id="tombolCari" autocomplete="off">Cari</button>
          </div>
        </div>
        </form>
      </div>
    </div>

    <div class="row">
        <div class="col-6">
            <!-- Button trigger modal -->
            <button type="button" class="btn btn-primary mb-3 tombolTambahData" data-toggle="modal" data-target="#formModal">
                Tambah data mahasiswa
            </button>
            <h3>Daftar Mahasiswa</h3>
            <ul class="list-group">
                <?php foreach($data['mhs'] as $mhs){ ?> 
                    <li class="list-group-item">
                        <?= $mhs['nama']; ?>
                        <a href="<?= BASEURL; ?>/mahasiswa/hapus/<?= $mhs['id']; ?>" class="badge badge-danger badge-pill float-right ml-1" onclick="return confirm('yakin?')">hapus</a>
                        <a href="<?= BASEURL;?>/mahasiswa/ubah/<?= $mhs['id']; ?>" class="badge badge-warning badge-pill float-right ml-1 tampilModalUbah" data-target="#formModal" data-toggle="modal" data-id="<?= $mhs['id']; ?>">ubah</a>
                        <a href="<?= BASEURL; ?>/mahasiswa/detail/<?= $mhs['id']; ?>" class="badge badge-primary badge-pill float-right ml-1">detail</a>
                    </li>
                <?php } ?>
            </ul>
        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="formModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="formModalLabel">Tambah Data Mahasiswa</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form action="<?= BASEURL; ?>/mahasiswa/tambah" method="post">
            <input type="hidden" name="id" id="id">
            <div class="form-group">
                <label for="nama">Nama</label>
                <input type="text" class="form-control" id="nama" name="nama">
            </div>
            <div class="form-group">
                <label for="nrp">Nrp</label>
                <input type="text" class="form-control" id="nrp" name="nrp">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="jurusan">Pilih jurusan</label>
                <select class="form-control" name="jurusan" id="jurusan">
                    <option value="rpl">RPL</option>
                    <option value="dkv">DKV</option>
                    <option value="akt">AKT</option>
                    <option value="pms">PMS</option>
                    <option value="anm">Animashit</option>
                </select>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary ">Tambah Data</button>
        </form>
      </div>
    </div>
  </div>
</div>