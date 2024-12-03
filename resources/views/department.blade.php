<x-layout>
    <x-slot:title>{{ $title }}</x-slot:title>

    <div class="overflow-x-auto shadow-md rounded-lg">
        <table class="min-w-full bg-white">
            <thead class="bg-gray-800 text-white">
                <tr>
                    <th class="py-3 px-6 text-left">No</th>
                    <th class="py-3 px-6 text-left">Nama</th>
                    <th class="py-3 px-6 text-left">Description</th>
                </tr>
            </thead>
            <tbody class="text-gray-700">
                @foreach ($departments as $department)
                    <tr class="border-b hover:bg-gray-100">
                        <td class="py-3 px-6">{{ $loop->iteration }}</td>
                        <td class="py-3 px-6">{{ $department->name }}</td>
                        <td class="py-3 px-6">{{ $department->desc }}</td>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-layout>