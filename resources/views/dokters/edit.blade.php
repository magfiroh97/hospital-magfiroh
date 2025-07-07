@extends('layouts.app')
@section('title', 'Edit Dokter')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>Edit Dokter</h3>
    </div>
    <div class="card-body">
        <form action="{{ route('dokters.update', $dokter) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label class="form-label">Nama</label>
                <input type="text" name="nama" class="form-control" value="{{ $dokter->nama }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Spesialis</label>
                <input type="text" name="spesialis" class="form-control" value="{{ $dokter->spesialis }}" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Jadwal Praktek</label>
                <input type="text" name="jadwal_praktek" class="form-control" value="{{ $dokter->jadwal_praktek }}" required>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection