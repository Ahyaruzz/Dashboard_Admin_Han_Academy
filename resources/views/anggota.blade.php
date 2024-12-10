<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#F4F5FF]">
    <x-navbar >
        <x-slot name="home">Anggota</x-slot>
        Anggota
    </x-navbar>
    <x-sidebar></x-sidebar>
    <div class="xl:ml-80 mt-4">
        <!-- Table Section -->
        <section class="bg-white shadow rounded-lg p-16">
                <!-- Filter and Search -->
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center space-x-4">
                        <!-- Tombol Filter -->
                        <button class="flex items-center bg-gray-200 border border-gray-300 text-gray-700 py-2 px-4 rounded hover:bg-gray-300 transition">
                            <!-- Filter Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                              <path stroke-linecap="round" stroke-linejoin="round" d="M12 3c2.755 0 5.455.232 8.083.678.533.09.917.556.917 1.096v1.044a2.25 2.25 0 0 1-.659 1.591l-5.432 5.432a2.25 2.25 0 0 0-.659 1.591v2.927a2.25 2.25 0 0 1-1.244 2.013L9.75 21v-6.568a2.25 2.25 0 0 0-.659-1.591L3.659 7.409A2.25 2.25 0 0 1 3 5.818V4.774c0-.54.384-1.006.917-1.096A48.32 48.32 0 0 1 12 3Z" />
                            </svg>
                            
                        </button>
                        <!-- Input Search -->
                        <div class="relative">
                            <input type="text" placeholder="Search" class="border border-gray-300 p-2 pl-10 rounded w-64 shadow-sm">
                            <!-- Search Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 absolute top-1/2 left-3 transform -translate-y-1/2 text-gray-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21 21l-4.35-4.35m1.41-6.25a7.25 7.25 0 11-14.5 0 7.25 7.25 0 0114.5 0z" />
                            </svg>
                        </div>
                    </div>
                    <!-- Tombol Hapus -->
                    <button class="flex items-center py-2 px-4 bg-black text-white rounded">
                      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                      </svg>
                      <span class="ml-2">Hapus</span>
                    </button>
                </div>

                <!-- Tabel -->
                <table class="w-full text-left border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border px-4 py-2">Nama</th>
                            <th class="border px-4 py-2">No Telp</th>
                            <th class="border px-4 py-2">Jenis Kelamin</th>
                            <th class="border px-4 py-2">Sabuk</th>
                            <th class="border px-4 py-2">Beladiri</th>
                            <th class="border px-4 py-2">Membership</th>
                            <th class="border px-4 py-2">Coach</th>
                            <th class="border px-4 py-2">Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="hover:bg-gray-50">
                            <td class="border px-4 py-2">Dio</td>
                            <td class="border px-4 py-2">0812987414141</td>
                            <td class="border px-4 py-2">Laki-Laki</td>
                            <td class="border px-4 py-2">Biru</td>
                            <td class="border px-4 py-2">MMA</td>
                            <td class="border px-4 py-2">VIP</td>
                            <td class="border px-4 py-2">Abe</td>
                            <td class="border px-4 py-2 text-blue-500 cursor-pointer hover:underline">Edit</td>
                        </tr>
                    </tbody>
                </table>
            </section>
        </main>
    </div>
</body>
</html>

    </div>
</body>
</html>