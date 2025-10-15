@extends('layout.app')

@section('content')
<div class="container mt-5">
    <h1 class="mb-4">Edit Data User</h1>

    @if (session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <form action="{{ route('user.update', $user->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label for="nama" class="form-label">Nama:</label>
            <input type="text" id="nama" name="nama" class="form-control" value="{{ $user->nama }}" required>
        </div>

        <div class="mb-3">
            <label for="nim" class="form-label">NIM:</label>
            <input type="text" id="nim" name="nim" class="form-control" value="{{ $user->nim }}" required>
        </div>

        <div class="mb-3">
            <label for="kelas_id" class="form-label">Kelas:</label>
            <select id="kelas_id" name="kelas_id" class="form-select" required>
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}" {{ $user->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                        {{ $kelasItem->nama_kelas }}
                    </option>
                @endforeach
            </select>
        </div>

        <button type="submit" class="btn btn-success">Update</button>
        <a href="{{ route('user.index') }}" class="btn btn-secondary">Kembali</a>
    </form>
</div>
@endsection
