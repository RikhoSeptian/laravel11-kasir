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

    <div class="container">
        <h1>Tambah Data Masakan</h1>
        <a class="btn btn-success fw-bold" href="index.php">Kembali</a>
        <form action="{{ route('product.store') }}" method="POST">
            @method('POST')
            @csrf
            <div class="table-responsive-md my-3">
                <table class="table">
                    <tr>
                        <td><label for="nama">Name</label></td>
                        <td>:</td>
                        <td><input autocomplete="off" type="text" name="name" id="nama" required></td>
                    </tr>
                    <tr>
                        <td><label for="description">Description</label></td>
                        <td>:</td>
                        <td><textarea name="description" id="description" cols="23" required></textarea></td>
                    </tr>
                    <tr>
                        <td><label for="price">Price</label></td>
                        <td>:</td>
                        <td><input min="0" type="number" name="price" id="price" required></td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td><button class="btn btn-primary">Tambah</button></td>
                    </tr>
                </table>
            </div>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>
