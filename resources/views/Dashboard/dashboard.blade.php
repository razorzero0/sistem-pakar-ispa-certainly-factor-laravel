@extends('Dashboard.layout.app')

@section('content')
    <div class="xs-pd-20-10 pd-ltr-20">
        @role('admin')
            <div class="pb-10 row" style="margin-top: -1.2em">
                <div class="mb-1 col-xl-4 col-lg-4 col-md-6">
                    <div class="card-box height-100-p widget-style3">
                        <div class="flex-wrap d-flex">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">{{ $gejala }}</div>
                                <div class="font-14 text-secondary weight-500">Data Gejala</div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon" data-color="#00eccf">
                                    <i class="icon-copy dw dw-calendar1"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-1 col-xl-4 col-lg-4 col-md-6">
                    <div class="card-box height-100-p widget-style3">
                        <div class="flex-wrap d-flex">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">{{ $penyakit }}</div>
                                <div class="font-14 text-secondary weight-500">
                                    Data Penyakit
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon" data-color="#ff5b5b">
                                    <span class="icon-copy ti-heart"></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mb-1 col-xl-4 col-lg-4 col-md-12">
                    <div class="card-box height-100-p widget-style3">
                        <div class="flex-wrap d-flex">
                            <div class="widget-data">
                                <div class="weight-700 font-24 text-dark">{{ $rule }}</div>
                                <div class="font-14 text-secondary weight-500">
                                    Data Pengetahuan
                                </div>
                            </div>
                            <div class="widget-icon">
                                <div class="icon">
                                    <i class="icon-copy fa fa-stethoscope" aria-hidden="true"></i>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        @endrole

        <div class="mb-20">
            <div class="card-box ">

                <div id="carouselExampleControls" class=" carousel slide" data-ride="carousel">
                    <div class="carousel-inner" style="border-radius: 8px">
                        <div class="carousel-item active">
                            <img class="d-block w-100" src={{ asset('assets/src/images/1.png') }} alt="First slide">
                        </div>
                        <div class="carousel-item">
                            <img class="d-block w-100" src={{ asset('assets/src/images/2.png') }} alt="First slide">
                        </div>


                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a>
                    </div>

                </div>
                <p class="p-3" style="text-align: center;">Selamat datang di <strong>Aplikasi
                        Sistem Pendukung Keputusan Diagnosa Penyakit Infeksi Saluran Pernapasan Akut (ISPA)</strong>! Kami
                    hadir untuk
                    memberikan bantuan dalam
                    mengidentifikasi dan mengelola penyakit ISPA dengan cepat dan akurat. Mari bersama-sama menjaga
                    kesehatan dan meningkatkan kesadaran kita akan pentingnya menyadari secara dini
                    penyakit ini.<br /> <strong style="font-size:1.3rem">Selamat menggunakan aplikasi
                        kami!</strong></p>

            </div>
            {{-- <div class="mb-2 col-md-8">
                <div class="card-box height-100-p pd-20">
                    <div class="flex-wrap pb-0 d-flex justify-content-between align-items-center pb-md-3">
                        <div class="h5 mb-md-0">Aktifitas Terbaru</div>
                        <div class="form-group mb-md-0">
                            <select class="form-control form-control-sm selectpicker">
                                <option value="">Last Week</option>
                                <option value="">Last Month</option>
                                <option value="">Last 6 Month</option>
                                <option value="">Last 1 year</option>
                            </select>
                        </div>
                    </div>
                    <div id="activities-chart"></div>
                </div>
            </div>
            <div class="mb-2 col-md-4">
                <div class="card-box height-100-p pd-20 min-height-200px">
                    <div class="d-flex justify-content-between">
                        <div class="mb-0 h5">Laporan Penyakit</div>
                    </div>

                    <div id="diseases-chart"></div>
                </div>
            </div> --}}
        </div>









    </div>
@endsection
