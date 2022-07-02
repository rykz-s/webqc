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
            <div class="card card-primary">
                <div class="card-header">
                    <h3 class="card-title">Inspektor</h3>
                </div>
                <div class="card-body">
                    @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div><br />
                    @endif
                    <form action="{{ route('kansa-kensa.update', $kankens->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="card-body">
                            <div class="form-group">
                                <label for="nama">Nama</label>
                                <input type="text" class="form-control" id="nama" placeholder="Nama" name="nama" value="{{$kankens->nama}}">
                            </div>
                            <div class="form-group">
                                <label for="noengine">No Engine</label>
                                <input type="text" class="form-control" id="noengine" placeholder="Nomor engine" name="noengine" value="{{$kankens->noengine}}">
                            </div>
                            <div class="form-group">
                                <label for="shift">Shift</label>
                                <select name="shift" class="form-control" value="{{$kankens->shift}}">
                                    <option value="Red">Red</option>
                                    <option value="White">White</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="tanggal">Tanggal</label>
                                <div class="input-group date" id="reservationdate" data-target-input="nearest">
                                    <input name="tanggal" value="{{$kankens->tanggal}}" type="date" class="form-control datetimepicker-input" data-target="#reservationdate" />
                                    <div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
                                        <!-- <div class="input-group-text"><i class="fa fa-calendar"></i></div> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div> -->
                </div>
                <div class="col-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="card-title">Patrol Check Assembling TR</h3>
                        </div>
                        <!-- /.card-header -->
                        <div class="card-body">
                            <table id="example2" class="table table-bordered table-hover">
                                <thead class="font-weight-bold bg-light" style="text-align: center;">
                                    <tr>
                                        <td>No</td>
                                        <td>Item</td>
                                        <td colspan="5">Control Item</td>
                                        <td colspan="4">Control Point</td>
                                        <td>Rank</td>
                                        <td>Judge/Patrol</td>
                                        <td>Ilustrasi</td>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td rowspan="7" class="font-weight-bold">1</td>
                                        <td rowspan="7">Assy Oil Nozzle Jet</td>
                                        <td rowspan="2">1</td>
                                        <td colspan="4" rowspan="2">Pipe Nozzle</td>
                                        <td colspan="4">Pada Tikungan Pipa Tidak Menyempit</td>
                                        <td rowspan="7" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox1" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox1" name="customCheckbox1" value="1" {{  ($kankens->customCheckbox1 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox1" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="7"><img src="{{ asset('image/1.jpg') }}" alt="no1"></td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Tidak cacat / ada pembengkakan pipa dari aslinya</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox2" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox2" name="customCheckbox2" value="1" {{  ($kankens->customCheckbox2 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox2" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Type Bolt</td>
                                        <td colspan="4">Bolt spesial dengan kepala tirus</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox3" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox3" name="customCheckbox3" value="1" {{  ($kankens->customCheckbox3 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox3" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Pemasangan Bolt</td>
                                        <td colspan="4">DG SST & Masuk Standard Torque</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox4" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox4" name="customCheckbox4" value="1" {{  ($kankens->customCheckbox4 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox4" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td colspan="4" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Jud</td>
                                        <td rowspan="3">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    <tr>
                                        <td>N.m</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Torque Bolt</td>
                                        <td>6-10</td>
                                        <td>
                                            <!-- <div class="form-group"> -->
                                            <input type="number" min="0" class="form-control" name="act1" value="{{$kankens->act1}}">
                                            <!-- </div> -->
                                        </td>
                                        <!-- <td>7</td> -->
                                        <td>
                                            <!-- <div class="form-group"> -->
                                            <input type="number" min="0" min="0" class="form-control" name="act2" value="{{$kankens->act2}}">
                                            <!-- </div> -->
                                        </td>
                                        <td>
                                            <!-- <div class="form-group"> -->
                                            <input type="number" min="0" min="0" class="form-control" name="act3" value="{{$kankens->act3}}">
                                            <!-- </div> -->
                                        </td>
                                        <td>
                                            <!-- <div class="form-group"> -->
                                            <input type="number" min="0" min="0" class="form-control" name="act4" value="{{$kankens->act4}}">
                                            <!-- </div> -->
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckboxTorqueBolt" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckboxTorqueBolt" name="customCheckboxTorqueBolt" value="1" {{  ($kankens->customCheckboxTorqueBolt == 1 ? ' checked' : '') }}>
                                                <label for="customCheckboxTorqueBolt" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="font-weight-bold">2</td>
                                        <td rowspan="5">Assy Switch Oil Pressure</td>
                                        <td>1</td>
                                        <td colspan="4">Pemberian Three Band & Type Three Band</td>
                                        <td colspan="4">Harus ada dan merata / 1386 B</td>
                                        <td rowspan="3" class="font-weight-bold">V</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox5" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox5" name="customCheckbox5" value="1" {{  ($kankens->customCheckbox5 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox5" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="5">
                                            <img src="{{ asset('image/2_1.jpg') }}" alt="no2_1" width="235" height="210">
                                            <img src="{{ asset('image/2_2.jpg') }}" alt="no2_2">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Connector switch oil pressure</td>
                                        <td colspan="4">Socket tidak pecah dan skun tidak bengkok/patah</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox6" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox6" name="customCheckbox6" value="1" {{  ($kankens->customCheckbox6 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox6" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td rowspan="2">Actual</td>
                                        <td rowspan="2">Jud</td>
                                        <td rowspan="3" colspan="4">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                        <td rowspan="2" class="font-weight-bold">B</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Switch Oil Press</td>
                                        <td>12-20</td>
                                        <td>
                                            <!-- <div class="form-group"> -->
                                            <input type="number" min="0" min="0" class="form-control" name="act5" value="{{$kankens->act5}}">
                                            <!-- </div> -->
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckboxSwitchOil" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckboxSwitchOil" name="customCheckboxSwitchOil" value="1" {{  ($kankens->customCheckboxSwitchOil == 1 ? ' checked' : '') }}>
                                                <label for="customCheckboxSwitchOil" class="custom-control-label"></label>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="font-weight-bold">3</td>
                                        <td rowspan="5">Assy Oil Jet Front std: 18-30 N.m</td>
                                        <td>1</td>
                                        <td colspan="4">Gasket</td>
                                        <td colspan="4">Terpasang</td>
                                        <td rowspan="5" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox7" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox7" name="customCheckbox7" value="1" {{  ($kankens->customCheckbox7 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox7" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="5">
                                            <img src="{{ asset('image/3.png') }}" alt="no3" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Pipe Oil Jet</td>
                                        <td colspan="4">Arah pipe ke bawah (To gear crank)</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox8" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox8" name="customCheckbox8" value="1" {{  ($kankens->customCheckbox8 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox8" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Type Bolt</td>
                                        <td colspan="4">Flange</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox9" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox9" name="customCheckbox9" value="1" {{  ($kankens->customCheckbox9 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox9" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>No</td>
                                        <td>Standard</td>
                                        <td>Actual</td>
                                        <td>Jud</td>
                                        <td rowspan="2">&nbsp</td>
                                        <td rowspan="2" colspan="4">&nbsp</td>
                                        <td rowspan="2">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>18-30 N.m</td>
                                        <td>
                                            <!-- <div class="form-group"> -->
                                            <input type="number" min="0" min="0" class="form-control" name="act6" value="{{$kankens->act6}}">
                                            <!-- </div> -->
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox10" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox10" name="customCheckbox10" value="1" {{  ($kankens->customCheckbox10 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox10" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="font-weight-bold">4</td>
                                        <td rowspan="5">Assy Plate Balance Shaft Trust no 1 (Engine 2 TR)</td>
                                        <td>1</td>
                                        <td colspan="4">Plate Balance Shaft</td>
                                        <td colspan="4">Plate dilumasi oli</td>
                                        <td rowspan="5" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox11" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox11" name="customCheckbox11" value="1" {{  ($kankens->customCheckbox11 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox11" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="10">
                                            <img src="{{ asset('image/4_5.jpg') }}" alt="no3" width="240" height="210">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Urutan pemasangan to block</td>
                                        <td colspan="4">Setelah pasang gear Assy Balance Shaft</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox12" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox12" name="customCheckbox12" value="1" {{  ($kankens->customCheckbox12 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox12" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td colspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Jud</td>
                                        <td rowspan="3" colspan="3">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">2</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>B/s Trust Plate</td>
                                        <td>14 - 28</td>
                                        <td>
                                            <!-- <div class="form-group"> -->
                                            <input type="number" min="0" min="0" class="form-control" name="act7" value="{{$kankens->act7}}">
                                            <!-- </div> -->
                                        </td>
                                        <td>
                                            <!-- <div class="form-group"> -->
                                            <input type="number" min="0" min="0" class="form-control" disabled>
                                            <!-- </div> -->
                                        </td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox13" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox13" name="customCheckbox13" value="1" {{  ($kankens->customCheckbox13 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox13" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="font-weight-bold">5</td>
                                        <td rowspan="5">Assy Plate Balance Shaft Trust no 2 (Engine 2 TR)</td>
                                        <td>1</td>
                                        <td colspan="4">Plate Balance Shaft</td>
                                        <td colspan="4">Plate dilumasi oli</td>
                                        <td rowspan="5" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox14" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox14" name="customCheckbox14" value="1" {{  ($kankens->customCheckbox14 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox14" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <!-- <td rowspan="5">gambar</td> -->
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Urutan pemasangan to block</td>
                                        <td colspan="4">Setelah pasang gear Assy Balance Shaft</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox15" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox15" name="customCheckbox15" value="1" {{  ($kankens->customCheckbox15 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox15" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td colspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Jud</td>
                                        <td rowspan="3" colspan="3">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">2</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>B/s Trust Plate</td>
                                        <td>14 - 28</td>
                                        <td>
                                            <!-- <div class="form-group"> -->
                                            <input type="number" min="0" min="0" class="form-control" name="act8" value="{{$kankens->act8}}">
                                            <!-- </div> -->
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" min="0" class="form-control" name="act9" value="{{$kankens->act9}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox16" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox16" name="customCheckbox16" value="1" {{  ($kankens->customCheckbox16 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox16" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="font-weight-bold">6</td>
                                        <td rowspan="5">Assy Dumper Chain Vibration No 3 (Engine 2 TR)</td>
                                        <td>1</td>
                                        <td colspan="4">Dumper</td>
                                        <td colspan="4">Tidak terbalik, shoes dumper tidak rusak</td>
                                        <td rowspan="5" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox17" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox17" name="customCheckbox17" value="1" {{  ($kankens->customCheckbox17 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox17" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="5">
                                            <img src="{{ asset('image/6.jpg') }}" alt="no6" width="240" height="210">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Type bolt</td>
                                        <td colspan="4">flange pendek</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox18" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox18" name="customCheckbox18" value="1" {{  ($kankens->customCheckbox18 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox18" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td colspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Jud</td>
                                        <td rowspan="3" colspan="3">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">2</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bolt Dumper</td>
                                        <td>14 - 28</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" min="0" class="form-control" name="act10" value="{{$kankens->act10}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" min="0" class="form-control" name="act11" value="{{$kankens->act11}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox19" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox19" name="customCheckbox19" value="1" {{  ($kankens->customCheckbox19 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox19" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="font-weight-bold">7</td>
                                        <td rowspan="5">Assy Dumper Chain Vibration No 4 (Engine 2 TR)</td>
                                        <td>1</td>
                                        <td colspan="4">Dumper</td>
                                        <td colspan="4">Tidak terbalik, shoes dumper tidak rusak</td>
                                        <td rowspan="5" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox20" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox20" name="customCheckbox20" value="1" {{  ($kankens->customCheckbox20 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox20" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="5">
                                            <img src="{{ asset('image/7.jpg') }}" alt="no7" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Posisi bolt</td>
                                        <td colspan="4">Tidak tertukar (upper panjang, lower pendek)</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox21" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox21" name="customCheckbox21" value="1" {{  ($kankens->customCheckbox21 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox21" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td colspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Jud</td>
                                        <td rowspan="3" colspan="3">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">2</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bolt Dumper</td>
                                        <td>14 - 28</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act12" value="{{$kankens->act12}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act13" value="{{$kankens->act13}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox22" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox22" name="customCheckbox22" value="1" {{  ($kankens->customCheckbox22 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox22" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="8" class="font-weight-bold">8</td>
                                        <td rowspan="8">Assy Tensioner Chain No 2 (Engine 2 TR)</td>
                                        <td rowspan="3">1</td>
                                        <td colspan="4" rowspan="3">Urutan Pemasangan</td>
                                        <td colspan="4">Setelah pasang Chain Balance Shaft</td>
                                        <td rowspan="8" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox23" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox23" name="customCheckbox23" value="1" {{  ($kankens->customCheckbox23 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox23" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="8">
                                            <img src="{{ asset('image/8.jpg') }}" alt="no8" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Pasang hanya 1 pcs (Bagian Bawah)</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox24" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox24" name="customCheckbox24" value="1" {{  ($kankens->customCheckbox24 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox24" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">1 pcs lagi saat pasang Dumper</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox25" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox25" name="customCheckbox25" value="1" {{  ($kankens->customCheckbox25 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox25" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Pin tensioner</td>
                                        <td colspan="4">dilepas setelah proses cranking piston</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox26" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox26" name="customCheckbox26" value="1" {{  ($kankens->customCheckbox26 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox26" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td rowspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Judge</td>
                                        <td rowspan="2" colspan="4">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Tensior Nut 1</td>
                                        <td>14 - 28</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act14" value="{{$kankens->act14}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox27" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox27" name="customCheckbox27" value="1" {{  ($kankens->customCheckbox27 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox27" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="2" colspan="4">*dipasang saat pasang Dumper 1</td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Tensior Nut 2</td>
                                        <td>14 - 28</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act15">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox28" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox28" name="customCheckbox28" value="1" {{  ($kankens->customCheckbox28 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox28" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="6" class="font-weight-bold">9</td>
                                        <td rowspan="6">Assy Knock Sensor</td>
                                        <td>1</td>
                                        <td colspan="4">Permukaan Tapping Bolt Knock Sensor (Cyl Block)</td>
                                        <td colspan="4">Tidak ada cat, rata / Tidak ada tonjolan</td>
                                        <td rowspan="3" class="font-weight-bold">V</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox29" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox29" name="customCheckbox29" value="1" {{  ($kankens->customCheckbox29 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox29" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="6">
                                            <img src="{{ asset('image/9.jpg') }}" alt="no9" width="240" height="180">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Arah / Posisi Connector</td>
                                        <td colspan="4">Standard kemiringan ± 10°</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox30" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox30" name="customCheckbox30" value="1" {{  ($kankens->customCheckbox30 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox30" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Socket connector</td>
                                        <td colspan="4">Socket tidak crack</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox31" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox31" name="customCheckbox31" value="1" {{  ($kankens->customCheckbox31 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox31" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td rowspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Judge</td>
                                        <td rowspan="3" colspan="4">&nbsp</td>
                                        <td rowspan="3" class="font-weight-bold">B</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Knock Sensor</td>
                                        <td>17-29</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act16" value="{{$kankens->act16}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox32" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox32" name="customCheckbox32" value="1" {{  ($kankens->customCheckbox32 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox32" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="font-weight-bold">10</td>
                                        <td rowspan="5">Assy Water Temp Sensor</td>
                                        <td>1</td>
                                        <td colspan="4">Washer WTS</td>
                                        <td colspan="4">Ada dan tidak double</td>
                                        <td rowspan="2" class="font-weight-bold">V</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox33" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox33" name="customCheckbox33" value="1" {{  ($kankens->customCheckbox33 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox33" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="5">
                                            <img src="{{ asset('image/10.jpg') }}" alt="no10" width="240" height="180">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Socket</td>
                                        <td colspan="4">Tidak pecah atau cacat, skun tidak bengkok</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox34" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox34" name="customCheckbox34" value="1" {{  ($kankens->customCheckbox34 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox34" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td rowspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Judge</td>
                                        <td rowspan="3" colspan="4">&nbsp</td>
                                        <td rowspan="3" class="font-weight-bold">B</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>WTS</td>
                                        <td>16-26</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act17" value="{{$kankens->act17}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox35" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox35" name="customCheckbox35" value="1" {{  ($kankens->customCheckbox35 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox35" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="6" class="font-weight-bold">11</td>
                                        <td rowspan="6">Assy OCV Filter</td>
                                        <td rowspan="2">1</td>
                                        <td rowspan="2" colspan="4">Filter</td>
                                        <td colspan="4">Tidak rusak, tidak tersumbat, dan tidak sobek</td>
                                        <td rowspan="6" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox36" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox36" name="customCheckbox36" value="1" {{  ($kankens->customCheckbox36 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox36" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="6">
                                            <img src="{{ asset('image/11.jpg') }}" alt="no11" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Tidak terbalik</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox37" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox37" name="customCheckbox37" value="1" {{  ($kankens->customCheckbox37 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox37" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Gasket</td>
                                        <td colspan="4">Terpasang, permukaan tidak scratch</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox38" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox38" name="customCheckbox38" value="1" {{  ($kankens->customCheckbox38 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox38" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td rowspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Judge</td>
                                        <td rowspan="3" colspan="4">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Plug OCV Filter</td>
                                        <td>24 - 44</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act18" value="{{$kankens->act18}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox39" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox39" name="customCheckbox39" value="1" {{  ($kankens->customCheckbox39 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox39" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="7" class="font-weight-bold">12</td>
                                        <td rowspan="7">Bracket Wire Knock Sensor</td>
                                        <td rowspan="2">1</td>
                                        <td rowspan="2" colspan="4">Cara Pasang</td>
                                        <td colspan="4">Tidak boleh terbalik</td>
                                        <td rowspan="7" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox40" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox40" name="customCheckbox40" value="1" {{  ($kankens->customCheckbox40 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox40" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="7">
                                            <img src="{{ asset('image/12.jpg') }}" alt="no12" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Stoper tidak bengkok, stoper flat ke face C/H</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox41" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox41" name="customCheckbox41" value="1" {{  ($kankens->customCheckbox41 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox41" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Type bracket</td>
                                        <td colspan="4">Sesuai variant engine</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox42" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox42" name="customCheckbox42" value="1" {{  ($kankens->customCheckbox42 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox42" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Wire Knock Sensor</td>
                                        <td colspan="4">Sesuai variant engine</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox43" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox43" name="customCheckbox43" value="1" {{  ($kankens->customCheckbox4 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox43" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td colspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Judge</td>
                                        <td rowspan="3" colspan="3">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">2</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bracket K. Sensor</td>
                                        <td>17 - 48</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act19" value="{{$kankens->act19}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox44" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox44" name="customCheckbox44" value="1" {{  ($kankens->customCheckbox44 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox44" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="8" class="font-weight-bold">13</td>
                                        <td rowspan="8">Assy Dumper Chain Vibration No 1 (Engine 1 TR & 2 TR)</td>
                                        <td>1</td>
                                        <td colspan="4">Posisi dumper</td>
                                        <td colspan="4">Tidak terbalik & tidak tertukar antara 1TR / 2TR</td>
                                        <td rowspan="8" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox45" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox45" name="customCheckbox45" value="1" {{  ($kankens->customCheckbox45 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox45" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="8">
                                            <img src="{{ asset('image/13.jpg') }}" alt="no13" width="240" height="210">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Type Dumper</td>
                                        <td colspan="4">Ada label 1TR/2TR</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox46" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox46" name="customCheckbox46" value="1" {{  ($kankens->customCheckbox4 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox46" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Shoes Dumper</td>
                                        <td colspan="4">Masuk grove dan lock</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox47" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox47" name="customCheckbox47" value="1" {{  ($kankens->customCheckbox47 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox47" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td colspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Judge</td>
                                        <td rowspan="5" colspan="3">&nbsp</td>
                                        <td rowspan="5">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">2</td>
                                    </tr>
                                    <tr>
                                        <td>1TR</td>
                                        <td>Bolt Dumper</td>
                                        <td>18 - 30</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act20" value="{{$kankens->act20}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act21" value="{{$kankens->act21}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox48" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox48" name="customCheckbox48" value="1" {{  ($kankens->customCheckbox48 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox48" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2TR</td>
                                        <td>Nut Dumper</td>
                                        <td>18 - 30</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act22" value="{{$kankens->act22}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox49" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox49" name="customCheckbox49" value="1" {{  ($kankens->customCheckbox49 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox49" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bolt Dumper</td>
                                        <td>18 - 30</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act23" value="{{$kankens->act23}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox50" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox50" name="customCheckbox50" value="1" {{  ($kankens->customCheckbox50 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox50" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="font-weight-bold">14</td>
                                        <td rowspan="5">Assy Shower Pipe</td>
                                        <td>1</td>
                                        <td colspan="4">Pemasangan Bolt</td>
                                        <td colspan="4">4 Pos Bolt dipasang pada Cam Cap</td>
                                        <td rowspan="5" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox51" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox51" name="customCheckbox51" value="1" {{  ($kankens->customCheckbox4 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox51" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="5">
                                            <img src="{{ asset('image/14.jpg') }}" alt="no14" width="240" height="150">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">"O" Ring</td>
                                        <td colspan="4">Harus terpasang dan tidak rusak</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox52" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox52" name="customCheckbox52" value="1" {{  ($kankens->customCheckbox52 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox52" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td colspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Judge</td>
                                        <td rowspan="3" colspan="3">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">2</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Sower Pipe Pipe</td>
                                        <td>11 - 17</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act24" value="{{$kankens->act24}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox53" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox53" name="customCheckbox53" value="1" {{  ($kankens->customCheckbox53 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox53" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="7" class="font-weight-bold">15</td>
                                        <td rowspan="7">Assy Tensor Chain</td>
                                        <td>1</td>
                                        <td colspan="4">Permukaan Cyl Head dan Tensioner</td>
                                        <td colspan="4">Bersih, Tidak Cacat / Baret</td>
                                        <td rowspan="7" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox54" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox54" name="customCheckbox54" value="1" {{  ($kankens->customCheckbox54 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox54" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="7">
                                            <img src="{{ asset('image/15.jpg') }}" alt="no15">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Gasket</td>
                                        <td colspan="4">Terpasang tidak terbalik</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox55" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox55" name="customCheckbox55" value="1" {{  ($kankens->customCheckbox55 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox55" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Pin lock tensioner</td>
                                        <td colspan="4">Dilepas setelah torq bolt dan nut</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox56" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox56" name="customCheckbox56" value="1" {{  ($kankens->customCheckbox56 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox56" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td rowspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Judge</td>
                                        <td rowspan="4" colspan="4">&nbsp</td>
                                        <td rowspan="4">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Nut</td>
                                        <td>8 - 14</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act25" value="{{$kankens->act25}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox57" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox57" name="customCheckbox57" value="1" {{  ($kankens->customCheckbox57 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox57" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Bolt to Cyl Head</td>
                                        <td>8 - 14</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act26" value="{{$kankens->act26}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox58" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox58" name="customCheckbox58" value="1" {{  ($kankens->customCheckbox58 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox58" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="11" class="font-weight-bold">16</td>
                                        <td rowspan="11">Assy Water Inlet</td>
                                        <td rowspan="3">1</td>
                                        <td colspan="4" rowspan="3">Thermostat</td>
                                        <td colspan="4">O ring tidak robek / cacat</td>
                                        <td rowspan="11" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox59" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox59" name="customCheckbox59" value="1" {{  ($kankens->customCheckbox59 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox59" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="11">
                                            <img src="{{ asset('image/16.jpg') }}" alt="no16" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Sesuai type engine variant</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox60" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox60" name="customCheckbox60" value="1" {{  ($kankens->customCheckbox60 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox60" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Thermostat masuk gasket dan tidak miring</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox61" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox61" name="customCheckbox61" value="1" {{  ($kankens->customCheckbox61 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox61" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Posisi Jingle</td>
                                        <td colspan="4">Ada pada posisi Top Up (Atas)</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox62" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox62" name="customCheckbox62" value="1" {{  ($kankens->customCheckbox62 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox62" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Cara Pasang Thermostat</td>
                                        <td colspan="4">Tidak terbalik (Spring / Bimetal didalam)</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox63" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox63" name="customCheckbox63" value="1" {{  ($kankens->customCheckbox63 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox63" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td colspan="4">Gasket Water Inlet</td>
                                        <td colspan="4">Lapisan tidak rusak, bengkok maupun scratch</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox64" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox64" name="customCheckbox64" value="1" {{  ($kankens->customCheckbox64 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox64" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td colspan="4">Pengencangan Bolt & Nut</td>
                                        <td colspan="4">Dari bagian atas & Masuk Std</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox65" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox65" name="customCheckbox65" value="1" {{  ($kankens->customCheckbox65 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox65" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td rowspan="2">Standard (nm) <br> TR reguler</td>
                                        <td colspan="2">Actual</td>
                                        <td rowspan="2">Standard (nm) <br> TR KAI</td>
                                        <td colspan="2">Actual</td>
                                        <td rowspan="2">Judge</td>
                                        <td rowspan="4">&nbsp</td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td>1</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bolt</td>
                                        <td rowspan="2" style="text-align: center;">14 - 30</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act27" value="{{$kankens->act27}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>

                                        <td rowspan="2" style="text-align: center;">17 - 42</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act28" value="{{$kankens->act28}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox66" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox66" name="customCheckbox66" value="1" {{  ($kankens->customCheckbox66 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox66" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nut</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act29" value="{{$kankens->act29}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act30" value="{{$kankens->act30}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox67" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox67" name="customCheckbox67" value="1" {{  ($kankens->customCheckbox67 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox67" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="font-weight-bold">17</td>
                                        <td rowspan="5">Assy V-Ribbert Tensioner</td>
                                        <td>1</td>
                                        <td colspan="4">Type v ribbed</td>
                                        <td colspan="4">TR KAI ada mark kotak 3 titik, reguler tidak ada</td>
                                        <td rowspan="5" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox68" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox68" name="customCheckbox68" value="1" {{  ($kankens->customCheckbox68 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox68" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="5">
                                            <img src="{{ asset('image/17.jpg') }}" alt="no17" width="240" height="180">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Hole bolt V ribbed belt to TCC</td>
                                        <td colspan="4">Posisi center</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox69" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox69" name="customCheckbox69" value="1" {{  ($kankens->customCheckbox69 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox69" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td>No</td>
                                        <td>Item Check</td>
                                        <td>Standard</td>
                                        <td>Actual</td>
                                        <td>Judge</td>
                                        <td rowspan="3" colspan="4">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bolt 12</td>
                                        <td>18 - 30</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act31" value="{{$kankens->act31}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox70" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox70" name="customCheckbox70" value="1" {{  ($kankens->customCheckbox70 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox70" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Bolt 14</td>
                                        <td>35 - 57</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act32" value="{{$kankens->act32}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox71" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox71" name="customCheckbox71" value="1" {{  ($kankens->customCheckbox71 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox71" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="4" class="font-weight-bold">18</td>
                                        <td rowspan="4">Assy Plug Screw to Chain Case</td>
                                        <td>1</td>
                                        <td colspan="4">Loctate</td>
                                        <td colspan="4">Ada dan Merata</td>
                                        <td rowspan="4" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox72" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox72" name="customCheckbox72" value="1" {{  ($kankens->customCheckbox72 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox72" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="4">
                                            <img src="{{ asset('image/18.jpg') }}" alt="no18">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Type bolt plug</td>
                                        <td colspan="4">Hexagon</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox73" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox73" name="customCheckbox73" value="1" {{  ($kankens->customCheckbox4 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox73" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td>No</td>
                                        <td>Standard</td>
                                        <td>Actual</td>
                                        <td>Judge</td>
                                        <td rowspan="2" colspan="5">&nbsp</td>
                                        <td rowspan="2">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>12 - 24 <br> (N.m)</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act33" value="{{$kankens->act33}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox74" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox74" name="customCheckbox74" value="1" {{  ($kankens->customCheckbox74 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox74" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="16" class="font-weight-bold">19</td>
                                        <td rowspan="16">Assy Oil Pan No : 01</td>
                                        <td>1</td>
                                        <td colspan="4">Proses Fipg</td>
                                        <td colspan="4">Ada dan Tidak terputus</td>
                                        <td rowspan="16" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox75" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox75" name="customCheckbox75" value="1" {{  ($kankens->customCheckbox75 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox75" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="16">
                                            <img src="{{ asset('image/19.jpg') }}" alt="no19" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2</td>
                                        <td colspan="4" rowspan="2">"O" Ring</td>
                                        <td colspan="4">Harus terpasang dan masuk Groove Strainer</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox76" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox76" name="customCheckbox76" value="1" {{  ($kankens->customCheckbox76 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox76" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Tidak rusak / Tidak sobek</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox77" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox77" name="customCheckbox77" value="1" {{  ($kankens->customCheckbox77 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox77" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Pin ring oil pan to block</td>
                                        <td colspan="4">Terpasang 2 pcs (Gauage I 11 H)</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox78" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox78" name="customCheckbox78" value="1" {{  ($kankens->customCheckbox78 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox78" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">No</td>
                                        <td colspan="2" style="text-align: center;">1</td>
                                        <td style="text-align: center;">2</td>
                                        <!-- <td style="text-align: center;">Actual</td> -->
                                        <td rowspan="12" colspan="4">&nbsp</td>
                                        <td rowspan="12">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Item Check</td>
                                        <td colspan="2" style="text-align: center;">Bolt</td>
                                        <td style="text-align: center;">Nut</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Standard N.m</td>
                                        <td colspan="2" style="text-align: center;">23 - 37</td>
                                        <td style="text-align: center;">23 - 37</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="8">Actual</td>
                                        <td>1</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act34" value="{{$kankens->act34}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act35" value="{{$kankens->act35}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act36" value="{{$kankens->act36}}">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act37" value="{{$kankens->act37}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act38" value="{{$kankens->act38}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act39" value="{{$kankens->act39}}">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act40" value="{{$kankens->act40}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act41" value="{{$kankens->act41}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act42" value="{{$kankens->act42}}">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act43" value="{{$kankens->act43}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act44" value="{{$kankens->act44}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act45" value="{{$kankens->act45}}">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act46" value="{{$kankens->act46}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act47" value="{{$kankens->act47}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act48" value="{{$kankens->act48}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act49" value="{{$kankens->act49}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act50" value="{{$kankens->act50}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act51" value="{{$kankens->act51}}">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act52" value="{{$kankens->act52}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act53" value="{{$kankens->act53}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act54" value="{{$kankens->act54}}">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act55" value="{{$kankens->act55}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act56" value="{{$kankens->act56}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act57" value="{{$kankens->act57}}">
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td colspan="2">Judge</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox79" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox79" name="customCheckbox79" value="1" {{  ($kankens->customCheckbox79 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox79" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox80" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox80" name="customCheckbox80" value="1" {{  ($kankens->customCheckbox80 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox80" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox81" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox81" name="customCheckbox81" value="1" {{  ($kankens->customCheckbox81 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox81" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="7" class="font-weight-bold">20</td>
                                        <td rowspan="7">Assy Strainer</td>
                                        <td>1</td>
                                        <td colspan="4">Gasket Strainer</td>
                                        <td colspan="4">Harus ada dan tidak miring</td>
                                        <td rowspan="7" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox82" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox82" name="customCheckbox82" value="1" {{  ($kankens->customCheckbox82 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox82" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="7">
                                            <img src="{{ asset('image/20.jpg') }}" alt="no20" width="240" height="180">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Saringan</td>
                                        <td colspan="4">Bersih dan tidak rusak</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox83" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox83" name="customCheckbox83" value="1" {{  ($kankens->customCheckbox83 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox83" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Pengencangan Bolt</td>
                                        <td colspan="4">Masuk standard</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox84" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox84" name="customCheckbox84" value="1" {{  ($kankens->customCheckbox84 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox84" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td colspan="2" rowspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Judge</td>
                                        <td rowspan="4" colspan="3">&nbsp</td>
                                        <td rowspan="4">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bolt</td>
                                        <td>8 - 14</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act58" value="{{$kankens->act58}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act59" value="{{$kankens->act59}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox85" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox85" name="customCheckbox85" value="1" {{  ($kankens->customCheckbox85 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox85" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Nut</td>
                                        <td>8 - 14</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act60" value="{{$kankens->act60}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox86" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox86" name="customCheckbox86" value="1" {{  ($kankens->customCheckbox86 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox86" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="font-weight-bold">21</td>
                                        <td rowspan="5">Rear and Plate</td>
                                        <td>1</td>
                                        <td colspan="4">Cara Pasang</td>
                                        <td colspan="4">Tidak boleh terbalik, hanya yang RH yang dipasang bolt</td>
                                        <td rowspan="5" class="font-weight-bold">C</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox87" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox87" name="customCheckbox87" value="1" {{  ($kankens->customCheckbox87 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox87" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="5">
                                            <img src="{{ asset('image/21.jpg') }}" alt="no21">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Pin straight RR plate</td>
                                        <td colspan="4">Terpasang 2 pcs (Gauge I 8 H)</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox88" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox88" name="customCheckbox88" value="1" {{  ($kankens->customCheckbox88 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox88" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Item Check</td>
                                        <td>Standard</td>
                                        <td colspan="2" rowspan="2" style="text-align: center;">Actual</td>
                                        <td rowspan="2">Judge</td>
                                        <td rowspan="3" colspan="3">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Rear and Plate</td>
                                        <td>14 - 27</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act61" value="{{$kankens->act61}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox89" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox89" name="customCheckbox89" value="1" {{  ($kankens->customCheckbox89 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox89" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="11" class="font-weight-bold">22</td>
                                        <td rowspan="11">Assy Oil Seal Retainer <br> std: 11-18 N.m</td>
                                        <td>1</td>
                                        <td colspan="4">Permukaan Oil Seal Retainer</td>
                                        <td colspan="4">Tidak cacat / baret dan tidak ada oil</td>
                                        <td rowspan="11" class="font-weight-bold">C</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox90" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox90" name="customCheckbox90" value="1" {{  ($kankens->customCheckbox90 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox90" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="11">
                                            <img src="{{ asset('image/22.jpg') }}" alt="no22" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Permukaan Cyl Block to Oil Seal</td>
                                        <td colspan="4">Tidak cacat / baret dan tidak ada oil</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox91" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox91" name="customCheckbox91" value="1" {{  ($kankens->customCheckbox91 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox91" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Pin straight</td>
                                        <td colspan="4">Terpasang 2 pcs (Gauge I 7 H)</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox92" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox92" name="customCheckbox92" value="1" {{  ($kankens->customCheckbox92 == 1 ? ' checked' : '') }}2>
                                                <label for="customCheckbox92" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">4</td>
                                        <td colspan="4" rowspan="2">Pemberian FIPG</td>
                                        <td colspan="4">Dia 2-3mm, Tidak terputus-putus</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox93" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox93" name="customCheckbox93" value="1" {{  ($kankens->customCheckbox93 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox93" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Jalur FIPG masuk grove</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox94" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox94" name="customCheckbox94" value="1" {{  ($kankens->customCheckbox94 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox94" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">5</td>
                                        <td colspan="4" rowspan="2">Press Seal Retainer</td>
                                        <td colspan="4">Standard 0 ~ -1mm (Gauge I 3 H)</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox95" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox95" name="customCheckbox95" value="1" {{  ($kankens->customCheckbox95 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox95" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Inclination 0.5° max</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox96" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox96" name="customCheckbox96" value="1" {{  ($kankens->customCheckbox96 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox96" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="text-align: center; vertical-align : middle">
                                        <td rowspan="2">No</td>
                                        <td rowspan="2">Standard</td>
                                        <td colspan="3">Actual</td>
                                        <td rowspan="2" class="align-middle">Judge</td>
                                        <td rowspan="4" colspan="3">&nbsp</td>
                                        <td rowspan="4">&nbsp</td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td>1 / 4</td>
                                        <td>2 / 5</td>
                                        <td>3 / 6</td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td rowspan="2" class="align-middle">1</td>
                                        <td rowspan="2" style="vertical-align : middle">11 - 18</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act62" value="{{$kankens->act62}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act63" value="{{$kankens->act63}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act64" value="{{$kankens->act64}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox97" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox97" name="customCheckbox97" value="1" {{  ($kankens->customCheckbox97 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox97" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act65" value="{{$kankens->act65}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act66" value="{{$kankens->act66}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act67" value="{{$kankens->act67}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox98" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox98" name="customCheckbox98" value="1" {{  ($kankens->customCheckbox98 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox98" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="4" class="font-weight-bold">23</td>
                                        <td rowspan="4">Assy Oil Pan Drain Plug</td>
                                        <td>1</td>
                                        <td colspan="4">Gasket</td>
                                        <td colspan="4">Harus ada dan tidak bengkok</td>
                                        <td rowspan="4" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox99" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox99" name="customCheckbox99" value="1" {{  ($kankens->customCheckbox99 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox99" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="21">
                                            <img src="{{ asset('image/23_24.jpg') }}" alt="no23_24" width="240" height="270">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="text-center align-middle">No</td>
                                        <td rowspan="2" class="text-center align-middle">Item Check</td>
                                        <td class="text-center">Standard</td>
                                        <td rowspan="2" class="text-center align-middle">Actual</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="3" colspan="4">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Drain Plug</td>
                                        <td>30 - 53</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act68" value="{{$kankens->act68}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox100" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox100" name="customCheckbox100" value="1" {{  ($kankens->customCheckbox100 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox100" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="17" class="font-weight-bold">24</td>
                                        <td rowspan="17">Assy Oil Pan No : 02</td>
                                        <td>1</td>
                                        <td colspan="4">Proses Fipg</td>
                                        <td colspan="4">Ada dan Tidak terputus</td>
                                        <td rowspan="17" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox101" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox101" name="customCheckbox101" value="1" {{  ($kankens->customCheckbox101 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox101" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <!-- <td rowspan="17">gambar</td> -->
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">"Buffle Plate"</td>
                                        <td colspan="4">Ada</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox102" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox102" name="customCheckbox102" value="1" {{  ($kankens->customCheckbox102 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox102" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Bolt stud type TR KAI terpasang</td>
                                        <td colspan="4">Ada 4 pcs</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox103" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox103" name="customCheckbox103" value="1" {{  ($kankens->customCheckbox103 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox103" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">No</td>
                                        <td colspan="2" style="text-align: center;">1</td>
                                        <td style="text-align: center;">2</td>
                                        <!-- <td style="text-align: center;">Actual</td> -->
                                        <td rowspan="14" colspan="4">&nbsp</td>
                                        <td rowspan="14">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Item Check</td>
                                        <td colspan="2" style="text-align: center;">Bolt</td>
                                        <td style="text-align: center;">Nut</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Standard N.m</td>
                                        <td colspan="2" style="text-align: center;">23 - 37</td>
                                        <td style="text-align: center;">23 - 37</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="10" class="align-middle">Actual</td>
                                        <td>1</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act69" value="{{$kankens->act69}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act70" value="{{$kankens->act70}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act71" value="{{$kankens->act71}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act72" value="{{$kankens->act72}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act73" value="{{$kankens->act73}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act74" value="{{$kankens->act74}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act75" value="{{$kankens->act75}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act76" value="{{$kankens->act76}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act77" value="{{$kankens->act77}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act78" value="{{$kankens->act78}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act79" value="{{$kankens->act79}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act80" value="{{$kankens->act80}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act81" value="{{$kankens->act81}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act82" value="{{$kankens->act82}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act83" value="{{$kankens->act83}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act84" value="{{$kankens->act84}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act85" value="{{$kankens->act85}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act86" value="{{$kankens->act86}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act87" value="{{$kankens->act87}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act88" value="{{$kankens->act88}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act89" value="{{$kankens->act89}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act90" value="{{$kankens->act90}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act91" value="{{$kankens->act91}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act92" value="{{$kankens->act92}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act93" value="{{$kankens->act93}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act94" value="{{$kankens->act94}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act95" value="{{$kankens->act95}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act96" value="{{$kankens->act96}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act97" value="{{$kankens->act97}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act98" value="{{$kankens->act98}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Judge</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox104" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox104" name="customCheckbox104" value="1" {{  ($kankens->customCheckbox104 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox104" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox105" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox105" name="customCheckbox105" value="1" {{  ($kankens->customCheckbox105 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox105" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox106" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox106" name="customCheckbox106" value="1" {{  ($kankens->customCheckbox106 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox106" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="9" class="font-weight-bold">25</td>
                                        <td rowspan="9">Assy Oil Control Valve</td>
                                        <td>1</td>
                                        <td colspan="4">"O ring"</td>
                                        <td colspan="4">Ada, masuk ke grove dan tidak melejit</td>
                                        <td rowspan="5" class="font-weight-bold">V</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox107" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox107" name="customCheckbox107" value="1" {{  ($kankens->customCheckbox107 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox107" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="9">
                                            <img src="{{ asset('image/25.jpg') }}" alt="no25" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Pemberian Silikon</td>
                                        <td colspan="4">Merata</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox108" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox108" name="customCheckbox108" value="1" {{  ($kankens->customCheckbox108 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox108" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3</td>
                                        <td colspan="4" rowspan="2">Cara pasang OCV</td>
                                        <td colspan="4">Diputar searah jarum jam sambil didorong</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox109" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox109" name="customCheckbox109" value="1" {{  ($kankens->customCheckbox109 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox109" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">(Tidak boleh diputar bolak-balik)</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox110" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox110" name="customCheckbox110" value="1" {{  ($kankens->customCheckbox110 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox110" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td colspan="4">Connector Wire OCV</td>
                                        <td colspan="4">Socket tidak pecah & skun tidak bengkok/patah</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox111" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox111" name="customCheckbox111" value="1" {{  ($kankens->customCheckbox111 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox111" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle">No</td>
                                        <td rowspan="2" class="text-center align-middle">Item Check</td>
                                        <td class="text-center">Standard</td>
                                        <td rowspan="2" class="text-center align-middle">Actual</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="4" colspan="4">&nbsp</td>
                                        <td rowspan="4" class="font-weight-bold">B</td>
                                        <td rowspan="4">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>OCV in TR reguler</td>
                                        <td>7 - 11</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act99" value="{{$kankens->act99}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox112" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox112" name="customCheckbox112" value="1" {{  ($kankens->customCheckbox112 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox112" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>OCV in TR KAI</td>
                                        <td>9,9 - 12,8</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act100" value="{{$kankens->act100}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox113" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox113" name="customCheckbox113" value="1" {{  ($kankens->customCheckbox113 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox113" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="8" class="font-weight-bold">26</td>
                                        <td rowspan="8">Assy Crank Angle Sensor</td>
                                        <td>1</td>
                                        <td colspan="4">"O ring"</td>
                                        <td colspan="4">Ada, masuk ke grove dan tidak melejit</td>
                                        <td rowspan="8" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox114" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox114" name="customCheckbox114" value="1" {{  ($kankens->customCheckbox114 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox114" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="8">
                                            <img src="{{ asset('image/26.jpg') }}" alt="no26" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Pemberian Silikon</td>
                                        <td colspan="4">Merata</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox115" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox115" name="customCheckbox115" value="1" {{  ($kankens->customCheckbox115 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox115" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Socket & skun wire</td>
                                        <td colspan="4">Tidak pecah dan tidak bengkok</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox116" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox116" name="customCheckbox116" value="1" {{  ($kankens->customCheckbox116 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox116" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td colspan="4">Clamp wire</td>
                                        <td colspan="4">Lock clamp flat to c/block</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox117" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox117" name="customCheckbox117" value="1" {{  ($kankens->customCheckbox117 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox117" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle">No</td>
                                        <td rowspan="2" class="text-center align-middle">Item Check</td>
                                        <td class="text-center">Standard</td>
                                        <td rowspan="2" class="text-center align-middle">Actual</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="4" colspan="4">&nbsp</td>
                                        <td rowspan="4">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Crank sensor TR Reguler</td>
                                        <td>6 - 13</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act101">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox118" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox118" name="customCheckbox118" value="1" {{  ($kankens->customCheckbox118 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox118" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Crank sensor TR KAI</td>
                                        <td>5 - 14</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act102" value="{{$kankens->act102}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox119" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox119" name="customCheckbox119" value="1" {{  ($kankens->customCheckbox119 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox119" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="7" class="font-weight-bold">27</td>
                                        <td rowspan="7">Assy Cam Angle Sensor</td>
                                        <td>1</td>
                                        <td colspan="4">"O ring"</td>
                                        <td colspan="4">Ada, masuk ke grove dan tidak rusak</td>
                                        <td rowspan="3" class="font-weight-bold">V</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox120" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox120" name="customCheckbox120" value="1" {{  ($kankens->customCheckbox120 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox120" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="7">
                                            <img src="{{ asset('image/27.jpg') }}" alt="no27" width="240" height="140">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Pemberian Silikon</td>
                                        <td colspan="4">Merata</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox121" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox121" name="customCheckbox121" value="1" {{  ($kankens->customCheckbox121 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox121" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Socket & skun wire</td>
                                        <td colspan="4">Tidak pecah & tidak bengkok</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox122" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox122" name="customCheckbox122" value="1" {{  ($kankens->customCheckbox122 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox122" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle">No</td>
                                        <td rowspan="2" class="text-center align-middle">Item Check</td>
                                        <td class="text-center">Standard</td>
                                        <td rowspan="2" class="text-center align-middle">Actual</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="4" colspan="4">&nbsp</td>
                                        <td rowspan="4" class="font-weight-bold">B</td>
                                        <td rowspan="4">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Cam sensor in TR Reguler</td>
                                        <td>6 - 13</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act103" value="{{$kankens->act103}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox123" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox123" name="customCheckbox123" value="1" {{  ($kankens->customCheckbox123 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox123" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Cam sensor in TR KAI</td>
                                        <td>7 - 12,8</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act104" value="{{$kankens->act104}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox124" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox124" name="customCheckbox124" value="1" {{  ($kankens->customCheckbox124 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox124" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="6" class="font-weight-bold">28</td>
                                        <td rowspan="6">Assy Oil Level Gauge</td>
                                        <td>1</td>
                                        <td colspan="4">"O ring"</td>
                                        <td colspan="4">Ada, masuk ke grove dan tidak rusak</td>
                                        <td rowspan="6" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox125" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox125" name="customCheckbox125" value="1" {{  ($kankens->customCheckbox125 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox125" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="6">
                                            <img src="{{ asset('image/28.jpg') }}" alt="no28" width="240" height="130">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Bracket oil level guide</td>
                                        <td colspan="4">TR KAI lebih pendek dibandingkan TR reguler</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox126" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox126" name="customCheckbox126" value="1" {{  ($kankens->customCheckbox126 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox126" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Type bolt</td>
                                        <td colspan="4">TR KAI w washer silver, TR reguler hitam</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox127" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox127" name="customCheckbox127" value="1" {{  ($kankens->customCheckbox127 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox127" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle">No</td>
                                        <td rowspan="2" class="text-center align-middle">Item Check</td>
                                        <td class="text-center">Standard</td>
                                        <td rowspan="2" class="text-center align-middle">Actual</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="3" colspan="4">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bolt oil level</td>
                                        <td>7 - 11</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act105" value="{{$kankens->act105}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox128" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox128" name="customCheckbox128" value="1" {{  ($kankens->customCheckbox128 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox128" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="7" class="font-weight-bold">29</td>
                                        <td rowspan="7">Assy Top Dumper</td>
                                        <td rowspan="2">1</td>
                                        <td colspan="4" rowspan="2">Viber / karet</td>
                                        <td colspan="4">Harus ada dan tidak robek / cacat</td>
                                        <td rowspan="7" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox129" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox129" name="customCheckbox129" value="1" {{  ($kankens->customCheckbox129 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox129" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="7">
                                            <img src="{{ asset('image/29.jpg') }}" alt="no29" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Melekat kuat dan tidak goyang</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox130" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox130" name="customCheckbox130" value="1" {{  ($kankens->customCheckbox130 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox130" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2</td>
                                        <td colspan="4" rowspan="2">"O" ring</td>
                                        <td colspan="4">Harus ada dan tidak robek / cacat</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox131" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox131" name="customCheckbox131" value="1" {{  ($kankens->customCheckbox131 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox131" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Masuk groove</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox132" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox132" name="customCheckbox132" value="1" {{  ($kankens->customCheckbox132 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox132" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle">No</td>
                                        <td rowspan="2" class="text-center align-middle">Item Check</td>
                                        <td class="text-center">Standard</td>
                                        <td colspan="2" class="text-center align-middle">Actual</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="3" colspan="3">&nbsp</td>
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>N.m</td>
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Top dumper</td>
                                        <td>8 - 14</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act106" value="{{$kankens->act106}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act107" value="{{$kankens->act107}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox133" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox133" name="customCheckbox133" value="1" {{  ($kankens->customCheckbox133 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox133" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="8" class="font-weight-bold">30</td>
                                        <td rowspan="8">Assy Water By Pass Pipe</td>
                                        <td>1</td>
                                        <td colspan="4">Cara Pasang</td>
                                        <td colspan="4">Pengunci menahan rear and plate</td>
                                        <td rowspan="8" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox134" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox134" name="customCheckbox134" value="1" {{  ($kankens->customCheckbox134 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox134" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="8">
                                            <img src="{{ asset('image/30.jpg') }}" alt="no30" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Gasket</td>
                                        <td colspan="4">Terpasang</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox135" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox135" name="customCheckbox135" value="1" {{  ($kankens->customCheckbox135 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox135" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Pengencangan bolt & nut</td>
                                        <td colspan="4">Nut terlebih dahulu kemudian bolt</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox136" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox136" name="customCheckbox136" value="1" {{  ($kankens->customCheckbox136 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox136" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle">No</td>
                                        <td rowspan="2" class="text-center align-middle">Item Check</td>
                                        <td class="text-center">Standard</td>
                                        <td colspan="2" class="text-center align-middle">Actual</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="5" colspan="3">&nbsp</td>
                                        <td rowspan="5">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>N.m</td>
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Torque Nut</td>
                                        <td>16 - 26</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act108" value="{{$kankens->act108}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act109" value="{{$kankens->act109}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox137" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox137" name="customCheckbox137" value="1" {{  ($kankens->customCheckbox137 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox137" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Torque Bolt to RR plate</td>
                                        <td>16 - 30</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act110" value="{{$kankens->act110}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox138" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox138" name="customCheckbox138" value="1" {{  ($kankens->customCheckbox138 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox138" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>Torque Bolt to Cyl Block (1TR)</td>
                                        <td>16 - 30</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act111" value="{{$kankens->act111}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox139" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox139" name="customCheckbox139" value="1" {{  ($kankens->customCheckbox139 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox139" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="24" class="font-weight-bold">31</td>
                                        <td rowspan="24">Assy Cyl Head Cover</td>
                                        <td rowspan="2">1</td>
                                        <td colspan="4" rowspan="2">Fipg Upper Face</td>
                                        <td colspan="4">Ada diatas sambungan (Celah antara Head & TCC)</td>
                                        <td rowspan="24" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox140" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox140" name="customCheckbox140" value="1" {{  ($kankens->customCheckbox140 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox140" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="24">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Diameter max 10mm</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox141" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox141" name="customCheckbox141" value="1" {{  ($kankens->customCheckbox141 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox141" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2</td>
                                        <td colspan="4" rowspan="2">Gasket Cyl Head Cover</td>
                                        <td colspan="4">Outer dan Inner terpasang dan tidak melejit</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox142" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox142" name="customCheckbox142" value="1" {{  ($kankens->customCheckbox142 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox142" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Tidak rusak / sobek</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox143" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox143" name="customCheckbox143" value="1" {{  ($kankens->customCheckbox143 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox143" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3</td>
                                        <td colspan="4" rowspan="2">Penempatan Cyl Head Cover</td>
                                        <td colspan="4">Tidak terbalik tapping penutup oil di depan</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox144" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox144" name="customCheckbox144" value="1" {{  ($kankens->customCheckbox144 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox144" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Hole masuk stut 3 & 4 Cyl Head</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox145" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox145" name="customCheckbox145" value="1" {{  ($kankens->customCheckbox145 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox145" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">4</td>
                                        <td colspan="4" rowspan="2">Pengencangan Bolt</td>
                                        <td colspan="4">Urutan dari bolt inner paling depan ke belakang</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox146" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox146" name="customCheckbox146" value="1" {{  ($kankens->customCheckbox146 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox146" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Melingkar kekanan bagian luar (outer)</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox147" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox147" name="customCheckbox147" value="1" {{  ($kankens->customCheckbox147 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox147" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td colspan="4">Type head cover</td>
                                        <td colspan="4">Sesuai variant dan type engine</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox148" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox148" name="customCheckbox148" value="1" {{  ($kankens->customCheckbox148 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox148" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">No</td>
                                        <td style="text-align: center;">1</td>
                                        <td style="text-align: center;">2</td>
                                        <td style="text-align: center;">3</td>

                                        <!-- <td style="text-align: center;">Actual</td> -->
                                        <td rowspan="15" colspan="4">&nbsp</td>
                                        <td rowspan="15">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Item Check</td>
                                        <td style="text-align: center;">Inner Bolt</td>
                                        <td style="text-align: center;">Nut</td>
                                        <td style="text-align: center;">Outer Bolt</td>

                                    </tr>
                                    <tr>
                                        <td colspan="2">Standard N.m</td>
                                        <td style="text-align: center;">7 - 13</td>
                                        <td style="text-align: center;">7 - 13</td>
                                        <td style="text-align: center;">7 - 13</td>

                                    </tr>
                                    <tr>
                                        <td rowspan="11" class="align-middle">Actual</td>
                                        <td>1</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act112" value="{{$kankens->act112}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act113" value="{{$kankens->act113}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act114" value="{{$kankens->act114}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act115" value="{{$kankens->act115}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act116" value="{{$kankens->act116}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act117" value="{{$kankens->act117}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act118" value="{{$kankens->act118}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act119" value="{{$kankens->act119}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act120" value="{{$kankens->act120}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act121" value="{{$kankens->act121}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act122" value="{{$kankens->act122}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act123" value="{{$kankens->act123}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act124" value="{{$kankens->act124}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act125" value="{{$kankens->act125}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act126" value="{{$kankens->act126}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act127" value="{{$kankens->act127}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act128" value="{{$kankens->act128}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act129" value="{{$kankens->act129}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>9</td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act130" value="{{$kankens->act130}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>10</td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act131" value="{{$kankens->act131}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>11</td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act132" value="{{$kankens->act132}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Judge</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox149" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox149" name="customCheckbox149" value="1" {{  ($kankens->customCheckbox149 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox149" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox150" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox150" name="customCheckbox150" value="1" {{  ($kankens->customCheckbox150 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox150" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox151" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox151" name="customCheckbox151" value="1" {{  ($kankens->customCheckbox151 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox151" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="11" class="font-weight-bold">32</td>
                                        <td rowspan="11">Assy Engine Mounting</td>
                                        <td rowspan="2">1</td>
                                        <td colspan="4" rowspan="2">Engine Mtg</td>
                                        <td colspan="4">Tidak terbalik (Rh & Lh)</td>
                                        <td rowspan="2" class="font-weight-bold">V</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox152" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox152" name="customCheckbox152" value="1" {{  ($kankens->customCheckbox152 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox152" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="11">
                                            <img src="{{ asset('image/32.jpg') }}" alt="no32" width="240">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Sesuai variant dan type engine</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox153" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox153" name="customCheckbox153" value="1" {{  ($kankens->customCheckbox153 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox153" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">No</td>
                                        <td style="text-align: center;" colspan="2">1</td>
                                        <td style="text-align: center;">2</td>
                                        <td style="text-align: center;">3</td>
                                        <td rowspan="9" colspan="3">Referensi min 70Nm</td>
                                        <td rowspan="9" class="font-weight-bold">B</td>
                                        <!-- <td style="text-align: center;">Actual</td> -->
                                        <td rowspan="9">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Item Check</td>
                                        <td style="text-align: center;" colspan="2">To Block</td>
                                        <td style="text-align: center;">Insulator TR reguler</td>
                                        <td style="text-align: center;">Insulator TR KAI</td>

                                    </tr>
                                    <tr>
                                        <td colspan="2">&nbsp</td>
                                        <td style="text-align: center;">RH</td>
                                        <td style="text-align: center;">LH</td>
                                        <td style="text-align: center;">RH | LH</td>
                                        <td style="text-align: center;">RH | LH</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Standard N.m</td>
                                        <td style="text-align: center;" colspan="2">45 - 73</td>
                                        <td style="text-align: center;">35 - 63</td>
                                        <td style="text-align: center;">50,3 - 83,1</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="4" class="align-middle">Actual</td>
                                        <td>1</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act133" value="{{$kankens->act133}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act134" value="{{$kankens->act134}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act135" value="{{$kankens->act135}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act136" value="{{$kankens->act136}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act137" value="{{$kankens->act137}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act138" value="{{$kankens->act138}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act139" value="{{$kankens->act139}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act140" value="{{$kankens->act140}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act141" value="{{$kankens->act141}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act142" value="{{$kankens->act142}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act143" value="{{$kankens->act143}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act144" value="{{$kankens->act144}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Judge</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox154" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox154" name="customCheckbox154" value="1" {{  ($kankens->customCheckbox154 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox154" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox155" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox155" name="customCheckbox155" value="1" {{  ($kankens->customCheckbox155 == 1 ? ' checked' : '') }}5>
                                                <label for="customCheckbox155" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox156" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox156" name="customCheckbox156" value="1" {{  ($kankens->customCheckbox156 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox156" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox157" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox157" name="customCheckbox157" value="1" {{  ($kankens->customCheckbox157 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox157" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="16" class="font-weight-bold">33</td>
                                        <td rowspan="16">Assy Exhaust Manifold Nut</td>
                                        <td>1</td>
                                        <td colspan="4">Gasket Exhaust</td>
                                        <td colspan="4">Ada, tidak terbalik, tidak salah tipe, tidak double</td>
                                        <td rowspan="4" class="font-weight-bold">E</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox158" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox158" name="customCheckbox158" value="1" {{  ($kankens->customCheckbox158 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox158" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="16">
                                            <img src="{{ asset('image/33.jpg') }}" alt="no33" width="240" height="130">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Pengencangan Nut</td>
                                        <td colspan="4">Urutan pengencangan dari bagian dalam ke luar</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox159" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox159" name="customCheckbox159" value="1" {{  ($kankens->customCheckbox159 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox159" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Type exhaust</td>
                                        <td colspan="4">Sesuai variant dan type engine</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox160" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox160" name="customCheckbox160" value="1" {{  ($kankens->customCheckbox160 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox160" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td colspan="4">Type nut</td>
                                        <td colspan="4">Nut spesial lock</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox161" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox161" name="customCheckbox161" value="1" {{  ($kankens->customCheckbox161 == 1 ? ' checked' : '') }}1>
                                                <label for="customCheckbox161" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">No</td>
                                        <td style="text-align: center;">1</td>
                                        <td style=" text-align: center;">2</td>
                                        <!-- <td style="text-align: center;">Actual</td> -->
                                        <td rowspan="12" colspan="5">&nbsp</td>
                                        <td rowspan="12" class="font-weight-bold">B</td>
                                        <td rowspan="12">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Item Check</td>
                                        <td style="text-align: center;">Whith AI</td>
                                        <td style=" text-align: center;">Less AI</td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Standard N.m</td>
                                        <td style="text-align: center;" colspan="2">33 - 59</td>
                                    </tr>
                                    <tr>
                                        <td rowspan="8" class="align-middle">Actual</td>
                                        <td>1</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act145" value="{{$kankens->act145}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act146" value="{{$kankens->act146}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act147" value="{{$kankens->act147}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act148" value="{{$kankens->act148}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act149" value="{{$kankens->act149}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act150" value="{{$kankens->act150}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act151" value="{{$kankens->act151}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act152" value="{{$kankens->act152}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act153" value="{{$kankens->act153}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act154" value="{{$kankens->act154}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>6</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act155" value="{{$kankens->act155}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act156" value="{{$kankens->act156}}">
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>7</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act157" value="{{$kankens->act157}}">
                                            </div>
                                        </td>
                                        <td>

                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>

                                    </tr>
                                    <tr>
                                        <td>8</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act158" value="{{$kankens->act158}}">
                                            </div>
                                        </td>
                                        <td>

                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Judge</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox162" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox162" name="customCheckbox162" value="1" {{  ($kankens->customCheckbox162 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox162" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox163" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox163" name="customCheckbox163" value="1" {{  ($kankens->customCheckbox163 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox163" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="7" class="font-weight-bold">34</td>
                                        <td rowspan="7">Assy Insulator Exhaust</td>
                                        <td rowspan="2">1</td>
                                        <td colspan="4" rowspan="2">Insulator</td>
                                        <td colspan="4">Tidak pesok atau baret, tidak double</td>
                                        <td rowspan="7" class="font-weight-bold">C</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox164" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox164" name="customCheckbox164" value="1" {{  ($kankens->customCheckbox164 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox164" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="7">
                                            <img src="{{ asset('image/34.jpg') }}" alt="no34" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Sesuai variant dan type engine</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox165" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox165" name="customCheckbox165" value="1" {{  ($kankens->customCheckbox165 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox165" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Type bolt</td>
                                        <td colspan="4">Flange with washer</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox166" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox166" name="customCheckbox166" value="1" {{  ($kankens->customCheckbox166 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox166" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle">No</td>
                                        <td rowspan="2" class="text-center align-middle">Item Check</td>
                                        <td class="text-center">Standard</td>
                                        <td colspan="3" class="text-center align-middle">Actual</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="4" colspan="2">&nbsp</td>
                                        <td rowspan="4">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>N.m</td>
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Bolt Upper (pendek)</td>
                                        <td rowspan="2" class="text-center align-middle">11 - 17</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act159" value="{{$kankens->act159}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act160" value="{{$kankens->act160}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act161" value="{{$kankens->act161}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox167" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox167" name="customCheckbox167" value="1" {{  ($kankens->customCheckbox167 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox167" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>Bolt Lower (panjang)</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act162" value="{{$kankens->act162}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act163" value="{{$kankens->act163}}">
                                            </div>
                                        </td>

                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>

                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox168" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox168" name="customCheckbox168" value="1" {{  ($kankens->customCheckbox168 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox168" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="7" class="font-weight-bold">35</td>
                                        <td rowspan="7">Assy Air Injector Pipe</td>
                                        <td>1</td>
                                        <td colspan="4">Gasket</td>
                                        <td colspan="4">Terpasang</td>
                                        <td rowspan="2" class="font-weight-bold">V</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox169" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox169" name="customCheckbox169" value="1" {{  ($kankens->customCheckbox169 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox169" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="7">
                                            <img src="{{ asset('image/35.jpg') }}" alt="no35" width="240" height="130">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Type AI pipe</td>
                                        <td colspan="4">Sesuai variant dan type engine</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox170" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox170" name="customCheckbox170" value="1" {{  ($kankens->customCheckbox4 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox170" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle">No</td>
                                        <td rowspan="2" class="text-center align-middle">Item Check</td>
                                        <td class="text-center">Standard</td>
                                        <td colspan="2" class="text-center align-middle">Actual</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="5" colspan="3">&nbsp</td>
                                        <td rowspan="5" class="font-weight-bold">B</td>
                                        <td rowspan="5">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>N.m</td>
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>To Exhaust</td>
                                        <td rowspan="3" class="text-center align-middle">22.5 - 37.3</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act164" value="{{$kankens->act164}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act165" value="{{$kankens->act165}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox171" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox171" name="customCheckbox171" value="1" {{  ($kankens->customCheckbox171 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox171" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>To AI Valve</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act166" value="{{$kankens->act166}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act167" value="{{$kankens->act167}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox172" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox172" name="customCheckbox172" value="1" {{  ($kankens->customCheckbox172 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox172" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>To Cyl Head</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act168" value="{{$kankens->act168}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act169" value="{{$kankens->act169}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox173" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox173" name="customCheckbox173" value="1" {{  ($kankens->customCheckbox173 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox173" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="9" class="font-weight-bold">36</td>
                                        <td rowspan="9">Assy Intake Manifold</td>
                                        <td>1</td>
                                        <td colspan="4">Gasket</td>
                                        <td colspan="4">Ada, tidak melejut / keluar jalur</td>
                                        <td rowspan="9" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox174" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox174" name="customCheckbox174" value="1" {{  ($kankens->customCheckbox174 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox174" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="9">
                                            <img src="{{ asset('image/36.jpg') }}" alt="no36" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Pemasangan Bolt dan Nut</td>
                                        <td colspan="4">Bolt terlebih dahulu sesuai Dop</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox175" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox175" name="customCheckbox175" value="1" {{  ($kankens->customCheckbox175 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox175" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Type intake</td>
                                        <td colspan="4">Sesuai variant engine</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox176" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox176" name="customCheckbox176" value="1" {{  ($kankens->customCheckbox176 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox176" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td colspan="4">Pemasangan insulator intake (up 2 pcs, low 1 pcs)</td>
                                        <td colspan="4">Sesuai variant engine</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox177" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox177" name="customCheckbox177" value="1" {{  ($kankens->customCheckbox177 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox177" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle">No</td>
                                        <td rowspan="2" class="text-center align-middle">Item Check</td>
                                        <td class="text-center">Standard</td>
                                        <td rowspan="2" colspan="3" class="text-center align-middle">Actual</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="5" colspan="2">&nbsp</td>
                                        <!-- <td rowspan="5" class="font-weight-bold">B</td> -->
                                        <td rowspan="5">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>N.m</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Nut</td>
                                        <td>22 - 36</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act170" value="{{$kankens->act170}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act171" value="{{$kankens->act171}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox178" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox178" name="customCheckbox178" value="1" {{  ($kankens->customCheckbox178 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox178" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle">2</td>
                                        <td>Bolt to Cyl Head</td>
                                        <td>22 - 36</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act172" value="{{$kankens->act172}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act173" value="{{$kankens->act173}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act174" value="{{$kankens->act174}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox179" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox179" name="customCheckbox179" value="1" {{  ($kankens->customCheckbox179 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox179" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Bolt to Cyl Block</td>
                                        <td>22 - 36</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act175" value="{{$kankens->act175}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act176" value="{{$kankens->act176}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox180" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox180" name="customCheckbox180" value="1" {{  ($kankens->customCheckbox180 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox180" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="8" class="font-weight-bold">37</td>
                                        <td rowspan="8">Assy Throttle Body <br> std: 7-13 N.m</td>
                                        <td>1</td>
                                        <td colspan="4">Gasket Intake Manifold to Throttle Body</td>
                                        <td colspan="4">Ada / terpasang</td>
                                        <td rowspan="4" class="font-weight-bold">V</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox181" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox181" name="customCheckbox181" value="1" {{  ($kankens->customCheckbox181 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox181" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="8">
                                            <img src="{{ asset('image/37.jpg') }}" alt="no37" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Type Throttle Body (1TR & 2TR, 1 TR KAI & 2TR KAI)</td>
                                        <td colspan="4">Tidak salah type</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox182" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox182" name="customCheckbox182" value="1" {{  ($kankens->customCheckbox182 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox182" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Cover Throttle</td>
                                        <td colspan="4">Sesuai variant engine</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox183" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox183" name="customCheckbox183" value="1" {{  ($kankens->customCheckbox183 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox183" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td colspan="4">Kondisi socket & skun connector</td>
                                        <td colspan="4">Tidak pecah, tidak patah / bengkok</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox184" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox184" name="customCheckbox184" value="1" {{  ($kankens->customCheckbox184 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox184" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td rowspan="2" class="text-center align-middle">No</td>
                                        <td rowspan="2" class="text-center align-middle">Item</td>
                                        <td rowspan="2" class="text-center align-middle">Standard (nm) <br> TR reguler</td>
                                        <td colspan="2" class="text-center align-middle">Actual TR reguler</td>
                                        <td rowspan="2" class="text-center align-middle">Standard (nm) <br> TR KAI</td>
                                        <td colspan="2" class="text-center align-middle">Actual TR KAI</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="4" class="font-weight-bold">B</td>
                                        <td rowspan="4">&nbsp</td>
                                    </tr>
                                    <tr style="text-align: center;">
                                        <td>1</td>
                                        <td>2</td>
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td rowspan="2" class="text-center align-middle">Bolt</td>
                                        <td rowspan="2" rowspan="2" class="text-center align-middle">7 - 13</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act177" value="{{$kankens->act177}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act178" value="{{$kankens->act178}}">
                                            </div>
                                        </td>
                                        <td rowspan="2" rowspan="2" class="text-center align-middle">6 - 15</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act179" value="{{$kankens->act179}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act180" value="{{$kankens->act180}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox185" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox185" name="customCheckbox185" value="1" {{  ($kankens->customCheckbox185 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox185" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act181" value="{{$kankens->act181}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act182" value="{{$kankens->act182}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act183" value="{{$kankens->act183}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act184" value="{{$kankens->act184}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox186" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox186" name="customCheckbox186" value="1" {{  ($kankens->customCheckbox186 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox186" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="5" class="font-weight-bold">38</td>
                                        <td rowspan="5">Assy Ventilation Pipe</td>
                                        <td>1</td>
                                        <td colspan="4">Pemasangan Pipe</td>
                                        <td colspan="4">Tidak boleh terbalik</td>
                                        <td rowspan="5" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox187" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox187" name="customCheckbox187" value="1" {{  ($kankens->customCheckbox187 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox187" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="5">
                                            <img src="{{ asset('image/38.jpg') }}" alt="no38" width="240" height="180">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Insulator</td>
                                        <td colspan="4">Harus ada sesuai variant</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox188" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox188" name="customCheckbox188" value="1" {{  ($kankens->customCheckbox188 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox188" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle">No</td>
                                        <td rowspan="2" class="text-center align-middle">Item Check</td>
                                        <td class="text-center">Standard</td>
                                        <td colspan="2" class="text-center align-middle">Actual</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="3" colspan="3">&nbsp</td>
                                        <!-- <td rowspan="3" class="font-weight-bold">B</td> -->
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>N.m</td>
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>Ventilation Pipe</td>
                                        <td>16 - 26</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act185" value="{{$kankens->act185}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" disabled>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox189" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox189" name="customCheckbox189" value="1" {{  ($kankens->customCheckbox189 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox189" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="10" class="font-weight-bold">39</td>
                                        <td rowspan="4">Pengisian oil engine</td>
                                        <td>1</td>
                                        <td colspan="4">Type oil</td>
                                        <td colspan="4">Ow20 Fastron GF5</td>
                                        <td rowspan="10" class="font-weight-bold">V</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox190" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox190" name="customCheckbox190" value="1" {{  ($kankens->customCheckbox190 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox190" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="10">
                                            <img src="{{ asset('image/39.jpg') }}" alt="no39" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Volume oil</td>
                                        <td colspan="4">6.3 liter ± 0.1 TR - KAI</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox191" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox191" name="customCheckbox191" value="1" {{  ($kankens->customCheckbox191 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox191" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">3</td>
                                        <td rowspan="2" colspan="4">Pengecekan volume sesudah test bench check setelah 5 menit dari off engine</td>
                                        <td colspan="4">Pengecekan pakai guide stik oil (F 0 ± 5 mm)</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox192" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox192" name="customCheckbox192" value="1" {{  ($kankens->customCheckbox192 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox192" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="2">Sesudah T/B &emsp;&emsp;&emsp;&nbsp; Actual :</td>
                                        <!-- <td>Actual :</td> -->
                                        <td colspan="2">
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act186">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox193" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox193" name="customCheckbox193" value="1" {{  ($kankens->customCheckbox193 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox193" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="6" class="align-middle">Wetting tension</td>
                                        <td rowspan="4" class="align-middle">Cyl Block</td>
                                        <td class="text-center">FR Face Middle RH</td>
                                        <td rowspan="2" class="text-center align-middle">Visual cairan tidak pecah</td>
                                        <td rowspan="2" class="text-center align-middle">Wetting Tension</td>
                                        <td rowspan="2" class="text-center align-middle">1/W</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox194" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox194" name="customCheckbox194" value="1" {{  ($kankens->customCheckbox4 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox194" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="6" colspan="3">
                                            <img src="{{ asset('image/39_1.jpg') }}" alt="no39_1">

                                        </td>
                                        <td rowspan="6">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>FR Face Middle LH</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox195" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox195" name="customCheckbox195" value="1" {{  ($kankens->customCheckbox195 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox195" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">Lower Face Mid RH</td>
                                        <td rowspan="2" class="text-center align-middle">Visual cairan tidak pecah</td>
                                        <td rowspan="2" class="text-center align-middle">Wetting Tension</td>
                                        <td rowspan="2" class="text-center align-middle">1/W</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox196" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox196" name="customCheckbox196" value="1" {{  ($kankens->customCheckbox196 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox196" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>Lower Face Mid LH</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox197" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox197" name="customCheckbox197" value="1" {{  ($kankens->customCheckbox197 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox197" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2" class="align-middle">Cyl Head</td>
                                        <td class="text-center">FR Face Mid RH</td>
                                        <td rowspan="2" class="text-center align-middle">Visual cairan tidak pecah</td>
                                        <td rowspan="2" class="text-center align-middle">Wetting Tension</td>
                                        <td rowspan="2" class="text-center align-middle">1/W</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox198" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox198" name="customCheckbox198" value="1" {{  ($kankens->customCheckbox198 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox198" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>FR Face Mid LH</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox199" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox199" name="customCheckbox199" value="1" {{  ($kankens->customCheckbox199 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox199" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="6" class="font-weight-bold">40</td>
                                        <td rowspan="6">Silencer NV Cover <br> Standart: 4,7 - 8,5 Nm</td>
                                        <td>1</td>
                                        <td colspan="4">Cover</td>
                                        <td colspan="4">Tidak cacat, tidak ada ibutsu</td>
                                        <td rowspan="6" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox200" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox200" name="customCheckbox200" value="1" {{  ($kankens->customCheckbox200 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox200" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="6">
                                            <img src="{{ asset('image/40.jpg') }}" alt="no40" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Hole bushing</td>
                                        <td colspan="4">Tembus, tidak ada ibutsu</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox201" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox201" name="customCheckbox201" value="1" {{  ($kankens->customCheckbox201 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox201" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Plug Silencer NV cover</td>
                                        <td colspan="4">Ulir tidak rusak, hole bolt hexagon tidak cacat</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox202" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox202" name="customCheckbox202" value="1" {{  ($kankens->customCheckbox202 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox202" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">&nbsp</td>

                                        <td colspan="4" class="text-center align-middle">Actual Torq</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="3" colspan="3">&nbsp</td>
                                        <!-- <td rowspan="3" class="font-weight-bold">B</td> -->
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>1</td>
                                        <td>2</td>
                                        <td>3</td>
                                        <td>4</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act187" value="{{$kankens->act187}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act188" value="{{$kankens->act188}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act189" value="{{$kankens->act189}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act190" value="{{$kankens->act190}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox203" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox203" name="customCheckbox203" value="1" {{  ($kankens->customCheckbox203 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox203" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="6" class="font-weight-bold">41</td>
                                        <td rowspan="6">Connector Ventilation <br> Standart: 7 - 13 Nm</td>
                                        <td>1</td>
                                        <td colspan="4">Connector</td>
                                        <td colspan="4">Tidak cacat, tidak pecah, lubang ventilation tembus</td>
                                        <td rowspan="6" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox204" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox204" name="customCheckbox204" value="1" {{  ($kankens->customCheckbox204 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox204" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="6">
                                            <img src="{{ asset('image/41.jpg') }}" alt="no41" width="240" height="180">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Hole bushing</td>
                                        <td colspan="4">Tembus, tidak ada ibutsu</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox205" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox205" name="customCheckbox205" value="1" {{  ($kankens->customCheckbox205 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox205" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Bolt flange qty 2 pcs</td>
                                        <td colspan="4">Tidak rusak, Tidak cacat</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox206" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox206" name="customCheckbox206" value="1" {{  ($kankens->customCheckbox4 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox206" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">&nbsp</td>
                                        <td colspan="2" class="text-center align-middle">Actual Torq</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="3" colspan="5">&nbsp</td>
                                        <!-- <td rowspan="3" class="font-weight-bold">B</td> -->
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act191" value="{{$kankens->act191}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act192" value="{{$kankens->act192}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox207" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox207" name="customCheckbox207" value="1" {{  ($kankens->customCheckbox207 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox207" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="7" class="font-weight-bold">42</td>
                                        <td rowspan="7">Spacer C/H Cover <br> Standart: 8,5 - 14,5 Nm</td>
                                        <td>1</td>
                                        <td colspan="4">O ring cam cap 4 pcs (5 hole)</td>
                                        <td colspan="4">Terpasang masuk grove, tidak cacat</td>
                                        <td rowspan="7" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox208" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox208" name="customCheckbox208" value="1" {{  ($kankens->customCheckbox208 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox208" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="7">
                                            <img src="{{ asset('image/42.jpg') }}" alt="no42" width="240" height="180">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Lubang oil</td>
                                        <td colspan="4">Tembus</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox209" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox209" name="customCheckbox209" value="1" {{  ($kankens->customCheckbox209 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox209" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Gasket filter ocv ex</td>
                                        <td colspan="4">Tidak rusak, masuk grove</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox210" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox210" name="customCheckbox210" value="1" {{  ($kankens->customCheckbox210 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox210" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td colspan="4">Bolt flange qty 2 pcs</td>
                                        <td colspan="4">Tidak rusak, Tidak cacat</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox211" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox211" name="customCheckbox211" value="1" {{  ($kankens->customCheckbox211 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox211" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">&nbsp</td>
                                        <td colspan="2" class="text-center align-middle">Actual Torq</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="3" colspan="5">&nbsp</td>
                                        <!-- <td rowspan="3" class="font-weight-bold">B</td> -->
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act193" value="{{$kankens->act193}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act194" value="{{$kankens->act194}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox212" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox212" name="customCheckbox212" value="1" {{  ($kankens->customCheckbox212 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox212" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="6" class="font-weight-bold">43</td>
                                        <td rowspan="6">Support ocv ex <br> Standart: 7 - 13 Nm</td>
                                        <td>1</td>
                                        <td colspan="4">Washer plate 2 pcs</td>
                                        <td colspan="4">Terpasang</td>
                                        <td rowspan="6" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox213" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox213" name="customCheckbox213" value="1" {{  ($kankens->customCheckbox213 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox213" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="6">
                                            <img src="{{ asset('image/43.jpg') }}" alt="no43" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Washer seal 2 pcs</td>
                                        <td colspan="4">Terpasang</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckboxWasher" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckboxWasher" name="customCheckboxWasher" value="1" {{  ($kankens->customCheckboxWasher == 1 ? ' checked' : '') }}>
                                                <label for="customCheckboxWasher" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Bolt flange qty 2 pcs</td>
                                        <td colspan="4">Tidak rusak, Tidak cacat</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox214" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox214" name="customCheckbox214" value="1" {{  ($kankens->customCheckbox214 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox214" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">&nbsp</td>
                                        <td colspan="2" class="text-center align-middle">Actual Torq</td>
                                        <td rowspan="2" class="text-center align-middle">Judge</td>
                                        <td rowspan="3" colspan="5">&nbsp</td>
                                        <!-- <td rowspan="3" class="font-weight-bold">B</td> -->
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr class="text-center">
                                        <td>1</td>
                                        <td>2</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act195" value="{{$kankens->act195}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act196" value="{{$kankens->act196}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox215" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox215" name="customCheckbox215" value="1" {{  ($kankens->customCheckbox215 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox215" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="6" class="font-weight-bold">44</td>
                                        <td rowspan="6">OCV Ex <br> Standart: 7 - 13 Nm</td>
                                        <td rowspan="2">1</td>
                                        <td rowspan="2" colspan="4">OCV</td>
                                        <td colspan="4">Socket tidak rusak, tidak pecah</td>
                                        <td rowspan="3" class="font-weight-bold">V</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox216" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox216" name="customCheckbox216" value="1" {{  ($kankens->customCheckbox216 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox216" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="6">
                                            <img src="{{ asset('image/44.jpg') }}" alt="no44" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Ring o terpasang, hole bracket tembus</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox217" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox217" name="customCheckbox217" value="1" {{  ($kankens->customCheckbox217 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox217" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Assy ocv</td>
                                        <td colspan="4">Seal terlumasi oil</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox218" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox218" name="customCheckbox218" value="1" {{  ($kankens->customCheckbox218 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox218" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Bolt flange w/ washer qty 2 pcs</td>
                                        <td colspan="4">Tidak rusak, tidak cacat</td>
                                        <td rowspan="3" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox219" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox219" name="customCheckbox219" value="1" {{  ($kankens->customCheckbox219 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox219" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">&nbsp</td>
                                        <td class="text-center align-middle">Actual Torq</td>
                                        <td class="text-center align-middle">Judge</td>
                                        <td rowspan="2" colspan="6">&nbsp</td>
                                        <!-- <td rowspan="2" class="font-weight-bold">B</td> -->
                                        <td rowspan="2">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act197" value="{{$kankens->act197}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox220" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox220" name="customCheckbox220" value="1" {{  ($kankens->customCheckbox220 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox220" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="6" class="font-weight-bold">45</td>
                                        <td rowspan="6">Cam sensor ex <br> Standart: 7 - 13 Nm</td>
                                        <td rowspan="2">1</td>
                                        <td rowspan="2" colspan="4">Cam sensor</td>
                                        <td colspan="4">Socket tidak rusak, tidak pecah</td>
                                        <td rowspan="3" class="font-weight-bold">V</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox221" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox221" name="customCheckbox221" value="1" {{  ($kankens->customCheckbox221 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox221" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="6">
                                            <img src="{{ asset('image/45.jpg') }}" alt="no45" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Ring o terpasang, hole bracket tembus</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox222" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox222" name="customCheckbox222" value="1" {{  ($kankens->customCheckbox222 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox222" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td colspan="4">Assy cam sensor</td>
                                        <td colspan="4">Seal terlumasi oil</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox223" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox223" name="customCheckbox223" value="1" {{  ($kankens->customCheckbox223 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox223" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td colspan="4">Bolt flange qty 2 pcs</td>
                                        <td colspan="4">Tidak rusak, tidak cacat</td>
                                        <td rowspan="3" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox224" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox224" name="customCheckbox224" value="1" {{  ($kankens->customCheckbox224 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox224" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">&nbsp</td>
                                        <td class="text-center align-middle">Actual Torq</td>
                                        <td class="text-center align-middle">Judge</td>
                                        <td rowspan="2" colspan="6">&nbsp</td>
                                        <!-- <td rowspan="2" class="font-weight-bold">B</td> -->
                                        <td rowspan="2">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act198" value="{{$kankens->act198}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox225" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox225" name="customCheckbox225" value="1" {{  ($kankens->customCheckbox225 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox225" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="7" class="font-weight-bold">46</td>
                                        <td rowspan="7">PCV <br> Standart: 7 - 13 Nm</td>
                                        <td rowspan="3">1</td>
                                        <td rowspan="3" colspan="4">PCV</td>
                                        <td colspan="4">Tidak pecah</td>
                                        <td rowspan="7" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox226" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox226" name="customCheckbox226" value="1" {{  ($kankens->customCheckbox226 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox226" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="7">
                                            <img src="{{ asset('image/46.jpg') }}" alt="no46" width="240" height="210">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Ring o terpasang</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox227" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox227" name="customCheckbox227" value="1" {{  ($kankens->customCheckbox4 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox227" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Ada warna coklat pada PCV type TR KAI</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox228" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox228" name="customCheckbox228" value="1" {{  ($kankens->customCheckbox228 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox228" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">2</td>
                                        <td rowspan="2" colspan="4">Assy PCV</td>
                                        <td colspan="4">Seal terlumasi oil</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox229" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox229" name="customCheckbox229" value="1" {{  ($kankens->customCheckbox229 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox229" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Clip hose terpasang warna hitam menghadap ke RH engine</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox230" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox230" name="customCheckbox230" value="1" {{  ($kankens->customCheckbox230 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox230" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="2">&nbsp</td>
                                        <td class="text-center align-middle">Actual Torq</td>
                                        <td class="text-center align-middle">Judge</td>
                                        <td rowspan="2" colspan="6">&nbsp</td>
                                        <!-- <td rowspan="2" class="font-weight-bold">B</td> -->
                                        <td rowspan="2">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act199" value="{{$kankens->act199}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox231" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox231" name="customCheckbox231" value="1" {{  ($kankens->customCheckbox231 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox231" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="10" class="font-weight-bold">47</td>
                                        <td rowspan="10">Pipe by pass no 4 <br> Standart: 17.3 - 28.7 Nm</td>
                                        <td rowspan="3">1</td>
                                        <td rowspan="3" colspan="4">Pipe</td>
                                        <td colspan="4">Ujung pipe tidak cacat, Pipe tidak pesok</td>
                                        <td rowspan="10" class="font-weight-bold">B</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox232" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox232" name="customCheckbox232" value="1" {{  ($kankens->customCheckbox232 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox232" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                        <td rowspan="10">
                                            <img src="{{ asset('image/47.jpg') }}" alt="no47" width="240" height="160">

                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Hose no 3 to by pass no 1 terpasang dari suplier clip warna hitam</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox233" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox233" name="customCheckbox233" value="1" {{  ($kankens->customCheckbox233 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox233" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Pasang hose tidak boleh pakai air sabun</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox234" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox234" name="customCheckbox234" value="1" {{  ($kankens->customCheckbox234 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox234" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="4">2</td>
                                        <td rowspan="4" colspan="4">Assy Pipe by pass no 4 & 5</td>
                                        <td colspan="4">Jarak sisa hose setelah assy ke pipe 0 - 1mm</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox235" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox235" name="customCheckbox235" value="1" {{  ($kankens->customCheckbox235 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox235" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Clip terpasang warna silver putih qty 4 pcs</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox236" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox236" name="customCheckbox236" value="1" {{  ($kankens->customCheckbox236 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox236" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Hose no 4 & 5 ada protektor dari marking, posisi tidak terbalik</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox237" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox237" name="customCheckbox237" value="1" {{  ($kankens->customCheckbox237 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox237" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td colspan="4">Jarak clip terpasang dari ujung hose 2 - 5mm</td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox238" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox238" name="customCheckbox238" value="1" {{  ($kankens->customCheckbox238 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox238" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td rowspan="3">&nbsp</td>
                                        <td class="text-center align-middle">Item Check</td>
                                        <td class="text-center align-middle">Actual Torq</td>
                                        <td class="text-center align-middle">Judge</td>
                                        <td rowspan="3" colspan="5">&nbsp</td>
                                        <!-- <td rowspan="3" class="font-weight-bold">B</td> -->
                                        <td rowspan="3">&nbsp</td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">Bolt to cyl Block</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act200" value="{{$kankens->act200}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox239" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox239" name="customCheckbox239" value="1" {{  ($kankens->customCheckbox239 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox239" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center align-middle">Bolt to cyl Head</td>
                                        <td>
                                            <div class="form-group">
                                                <input type="number" min="0" class="form-control" name="act201" value="{{$kankens->act201}}">
                                            </div>
                                        </td>
                                        <td>
                                            <div class="custom-control custom-checkbox" style="text-align: center;">
                                                <input type="hidden" name="customCheckbox240" value="0" />
                                                <input class="custom-control-input" type="checkbox" id="customCheckbox240" name="customCheckbox240" value="1" {{  ($kankens->customCheckbox4 == 1 ? ' checked' : '') }}>
                                                <label for="customCheckbox240" class="custom-control-label"></label>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                        <!-- /.card-body -->
                        <div class="card-footer">
                            <div class="float-right">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </div>
                        </form>

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
                    "orderCellsTop": true
                });
            });
            $('input[type="checkbox"]').on('change', function(e) {
                if ($(this).prop('checked')) {
                    $(this).next().val(1);
                } else {
                    $(this).next().val(0);
                }
            });
        </script>
        @endpush