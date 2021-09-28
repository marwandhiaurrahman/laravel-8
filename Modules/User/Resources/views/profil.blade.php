@extends('adminlte::page')

@section('title', 'Edit User')

@section('content_header')
    <h1>Edit User</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-sm-12">
            <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">Input Data User</h3>
                </div>
                {!! Form::model($user, ['method' => 'PATCH', 'route' => ['user.update', $user], 'files' => false]) !!}
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
                        <label for="inputName">Nama User</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'inputName', 'placeholder' => 'Nama User', 'autofocus', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="input-username">Username</label>
                        {!! Form::text('username', null, ['class' => 'form-control', 'id' => 'input-username', 'placeholder' => 'Nama User', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="input-phone">Phone</label>
                        {!! Form::text('phone', null, ['class' => 'form-control', 'id' => 'input-phone', 'placeholder' => 'No. HP', 'required']) !!}
                    </div>

                    <div class="form-group">
                        <label for="input-email">Email</label>
                        {!! Form::text('email', null, ['class' => 'form-control', 'id' => 'input-email', 'placeholder' => 'Email', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label>Password:</label>
                        {!! Form::password('password', ['placeholder' => 'Password', 'class' => 'form-control']) !!}
                        <small>( Kosongkan apabila tidak ingin dirubah )</small>
                    </div>
                    <div class="form-group">
                        <label>Confirm Password:</label>
                        {!! Form::password('confirm-password', ['placeholder' => 'Confirm Password', 'class' => 'form-control']) !!}
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
