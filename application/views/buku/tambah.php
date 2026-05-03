<div class="container-fluid">
    <h2 class="h3 mb-4 text-gray-800">Tambah Buku</h2>

    <div class="card shadow">
        <div class="card-body">
            <div class="table-responsive">

<form method="post" action="<?= site_url('buku/simpan');?>">

    <div class="form-group mb-3">
        <label>Judul</label>
        <input type="text" name="judul" class="form-control" required>
    </div>

    <div class="form-group mb-3">
        <label>Penulis</label>
        <textarea name="penulis" class="form-control" required></textarea>
    </div>

    <div class="form-group mb-3">
        <label>Penerbit</label>
        <input type="text" name="penerbit" class="form-control" required>
    </div>

    <button type="submit" class="btn btn-primary">Simpan</button>
    <a href="<?= site_url('buku');?>" class="btn btn-secondary">Kembali</a>

</form>

            </div>
        </div>
    </div>
</div>