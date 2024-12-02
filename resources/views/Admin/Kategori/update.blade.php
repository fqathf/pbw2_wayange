<form action="{{ route('admin.kategori.update', $kategori->id_k) }}" method="POST">
    @csrf
    @method('PUT')

    <label for="nama">Nama Kategori:</label>
    <input type="text" name="nama_kategori" id="nama" value="{{ $kategori->nama_kategori }}" required>

    <button type="submit">Update</button>
</form>
