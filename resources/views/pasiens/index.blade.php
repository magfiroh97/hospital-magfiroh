@extends('layouts.app')
@section('title', 'Data Pasien')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Data Pasien
            <a href="{{ route('pasiens.create') }}" class="btn btn-primary float-end">Tambah Pasien</a>
        </h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Nama</th>
                    <th>Alamat</th>
                    <th>No HP</th>
                    <th>Tanggal Lahir</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pasiens as $pasien)
                    <tr>
                        <td>{{ $pasien->nama }}</td>
                        <td>{{ $pasien->alamat }}</td>
                        <td>{{ $pasien->no_hp }}</td>
                        <td>{{ $pasien->tanggal_lahir }}</td>
                        <td>
                            <a href="{{ route('pasiens.edit', $pasien) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('pasiens.destroy', $pasien) }}" method="POST" style="display:inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-danger">Hapus</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection