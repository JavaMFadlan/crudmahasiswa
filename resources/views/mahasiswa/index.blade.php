@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-lg-12">
            <h2>Mahasiswa List</h2>
            <a class="btn btn-success" href="{{ route('mahasiswa.create') }}"> Create New Mahasiswa</a>
        </div>
    </div>

    @if ($message = Session::get('success'))
        <div class="alert alert-success mt-3">
            <p>{{ $message }}</p>
        </div>
    @endif

    <table class="table table-bordered mt-3">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>Kelas</th>
            <th width="280px">Action</th>
        </tr>
        @php $i = 0; @endphp
        @foreach ($mahasiswas as $mahasiswa)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $mahasiswa->nama }}</td>
            <td>{{ $mahasiswa->kelas }}</td>
            <td>
                <form action="{{ route('mahasiswa.destroy',$mahasiswa->id) }}" method="POST">
                    <a class="btn btn-info" href="{{ route('mahasiswa.show',$mahasiswa->id) }}">Show</a>
                    <a class="btn btn-primary" href="{{ route('mahasiswa.edit',$mahasiswa->id) }}">Edit</a>
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>

@endsection
