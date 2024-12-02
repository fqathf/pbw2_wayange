<form action="{{ route('admin.kategori.store') }}" method="POST">
    @csrf

    <div class="form-group">
        <label for="nama">Nama Kategori</label>
        <input type="text" name="nama_kategori" id="nama" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary">Simpan</button>
</form>
