<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    {{-- bootstrap css --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css">
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama </th>
                                        <th>Alamat</th>
                                        <th>Pendidikan</th>
                                        <th>Telepon</th>
                                        <th>Generate</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($dataDiri as $item)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $item->nama }}</td>
                                            <td>{{ $item->alamat }}</td>
                                            <td>{{ $item->pendidikan }}</td>
                                            <td>{{ $item->telepon }}</td>
                                            <td><a href="{{ route('generate', $item->id) }}"
                                                    class="btn btn-warning">Generate</a></td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>

                    </div>
                    <div class="container">
                        <div class="row">
                            <div class="card">
                                <div class="card-body">

                                </div>
                            </div>
                        </div>
                    </div>
                    <form action="{{ route('datadiri.store') }}" method="post">
                        @csrf
                        <table class="table table-bordered">
                            <tr>
                                <td>Nama</td>
                                <td><input type="text" name="nama" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><input type="text" name="alamat" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Pendidikan</td>
                                <td><input type="text" name="pendidikan" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>Telepon</td>
                                <td><input type="text" name="telepon" class="form-control"></td>
                            </tr>
                            <tr>
                                <td>&nbsp;</td>
                                <td><button type="submit" class="btn btn-primary">simpan</button></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
