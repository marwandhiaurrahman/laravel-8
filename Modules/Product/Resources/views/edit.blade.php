@extends('adminlte::page')

@section('title', 'Edit Produk')

@section('content_header')
    <h1>Edit Produk</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Input data produk</h3>
                </div>
                {!! Form::model($produk, ['method' => 'PATCH', 'route' => ['produk.update', $produk], 'files' => false]) !!}
                <div class="card-body">
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="inputNama">Nama Produk</label>
                        <div class="col-sm-10 col-md-6 col-lg-6">
                            {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama', 'id' => 'inputNama', 'required', 'autofocus']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="inputRingkasan">Ringkasan</label>
                        <div class="col-sm-10 col-md-6 col-lg-6">
                            {!! Form::textarea('ringkasan', null, ['class' => 'form-control', 'rows' => 3, 'id' => 'inputRingkasan', 'placeholder' => 'Masukan Ringkasan', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="inputKategori">Kategori Produk</label>
                        <div class="col-sm-10 col-md-6 col-lg-6">
                            {!! Form::select('kategori_id', $kategoris->pluck('name', 'id'), null, ['class' => 'form-control', 'placeholder' => 'Pilih Produk', 'required', 'id' => 'inputKategori']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="inputHarga">Harga</label>
                        <div class="col-sm-10 col-md-6 col-lg-4">
                            {!! Form::number('harga', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Harga', 'id' => 'inputHarga', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="inputStok">Stok</label>
                        <div class="col-sm-10 col-md-6 col-lg-4">
                            {!! Form::number('stok', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Stok', 'id' => 'inputStok', 'required']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="inputDiskon">Diskon</label>
                        <div class="col-sm-10 col-md-6 col-lg-4">
                            {!! Form::number('diskon', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Diskon', 'id' => 'inputDiskon']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 form-label" for="inputPublish">Publish</label>
                        <div class="col-sm-10">
                            {!! Form::checkbox('publish', true, ['class' => 'form-check-input', 'id' => 'inputPublish']) !!}
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
    </div>
@endsection
