<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Dashboard</title>

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
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            Transaksi
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="">Buat Transaksi</a></li>
                            <li><a class="dropdown-item" href="{{ url('/laporan') }}">Laporan</a></li>
                        </ul>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    <div class="card">
        <div class="card-header">
            <h3>Product
                <a href="{{ url('/product') }}" class="btn btn-primary btn-sm float-end">Add Product</a>
            </h3>
        </div>
        <div class="card-body">
            <table class="table table-bordered table-striped">
                <h1 align="center">Bukti Pembayaran</h1>
                <table class="data-pelanggan">
                    <tr>
                        <td>Atas Nama</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>Waktu</td>
                        <td>:</td>
                        <td></td>
                    </tr>
                </table><br>
                <table class="daftar-pesanan" cellpadding="5">
                    <tr>
                        <th>Daftar Menu</th>
                        <th>Harga</th>
                        <th>Qty</th>
                        <th>Total</th>
                    </tr>
                    @forelse ($products as $product)
                        <tr>
                            <td>{{ $product->kode_menu }}</td>
                            <td>{{ $product->nama }}</td>
                            <td>Rp. {{ $product->harga }}</td>
                            <td>{{ $product->status == '1' ? 'Tersedia' : 'Tidak Tersedia' }}</td>
                            <td>
                                <a href="{{ url('/pesan' . $product->id) }}"
                                    class="btn btn-sm btn-secondary">Pesan</a>
                                <a href="{{ url('admin/products/' . $product->id . '/edit') }}"
                                    class="btn btn-sm btn-success">Edit</a>
                                <a href="{{ url('admin/products/' . $product->id . '/delete') }}"
                                    onclick="return confirm('Are you sure, you want to delete this data?')"
                                    class="btn btn-sm btn-danger">Delete</a>
                            </td>
                        </tr>
                    @endforeach
                </table><br>
                <table class="pembayaran" cellpadding="3">
                    <tr>
                        <th>Total Semuanya</th>
                        <th>:</th>
                        <th>Rp.</th>
                    </tr>
                    <tr>
                        <th>Bayar</th>
                        <th>:</th>
                        <th>Rp.</th>
                    </tr>
                    <tr>
                        <th>Kembali</th>
                        <th>:</th>
                        <th>Rp.</th>
                    </tr>
                    <tr>
                        <th>Bayar</th>
                        <th>:</th>
                        <th>Pembayaran Masih Kurang</th>
                    </tr>
                </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
