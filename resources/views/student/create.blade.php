<div id="defaultModal" tabindex="-1" aria-hidden="true"
    class="{{ ($errors->any() || ($showCreateModal ?? false)) ? 'flex' : 'hidden' }} overflow-y-auto overflow-x-hidden fixed inset-0 z-50 justify-center items-center w-full h-full bg-gray-900/50">
    <div class="relative p-4 w-full max-w-2xl max-h-full">
        <div class="relative p-4 bg-white rounded-lg shadow dark:bg-gray-800 sm:p-5">
            <div class="flex justify-between items-center pb-4 mb-4 border-b dark:border-gray-600">
                <h3 class="text-lg font-semibold text-gray-900 dark:text-white">Tambah Data Siswa</h3>
                <button type="button" data-modal-toggle="defaultModal" aria-label="Tutup"
                    class="text-gray-400 hover:bg-gray-200 rounded-lg text-sm p-2">✕</button>
            </div>

            @if ($errors->any())
                <div class="mb-4 rounded-lg bg-red-100 p-3 text-sm text-red-700" role="alert">
                    <ul class="list-disc pl-5">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <form action="{{ route('admin.students.store') }}" method="POST" class="p-1">
                @csrf
                <div class="grid gap-4 mb-4 sm:grid-cols-2">
                    <div>
                        <label for="name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Nama Siswa</label>
                        <input type="text" name="name" id="name" value="{{ old('name') }}" maxlength="100" required
                            class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:bg-gray-700 dark:text-white"
                            placeholder="Masukkan nama siswa">
                    </div>
                    <div>
                        <label for="nis" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">NIS</label>
                        <input type="text" name="nis" id="nis" value="{{ old('nis') }}" maxlength="10" required
                            class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:bg-gray-700 dark:text-white"
                            placeholder="Masukkan NIS">
                    </div>
                    <div>
                        <label for="classroom_id" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Kelas</label>
                        <select name="classroom_id" id="classroom_id" required
                            class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:bg-gray-700 dark:text-white">
                            <option value="">Pilih kelas</option>
                            @foreach ($classrooms as $classroom)
                                <option value="{{ $classroom->id }}" @selected(old('classroom_id') == $classroom->id)>
                                    {{ $classroom->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>
                    <div>
                        <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Alamat</label>
                        <textarea name="address" id="address" rows="3" required
                            class="w-full rounded-lg border border-gray-300 bg-gray-50 p-2.5 text-sm text-gray-900 dark:bg-gray-700 dark:text-white"
                            placeholder="Masukkan alamat siswa">{{ old('address') }}</textarea>
                    </div>
                </div>
                <button type="submit" class="rounded-lg bg-blue-600 px-5 py-2.5 text-sm font-medium text-white hover:bg-blue-700">
                    Simpan Siswa
                </button>
            </form>
        </div>
    </div>
</div>
