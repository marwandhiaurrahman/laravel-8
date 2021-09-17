@extends('adminlte::page')

@section('title', 'Data Gambar Produk')

@section('content_header')
    <h1>Data Gambar Produk</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Input Gambar Produk</h3>
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
                <form action="{{ route('gambar.store', $produk->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    {{-- {{ Form::open(array('route' => 'gambar.store', 'enctype' => 'multipart/form-data')) }} --}}
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="inputID">ID Produk</label>
                            <div class="input-group col-sm-10 col-md-6 col-lg-4">
                                {!! Form::text('produk_id', $produk->id, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="inputID">Nama Produk</label>
                            <div class="input-group col-sm-10 col-md-6 col-lg-4">
                                {!! Form::text('name', $produk->name, ['class' => 'form-control', 'readonly']) !!}
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2" for="inputPhoto">Photo</label>
                            <div class="input-group col-sm-10 col-md-6 col-lg-4">
                                <div class="custom-file">
                                    {{-- <input type="file" name="image" class="form-control" placeholder="image"> --}}
                                    {{-- <input type="file" class="custom-file-input" id="exampleInputFile"> --}}
                                    {!! Form::file('gambar', ['class' >= 'custom-file-input', 'id' => 'exampleInputFile']) !!}
                                    {{-- <label class="custom-file-label" for="exampleInputFile"></label> --}}
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-sm-2 col-form-label" for="inputNama">Nama Photo</label>
                            <div class="col-sm-10 col-md-6 col-lg-4">
                                {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'inputNama', 'placeholder' => 'Masukkan Nama Photo']) !!}
                                {{-- <input type="text" name="name" /> --}}
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-10 col-md-6 col-lg-4 offset-sm-2">
                                <button type="submit" class="btn btn-success">Simpan</button>
                                <a href="{{ url()->previous() }}" class="btn btn-danger" required>Kembali</a>
                            </div>
                        </div>
                    </div>
                </form>
                {{-- {!! Form::close() !!} --}}
            </div>
        </div>

        <div class="col-sm-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Detail Gambar</h3>
                </div>
                <div class="card-body">
                    {{-- <? if ($this->session->flashdata('message')) { ?>
            <div class="alert alert-success alert-dismissible js-temporary-alert">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
              <h5><i class="icon fa fa-check"></i> Berhasil!</h5>
              <?= $this->session->flashdata('message') ?>
            </div>
          <? } ?> --}}
                    <table class="table table-bordered table-striped" id="DataTable">
                        <thead>
                            <tr>
                                <th width="60">No.</th>
                                <th>Nama Photo</th>
                                <th width="90">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($gambars as $gambarProduk)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>
                                        <img src="{{ asset('storage/produk-image/' . $gambarProduk->gambar) }}"
                                            alt="{{ $gambarProduk->gambar }}" class="img-thumbnail" width="100">
                                        {{ $gambarProduk->name }}
                                    </td>
                                    <td>
                                        <form action="{{ route('gambar.destroy', [$produk, $gambarProduk->id]) }}"
                                            method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger">Delete</button>
                                        </form>
                                        {{-- <a href="{{route('gambar.destroy',$gambar)}}" data-toggle="tooltip" title="Hapus" class="btn btn-sm btn-danger"
                                            onclick="return confirm('Apakah anda yakin akan menghapus data ini?');"><i
                                                class="fa fa-trash"></i></a> --}}

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
