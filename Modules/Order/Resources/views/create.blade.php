@extends('adminlte::page')

@section('title', 'Buat Pemesanan')

@section('content_header')
    <h1>Buat Pemesanan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-md-4">
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Masukan Data Pelanggan</h3>
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
                {!! Form::open(['route' => 'order.store', 'method' => 'POST', 'files' => false]) !!}
                <div class="card-body">
                    <div class="form-group">
                        <label for="inputNama">Nama</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Nama', 'id' => 'inputNama', 'required', 'autofocus']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputAlamat">Alamat Lengkap</label>
                        {!! Form::textarea('address', null, ['class' => 'form-control', 'rows' => 5, 'id' => 'inputAddress', 'placeholder' => 'Masukan Alamat', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputTelepon">No Telepon</label>
                        {!! Form::text('phone_number', null, ['class' => 'form-control', 'placeholder' => 'Masukkan No Telepon', 'id' => 'inputTelepon', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputEmail">Email</label>
                        {!! Form::email('email', null, ['class' => 'form-control', 'placeholder' => 'Masukkan Alamat Email', 'id' => 'inputEmail', 'required']) !!}
                    </div>
                </div>
                <div class="card-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ url()->previous() }}" class="btn btn-danger" required>Kembali</a>
                </div>
                {!! Form::close() !!}
            </div>
        </div>

        <div class="col-md-8">
            <div class="card card-success">
                <div class="card-header">
                    <h3 class="card-title">Keranjang Pemesanan</h3>
                </div>
                <div class="card-body">
                    <table id="" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kuantitas</th>
                                <th>Harga</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($carts as $item)
                                <tr class="data-row">
                                    <td>{{ ++$j }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>
                                        <form action="{{ route('cart.update', $item->id) }}" method="POST">
                                            @csrf
                                            @method('PATCH')
                                            <input type="number" name="quantity" min="0" value="{{ $item->quantity }}"
                                                class="form-control form-control-sm col-3" onchange="this.form.submit()" />
                                        </form>
                                        @ {{ money($item->price, 'IDR') }}
                                    </td>
                                    <td> {{ money($item->getPriceSum(), 'IDR') }}</td>
                                    <td>
                                        <form action="{{ route('cart.destroy', $item->id) }}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger" data-toggle="tooltip"
                                                title="Hapus dari Keranjang"><i class="fas fa-trash-alt"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                        <tfoot>
                            <th colspan="2" class="text-center">Total</th>
                            <th> {{ Cart::getTotalQuantity() }} pcs</th>
                            <th>{{ money(Cart::getTotal(), 'IDR') }}</th>
                        </tfoot>
                    </table>
                </div>
                <div class="card-footer">

                </div>
            </div>
        </div>
    </div>
@endsection
