@extends('rzfkomputer::layouts.master')

@section('main')
    <br>
    <br>
    <br>
    <br>
    {{-- <form action="{{ route('cart.store') }}" method="POST">
        @csrf
        <input type="text" value="{{ $product->id }}" name="product_id">
        <button type="submit" class="btn btn-xs btn-primary" data-toggle="tooltip"
            title="Tambah Ke Keranjang"><i class="fas fa-cart-plus"></i></button>
    </form> --}}

    <form action="{{ route('cart.store') }}" method="post">
        <input type="text" value="{{ $product->id }}" name="product_id">
        <input type="text" value="1" name="quantity">
        <p><input type="submit" value="Send it!"></p>
    </form>
@endsection
