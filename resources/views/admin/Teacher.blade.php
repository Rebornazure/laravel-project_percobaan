
<x-admin.layout>
    <section class="bg-gray-50 dark:bg-gray-900 p-3 sm:p-5">
        <div class="mx-auto max-w-screen-xl px-4 lg:px-12">
            <div class="relative overflow-hidden rounded-lg bg-white shadow-md dark:bg-gray-800">

                <div class="flex items-center justify-between p-4">
                    <div>
                        <h1 class="text-xl font-bold text-gray-900 dark:text-white">
                            Data Teachers
                        </h1>
                        <p class="text-sm text-gray-500">
                            Daftar data guru
                        </p>
                    </div>
                    <a href="{{ route('admin.teachers.create') }}" class="rounded-lg bg-blue-700 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-800">+ Tambah Guru</a>
                </div>

                @if (session('success'))<div class="mx-4 mb-4 rounded-lg bg-green-100 p-4 text-sm text-green-800">{{ session('success') }}</div>@endif
                @if (session('error'))<div class="mx-4 mb-4 rounded-lg bg-red-100 p-4 text-sm text-red-800" role="alert">{{ session('error') }}</div>@endif

                <div class="overflow-x-auto">
                    <table class="w-full text-left text-sm text-gray-500 dark:text-gray-400">
                        <thead class="bg-gray-50 text-xs uppercase text-gray-700 dark:bg-gray-700 dark:text-gray-300">
                            <tr>
                                <th class="px-4 py-3">No</th>
                                <th class="px-4 py-3">Nama</th>
                                <th class="px-4 py-3">NIY</th>
                                <th class="px-4 py-3">Subject</th>
                                <th class="px-4 py-3">Tanggal Mulai</th>
                                <th class="px-4 py-3">Aksi</th>
                            </tr>
                        </thead>

                        <tbody>
                            @foreach ($teachers as $teacher)
                                <tr class="border-b dark:border-gray-700">
                                    <td class="px-4 py-3">
                                        {{ $loop->iteration }}
                                    </td>
                                    <td class="px-4 py-3 font-medium text-gray-900 dark:text-white">
                                        {{ $teacher->name }}
                                    </td>
                                    <td class="px-4 py-3">
                                        {{ $teacher->niy }}
                                    </td>
                                    <td class="px-4 py-3">
                                        {{ $teacher->subject->name }}
                                    </td>
                                    <td class="px-4 py-3">
                                        {{ $teacher->start_date }}
                                    </td>
                                    <td class="px-4 py-3">
                                        <form action="{{ route('admin.teachers.destroy', $teacher->id) }}" method="POST" class="inline"
                                            onsubmit="return confirm('Yakin ingin menghapus data guru ini?')">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="font-medium text-red-600 hover:underline">Delete</button>
                                        </form>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>

                <div class="p-4 text-sm text-gray-500">
                    Total guru: {{ $teachers->count() }}
                </div>

            </div>
        </div>
    </section>
</x-admin.layout>
