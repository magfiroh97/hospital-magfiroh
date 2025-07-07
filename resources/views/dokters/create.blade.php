@extends('layouts.app')
@section('title', 'Tambah Dokter')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Tambah Dokter</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('dokters.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Spesialis</label>
                <input type="text" name="spesialis" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jadwal Praktek</label>
                <input type="text" name="jadwal_praktek" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan</button>
        </form>
    </div>
</div>
@endsection