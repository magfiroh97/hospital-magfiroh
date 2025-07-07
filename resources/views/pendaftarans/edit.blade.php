@extends('layouts.app')
@section('title', 'Edit Pendaftaran')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Pendaftaran</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('pendaftarans.update', $pendaftaran->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label class="form-label">Pasien</label>
                <select name="pasien_id" class="form-control" required>
                    @foreach ($pasiens as $pasien)
                        <option value="{{ $pasien->id }}" {{ $pendaftaran->pasien_id == $pasien->id ? 'selected' : '' }}>
                            {{ $pasien->nama }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Dokter</label>
                <select name="dokter_id" class="form-control" required>
                    @foreach ($dokters as $dokter)
                        <option value="{{ $dokter->id }}" {{ $pendaftaran->dokter_id == $dokter->id ? 'selected' : '' }}>
                            {{ $dokter->nama }} ({{ $dokter->spesialis }})
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label class="form-label">Tanggal Daftar</label>
                <input type="date" name="tanggal_daftar" class="form-control" value="{{ $pendaftaran->tanggal_daftar }}" required>
            </div>

            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection
