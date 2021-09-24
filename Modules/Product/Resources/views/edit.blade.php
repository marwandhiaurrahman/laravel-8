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
                    <h3 class="card-title">Input Data Produk</h3>
                </div>
                {!! Form::model($product, ['method' => 'PATCH', 'route' => ['product.update', $product], 'files' => false]) !!}
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
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputName">Nama Produk</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'inputName', 'placeholder' => 'Nama Produk', 'autofocus', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Deskripsi Produk</label>
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3, 'id' => 'inputDescription', 'placeholder' => 'Deskripsi Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inpurReview">Review Produk</label>
                        {!! Form::textarea('review', null, ['class' => 'form-control', 'rows' => 3, 'id' => 'inpurReview', 'placeholder' => 'Review Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputKategori">Kategori Produk</label>
                        {!! Form::select('category', $categoris->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'inputKategori', 'placeholder' => 'Nama Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputHarga">Harga Produk</label>
                        {!! Form::number('price', null, ['class' => 'form-control', 'id' => 'inputHarga', 'placeholder' => 'Harga Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputStok">Stok Produk</label>
                        {!! Form::number('stock', null, ['class' => 'form-control', 'id' => 'inputStok', 'placeholder' => 'Stok Produk', 'required']) !!}
                    </div>

                    {{-- <input type="checkbox" name="acceptRules" class="inline checkbox" id="checkbox1" value="false"> --}}
                    <p id="checkbox-value"> </p>
                    <div class="form-group">
                        <label for="checkbox1">Status Publish</label><br>
                        <input name="status" type="checkbox" id="checkbox1" value="false" checked hidden>
                        <input name="status" type="checkbox" id="checkbox1" value="true"
                            {{ $product->status == 'true' ? 'checked' : '' }} data-size="small" data-toggle="toggle">
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
