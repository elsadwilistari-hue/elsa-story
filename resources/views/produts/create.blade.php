<!DOCTYPE html>

<html>
<head>
    <title>Tambah Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

```
<h2>Tambah Produk Tas</h2>

<form action="{{ route('products.store') }}" method="POST">

    @csrf

    <div class="mb-3">
        <label>Nama Tas</label>
        <input type="text" name="nama_tas" class="form-control">
    </div>

    <div class="mb-3">
        <label>Kategori</label>
        <input type="text" name="kategori" class="form-control">
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number" name="harga" class="form-control">
    </div>

    <div class="mb-3">
        <label>Stok</label>
        <input type="number" name="stok" class="form-control">
    </div>

    <div class="mb-3">
        <label>Warna</label>
        <input type="text" name="warna" class="form-control">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control"></textarea>
    </div>

    <button type="submit" class="btn btn-success">
        Simpan
    </button>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">
        Kembali
    </a>

</form>
```

</div>

</body>
</html>
