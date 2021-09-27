@extends('adminlte::page')

@section('title', 'Produk')

@section('content_header')
    <h1>Produk</h1>
@stop

@section('content')
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tabel Data Produk</h3>
                    <div class="card-tools ">
                        <ul class="pagination pagination-sm float-right">
                            {{-- <a class="btn btn-sm btn-success mr-2" href="{{ route('product.create') }}">+ Tambah Produk</a> --}}
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                data-target="#createModal">
                                + Tambah Produk
                            </button>
                            {{-- <button type="button" class="btn btn-sm btn-success" data-toggle="modal"
                                data-target="#deleteModal">
                                + Delete Produk
                            </button> --}}
                        </ul>
                    </div>
                </div>
                <!-- /.card-header -->

                <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Promo</th>
                                <th>Status</th>
                                <th>Attribut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                                <tr class="data-row">
                                    <td class="">{{ ++$i }}</td>
                                    <td class="">{{ $item->name }}</td>
                                                        <td>
                                                        @foreach ($item->category as
                                        $cate)
                                        {{ $cate->name }}
                            @endforeach
                            </td>
                            <td class="">{{ $item->stock }}</td>
                                    <td>{{ money($item->price, 'IDR') }}</td>
                            <td>{{ $item->promo }} %</td>
                                    <td>
                                        {{-- {{ $item->status }} --}}
                                        @if ($item->status == 'true')
                                            <span class="
                                badge badge-success">Active</span>
                            @else
                                <span class="badge badge-danger">Off</span>
                                @endif
                            </td>

                            <td>
                                <a href="{{ route('image.index', $item) }}" class="btn btn-xs btn-primary"
                                    data-toggle="tooltip" title="Edit Gambar"><i class="fas fa-images"></i></a>
                                <a href="{{ route('size.index', $item) }}" class="btn btn-xs btn-primary"
                                    data-toggle="tooltip" title="Edit Ukuran"><i class="fas fa-pencil-ruler"></i></a>
                                <a href="{{ route('color.index', $item) }}" class="btn btn-xs btn-primary"
                                    data-toggle="tooltip" title="Edit Warna"><i class="fas fa-palette"></i></a>
                            </td>
                            <td>
                                <form action="{{ route('product.destroy', $item) }}" method="POST">
                                    <a class="btn btn-xs btn-warning" href="{{ route('product.edit', $item) }}"
                                        data-toggle="tooltip" title="Edit Produk {{ $item->name }}"><i
                                            class=" fas fa-edit"></i></a>
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-xs btn-danger" data-toggle="tooltip"
                                        title="Hapus Produk {{ $item->name }}">
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
        <!-- /.col -->
    </div>

    <!-- Create Modal -->
    <div class="modal fade" id="createModal" tabindex="-1" role="dialog" aria-labelledby="createModalLabel"
        aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header bg-success">
                    <h5 class="modal-title" id="createModalLabel">Tambah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                {!! Form::open(['route' => 'product.store', 'method' => 'POST', 'files' => false]) !!}
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
                        <label for="inputName">Nama Produk</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'inputName', 'placeholder' => 'Nama Produk', 'autofocus', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Deskripsi Produk</label>
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3, 'id' => 'inputDescription', 'placeholder' => 'Deskripsi Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputReview">Review Produk</label>
                        {!! Form::textarea('review', null, ['class' => 'form-control', 'rows' => 3, 'id' => 'inputReview', 'placeholder' => 'Review Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputKategori">Kategori Produk</label>
                        {!! Form::select('category', $categoris->pluck('name', 'id'), null, ['class' => 'form-control', 'id' => 'inputKategori', 'placeholder' => 'Pilih Kategori Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputHarga">Harga Produk</label>
                        {!! Form::number('price', null, ['class' => 'form-control', 'id' => 'inputHarga', 'placeholder' => 'Harga Produk', 'required','min' => 0]) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputPromo">Promo Produk</label>
                        {!! Form::number('promo', null, ['class' => 'form-control', 'id' => 'inputPromo', 'placeholder' => 'Promo Produk', 'required', 'min' => 0,'max' => 100]) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputStok">Stok Produk</label>
                        {!! Form::number('stock', null, ['class' => 'form-control', 'id' => 'inputStok', 'placeholder' => 'Stok Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="checkbox1">Status Publish</label><br>
                        <input name="status" type="checkbox" id="checkbox1" value="false" checked hidden>
                        <input name="status" type="checkbox" id="checkbox1" value="true" data-size="small"
                            data-toggle="toggle">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Submit</button>
                    <a href="{{ url()->previous() }}" class="btn btn-danger" required>Kembali</a>
                </div>
                {!! Form::close() !!}
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
                        <label for="input-name">Nama Produk</label>
                        {!! Form::text('name', null, ['class' => 'form-control', 'id' => 'input-name', 'placeholder' => 'Nama Produk', 'autofocus', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputDescription">Deskripsi Produk</label>
                        {!! Form::textarea('description', null, ['class' => 'form-control', 'rows' => 3, 'id' => 'inputDescription', 'placeholder' => 'Deskripsi Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputHarga">Harga Produk</label>
                        {!! Form::number('price', null, ['class' => 'form-control', 'id' => 'inputHarga', 'placeholder' => 'Harga Produk', 'required']) !!}
                    </div>
                    <div class="form-group">
                        <label for="inputStok">Stok Produk</label>
                        {!! Form::number('stock', null, ['class' => 'form-control', 'id' => 'inputStok', 'placeholder' => 'Stok Produk', 'required']) !!}
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

    {{-- <link rel="stylesheet" href="../../plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> --}}
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
        $(function() {
            $("#example1").DataTable({
                "responsive": true,
                // "lengthChange": true,
                "autoWidth": false,
                // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
            }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
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
@stop
