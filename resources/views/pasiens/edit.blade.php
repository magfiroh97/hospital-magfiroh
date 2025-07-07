@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header"><strong>Edit Pasien</strong></div>
    <div class="card-body">
        <form method="POST" action="{{ route('pasiens.update', $pasien->id) }}">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label>Nama</label>
                <input type="text" name="nama" value="{{ $pasien->nama }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Alamat</label>
                <input type="text" name="alamat" value="{{ $pasien->alamat }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>No. HP</label>
                <input type="text" name="no_hp" value="{{ $pasien->no_hp }}" class="form-control" required>
            </div>

            <div class="mb-3">
                <label>Tanggal Lahir</label>
                <input type="date" name="tanggal_lahir" value="{{ $pasien->tanggal_lahir }}" class="form-control" required>
            </div>

            <button type="submit" class="btn btn-success">Update</button>
        </form>
    </div>
</div>
@endsection
