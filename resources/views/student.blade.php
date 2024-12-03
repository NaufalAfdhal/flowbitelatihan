<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mx-auto p-4">
        <h3 class="text-center text-2xl font-semibold mb-4">Daftar Siswa</h3>

        <!-- Button to add new student -->
        <div class="text-end mb-4">
            <a href="{{ route('student.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold uppercase py-2 px-7 rounded-full shadow-md transition duration-300 ease-in-out">
                Tambah Siswa
            </a>
        </div>

        <!-- Modern Table for displaying student data -->
        <div class="overflow-x-auto shadow-lg rounded-lg">
            <table class="min-w-full table-auto">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="px-6 py-3 text-left font-medium">No</th>
                        <th class="px-6 py-3 text-left font-medium">Nama</th>
                        <th class="px-6 py-3 text-left font-medium">Kelas</th>
                        <th class="px-6 py-3 text-left font-medium">Department</th>
                        <th class="px-6 py-3 text-left font-medium">Email</th>
                        <th class="px-6 py-3 text-left font-medium">Alamat</th>
                    </tr>
                </thead>
                <tbody class="bg-white divide-y divide-gray-200">
                    @foreach ($students as $student)
                        <tr class="hover:bg-blue-100 transition duration-150 ease-in-out">
                            <td class="px-6 py-4">{{ $loop->iteration }}</td>
                            <td class="px-6 py-4 truncate">{{ $student->name }}</td>
                            <td class="px-6 py-4 truncate">{{ $student->grade->name }}</td>
                            <td class="px-6 py-4 truncate">{{ $student->department->name }}</td>
                            <td class="px-6 py-4 truncate">{{ $student->email }}</td>
                            <td class="px-6 py-4 truncate">{{ $student->addres }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
