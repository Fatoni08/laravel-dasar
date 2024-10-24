<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
        integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">

    <title>Tambah Produk</title>
</head>

<body>
    <br><br><br>
    <div class="container">
        <h3>Tambah Produk</h3>
        <form action="{{ url('/store') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="input1">Nama Produk</label>
                <input type="text" class="form-control" id="input1" name="name">
            </div>
            <div class="form-group">
                <label for="input2">Deskripsi</label>
                <input type="text" class="form-control" id="input2" name="description">
            </div>
            <div class="form-group">
                <label for="input3">Harga Produk</label>
                <input type="text" class="form-control" id="input3" name="price">
            </div>
            <button class="btn btn-success mt-4" type="submit">Submit</button>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-fQybjgWLrvvRgtW6bFlB7jaZrFsaBXjsOMm/tB9LTS58ONXgqbR9W8oWht/amnpF" crossorigin="anonymous">
    </script>
</body>

</html>