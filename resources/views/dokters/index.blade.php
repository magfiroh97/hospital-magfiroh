@extends('layouts.app')

@section('title', 'Data Dokter')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Data Dokter
            <a href="{{ route('dokters.create') }}" class="btn btn-primary float-end">Tambah Dokter</a>
        </h3>
    </div>
    <div class="card-body">
        @if (session('success'))
            <div class="alert alert-success">{{ session('success') }}</div>
        @endif

        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Spesialis</th>
                    <th>Jadwal Praktek</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($dokters as $dokter)
                    <tr>
                        <td>{{ $dokter->nama }}</td>
                        <td>{{ $dokter->spesialis }}</td>
                        <td>{{ $dokter->jadwal_praktek }}</td>
                        <td>
                            <a href="{{ route('dokters.edit', $dokter->id) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('dokters.destroy', $dokter->id) }}" method="POST" style="display:inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Yakin ingin menghapus dokter ini?')">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
