@extends('Dashboard.layout.app')

@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>About</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Tentang Aplikasi
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
    <!-- basic table  Start -->
    <div class="pd-20 card-box mb-30" style="margin-top: -1.2rem">


        <div class="blog-caption">
            <h4 class="mb-10">
                Aplikasi Sistem Pakar Diagnosa Penyakit Infeksi Saluran Pernapasan Akut Menggunakan
                Certainty Factor
            </h4>
            <p>
                <strong>Saluran Pernapasan Akut (ISPA)</strong> merupakan kumpulan penyakit yang menyerang
                saluran pernapasan bagian atas maupun bawah, disebabkan oleh berbagai virus dan bakteri.
                Contohnya adalah influenza, bronkitis, pneumonia, dan lainnya. ISPA dapat menimbulkan gejala
                seperti
                batuk, pilek, sakit tenggorokan, dan sesak napas.
            </p>

            <p>
                <strong>Sistem pakar</strong> adalah sebuah sistem komputer yang dirancang untuk meniru
                kemampuan penalaran manusia dalam memecahkan masalah tertentu. Mereka memanfaatkan basis
                pengetahuan yang terstruktur dan aturan-aturan logika untuk menghasilkan solusi atau
                diagnosis berdasarkan informasi yang diberikan. Dalam konteks aplikasi ini, sistem pakar
                digunakan untuk menganalisis gejala yang dilaporkan pengguna dan membandingkannya dengan
                basis pengetahuan yang dimiliki untuk menghasilkan diagnosis ISPA yang akurat.
            </p>
            <p>
                <strong>Certainty Factor </strong> menjadi komponen kunci dalam sistem ini, memungkinkan
                sistem pakar untuk mengukur tingkat kepastian terhadap setiap diagnosis yang diberikan,
                sehingga memberikan pengguna pemahaman yang lebih jelas tentang kepercayaan pada hasil
                diagnosis yang diberikan. Dengan demikian, sistem pakar menjadi alat yang sangat berguna
                dalam mendukung pengambilan keputusan medis yang lebih baik.
            </p>

            <h5 class="mb-10">Aplikasi ini menawarkan beberapa fitur penting, termasuk:</h5>
            <ol style=" list-style-type: circle;" class="pl-4">
                <li>
                    <strong>Management User</strong>: Memungkinkan admin untuk membuat dan mengelola
                    data mereka dalam aplikasi.
                </li>
                <li>
                    <strong>Management Data Penyakit</strong> Menyediakan database penyakit ISPA beserta
                    informasi terkait seperti penyebab, gejala, dan penanganan.
                </li>
                <li>
                    <Strong>Data Gejala</Strong>: Menampilkan daftar gejala yang mungkin dialami oleh
                    pengguna, dengan penjelasan tentang relevansinya terhadap diagnosis ISPA.
                </li>
                <li>
                    <strong>Rule/Pengetahuan</strong>: Mengandung basis pengetahuan yang diterapkan dalam
                    proses diagnosis, berdasarkan aturan medis dan korelasi antara gejala dengan penyakit.
                </li>
                <li>
                    <strong>Diagnosis</strong>: Melalui penerapan Certainty Factor, aplikasi memberikan
                    diagnosis yang didukung oleh tingkat kepercayaan yang dihitung, membantu pengguna untuk
                    memahami sejauh mana kepastian diagnosis yang diberikan.
                </li>

        </div>

    </div>


    <!-- basic table  End -->
@endsection
