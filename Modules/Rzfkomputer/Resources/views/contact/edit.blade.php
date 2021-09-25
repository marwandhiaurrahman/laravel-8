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
                {!! Form::model($contact, ['method' => 'PATCH', 'route' => ['contact.update', $contact], 'files' => false]) !!}
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
                        <label for="inputName">Nama Contact</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'inputName', 'placeholder' => 'Nama Contact', 'autofocus', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="input-label">Label</label>
                        {!! Form::text('label', null, ['class' => 'form-control', 'id' => 'input-label', 'placeholder' => 'Nama Contact', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="input-phone">Phone</label>
                        {!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'input-phone', 'placeholder' => 'No. HP', 'required']) !!}
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
