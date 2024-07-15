<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8" />
    <title>Sistem Pendukung Keputusan ISPA (Infeksi Saluran Pernapasan Akut)</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href={{ asset('assets/vendors/images/favicon.png') }} />
    <link rel="icon" type="image/png" sizes="32x32" href={{ asset('assets/vendors/images/favicon.png') }} />
    <link rel="icon" type="image/png" sizes="16x16" href={{ asset('assets/vendors/images/favicon.png') }} />

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap"
        rel="stylesheet" />
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href={{ asset('assets/vendors/styles/core.css') }} />
    {{-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css"> --}}
    <link rel="stylesheet" type="text/css" href={{ asset('assets/vendors/styles/icon-font.min.css') }} />
    {{-- <link rel="stylesheet" type="text/css"
        href={{ asset('assets/src/plugins/datatables/css/dataTables.bootstrap4.min.css') }} />
    <link rel="stylesheet" type="text/css"
        href={{ asset('assets/src/plugins/datatables/css/responsive.bootstrap4.min.css') }} /> --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.7/css/jquery.dataTables.min.css" />
    <link rel="stylesheet" type="text/css" href={{ asset('assets/vendors/styles/style.css') }} />
    <link rel="stylesheet" type="text/css" href={{ asset('assets/css/custom.css') }} />

    {{-- <link rel="stylesheet" type="text/css"
        href={{ asset('assets/src/plugins/ion-rangeslider/css/ion.rangeSlider.css') }} /> --}}
    @stack('text-editor')

</head>

<body>
    {{-- <div class="pre-loader">
        <div class="pre-loader-box">
            <div class="loader-logo">
                <img src={{ asset('assets/vendors/images/deskapp-logo.svg') }} alt="" />
            </div>
            <div class="loader-progress" id="progress_div">
                <div class="bar" id="bar1"></div>
            </div>
            <div class="percent" id="percent1">0%</div>
            <div class="loading-text">Loading...</div>
        </div>
    </div> --}}




    <!-- header start -->
    @include('Dashboard.layout.header')
    <!-- header end -->

    <!-- sidebar start -->
    @include('Dashboard.layout.sidebar')
    <!-- sidebar end -->

    <div class="mobile-menu-overlay"></div>

    <!-- Main Content start -->
    <div class="main-container">
        @yield('content')
    </div>
    <!-- Main Content end -->

    <!-- js -->
    <script src={{ asset('assets/vendors/scripts/core.js') }}></script>
    <script src={{ asset('assets/vendors/scripts/script.min.js') }}></script>
    <script src={{ asset('assets/vendors/scripts/process.js') }}></script>
    <script src={{ asset('assets/vendors/scripts/layout-settings.js') }}></script>
    {{-- <script src={{ asset('assets/src/plugins/apexcharts/apexcharts.min.js') }}></script> --}}
    {{-- <script src={{ asset('assets/src/plugins/datatables/js/jquery.dataTables.min.js') }}></script>
    <script src={{ asset('assets/src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}></script>
    <script src={{ asset('assets/src/plugins/datatables/js/dataTables.responsive.min.js') }}></script>
    <script src={{ asset('assets/src/plugins/datatables/js/responsive.bootstrap4.min.js') }}></script> --}}
    {{-- <script src={{ asset('assets/vendors/scripts/dashboard3.js') }}></script> --}}
    <script src="https://cdn.datatables.net/1.13.7/js/jquery.dataTables.min.js"></script>
    {{-- <script src={{ asset('assets/src/plugins/ion-rangeslider/js/ion.rangeSlider.min.js') }}></script>
    <script src={{ asset('assets/vendors/scripts/range-slider-setting.js') }}></script> --}}
    @stack('scripts')
    <script>
        new DataTable("#myTable");
        // new DataTable('#myTable2');


        new DataTable('#myTable2', {
            lengthMenu: [10, 25, 50, 75, 100],
            pageLength: 50
        });

        $(document).ready(function() {
            $('#cf').change(function() {
                var selectedColor = $('option:selected', this).css('color');
                $(this).css('color', selectedColor);
            }).change();

            $('#cf2').change(function() {
                var selectedColor = $('option:selected', this).css('color');
                $(this).css('color', selectedColor);
            }).change();

            $('.cf3').change(function() {
                var selectedColor = $('option:selected', this).css('color');
                $(this).css('color', selectedColor);
            }).change();

            $(".checkbox-dropdown").click(function() {
                $(this).toggleClass("is-active");
            });

            $(".checkbox-dropdown ul").click(function(e) {
                e.stopPropagation();
            });
            $('#areaDetail').on('input', function() {
                $('#inputDetail').val($(this).val());
            });
            $('#areaSolusi').on('input', function() {
                $('#inputSolusi').val($(this).val());
            });
        });
    </script>

</body>

</html>
