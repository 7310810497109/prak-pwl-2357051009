<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  {{-- Navbar --}}
  @include('component.navbar')

  <div class="container mt-5">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-primary text-white fw-bold">
        Tambah User
      </div>

      <div class="card-body">
        <form action="{{ route('user.store') }}" method="POST">
            @csrf

            <label for="nama" class="form-label">Nama:</label><br>
            <input type="text" id="nama" name="nama" class="form-control mb-3"><br>

            <label for="npm" class="form-label">NPM:</label><br>
            <input type="text" id="npm" name="npm" class="form-control mb-3"><br>

            <label for="kelas" class="form-label">Kelas:</label><br>
            <select name="kelas_id" id="kelas_id" class="form-select mb-4">
                @foreach ($kelas as $kelasItem)
                    <option value="{{ $kelasItem->id }}">{{ $kelasItem->nama_kelas }}</option>
                @endforeach
            </select><br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>

  {{-- Footer --}}
  @include('component.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
