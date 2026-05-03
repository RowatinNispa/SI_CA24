<div class="container-fluid">

<h2 class="h3 mb4 text-gray-800">Data buku</h2>

<a href="<?= site_url('buku/tambah'); ?>" class="btn btn-primary mb-3">Tambah</a>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
<table class="table table-bordered" witdh="100%" cellspasing="0" id="dataTable">
    <thead>
    <tr>
        <th>No</th>
        <th>Judul</th>
        <th>Penulis</th>
        <th>Penerbit</th>
        <th>Aksi</th>
    </tr>
    </thead>
    <tbody>
    <?php $no=1; foreach($buku as $b): ?>
        <tr>
            <td><?= $no++; ?></td>
            <td><?= $b->judul; ?></td>
            <td><?= $b->penulis; ?></td>
            <td><?= $b->penerbit; ?></td>
            <td>
                <a href="<?= site_url('buku/edit/'.$b->id); ?>" class="btn btn-warning btn-sm">Edit</a>
                <a href="<?= site_url('buku/hapus/'.$b->id); ?>"
                    onclick="return confirm('Yakin?')" class="btn btn-danger btn-sm">Hapus</a>
            </td>
        </tr>
        <?php endforeach; ?>
    </tbody>
</table>
</div>
</div>
</div>
</div>