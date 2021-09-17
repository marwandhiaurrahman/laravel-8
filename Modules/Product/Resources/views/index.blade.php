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
                    <div class="card-tools">
                        <ul class="pagination pagination-sm float-right">
                            <a class="btn btn-sm btn-success" href="{{ route('product.create') }}">+ Tambah Produk</a>
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
                                {{-- <th>Kategori</th> --}}
                                <th>Stok</th>
                                <th>Harga</th>
                                <th>Status</th>
                                <th>Attribut</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($products as $item)
                                <tr>
                                    <td>{{ ++$i }}</td>
                                    <td>{{ $item->name }}</td>
                                    {{-- <td>{{$item->category}}</td> --}}
                                    <td>{{ $item->stock }}</td>
                                    <td>{{ money($item->price, 'IDR') }}</td>
                                    <td>
                                        {{-- {{ $item->status }} --}}
                                        @if ($item->status == 'true')
                                        <span class="badge badge-success">Active</span>
                                        @else
                                        <span class="badge badge-danger">Off</span>
                                        @endif
                                    </td>
                                    <td>
                                        <a href="#" class="btn btn-xs btn-primary" data-toggle="tooltip"
                                            title="Edit Gambar"><i class="fas fa-images"></i></a>
                                        <a href="#" class="btn btn-xs btn-primary" data-toggle="tooltip"
                                            title="Edit Ukuran"><i class="fas fa-pencil-ruler"></i></a>
                                        <a href="#" class="btn btn-xs btn-primary" data-toggle="tooltip"
                                            title="Edit Warna"><i class="fas fa-palette"></i></a>
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
    {{-- <script src="../../plugins/datatables-buttons/js/dataTables.buttons.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.bootstrap4.min.js"></script>
    <script src="../../plugins/jszip/jszip.min.js"></script>
    <script src="../../plugins/pdfmake/pdfmake.min.js"></script>
    <script src="../../plugins/pdfmake/vfs_fonts.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.html5.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.print.min.js"></script>
    <script src="../../plugins/datatables-buttons/js/buttons.colVis.min.js"></script> --}}
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
@stop
