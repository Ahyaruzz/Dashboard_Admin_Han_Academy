<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite('resources/css/app.css')
    @vite('resources/js/app.js')
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="bg-[#F4F5FF]">
    <x-navbar >
        <x-slot name="home">Anggota</x-slot>
        Anggota
    </x-navbar>
    <x-sidebar></x-sidebar>
    <div class="xl:ml-80 mt-6 mr-6">
        <!-- Table Section -->
        
        <section class="bg-white shadow rounded-lg p-10">
                <!-- Filter and Search -->
                <div class="flex justify-between items-center mb-4">
                    <div class="flex items-center space-x-4">
                        <!-- Tombol Filter -->
                        
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
                    <button onclick="openModal()" class="py-2 px-4 bg-blackButton text-white rounded transition">
                        Tambah Anggota
                    </button>
                    <!-- Tombol Hapus -->
                </div>

                <!-- Tabel -->
                <table class="w-full text-left border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border px-4 py-2">Nama</th>
                            <th class="border px-4 py-2">No Telp</th>
                            <th class="border px-4 py-2">Jenis Kelamin</th>
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
                            <td class="border px-4 py-2">MMA</td>
                            <td class="border px-4 py-2">VIP</td>
                            <td class="border px-4 py-2">Abe</td>
                            <td class="border px-4 py-2 text-blue-500 cursor-pointer hover:underline">Edit</td>
                        </tr>
                    </tbody>
                </table>
                <div id="modalForm" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden">
                    <div class="bg-white rounded-lg shadow-lg w-1/3">
                        <!-- Header Modal -->
                        <div class="px-4 py-2 bg-primary text-white flex justify-between items-center">
                            <h2 class="text-lg font-semibold">Tambah Anggota</h2>
                            <button onclick="closeModal()" class="text-white">&times;</button>
                        </div>
                        <!-- Form Modal -->
                        <form action="{{ route('anggota.store') }}" method="POST" enctype="multipart/form-data" class="p-4">
                            @csrf
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" id="name" name="name" class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block text-sm font-medium text-gray-700">No Telp</label>
                                <input type="text" id="phone" name="phone" class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                            </div>
                            <div class="mb-4">
                                <label for="gender" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                                <select id="gender" name="gender" class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="beladiri" class="block text-sm font-medium text-gray-700">Beladiri</label>
                                <select id="beladiri" name="beladiri" class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                                    <option value="MT">Muay Thai</option>
                                    <option value="KW">Kids Warrior</option>
                                    <option value="MMA">MMA</option>
                                    <option value="PC">VIP Class</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="membership" class="block text-sm font-medium text-gray-700">Membership</label>
                                <select id="membership" name="membership" class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                                    <option value="RG">Regular</option>
                                    <option value="ET">Elite</option>
                                    <option value="VP">VIP</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="coach" class="block text-sm font-medium text-gray-700">Coach</label>
                                <select id="coach" name="coach" class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                                    <option value="MT">Abe</option>
                                    <option value="KW">Jonathan</option>
                                    <option value="MMA">Alex</option>
                                    <option value="MMA">Samuel</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="bukti_transfer" class="block text-sm font-medium text-gray-700">Bukti Transfer</label>
                                <input type="file" id="bukti_transfer" name="bukti_transfer" accept="image/*" class="mt-1 block w-full text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer focus:ring focus:ring-red-300 focus:outline-none">
                            </div>
                            <div class="flex justify-end space-x-2">
                                <button type="button" onclick="closeModal()" class="px-4 py-2 bg-gray-500 text-white rounded">Cancel</button>
                                <button type="submit" class="px-4 py-2 bg-primary text-white rounded">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
        </main>
    </div>
</body>
</html>

    </div>
</body>
</html>