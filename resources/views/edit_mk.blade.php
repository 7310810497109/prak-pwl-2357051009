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
@endsection