@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2> Show Mahasiswa</h2>
            <a class="btn btn-primary" href="{{ route('mahasiswa.index') }}"> Back</a>
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                {{ $mahasiswa->nama }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Kelas:</strong>
                {{ $mahasiswa->kelas }}
            </div>
        </div>
    </div>
@endsection
