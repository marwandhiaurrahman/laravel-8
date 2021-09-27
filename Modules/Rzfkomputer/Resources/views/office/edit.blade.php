@extends('adminlte::page')

@section('title', 'Edit Contact')

@section('content_header')
    <h1>Edit Contact</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Input Data Contact</h3>
                </div>
                {!! Form::model($office, ['method' => 'PATCH', 'route' => ['office.update', $office], 'files' => false]) !!}
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
                        <label for="inputName">Nama Kantor</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'inputName', 'placeholder' => 'Nama Contact', 'autofocus', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputAddress">Alamat Kantor</label>
                        {!! Form::text('address', null, ['class' => 'form-control', 'id' => 'inputAddress', 'placeholder'  => 'Masukan Alamat Kantor', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputFacebook">Link Facebook</label>
                        {!! Form::text('facebook', null, ['class' => 'form-control', 'id' => 'inputFacebook', 'placeholder' => 'Masukan Link Facebook', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputInstagram">Link Instagram</label>
                        {!! Form::text('instagram', null, ['class' => 'form-control', 'id' => 'inputInstagram', 'placeholder' => 'Masukan Link Facebook', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputYoutube">Link Youtube</label>
                        {!! Form::text('youtube', null, ['class' => 'form-control', 'id' => 'inputYoutube', 'placeholder' => 'Masukan Link Facebook', 'required']) !!}
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
