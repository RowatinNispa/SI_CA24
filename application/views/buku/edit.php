<div class="container-fluid">
<h2 class="h3 mb-4 text-gray-800">Edit buku</h2>

<div class="card shadow">
    <div class="card body">
        <form method="post" action="<?= site_url('buku/update/'.$buku->id); ?>">
    <div class="form-group">
        <label>Judul</label><br>  
        <input type="text" name="judul" class="form-control" value="<?= $buku->judul; ?>" required> 
    </div>
    <div class="form-group">
        <label>Penulis</label><br>  
        <input type="text" name="penulis" class="form-control" value="<?= $buku->penulis; ?>" required> 
    </div>
    <div class="form-groud">
        <label>Penerbit</label><br>  
        <input type="text" name="penerbit" class="form-control" value="<?= $buku->penerbit; ?>" required> 
    </div>
</div>

    <button type="submit" class="btn btn-primary">update</button>
    <a href="<?= site_url('buku');?>" class="btn btn-secondary">Kembali</a>
</form>
            </div>
        </div>
    </div>
</div>