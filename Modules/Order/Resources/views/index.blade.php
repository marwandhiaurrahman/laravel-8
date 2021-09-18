@extends('adminlte::page')

@section('title', 'Pemesanan')

@section('content_header')
    <h1>Pemesanan</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Data Pemesanan</h3>
                    <div class="card-tools ">
                        <ul class="pagination pagination-sm float-right">
                            <li class="mr-1">
                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                    data-target="#cartModal">
                                    Keranjang ( {{ Cart::getTotalQuantity() }} )
                                </button>
                            </li>
                            <li class="mr-1">
                                <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                    data-target="#productModal">
                                    + Tambah Pemesanan
                                </button>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="" class="display table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Tanggal</th>
                                <th>Invoice</th>
                                <th>Harga</th>
                                <th>Nama</th>
                                <th>Identitas</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($orders as $item)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $item->created_at }}</td>
                                    <td>{{ $item->invoice }}</td>
                                    <td>{{ money($item->total_price, 'IDR') }}</td>
                                    <td>{{ $item->customer->name }}</td>
                                    <td>{{ $item->customer->address }} {{ $item->customer->email }}
                                        {{ $item->customer->phone }}</td>
                                    <td>
                                        @if ($item->status == '1')
                                            <span class="badge badge-warning">Menunggu Pembayaran</span>
                                        @else
                                            <span class="badge badge-warning">Pemesanan Selesai</span>
                                        @endif
                                    </td>
                                    <td>

                                        <form action="{{ route('order.destroy', $item) }}" method="POST">
                                            <a href="{{ route('order.show', $item) }}" class="btn btn-xs btn-primary"
                                                data-toggle="tooltip" title="Lihat Detail Pemesanan">
                                                <i class="fas fa-eye"></i>
                                            </a>
                                            <a class="btn btn-xs btn-warning" href="{{ route('order.edit', $item) }}"
                                                data-toggle="tooltip" title="Edit Produk {{ $item->name }}"><i
                                                    class=" fas fa-edit"></i></a>
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-xs btn-danger" data-toggle="tooltip"
                                                title="Hapus Pemesanan">
                                                <i class="fas fa-trash-alt"
                                                    onclick="return confirm('Are you sure you want to delete this item ?');"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
            <!-- /.card -->
        </div>
    </div>

    <!-- Cart Modal -->
    <div class="modal fade" id="cartModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="createModalLabel">Keranjang Pemesanan</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
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
                <div class="modal-footer">
                    <a href="{{ route('order.create') }}" class="btn btn-success">Buat Pesanan</a>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Modal -->
    <div class="modal fade" id="productModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="createModalLabel">Pilih Produk</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <table id="" class="display table table-striped table-bordered">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                                <tr class="data-row">
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $item->name }}</td>
                                    <td>{{ $item->stock }}</td>
                                    <td>{{ money($item->price, 'IDR') }}</td>
                                    <td>
                                        @if ($item->status == 'true')
                                            <span class="badge badge-success">Active</span>
                                        @else
                                            <span class="badge badge-danger">Off</span>
                                        @endif
                                    </td>
                                    <td>
                                        <form action="{{ route('cart.store') }}" method="POST"
                                            enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" value="{{ $item->id }}" name="product_id">
                                            <input type="hidden" value="1" name="quantity">
                                            <button type="submit" class="btn btn-xs btn-primary" data-toggle="tooltip"
                                                title="Tambah Ke Keranjang"><i class="fas fa-cart-plus"></i></button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Delete Modal -->
    <div class="modal fade" id="deleteModal" data-backdrop="static" tabindex="-1" role="dialog"
        aria-labelledby="deleteModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-danger">
                    <h5 class="modal-title" id="deleteModalLabel">Peringatan Delete Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Apakah anda yakin akan menghapus data ini ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Delete</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Edit Modal -->
    <div class="modal fade" id="edit-modal" tabindex="-1" role="dialog" aria-labelledby="edit-modal-label"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-warning">
                    <h5 class="modal-title" id="edit-modal-label">Edit Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
                            aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['route' => 'product.store', 'id' => 'edit-form', 'method' => 'POST', 'files' => false]) !!}
                <div class="modal-body">
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
                    <div class="form-group">
                        <label for="input-name">Nama Pemesanan</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'input-name', 'placeholder' => 'Nama Pemesanan', 'autofocus', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Deskripsi Pemesanan</label>
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3, 'id' => 'inputDescription', 'placeholder' => 'Deskripsi Pemesanan', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputHarga">Harga Pemesanan</label>
                        {!! Form::number('price', null, ['class' => 'form-control', 'id' => 'inputHarga', 'placeholder' => 'Harga Pemesanan', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputStok">Stok Pemesanan</label>
                        {!! Form::number('stock', null, ['class' => 'form-control', 'id' => 'inputStok', 'placeholder' => 'Stok Pemesanan', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="checkbox1">Status Publish</label><br>
                        <input name="status" type="checkbox" id="checkbox1" value="false" checked hidden>
                        <input name="status" type="checkbox" id="checkbox1" value="true" data-size="small"
                            data-toggle="toggle">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-warning" data-dismiss="modal">Update</button>
                </div>
                {!! Form::close() !!}
            </div>
        </div>
    </div>
@endsection

@section('css')
    <!-- DataTables -->
    <link rel="stylesheet" href="{{ asset('vendor/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/datatables-plugins/responsive/css/responsive.bootstrap4.min.css') }}">
    {{-- Toggle --}}
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
@endsection

@section('js')
    {{-- Toggle --}}
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <!-- DataTables  & Plugins -->
    <script src="{{ asset('vendor/datatables/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables-plugins/responsive/js/dataTables.responsive.min.js') }}"></script>
    <script src="{{ asset('vendor/datatables/js/dataTables.bootstrap4.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('table.display').DataTable({
                "responsive": true,
                // "lengthChange": true,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            });
        });


        // $("#example2").DataTable({
        //     "responsive": true,
        //     // "lengthChange": true,
        //     "autoWidth": false,
        //     // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        // }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    </script>

    <script>
        $(function() {
            $('#checkbox-value').text($('#checkbox1').val());

            $("#checkbox1").on('change', function() {
                if ($(this).is(':checked')) {
                    $(this).attr('value', 'true');
                } else {
                    $(this).attr('value', 'false');
                }
                $('#checkbox-value').text($('#checkbox1').val());
            });
        });
    </script>

    <script>
        $(document).ready(function() {
            /**
             * for showing edit item popup
             */

            $(document).on('click', "#edit-item", function() {
                $(this).addClass(
                    'edit-item-trigger-clicked'
                ); //useful for identifying which trigger was clicked and consequently grab data from the correct row and not the wrong one.

                var options = {
                    // 'backdrop': 'static'
                };
                $('#edit-modal').modal(options)
            })

            // on modal show
            $('#edit-modal').on('show.bs.modal', function() {
                var el = $(".edit-item-trigger-clicked"); // See how its usefull right here?
                var row = el.closest(".data-row");

                // get the data
                var id = el.data('item-id');
                var name = row.children(".name").text();
                var description = row.children(".description").text();

                // fill the data in the input fields
                $("#modal-input-id").val(id);
                $("#input-name").val(name);
                $("#modal-input-description").val(description);

            })

            // on modal hide
            $('#edit-modal').on('hide.bs.modal', function() {
                $('.edit-item-trigger-clicked').removeClass('edit-item-trigger-clicked')
                $("#edit-form").trigger("reset");
            })
        })
    </script>

    @if (Session::has('success'))
        <script type="text/javascript">
            $(window).on('load', function() {
                $('#cartModal').modal('show');
            });
        </script>
    @endif

@stop
