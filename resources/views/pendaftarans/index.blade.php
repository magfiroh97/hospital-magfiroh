@extends('layouts.app')
@section('title', 'Data Pendaftaran')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Data Pendaftaran
            <a href="{{ route('pendaftarans.create') }}" class="btn btn-primary float-end">Tambah Pendaftaran</a>
        </h3>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Pasien</th>
                    <th>Dokter</th>
                    <th>Tanggal Daftar</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($pendaftarans as $pendaftaran)
                    <tr>
                        <td>{{ $pendaftaran->pasien->nama }}</td>
                        <td>{{ $pendaftaran->dokter->nama }} ({{ $pendaftaran->dokter->spesialis }})</td>
                        <td>{{ $pendaftaran->tanggal_daftar }}</td>
                        <td>{{ $pendaftaran->status }}</td>
                        <td>
                            @if ($pendaftaran->status === 'pending')
                                <form action="{{ route('pendaftarans.approve', $pendaftaran) }}" method="POST" style="display:inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-success">Setujui</button>
                                </form>
                                <form action="{{ route('pendaftarans.reject', $pendaftaran) }}" method="POST" style="display:inline">
                                    @csrf
                                    <button type="submit" class="btn btn-sm btn-danger">Tolak</button>
                                </form>
                            @endif
                            <a href="{{ route('pendaftarans.edit', $pendaftaran) }}" class="btn btn-sm btn-primary">Edit</a>
                            <form action="{{ route('pendaftarans.destroy', $pendaftaran) }}" method="POST" style="display:inline">
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