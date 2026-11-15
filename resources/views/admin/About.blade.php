<x-admin.layout>

    <div class="container mx-auto p-4">
        <div class="p-6 bg-white/80 dark:bg-gray-800/80 backdrop-blur-md rounded-lg shadow-md max-w-2xl mx-auto mt-6">
            <h1 class="text-2xl font-bold text-gray-900 dark:text-white mb-4 border-b pb-2">
                {{ $title }}
            </h1>

            <div class="space-y-3 text-gray-700 dark:text-gray-300">
                <div class="flex border-b border-gray-200 dark:border-gray-700 pb-2">
                    <span class="w-40 font-semibold">Nama:</span>
                    <span>{{ $nama }}</span>
                </div>

                <div class="flex border-b border-gray-200 dark:border-gray-700 pb-2">
                    <span class="w-40 font-semibold">Kelas:</span>
                    <span>{{ $kelas }}</span>
                </div>

                <div class="flex border-b border-gray-200 dark:border-gray-700 pb-2">
                    <span class="w-40 font-semibold">Repository Profile:</span>
                    <a href="https://github.com/Rebornazure" target="_blank" class="text-blue-600 hover:underline dark:text-blue-400">
                        https://github.com/Rebornazure
                    </a>
                </div>

                <div class="flex border-b border-gray-200 dark:border-gray-700 pb-2">
                    <span class="w-40 font-semibold">GitHub:</span>
                    <a href="https://github.com/Rebornazure" target="_blank" class="text-blue-600 hover:underline dark:text-blue-400">
                        https://github.com/Rebornazure
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-admin.layout>
