@extends('layout.template')
@section('konten')

<div class="dlab-bnr-inr style-1 bg-primary" style="background-image: url(images/banner/bnr2.png), var(--gradient-sec);  background-size: cover, 200%; ">
    <div class="container">
        <div class="dlab-bnr-inr-entry">
            <h1>Form</h1>
            <!-- Breadcrumb Row -->
            <nav aria-label="breadcrumb" class="breadcrumb-row style-1">
                <ul class="breadcrumb">
                    <li class="breadcrumb-item"><a href="#">Soal</a></li>
                    <li class="breadcrumb-item active" aria-current="page">Soal 1</li>
                </ul>
            </nav>
            <!-- Breadcrumb Row End -->
        </div>
    </div>
</div>
<div class="container">
    <div class="col-md-4 offset-md-4 mt-5">
        <div class="card">
            <div class="card-header">
                <h3 class="text-center">Formulir</h3>
            </div>
            <form action="{{ route('form') }}" method="post">
                @csrf
                <div class="card-body">
                    @if(session('errors'))
                    <div class="alert alert-danger alert-dismissible fade show" role="alert">
                        Something it's wrong:
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                        <ul>
                            @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                    @endif
                    @if (Session::has('success'))
                    <div class="alert alert-success">
                        {{ Session::get('success') }}
                    </div>
                    @endif
                    @if (Session::has('error'))
                    <div class="alert alert-danger">
                        {{ Session::get('error') }}
                    </div>
                    @endif
                    <div class="form-group">
                        <label for=""><strong>Nama</strong></label>
                        <input type="text" name="nama" class="form-control" placeholder="Nama" autofocus required>
                    </div>
                    <div class="form-group">

                        <label for=""><strong>Usia</strong></label>
                        <input type="number" name="usia" class="form-control" placeholder="Usia" min="0" max="99" required>
                    </div>
                    <div class="form-group">
                        <label for=""><strong>Kota</strong></label>
                        <input type="text" name="kota" class="form-control" placeholder="Kota" required>
                    </div>
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary btn-block">Submit Form</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection