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
    {{-- Alert Notifikasi --}}
    @if (session('success'))
      <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Berhasil!</strong> {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @elseif (session('error'))
      <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <strong>Gagal!</strong> {{ session('error') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>
    @endif

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
              <th class="text-center">Aksi</th>
            </tr>
          </thead>
          <tbody>
            @foreach ($users as $user)
            <tr>
              <td>{{ $user->id }}</td>
              <td>{{ $user->nama }}</td>
              <td>{{ $user->nim }}</td>
              <td>{{ $user->kelas->nama_kelas }}</td>
              <td class="text-center">
                {{-- Tombol Edit --}}
                <a href="{{ route('user.edit', $user->id) }}" class="btn btn-warning btn-sm me-1">
                  ✏️ Edit
                </a>

                {{-- Tombol Delete --}}
                <form action="{{ route('user.destroy', $user->id) }}" method="POST" class="d-inline"
                      onsubmit="return confirm('Apakah kamu yakin ingin menghapus user ini?');">
                  @csrf
                  @method('DELETE')
                  <button type="submit" class="btn btn-danger btn-sm">
                    🗑️ Hapus
                  </button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
        </table>

        {{-- Jika belum ada user --}}
        @if($users->isEmpty())
          <div class="text-center text-muted mt-3">
            <em>Belum ada data user yang tersedia.</em>
          </div>
        @endif
      </div>
    </div>
  </div>

  {{-- Footer --}}
  @include('component.footer')

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  {{-- Auto-hide alert setelah 3 detik --}}
  <script>
    setTimeout(() => {
      const alert = document.querySelector('.alert');
      if (alert) alert.classList.remove('show');
    }, 3000);
  </script>
</body>
</html>
