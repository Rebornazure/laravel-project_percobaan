<x-admin.layout>
    <section class="p-3 sm:p-5">
        <div class="mx-auto max-w-xl rounded-lg bg-white p-6 shadow dark:bg-gray-800">
            <h1 class="mb-6 text-2xl font-bold text-gray-900 dark:text-white">Tambah Guru</h1>
            @if ($errors->any())
                <div class="mb-4 rounded-lg bg-red-100 p-4 text-sm text-red-700">
                    @foreach ($errors->all() as $error)<p>{{ $error }}</p>@endforeach
                </div>
            @endif
            <form action="{{ route('admin.teachers.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="mb-2 block text-sm font-medium">Nama Guru</label>
                    <input id="name" name="name" value="{{ old('name') }}" maxlength="255" required class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 dark:bg-gray-700">
                </div>
                <div>
                    <label for="niy" class="mb-2 block text-sm font-medium">NIY</label>
                    <input id="niy" name="niy" value="{{ old('niy') }}" inputmode="numeric" required class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 dark:bg-gray-700">
                </div>
                <div>
                    <label for="subject_id" class="mb-2 block text-sm font-medium">Mata Pelajaran</label>
                    <select id="subject_id" name="subject_id" required class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 dark:bg-gray-700">
                        <option value="">Pilih mata pelajaran</option>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}" @selected(old('subject_id') == $subject->id)>{{ $subject->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="start_date" class="mb-2 block text-sm font-medium">Tanggal Mulai</label>
                    <input id="start_date" name="start_date" type="date" value="{{ old('start_date') }}" required class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 dark:bg-gray-700">
                </div>
                <div class="flex gap-3">
                    <button class="rounded-lg bg-blue-700 px-5 py-2.5 text-white hover:bg-blue-800" type="submit">Simpan Guru</button>
                    <a href="{{ route('admin.teachers.index') }}" class="rounded-lg border px-5 py-2.5">Kembali</a>
                </div>
            </form>
        </div>
    </section>
</x-admin.layout>
<x-admin.layout>
    <section class="p-3 sm:p-5">
        <div class="mx-auto max-w-xl rounded-lg bg-white p-6 shadow dark:bg-gray-800">
            <h1 class="mb-6 text-2xl font-bold text-gray-900 dark:text-white">Tambah Guru</h1>
            @if ($errors->any())
                <div class="mb-4 rounded-lg bg-red-100 p-4 text-sm text-red-700">
                    @foreach ($errors->all() as $error)<p>{{ $error }}</p>@endforeach
                </div>
            @endif
            <form action="{{ route('admin.teachers.store') }}" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="mb-2 block text-sm font-medium">Nama Guru</label>
                    <input id="name" name="name" value="{{ old('name') }}" maxlength="255" required class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 dark:bg-gray-700">
                </div>
                <div>
                    <label for="niy" class="mb-2 block text-sm font-medium">NIY</label>
                    <input id="niy" name="niy" value="{{ old('niy') }}" inputmode="numeric" required class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 dark:bg-gray-700">
                </div>
                <div>
                    <label for="subject_id" class="mb-2 block text-sm font-medium">Mata Pelajaran</label>
                    <select id="subject_id" name="subject_id" required class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 dark:bg-gray-700">
                        <option value="">Pilih mata pelajaran</option>
                        @foreach ($subjects as $subject)
                            <option value="{{ $subject->id }}" @selected(old('subject_id') == $subject->id)>{{ $subject->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div>
                    <label for="start_date" class="mb-2 block text-sm font-medium">Tanggal Mulai</label>
                    <input id="start_date" name="start_date" type="date" value="{{ old('start_date') }}" required class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 dark:bg-gray-700">
                </div>
                <div class="flex gap-3">
                    <button class="rounded-lg bg-blue-700 px-5 py-2.5 text-white hover:bg-blue-800" type="submit">Simpan Guru</button>
                    <a href="{{ route('admin.teachers.index') }}" class="rounded-lg border px-5 py-2.5">Kembali</a>
                </div>
            </form>
        </div>
    </section>
</x-admin.layout>
