<!DOCTYPE html>

<html>
<head>
    <title>ELSA STORE</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">

```
<h2 class="text-center mb-4">ELSA STORE - DATA PRODUK TAS</h2>

<a href="{{ route('products.create') }}" class="btn btn-primary mb-3">
    Tambah Produk
</a>

<table class="table table-bordered">
    <thead class="table-dark">
        <tr>
            <th>No</th>
            <th>Nama Tas</th>
            <th>Kategori</th>
            <th>Harga</th>
            <th>Stok</th>
            <th>Warna</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>

    @foreach($products as $product)
    <tr>
        <td>{{ $loop->iteration }}</td>
        <td>{{ $product->nama_tas }}</td>
        <td>{{ $product->kategori }}</td>
        <td>Rp {{ number_format($product->harga,0,',','.') }}</td>
        <td>{{ $product->stok }}</td>
        <td>{{ $product->warna }}</td>
        <td>

            <a href="{{ route('products.edit',$product->id) }}"
                class="btn btn-warning btn-sm">
                Edit
            </a>

            <form action="{{ route('products.destroy',$product->id) }}"
                  method="POST"
                  style="display:inline">

                @csrf
                @method('DELETE')

                <button type="submit"
                        class="btn btn-danger btn-sm"
                        onclick="return confirm('Yakin ingin menghapus?')">
                    Hapus
                </button>

            </form>

        </td>
    </tr>
    @endforeach

    </tbody>
</table>
```

</div>

</body>
</html>
