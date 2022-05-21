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
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    <table id="example2" class="table table-bordered table-hover">
                        <tr class="font-weight-bold bg-light" style="text-align: center;">
                            <td>No</td>
                            <td>Item</td>
                            <td colspan="5">Control Item</td>
                            <td colspan="4">Control Point</td>
                            <td>Rank</td>
                            <td>Judge/Patrol</td>
                            <td>Ilustrasi</td>
                        </tr>
                        <tr>
                            <td rowspan="7" class="font-weight-bold">1</td>
                            <td rowspan="7">Assy Oil Nozzle Jet</td>
                            <td rowspan="2">1</td>
                            <td colspan="4" rowspan="2">Pipe Nozzle</td>
                            <td colspan="4">Pada Tikungan Pipa Tidak Menyempit</td>
                            <td rowspan="7" class="font-weight-bold">B</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="1">
                                    <label for="customCheckbox1" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="7">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Tidak cacat / ada pembengkakan pipa dari aslinya</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox2" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox3" value="1">
                                    <label for="customCheckbox3" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td colspan="4">Pemasangan Bolt</td>
                            <td colspan="4">DG SST & Masuk Standard Torque</td>
                            <td rowspan="4">
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox4" value="1">
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
                        </tr>
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckboxTorqueBolt" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox5" value="1">
                                    <label for="customCheckbox5" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="5">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Connector switch oil pressure</td>
                            <td colspan="4">Socket tidak pecah dan skun tidak bengkok/patah</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox6" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox7" value="1">
                                    <label for="customCheckbox7" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="5">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Pipe Oil Jet</td>
                            <td colspan="4">Arah pipe ke bawah (To gear crank)</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox8" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox9" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox10" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox11" value="1">
                                    <label for="customCheckbox11" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="5">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Urutan pemasangan to block</td>
                            <td colspan="4">Setelah pasang gear Assy Balance Shaft</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox12" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual disable //</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox13" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox14" value="1">
                                    <label for="customCheckbox14" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="5">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Urutan pemasangan to block</td>
                            <td colspan="4">Setelah pasang gear Assy Balance Shaft</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox15" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox16" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox17" value="1">
                                    <label for="customCheckbox17" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="5">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Type bolt</td>
                            <td colspan="4">flange pendek</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox18" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox19" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox20" value="1">
                                    <label for="customCheckbox20" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="5">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Posisi bolt</td>
                            <td colspan="4">Tidak tertukar (upper panjang, lower pendek)</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox21" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox22" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox23" value="1">
                                    <label for="customCheckbox23" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="8">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Pasang hanya 1 pcs (Bagian Bawah)</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox24" value="1">
                                    <label for="customCheckbox24" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">1 pcs lagi saat pasang Dumper</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox25" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox26" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox27" value="1">
                                    <label for="customCheckbox27" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="2" colspan="4">*dipasang saat pasang Dumper 1</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Tensior Nut 2</td>
                            <td>14 - 28</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox28" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox29" value="1">
                                    <label for="customCheckbox29" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="6">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Arah / Posisi Connector</td>
                            <td colspan="4">Standard kemiringan ± 10°</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox30" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox31" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox32" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox33" value="1">
                                    <label for="customCheckbox33" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="5">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Socket</td>
                            <td colspan="4">Tidak pecah atau cacat, skun tidak bengkok</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox34" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox35" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox36" value="1">
                                    <label for="customCheckbox36" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="6">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Tidak terbalik</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox37" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox38" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox39" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox40" value="1">
                                    <label for="customCheckbox40" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="7">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Stoper tidak bengkok, stoper flat ke face C/H</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox41" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox42" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox43" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual disable //</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox44" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox45" value="1">
                                    <label for="customCheckbox45" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="8">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Type Dumper</td>
                            <td colspan="4">Ada label 1TR/2TR</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox46" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox47" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox48" value="1">
                                    <label for="customCheckbox48" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2">2TR</td>
                            <td>Nut Dumper</td>
                            <td>18 - 30</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable //</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox49" value="1">
                                    <label for="customCheckbox49" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bolt Dumper</td>
                            <td>18 - 30</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable //</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox50" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox51" value="1">
                                    <label for="customCheckbox51" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="5">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">"O" Ring</td>
                            <td colspan="4">Harus terpasang dan tidak rusak</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox52" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox53" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox54" value="1">
                                    <label for="customCheckbox54" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="7">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Gasket</td>
                            <td colspan="4">Terpasang tidak terbalik</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox55" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox56" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox57" value="1">
                                    <label for="customCheckbox57" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bolt to Cyl Head</td>
                            <td>8 - 14</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox58" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox59" value="1">
                                    <label for="customCheckbox59" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="11">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Sesuai type engine variant</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox60" value="1">
                                    <label for="customCheckbox60" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Thermostat masuk gasket dan tidak miring</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox61" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox62" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox63" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox64" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox65" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td rowspan="2" style="text-align: center;">17 - 42</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox66" value="1">
                                    <label for="customCheckbox66" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Nut</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox67" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox68" value="1">
                                    <label for="customCheckbox68" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="5">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Hole bolt V ribbed belt to TCC</td>
                            <td colspan="4">Posisi center</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox69" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox70" value="1">
                                    <label for="customCheckbox70" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bolt 14</td>
                            <td>35 - 57</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox71" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox72" value="1">
                                    <label for="customCheckbox72" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="4">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Type bolt plug</td>
                            <td colspan="4">Hexagon</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox73" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox74" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox75" value="1">
                                    <label for="customCheckbox75" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="16">gambar</td>
                        </tr>
                        <tr>
                            <td rowspan="2">2</td>
                            <td colspan="4" rowspan="2">"O" Ring</td>
                            <td colspan="4">Harus terpasang dan masuk Groove Strainer</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox76" value="1">
                                    <label for="customCheckbox76" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Tidak rusak / Tidak sobek</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox77" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox78" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td colspan="2">Judge</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox79" value="1">
                                    <label for="customCheckbox79" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox80" value="1">
                                    <label for="customCheckbox80" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox81" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox82" value="1">
                                    <label for="customCheckbox82" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="7">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Saringan</td>
                            <td colspan="4">Bersih dan tidak rusak</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox83" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox84" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox85" value="1">
                                    <label for="customCheckbox85" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Nut</td>
                            <td>8 - 14</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox86" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox87" value="1">
                                    <label for="customCheckbox87" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="5">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Pin straight RR plate</td>
                            <td colspan="4">Terpasang 2 pcs (Gauge I 8 H)</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox88" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox89" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox90" value="1">
                                    <label for="customCheckbox90" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="11">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Permukaan Cyl Block to Oil Seal</td>
                            <td colspan="4">Tidak cacat / baret dan tidak ada oil</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox91" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox92" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox93" value="1">
                                    <label for="customCheckbox93" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Jalur FIPG masuk grove</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox94" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox95" value="1">
                                    <label for="customCheckbox95" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Inclination 0.5° max</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox96" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox97" value="1">
                                    <label for="customCheckbox97" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr style="text-align: center;">
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox98" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox99" value="1">
                                    <label for="customCheckbox99" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="4">gambar</td>
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox100" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox101" value="1">
                                    <label for="customCheckbox101" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="17">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">"Buffle Plate"</td>
                            <td colspan="4">Ada</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox102" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox103" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td colspan="2">Judge</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox104" value="1">
                                    <label for="customCheckbox104" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox105" value="1">
                                    <label for="customCheckbox105" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox106" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox107" value="1">
                                    <label for="customCheckbox107" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="9">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Pemberian Silikon</td>
                            <td colspan="4">Merata</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox108" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox109" value="1">
                                    <label for="customCheckbox109" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">(Tidak boleh diputar bolak-balik)</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox110" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox111" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox112" value="1">
                                    <label for="customCheckbox112" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>OCV in TR KAI</td>
                            <td>9,9 - 12,8</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox113" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox114" value="1">
                                    <label for="customCheckbox114" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="8">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Pemberian Silikon</td>
                            <td colspan="4">Merata</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox115" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox116" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox117" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox118" value="1">
                                    <label for="customCheckbox118" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Crank sensor TR KAI</td>
                            <td>5 - 14</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox119" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox120" value="1">
                                    <label for="customCheckbox120" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="7">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Pemberian Silikon</td>
                            <td colspan="4">Merata</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox121" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox122" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox123" value="1">
                                    <label for="customCheckbox123" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Cam sensor in TR KAI</td>
                            <td>7 - 12,8</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox124" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox125" value="1">
                                    <label for="customCheckbox125" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="6">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Bracket oil level guide</td>
                            <td colspan="4">TR KAI lebih pendek dibandingkan TR reguler</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox126" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox127" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox128" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox129" value="1">
                                    <label for="customCheckbox129" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="7">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Melekat kuat dan tidak goyang</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox130" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox131" value="1">
                                    <label for="customCheckbox131" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Masuk groove</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox132" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox133" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox134" value="1">
                                    <label for="customCheckbox134" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="8">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Gasket</td>
                            <td colspan="4">Terpasang</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox135" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox136" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox137" value="1">
                                    <label for="customCheckbox137" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Torque Bolt to RR plate</td>
                            <td>16 - 30</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox138" value="1">
                                    <label for="customCheckbox138" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>Torque Bolt to Cyl Block (1TR)</td>
                            <td>16 - 30</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox139" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox140" value="1">
                                    <label for="customCheckbox140" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="24">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Diameter max 10mm</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox141" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox142" value="1">
                                    <label for="customCheckbox142" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Tidak rusak / sobek</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox143" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox144" value="1">
                                    <label for="customCheckbox144" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Hole masuk stut 3 & 4 Cyl Head</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox145" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox146" value="1">
                                    <label for="customCheckbox146" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Melingkar kekanan bagian luar (outer)</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox147" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox148" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>9</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>10</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>11</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td colspan="2">Judge</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox149" value="1">
                                    <label for="customCheckbox149" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox150" value="1">
                                    <label for="customCheckbox150" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox151" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox152" value="1">
                                    <label for="customCheckbox152" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="11">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Sesuai variant dan type engine</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox153" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual disable</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>diisi manual disable</td>
                        </tr>
                        <tr>
                            <td colspan="2">Judge</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox154" value="1">
                                    <label for="customCheckbox154" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox155" value="1">
                                    <label for="customCheckbox155" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox156" value="1">
                                    <label for="customCheckbox156" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox157" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox158" value="1">
                                    <label for="customCheckbox158" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="16">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Pengencangan Nut</td>
                            <td colspan="4">Urutan pengencangan dari bagian dalam ke luar</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox159" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox160" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox161" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>4</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>5</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>6</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                        </tr>
                        <tr>
                            <td>7</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                        </tr>
                        <tr>
                            <td>8</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                        </tr>
                        <tr>
                            <td colspan="2">Judge</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox162" value="1">
                                    <label for="customCheckbox162" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox163" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox164" value="1">
                                    <label for="customCheckbox164" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="7">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Sesuai variant dan type engine</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox165" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox166" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox167" value="1">
                                    <label for="customCheckbox167" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>Bolt Lower (panjang)</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox168" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox169" value="1">
                                    <label for="customCheckbox169" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="7">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Type AI pipe</td>
                            <td colspan="4">Sesuai variant dan type engine</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox170" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox171" value="1">
                                    <label for="customCheckbox171" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>To AI Valve</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox172" value="1">
                                    <label for="customCheckbox172" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>To Cyl Head</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox173" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox174" value="1">
                                    <label for="customCheckbox174" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="9">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Pemasangan Bolt dan Nut</td>
                            <td colspan="4">Bolt terlebih dahulu sesuai Dop</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox175" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox176" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox177" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox178" value="1">
                                    <label for="customCheckbox178" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td rowspan="2" class="align-middle">2</td>
                            <td>Bolt to Cyl Head</td>
                            <td>22 - 36</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox179" value="1">
                                    <label for="customCheckbox179" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>Bolt to Cyl Block</td>
                            <td>22 - 36</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox180" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox181" value="1">
                                    <label for="customCheckbox181" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="8">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Type Throttle Body (1TR & 2TR, 1 TR KAI & 2TR KAI)</td>
                            <td colspan="4">Tidak salah type</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox182" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox183" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox184" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td rowspan="2" rowspan="2" class="text-center align-middle">6 - 15</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox185" value="1">
                                    <label for="customCheckbox185" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox186" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox187" value="1">
                                    <label for="customCheckbox187" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="5">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Insulator</td>
                            <td colspan="4">Harus ada sesuai variant</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox188" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual disable</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox189" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox190" value="1">
                                    <label for="customCheckbox190" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="10">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Volume oil</td>
                            <td colspan="4">6.3 liter ± 0.1 TR - KAI</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox191" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox192" value="1">
                                    <label for="customCheckbox192" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">Sesudah T/B &emsp;&emsp;&emsp;&nbsp; Actual :</td>
                            <!-- <td>Actual :</td> -->
                            <td colspan="2">diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox193" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox194" value="1">
                                    <label for="customCheckbox194" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="6" colspan="3">gambar</td>
                            <td rowspan="6">&nbsp</td>
                        </tr>
                        <tr class="text-center">
                            <td>FR Face Middle LH</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox195" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox196" value="1">
                                    <label for="customCheckbox196" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>Lower Face Mid LH</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox197" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox198" value="1">
                                    <label for="customCheckbox198" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr class="text-center">
                            <td>FR Face Mid LH</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox199" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox200" value="1">
                                    <label for="customCheckbox200" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="6">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Hole bushing</td>
                            <td colspan="4">Tembus, tidak ada ibutsu</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox201" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox202" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox203" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox204" value="1">
                                    <label for="customCheckbox204" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="6">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Hole bushing</td>
                            <td colspan="4">Tembus, tidak ada ibutsu</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox205" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox206" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox207" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox208" value="1">
                                    <label for="customCheckbox208" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="7">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Lubang oil</td>
                            <td colspan="4">Tembus</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox209" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox210" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox211" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox212" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox213" value="1">
                                    <label for="customCheckbox213" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="6">gambar</td>
                        </tr>
                        <tr>
                            <td>2</td>
                            <td colspan="4">Washer seal 2 pcs</td>
                            <td colspan="4">Terpasang</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox205" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox214" value="1">
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
                            <td>diisi manual</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox215" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox216" value="1">
                                    <label for="customCheckbox216" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="6">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Ring o terpasang, hole bracket tembus</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox217" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox218" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox219" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox220" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox221" value="1">
                                    <label for="customCheckbox221" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="6">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Ring o terpasang, hole bracket tembus</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox222" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox223" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox224" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox225" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox226" value="1">
                                    <label for="customCheckbox226" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="7">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Ring o terpasang</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox227" value="1">
                                    <label for="customCheckbox227" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Ada warna coklat pada PCV type TR KAI</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox228" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox229" value="1">
                                    <label for="customCheckbox229" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Clip hose terpasang warna hitam menghadap ke RH engine</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox230" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox231" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox232" value="1">
                                    <label for="customCheckbox232" class="custom-control-label"></label>
                                </div>
                            </td>
                            <td rowspan="10">gambar</td>
                        </tr>
                        <tr>
                            <td colspan="4">Hose no 3 to by pass no 1 terpasang dari suplier clip warna hitam</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox233" value="1">
                                    <label for="customCheckbox233" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Pasang hose tidak boleh pakai air sabun</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox234" value="1">
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
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox235" value="1">
                                    <label for="customCheckbox235" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Clip terpasang warna silver putih qty 4 pcs</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox236" value="1">
                                    <label for="customCheckbox236" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Hose no 4 & 5 ada protektor dari marking, posisi tidak terbalik</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox237" value="1">
                                    <label for="customCheckbox237" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="4">Jarak clip terpasang dari ujung hose 2 - 5mm</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox238" value="1">
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
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox239" value="1">
                                    <label for="customCheckbox239" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center align-middle">Bolt to cyl Head</td>
                            <td>diisi manual</td>
                            <td>
                                <div class="custom-control custom-checkbox" style="text-align: center;">
                                    <input class="custom-control-input" type="checkbox" id="customCheckbox240" value="1">
                                    <label for="customCheckbox240" class="custom-control-label"></label>
                                </div>
                            </td>
                        </tr>
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
    // $(function() {
    //     $("#example1").DataTable({
    //         "responsive": true,
    //         "lengthChange": false,
    //         "autoWidth": false,
    //         "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"]
    //     }).buttons().container().appendTo('#example1_wrapper .col-md-6:eq(0)');
    //     $('#example2').DataTable({
    //         "paging": true,
    //         "lengthChange": false,
    //         "searching": false,
    //         "ordering": true,
    //         "info": true,
    //         "autoWidth": false,
    //         "responsive": true,
    //     });
    // });
    $(document).ready(function() {
        $('#example2').DataTable({
            order: [
                [4, 'desc']
            ]
        });
    });
</script>
@endpush