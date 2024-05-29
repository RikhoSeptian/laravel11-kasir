<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Product</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="{{ url('/dashboard') }}">Navbar</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/product') }}">Product</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('/product') }}">Transaksi</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <div class="card">
        <h5 class="card-header bg-info"></h5>
        <div class="card-body">
            <p><img class="rounded" src="{{ asset('images/' . $products->gambar) }}" width="50"></p>
            <input type="hidden" name="kode_menu1" value="">
            <table class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>Produk</th>
                        <th>Kategori</th>
                        <th>Harga</th>
                        <th>Status</th>
                        <th>Qty</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $products->nama }}</td>
                        <td>{{ $products->kategori }}</td>
                        <td>Rp. {{ $products->harga }}</td>
                        <td>{{ $products->status == '1' ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                        <td class="card-text"><input min="0" type="number" name="qty.{{ $products->id }}"></td>
                        <td>
                            <a class="btn btn-warning" title="Edit" href="edit{{ $products->kode_menu }}">
                                Pesan
                            </a>
                            <a class="btn btn-danger" title="Hapus" href="hapus.php" onclick="return confirm('Ingin Menghapus Menu?')">
                                Delete
                            </a>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
