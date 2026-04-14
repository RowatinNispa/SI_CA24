<h2>Data Anggota</h2>

<a href="<?= base_url('anggota/tambah') ?>" class="btn btn-primary">+ Tambah</a>

<table border="1" cellpadding="10">
    <tr>
        <th>No</th>
        <th>No Anggota</th>
        <th>Nama</th>
        <th>Alamat</th>
        <th>Telepon</th>
        <th>Email</th>
        <th>Aksi</th>
    </tr>

    <?php $no=1; foreach($anggota as $a){ ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?=$a->id; ?></td>
        <td><?=$a->nama; ?></td>
        <td><?=$a->alamat; ?></td>
        <td><?=$a->no_hp; ?></td>
        <td><?=$a->email; ?></td>
        <td>
            <a href="<?= base_url('anggota/edit/'.$a->id) ?>">Edit</a>
            <a href="<?= base_url('anggota/hapus/'.$a->id) ?>" onclick="return confirm('Yakin hapus?')">Hapus</a>
        </td>
    </tr>
    <?php } ?>
</table>