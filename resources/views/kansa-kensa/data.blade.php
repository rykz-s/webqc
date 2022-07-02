@extends('layouts.master', ['title'=>'Patrol Kansa Kensa'])

@section('content-header')
<div class="container-fluid">
    <div class="row mb-2">
        <div class="col-sm-6">
            <h1 class="m-0">Kansa & Kensa</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Kansa & Kensa</li>
            </ol>
        </div><!-- /.col -->
    </div><!-- /.row -->
</div><!-- /.container-fluid -->
@endsection

@section('content')
<div class="container-fluid">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Patrol Check Assembling TR</h3>
                    <div class="float-right">
                        <a class="btn btn-success" href="/test-room/kansa-kensa/create">Tambah Data Patrol Check</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Item</th>
                                <th>Control Item</th>
                                <th>Control Point</th>
                                <th>Rank</th>
                                <th>Judge/Patrol</th>
                                <th>Ilustrasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Assy Oil Nozzle Jet</td>
                                <td>Pipe Nozle</td>
                                <td>Pada tikungan pipa tidak menyempit</td>
                                <td>B</td>
                                <td>Radio button ( o )</td>
                                <td>Gambar</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Assy Oil Nozzle Jet</td>
                                <td>Pipe Nozle</td>
                                <td>Pada tikungan pipa tidak menyempit</td>
                                <td>B</td>
                                <td>Radio button ( o )</td>
                                <td>Gambar</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Assy Oil Nozzle Jet</td>
                                <td>Pipe Nozle</td>
                                <td>Pada tikungan pipa tidak menyempit</td>
                                <td>B</td>
                                <td>Radio button ( o )</td>
                                <td>Gambar</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Assy Oil Nozzle Jet</td>
                                <td>Pipe Nozle</td>
                                <td>Pada tikungan pipa tidak menyempit</td>
                                <td>B</td>
                                <td>Radio button ( o )</td>
                                <td>Gambar</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Assy Oil Nozzle Jet</td>
                                <td>Pipe Nozle</td>
                                <td>Pada tikungan pipa tidak menyempit</td>
                                <td>B</td>
                                <td>Radio button ( o )</td>
                                <td>Gambar</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Assy Oil Nozzle Jet</td>
                                <td>Pipe Nozle</td>
                                <td>Pada tikungan pipa tidak menyempit</td>
                                <td>B</td>
                                <td>Radio button ( o )</td>
                                <td>Gambar</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Assy Oil Nozzle Jet</td>
                                <td>Pipe Nozle</td>
                                <td>Pada tikungan pipa tidak menyempit</td>
                                <td>B</td>
                                <td>Radio button ( o )</td>
                                <td>Gambar</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Assy Oil Nozzle Jet</td>
                                <td>Pipe Nozle</td>
                                <td>Pada tikungan pipa tidak menyempit</td>
                                <td>B</td>
                                <td>Radio button ( o )</td>
                                <td>Gambar</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Assy Oil Nozzle Jet</td>
                                <td>Pipe Nozle</td>
                                <td>Pada tikungan pipa tidak menyempit</td>
                                <td>B</td>
                                <td>Radio button ( o )</td>
                                <td>Gambar</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Assy Oil Nozzle Jet</td>
                                <td>Pipe Nozle</td>
                                <td>Pada tikungan pipa tidak menyempit</td>
                                <td>B</td>
                                <td>Radio button ( o )</td>
                                <td>Gambar</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Assy Oil Nozzle Jet</td>
                                <td>Pipe Nozle</td>
                                <td>Pada tikungan pipa tidak menyempit</td>
                                <td>B</td>
                                <td>Radio button ( o )</td>
                                <td>Gambar</td>
                            </tr>
                            <tr>
                                <td>1</td>
                                <td>Assy Oil Nozzle Jet</td>
                                <td>Pipe Nozle</td>
                                <td>Pada tikungan pipa tidak menyempit</td>
                                <td>B</td>
                                <td>Radio button ( o )</td>
                                <td>Gambar</td>
                            </tr>

                        </tbody>
                        <tfoot>
                            <tr>
                                <th>No</th>
                                <th>Item</th>
                                <th>Control Item</th>
                                <th>Control Point</th>
                                <th>Rank</th>
                                <th>Judge/Patrol</th>
                                <th>Ilustrasi</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.card-body -->
            </div>
        </div>
    </div>
</div>
<!-- /.container-fluid -->
@endsection

<!-- CSS tertentu jika ingin beda dari page yang lain -->
@push('css')
<style>
    .btn-red {
        background-color: red;
        color: white;
    }
</style>
@endpush

<!-- JS tertentu jika ingin beda dari page yang lain -->
@push('js')
<script>
    $(function() {
        $("#example1").DataTable({
            "responsive": true,
            "lengthChange": false,
            "autoWidth": false,
            "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
        }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
        $('#example2').DataTable({
            "paging": true,
            "lengthChange": false,
            "searching": false,
            "ordering": true,
            "info": true,
            "autoWidth": false,
            "responsive": true,
        });
    });
</script>
@endpush