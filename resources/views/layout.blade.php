<!DOCTYPE html>
<html lang="en" class="bg-gray-100 dark:bg-gray-900">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
    @vite('resources/css/app.css')

    <style>
        html, body, .admin-shell { background-color: #f3f4f6; color: #111827; color-scheme: light dark; }
        @media (prefers-color-scheme: dark) {
            html, body, .admin-shell { background-color: #111827; color: #f3f4f6; }
        }
    </style>

    <title>layout</title>
</head>
<body class="min-h-screen bg-gray-100 dark:bg-gray-900 text-gray-900 dark:text-gray-100">
    <div class="admin-shell min-h-screen">

    {{-- mengambil komponen navbar --}}
    <x-admin.navbar />

    <!-- Sidebar -->

    <x-admin.sidebar/>

    <main class="admin-shell p-4 md:ml-64 min-h-screen pt-20 bg-gray-100 dark:bg-gray-900">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
        {{ $slot }}
        </div>
    </main>
  </div>
</body>
</html>
