@extends('Dashboard.layout.app')

@section('content')
    <div class="xs-pd-10-1 pd-ltr-10">
        <div class="page-header">
            <div class="row">
                <div class="col-md-12 ">
                    <div class="title">
                        <h4>Diagnosis</h4>
                    </div>
                    <nav aria-label="breadcrumb" role="navigation">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="index.html">Home</a>
                            </li>
                            <li class="breadcrumb-item active" aria-current="page">
                                Riwayat Diagnosis
                            </li>
                        </ol>
                    </nav>
                </div>

            </div>
        </div>
        <!-- basic table  Start -->

        <div class=" mb-30 pd-20 card-box" style="margin-top: -1.2em;">
            <div class="clearfix mb-12">
                <div class="pull-left">
                    <h4 class="text-blue h4">Riwayat Diagnosis</h4>
                    <p class="text-secondary " style="margin-top: -0.5rem"><small>Daftar seluruh diagnosa penyakit yang
                            sudah
                            dilakukan</small></p>
                </div>
                @auth
                    <div class="pull-right">
                        <form method="POST" action={{ route('diagnosis-deleteAll') }}>
                            @csrf
                            <button onclick="return confirm('apakah yakin?')" type="submit" class="btn btn-danger text-white ">
                                <i class="bi bi-trash"></i> Reset Data
                            </button>
                        </form>
                    </div>
                @endauth
            </div>

            @if ($message = Session::get('success'))
                <div class="alert alert-success">
                    <p>{{ $message }}</p>
                </div>
            @endif

            <table class="table" id="myTable2">
                <thead>
                    <tr>
                        <th scope="col" style="width: 3rem">No</th>
                        <th scope="col">Tanggal diagnosa</th>
                        <th scope="col">Nama Pengguna</th>
                        <th scope="col">Diagnosa Penyakit</th>
                        <th scope="col">Nilai Keyakinan</th>
                        <th scope="col">Detail</th>
                        <th scope="col">Aksi</th>

                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    @foreach ($data as $diagnosis)
                        <tr>
                            <th scope="row">{{ $i++ }}</th>
                            <td>{{ $diagnosis->created_at }}</td>
                            <td>{{ $diagnosis->nama_pengguna }}</td>
                            <td>{{ $diagnosis->desease->nama_penyakit }}</td>
                            <td>{{ number_format($diagnosis->nilai_akhir, 1) . '%' }}</td>
                            <td>
                                <a href="{{ route('diagnosis.show', $diagnosis->diagnosis_id) }}">
                                    <i class="bi bi-eye-fill"></i>
                                </a>

                            </td>
                            <td>
                                <div class="d-flex flex-wrap" style="gap:5px;">


                                    <form method="POST" action={{ route('diagnosis.destroy', $diagnosis->diagnosis_id) }}>
                                        @csrf
                                        @method('DELETE')
                                        <button onclick="return confirm('apakah yakin?')" type="submit"
                                            class="btn btn-danger text-white ">
                                            <i class="bi bi-trash"></i> Hapus
                                        </button>
                                    </form>

                                </div>
                            </td>

                        </tr>
                    @endforeach

                </tbody>
            </table>
        </div>

        <div class="pd-20 card-box  " style="margin-top: -1.2rem">
            <h4 class="h4 text-secondary text-center mb-4 ">Persentase jumlah penyakit yang telah ter-diagnosa</h4>
            <div class="d-flex justify-content-center">

                <div id="chart8"></div>
            </div>
        </div>

    </div>


    <!-- basic table  End -->
    @push('scripts')
        <script src={{ asset('assets/src/plugins/apexcharts/apexcharts.min.js') }}></script>
        <script>
            var chart = {!! json_encode($chart->toArray()) !!};
            console.log(Object.keys(chart));
            var options8 = {
                series: Object.values(chart), // 10 data
                chart: {
                    type: 'donut',
                    width: 600
                },
                legend: {
                    position: 'left'
                },
                responsive: [{
                    breakpoint: 680,
                    options: {
                        chart: {
                            width: 400
                        },
                        legend: {
                            position: 'bottom'
                        }
                    }
                }],
                labels: Object.keys(chart), // Nama label untuk 10 data
            };

            var chart = new ApexCharts(document.querySelector("#chart8"), options8);


            chart.render();
        </script>
    @endpush
@endsection
