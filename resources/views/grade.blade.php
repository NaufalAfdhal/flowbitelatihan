<x-layout>
    <x-slot:title>{{ $title }}</x-slot>

    <div class="container mx-auto mt-5">
        <h3 class="text-2xl font-medium text-center mb-4">Grades</h3>

        <!-- Button to add new student -->
        <div class="text-right mb-4">
            <a href="{{ route('student.create') }}" class="btn btn-primary add-student-btn bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded-full transition duration-300 shadow-md hover:shadow-lg">
                Tambah Siswa
            </a>
        </div>

        <!-- Responsive table for displaying student data -->
        <div class="overflow-x-auto shadow-md rounded-lg">
            <table class="min-w-full bg-white">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="py-3 px-6 text-left">No</th>
                        <th class="py-3 px-6 text-left">Nama</th>
                        <th class="py-3 px-6 text-left">Department ID</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    @foreach ($grades as $grade)
                        <tr class="border-b hover:bg-gray-100">
                            <td class="py-3 px-6">{{ $loop->iteration }}</td>
                            <td class="py-3 px-6">{{ $grade->name }}</td>
                            <td class="py-3 px-6">{{ $grade->department->name }} </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layout>
