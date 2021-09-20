@extends('adminlte::page')

@section('title', 'Data Ukuran Produk')

@section('content_header')
    <h1>Data Ukuran Produk</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Input Ukuran Produk</h3>
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
                {{ Form::open(['route' => ['size.store', $product]]) }}
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
                        <label class="col-sm-2 col-form-label" for="inputSize">Ukuran Produk</label>
                        <div class="col-sm-10 col-md-6 col-lg-4">
                            {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'inputSize', 'placeholder' => 'Masukkan Ukuran Produk']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-sm-2 col-form-label" for="inputLabel">Label Ukuran</label>
                        <div class="col-sm-10 col-md-6 col-lg-4">
                            {!! Form::text('label', null, ['class' => 'form-control', 'id' => 'inputLabel', 'placeholder' => 'Masukkan Label Ukuran']) !!}
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-sm-10 col-md-6 col-lg-4 offset-sm-2">
                            <button type="submit" class="btn btn-success">Simpan</button>
                            <a href="{{ route('product.index') }}" class="btn btn-danger">Kembali</a>
                        </div>
                    </div>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Detail Ukuran</h3>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-striped" id="DataTable">
                        <thead>
                            <tr>
                                <th width="60">No.</th>
                                <th>Nama Ukuran</th>
                                <th width="90">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($sizes as $item)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $item->name }} ( {{ $item->label }} )</td>
                                    <td>
                                        <form action="{{ route('size.destroy', [$product, $item]) }}" method="POST">
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

@section('js')
    <!-- DataTables -->
    <script>
        $(function() {
            $('#DataTable').DataTable({

            });
        });
    </script>
@stop
