@extends('adminlte::page')

@section('title', 'Detail Pemesanan')

@section('content_header')
    <h1>Detail Pemesanan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="callout callout-info">
                <h5><i class="fas fa-info"></i> Note:</h5>
                Klik tombol cetak di bagian bawah untuk mengunduh invoice.
            </div>

            <!-- Main content -->
            <div class="invoice p-3 mb-3">
                <!-- title row -->
                <div class="row">
                    <div class="col-12">
                        <h4>
                            <i class="fas fa-globe"></i> AdminLTE, Inc.
                            <small class="float-right">Date: {{ $order->created_at }}</small>
                        </h4>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- info row -->
                <div class="row invoice-info">
                    <div class="col-sm-4 invoice-col">
                        From
                        <address>
                            <strong>Admin, Inc.</strong><br>
                            795 Folsom Ave, Suite 600<br>
                            San Francisco, CA 94107<br>
                            Phone: (804) 123-5432<br>
                            Email: info@almasaeedstudio.com
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        To
                        <address>
                            <strong>{{ $order->customer->name }}</strong><br>
                            {{ $order->customer->address }}<br>
                            Phone : {{ $order->customer->phone }}<br>
                            Email : {{ $order->customer->email }}
                        </address>
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-4 invoice-col">
                        {{-- <b>Invoice #007612</b><br> --}}
                        <br>
                        <b>Order ID:</b> {{$order->invoice}}<br>
                        <b>Payment Due:</b> 2/22/2014<br>
                        <b>Status:</b>
                        @if ($order->status == '1')
                            <span class="badge badge-warning">Menunggu Pembayaran</span>
                        @else
                            <span class="badge badge-warning">Pemesanan Selesai</span>
                        @endif
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- Table row -->
                <div class="row">
                    <div class="col-12 table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Qty</th>
                                    <th>Product</th>
                                    <th>Harga</th>
                                    <th>Description</th>
                                    <th>Subtotal</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orderDetails as $item)
                                    <tr>
                                        <td>{{ ++$i }}</td>
                                        <td>{{ $item->product->name }}</td>
                                        <td>{{ money($item->product->price, 'IDR') }}</td>
                                        <td>-</td>
                                        <td>{{ money($item->price, 'IDR') }}</td>
                                    </tr>
                                @endforeach
                            </tbody>

                        </table>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <div class="row">
                    <!-- accepted payments column -->
                    <div class="col-6">
                        <p class="lead">Metode Pembayaran :</p>
                        <p class="text-muted well well-sm shadow-none" style="margin-top: 10px;">
                            Silahkan bisa melakukan pembayaran melalui transfer menggunakan payment gateway yang kami
                            sediakan. Mohon agar konfirmasi setelah melakukan pembayaran agar pemesanan dapat kami proses.
                        </p>
                    </div>
                    <!-- /.col -->
                    <div class="col-6">
                        <p class="lead">Batas Pembayaran 2/22/2014</p>

                        <div class="table-responsive">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <th>Total:</th>
                                        <td>{{ money($order->total_price, 'IDR') }}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.col -->
                </div>
                <!-- /.row -->

                <!-- this row will not appear when printing -->
                <div class="row no-print">
                    <div class="col-12">
                        <a href="invoice-print.html" rel="noopener" target="_blank" class="btn btn-default"><i
                                class="fas fa-print"></i> Print</a>
                        <button type="button" class="btn btn-success float-right"><i class="far fa-credit-card"></i> Submit
                            Payment
                        </button>
                        <button type="button" class="btn btn-primary float-right" style="margin-right: 5px;">
                            <i class="fas fa-download"></i> Generate PDF
                        </button>
                    </div>
                </div>
            </div>
            <!-- /.invoice -->
        </div><!-- /.col -->
    </div>

@endsection
