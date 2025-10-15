@extends('layout.app')

@section('content')
<div class="container">
    <h1>Edit Mata Kuliah Baru</h1>

    <form action="{{ route('matakuliah.update', $mk->id) }}" method="POST">
        @csrf
        @method('PUT')
        <label for="nama_mk">Nama Mata Kuliah:</label><br>
        <input type="text" id="nama_mk" name="nama_mk" value="{{ $mk->nama_mk }}" required><br><br>

        <label for="sks">SKS:</label><br>
        <input type="number" id="sks" name="sks" value="{{ $mk->sks }}" required><br><br>

        <button type="submit" style="background-color: #00b894; color: white; padding: 8px 14px; border: none; border-radius: 8px;">
            Submit
        </button>
    </form>
</div>

<!-- <div class="container">
    <h1>Edit Data User</h1>

    <form action="{{ route('user.update', $mk->id) }}" method="POST">
        @csrf
        @method('PUT')

        <label for="nama">Nama:</label><br>
        <input type="text" id="nama" name="nama" value="{{ $mk->nama }}" required><br><br>

        <label for="nim">NIM:</label><br>
        <input type="text" id="nim" name="nim" value="{{ $mk->nim }}" required><br><br>

        <label for="kelas_id">Kelas:</label><br>
        <select name="kelas_id" id="kelas_id" required>
            @foreach ($kelas as $kelasItem)
                <option value="{{ $kelasItem->id }}" {{ $mk->kelas_id == $kelasItem->id ? 'selected' : '' }}>
                    {{ $kelasItem->nama_kelas }}
                </option>
            @endforeach
        </select><br><br>

        <button type="submit" style="background-color: #00b894; color: white; padding: 8px 14px; border: none; border-radius: 8px;">
            Update
        </button>
    </form>
</div> -->
@endsection
