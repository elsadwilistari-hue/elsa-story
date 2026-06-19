<!DOCTYPE html>

<html>
<head>
    <title>Edit Produk</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

```
<h2>Edit Produk Tas</h2>

<form action="{{ route('products.update',$product->id) }}" method="POST">

    @csrf
    @method('PUT')

    <div class="mb-3">
        <label>Nama Tas</label>
        <input type="text"
               name="nama_tas"
               class="form-control"
               value="{{ $product->nama_tas }}">
    </div>

    <div class="mb-3">
        <label>Kategori</label>
        <input type="text"
               name="kategori"
               class="form-control"
               value="{{ $product->kategori }}">
    </div>

    <div class="mb-3">
        <label>Harga</label>
        <input type="number"
               name="harga"
               class="form-control"
               value="{{ $product->harga }}">
    </div>

    <div class="mb-3">
        <label>Stok</label>
        <input type="number"
               name="stok"
               class="form-control"
               value="{{ $product->stok }}">
    </div>

    <div class="mb-3">
        <label>Warna</label>
        <input type="text"
               name="warna"
               class="form-control"
               value="{{ $product->warna }}">
    </div>

    <div class="mb-3">
        <label>Deskripsi</label>
        <textarea name="deskripsi" class="form-control">{{ $product->deskripsi }}</textarea>
    </div>

    <button type="submit" class="btn btn-primary">
        Update
    </button>

    <a href="{{ route('products.index') }}" class="btn btn-secondary">
        Kembali
    </a>

</form>
```

</div>

</body>
</html>
