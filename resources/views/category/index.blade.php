@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-header">
                        <h5>Halaman Category</h5>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('category.store') }}" method="post">
                            @csrf
                            @method('POST')
                            <div class="form-group">
                                <label for="">Nama Kategori</label>
                                <input type="text" name="namacategory" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="">description</label>
                                <input type="text" name="description" class="form-control">
                            </div>
                            <button type="submit" class="btn btn-primary mt-3">Save</button>
                        </form>

                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h5>Data Kategori</h5>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama Kategori</th>
                                        <th>Deskripsi</th>
                                        <th>Tools</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($category as $ct)
                                        <tr>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $ct->namacategory }}</td>
                                            <td>{{ $ct->description }}</td>
                                            <td>&nbsp;</td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="4" class="text-center">Data Belum Ada</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
