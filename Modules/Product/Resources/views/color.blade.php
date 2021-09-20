@extends('adminlte::page')

@section('title', 'Data Warna Produk')

@section('content_header')
    <h1>Data Warna Produk</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Input Warna Produk</h3>
                </div>
                @if ($errors->any())
                    <div class="alert alert-danger">
                        <strong>Whoops!</strong> There were some problems with your input.<br><br>
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
                {{ Form::open(['route' => ['color.store', $product]]) }}
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="inputID">ID Produk</label>
                        <div class="input-group col-sm-10 col-md-6 col-lg-4">
                            {!! Form::text('product_id', $product->id, ['class' => 'form-control', 'readonly']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="inputID">Nama Produk</label>
                        <div class="input-group col-sm-10 col-md-6 col-lg-4">
                            {!! Form::text('product_name', $product->name, ['class' => 'form-control', 'readonly']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="inputWarna">Warna Produk</label>
                        <div class="col-sm-10 col-md-6 col-lg-4">
                            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'inputWarna', 'placeholder' => 'Masukkan Warna Produk']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="inputWarna">Kode Warna</label>
                        <div class="col-sm-10 col-md-6 col-lg-4">
                            <div class="input-group my-colorpicker2 colorpicker-element" data-colorpicker-id="2">
                                <input name="code" type="text" class="form-control" data-original-title="" title="" placeholder="Masukan Kode Warna">
                                <div class="input-group-append">
                                    <span class="input-group-text"><i class="fas fa-square"></i></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-sm-10 col-md-6 col-lg-4 offset-sm-2">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{ url()->previous() }}" class="btn btn-danger" required>Kembali</a>
                        </div>
                    </div>

                </div>
                {!! Form::close() !!}
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Detail Warna</h3>
                </div>
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th width="60">No.</th>
                                <th>Nama Warna</th>
                                <th width="90">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($colors as $item)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $item->name }} {{ $item->code }}</td>
                                    <td>
                                        <form action="{{ route('color.destroy', [$product, $item]) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" data-toggle="tooltip" title="Hapus"
                                                class="btn btn-xs btn-danger"
                                                onclick="return confirm('Apakah anda yakin akan menghapus data ini?');"><i
                                                    class="fa fa-trash"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection
