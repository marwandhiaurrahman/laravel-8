@extends('adminlte::page')

@section('title', 'Tambah Produk')

@section('content_header')
    <h1>Tambah Produk</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Input Data Produk</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => false]) !!}
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Nama Produk</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'inputName', 'placeholder' => 'Nama Produk', 'autofocus', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Deskripsi Produk</label>
                        {!! Form::textarea('decription', null, ['class' => 'form-control', 'rows' => 3, 'id' => 'inputDescription', 'placeholder' => 'Deskripsi Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputKategori">Kategori Produk</label>
                        {{-- {!! Form::select('kategori_id', $kategoris->pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Pilih Kategori', 'required', 'id' => 'inputKategori']) !!} --}}
                    </div>
                    <div class="form-group">
                        <label for="inputHarga">Harga Produk</label>
                        {!! Form::number('price', null, ['class' => 'form-control', 'id' => 'inputHarga', 'placeholder' => 'Harga Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputStok">Stok Produk</label>
                        {!! Form::number('stock', null, ['class' => 'form-control', 'id' => 'inputStok', 'placeholder' => 'Stok Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputStatus">Status Publish</label><br>
                        {!! Form::checkbox('publish', true, ['class' => 'form-check-input', 'id' => 'inputPublish']) !!}
                        <input name=namssse id=id type=checkbox checked=checked>
                        <input name="status" type="checkbox" id="inputStatus" data-size="small" checked="true"
                            data-toggle="toggle">
                    </div>
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ url()->previous() }}" class="btn btn-danger" required>Kembali</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('css')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection

@section('js')
    {{-- Toggle Button --}}
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
@endsection
