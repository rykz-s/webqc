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
                        <a class="btn btn-success" href="{{route('kansa-kensa.create')}}">Tambah Data Patrol Check</a>
                    </div>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example1" class="table table-bordered table-hover table-striped">
                        <thead>
                            <tr>
                                <th>No</th> <!-- column 1 -->
                                <th>Nama</th><!-- column 2 -->
                                <th>No Engine</th> <!-- column 34567 -->
                                <th>Shift</th> <!-- column 891011 -->
                                <th>Tanggal</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($kankens as $kanken)
                            <tr>
                                <td>{{$kanken->id}}</td>
                                <td>{{$kanken->nama}}</td>
                                <td>{{$kanken->noengine}}</td>
                                <td>{{$kanken->shift}}</td>
                                <td>{{$kanken->tanggal}}</td>
                                <td>
                                    <form onsubmit="return confirm('Apakah Anda Yakin ?');" action="{{ route('kansa-kensa.destroy', $kanken->id) }}" method="POST">
                                        <a href="/kansa-kensa/edit/{{$kanken->id}}" class="btn btn-sm btn-primary">EDIT</a>
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-sm btn-danger">HAPUS</button>
                                    </form>
                                </td>
                </div>
            </div>
            
        </div>
        
    </div>
    
    </tr>
    @endforeach
    </tbody>
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
            "autoWidth": false
            // "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
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