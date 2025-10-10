<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar User</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-light">

  {{-- Navbar --}}
  @include('component.navbar')

  <div class="container mt-5">
    <div class="card shadow-sm border-0">
      <div class="card-header bg-primary text-white fw-bold d-flex justify-content-between align-items-center">
        <span>Daftar User</span>
        <a href="{{ route('user.create') }}" class="btn btn-light btn-sm">+ Tambah User</a>
      </div>

      <div class="card-body">
        <table class="table table-striped table-hover align-middle">
          <thead class="table-primary">
            <tr>
              <th>ID</th>
              <th>Nama</th>
              <th>NIM</th>
              <th>Kelas</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->nama }}</td>
              <td>{{ $user->nim }}</td>
              <td>{{ $user->kelas->nama_kelas }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
  </div>

  {{-- Footer --}}
  @include('component.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
