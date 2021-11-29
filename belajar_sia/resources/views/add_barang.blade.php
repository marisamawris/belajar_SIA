<!DOCTYPE html>

<html>

<head>

    <meta charset="utf-8" />

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Form Tambah</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" media="screen" href="{{url('css/app.css')}}" />

</head>

<body>

    <form action="{{route('inputData')}}" method="post">

        <div class="row">

            <div class="col-sm-3"></div>

            <div class="col-sm-6">

            <h1 align="center">FORM Tambah Barang</h1>

                <div class="form-group">

                    <label for="" class="label-control">Nama Barang</label>

                    <input type="text" name="nama" class="form-control">

                </div>

                <div class="form-group">

                    <label for="" class="label-control">Jumlah Barang</label>

                    <input type="number" name="jumlah" class="form-control">

                </div>

                <div class="form-group">

                    <label for="" class="label-control">Keterangan</label>

                    <textarea name="keterangan" class="form-control" cols="30" rows="10"></textarea>

                </div>

                {{csrf_field()}}

                <input type="submit" value="Simpan" class="btn btn-primary">

            </div>

        </div>

    </form>

</body>

</html>