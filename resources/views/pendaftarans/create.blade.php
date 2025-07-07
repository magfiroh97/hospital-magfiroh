@extends('layouts.app')
@section('title', 'Tambah Pendaftaran')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Tambah Pendaftaran</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('pendaftarans.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Pasien</label>
                <select name="pasien_id" class="form-control" required>
                    @foreach ($pasiens as $pasien)
                        <option value="{{ $pasien->id }}">{{ $pasien->nama }}</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Dokter</label>
                <select name="dokter_id" class="form-control" required>
                    @foreach ($dokters as $dokter)
                        <option value="{{ $dokter->id }}">{{ $dokter->nama }} ({{ $dokter->spesialis }})</option>
                    @endforeach
                </select>
            </div>
            <div class="mb-3">
                <label class="form-label">Tanggal Daftar</label>
                <input type="date" name="tanggal_daftar" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection