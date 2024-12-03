<x-dashboard>
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
                        <th class="px-6 py-3 text-left font-medium">Action</th>
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
                            <td class="px-6 py-4 truncate">
                                <div class="flex items-center justify-center space-x-2">
                                <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-width="2" d="M21 12c0 1.2-4.03 6-9 6s-9-4.8-9-6c0-1.2 4.03-6 9-6s9 4.8 9 6Z"/>
                                    <path stroke="currentColor" stroke-width="2" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z"/>
                                  </svg>
                                  <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m14.304 4.844 2.852 2.852M7 7H4a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-4.5m2.409-9.91a2.017 2.017 0 0 1 0 2.853l-6.844 6.844L8 14l.713-3.565 6.844-6.844a2.015 2.015 0 0 1 2.852 0Z"/>
                                  </svg>
                                  <svg class="w-6 h-6 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 7h14m-9 3v8m4-8v8M10 3h4a1 1 0 0 1 1 1v3H9V4a1 1 0 0 1 1-1ZM6 7h12v13a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7Z"/>
                                  </svg>
                            </div></td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-dashboard>