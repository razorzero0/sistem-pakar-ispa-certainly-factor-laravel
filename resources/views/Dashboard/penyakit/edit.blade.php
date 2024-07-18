@extends('Dashboard.layout.app')

@section('content')
    <div class="page-header">
        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="title">
                    <h4>Penyakit</h4>
                </div>
                <nav aria-label="breadcrumb" role="navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="index.html">Home</a>
                        </li>
                        <li class="breadcrumb-item">
                            <a href="index.html">Penyakit</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">
                            Edit Penyakit
                        </li>
                    </ol>
                </nav>
            </div>

        </div>
    </div>
    <!-- basic table  Start -->
    <div class="pd-20 card-box mb-30">
        <div class="clearfix mb-20">
            <div class="pull-left">
                <h4 class="text-blue h4">Edit Penyakit</h4>

            </div>

        </div>
        @if ($errors->any())
            <div class="alert alert-danger">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </div>
        @endif
        <form action={{ route('penyakit.update', $data->kode_penyakit) }} method="POST">
            @csrf
            @method('PUT')
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Nama Penyakit</label>
                <div class="col-sm-12 col-md-10">
                    <input class="form-control" type="text" name="nama_penyakit" value="{{ $data->nama_penyakit }}">
                </div>
            </div>
            <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Informasi Penyakit</label>
                <div class="col-sm-12 col-md-10">
                    <textarea id="areaDetail" class="form-control" type="text" name="detail_penyakit">{!! $data->detail_penyakit !!}</textarea>

                </div>
            </div>
            {{-- <div class="form-group row">
                <label class="col-sm-12 col-md-2 col-form-label">Solusi Penyakit</label>
                <div class="col-sm-12 col-md-10">
                    <textarea id="areaSolusi" name="solusi_penyakit" class="form-control" type="text">{!! $data->solusi_penyakit !!}</textarea>

                </div>
            </div> --}}


            <div class="flex-row-reverse d-flex" style="gap:8px;">
                <button class="btn btn-large btn-info " type="submit">Simpan</button>
                <a href={{ route('penyakit.index') }} class="btn btn-large btn-dark ">Batal</a>
            </div>


        </form>

    </div>
    @push('text-editor')
        <script src="https://cdn.tiny.cloud/1/y86wfduvullpzpqktwbd90lzz04o8wx9p3vis3euu5u23xzn/tinymce/7/tinymce.min.js"
            referrerpolicy="origin"></script>
        <script>
            tinymce.init({
                selector: 'textarea#areaSolusi',


                // Replace this CSS selector to match the placeholder element for TinyMCE
                plugins: 'code lists',
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code '
            });
            tinymce.init({

                selector: 'textarea#areaDetail',

                // Replace this CSS selector to match the placeholder element for TinyMCE
                plugins: 'code lists',
                toolbar: 'undo redo | blocks | bold italic | alignleft aligncenter alignright | indent outdent | bullist numlist | code '
            });
        </script>
    @endpush
    <!-- basic table  End -->
@endsection
