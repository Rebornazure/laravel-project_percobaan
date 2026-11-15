<x-admin.layout>
    <section class="p-3 sm:p-5">
        <div class="mx-auto max-w-xl rounded-lg bg-white p-6 shadow dark:bg-gray-800">
            <h1 class="mb-6 text-2xl font-bold text-gray-900 dark:text-white">Tambah Mata Pelajaran</h1>
            @if ($errors->any())
                <div class="mb-4 rounded-lg bg-red-100 p-4 text-sm text-red-700">
                    @foreach ($errors->all() as $error)<p>{{ $error }}</p>@endforeach
                </div>
            @endif
            <form action="{{ route('admin.subjects.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="mb-2 block text-sm font-medium">Nama Mata Pelajaran</label>
                    <input id="name" name="name" value="{{ old('name') }}" maxlength="255" required class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 dark:bg-gray-700" placeholder="Contoh: Pemrograman Web">
                </div>
                <div class="flex gap-3">
                    <button class="rounded-lg bg-blue-700 px-5 py-2.5 text-white hover:bg-blue-800" type="submit">Simpan Mata Pelajaran</button>
                    <a href="{{ route('admin.subjects.index') }}" class="rounded-lg border px-5 py-2.5">Kembali</a>
                </div>
            </form>
        </div>
    </section>
</x-admin.layout>
<x-admin.layout>
    <section class="p-3 sm:p-5">
        <div class="mx-auto max-w-xl rounded-lg bg-white p-6 shadow dark:bg-gray-800">
            <h1 class="mb-6 text-2xl font-bold text-gray-900 dark:text-white">Tambah Mata Pelajaran</h1>
            @if ($errors->any())
                <div class="mb-4 rounded-lg bg-red-100 p-4 text-sm text-red-700">
                    @foreach ($errors->all() as $error)<p>{{ $error }}</p>@endforeach
                </div>
            @endif
            <form action="{{ route('admin.subjects.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="mb-2 block text-sm font-medium">Nama Mata Pelajaran</label>
                    <input id="name" name="name" value="{{ old('name') }}" maxlength="255" required class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 dark:bg-gray-700" placeholder="Contoh: Pemrograman Web">
                </div>
                <div class="flex gap-3">
                    <button class="rounded-lg bg-blue-700 px-5 py-2.5 text-white hover:bg-blue-800" type="submit">Simpan Mata Pelajaran</button>
                    <a href="{{ route('admin.subjects.index') }}" class="rounded-lg border px-5 py-2.5">Kembali</a>
                </div>
            </form>
        </div>
    </section>
</x-admin.layout>
