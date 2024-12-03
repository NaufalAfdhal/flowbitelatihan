<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mt-5">
        <h3 class="text-center mb-4">Form Tambah Student</h3>

        <form action="{{ route('student.store') }}" method="POST" class="shadow p-4 bg-white rounded">
            @csrf
            <div class="form-group mb-3">
                <label for="name" class="form-label">Nama:</label>
                <input type="text" id="name" name="name" class="form-control" placeholder="Masukkan nama" required>
            </div>
            <div class="form-group mb-3">
                <label for="grade" class="form-label">Kelas:</label>
                <input type="text" id="grade" name="grade" class="form-control" placeholder="Masukkan kelas" required>
            </div>
            <div class="form-group mb-3">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-control" placeholder="Masukkan email" required>
            </div>
            <div class="form-group mb-3">
                <label for="address" class="form-label">Alamat:</label>
                <input type="text" id="address" name="address" class="form-control" placeholder="Masukkan alamat" required>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-success">Simpan</button>
                <a href="{{ route('student') }}" class="btn btn-secondary">Kembali</a>
            </div>
        </form>
    </div>
</x-layout>
