@extends('Dashboard.layout.app')

@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Diagnosis</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Diagnosis
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
    <!-- basic table  Start -->
    <form action={{ route('diagnosis.store') }} method="POST">
        @csrf
        @method('POST')
        <div class="pd-20 card-box" style="margin-top: -1.2em;margin-bottom:5rem; ">
            <div class="clearfix mb-12">
                <div class="pull-left">
                    <h4 class="text-blue h4">Daftar Gejala</h4>
                    <p class="text-secondary " style="margin-top: -0.5rem"><small>Pilih kondisi sesuai dengan gejala yang
                            sedang
                            anda
                            alami</small></p>
                </div>
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif
            @if ($errors->any())
                <div class="alert alert-danger">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </div>
            @endif
            <div class="form-group row my-3">
                <label class=" col-md-2 col-4 col-form-label">Nama :</label>
                <div class=" col-md-10 col-8">
                    <input class="form-control" value="{{ Auth::user()->name }}" type="text" name="nama_pengguna"
                        placeholder="masukkan nama">
                </div>
            </div>
            <div class="form-group row my-3">
                <label class=" col-md-2 col-4 col-form-label">Alamat :</label>
                <div class=" col-md-10 col-8">
                    <input class="form-control" value="Kediri" type="text" name="alamat_pengguna"
                        placeholder="masukkan alamat">
                </div>
            </div>
            <table class="table" id="myTable2">
                <thead>
                    <tr>
                        <th scope="col" style="width: 3rem">No</th>
                        <th scope="col">Kode</th>
                        <th scope="col">Nama</th>
                        <th scope="col">Kondisi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($gejala as $g)
                        <tr>
                            <th>{{ $i++ }}</th>
                            <td scope="row">{{ $g->kode_gejala }}</td>
                            <td>{{ $g->nama_gejala }}</td>
                            <td scope="row">
                                <select name="cf[]" class="form-control cf3">
                                    <option value="">Pilih jika sesuai</option>
                                    @foreach ($term as $k)
                                        <option
                                            value="{{ $g->kode_gejala }}*{{ $g->nama_gejala }}*{{ $k['nilai'] }}*{{ $k['deskripsi'] }}">
                                            {{ $k['deskripsi'] }}</option>
                                    @endforeach
                                </select>
                            </td>
                        </tr>
                    @endforeach

                </tbody>
            </table>


            <div class="my-3 btn-diagnosims" style="gap:8px;">
                <button type="submit" class="btn btn-lg btn-success text-white ">
                    <i class="micon bi  bi-clipboard-pulse"></i> Mulai Diagnosis
                </button>

            </div>
    </form>

    </div>

    <!-- basic table  End -->
@endsection
