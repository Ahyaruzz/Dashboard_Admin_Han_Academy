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
    <x-navbar>
        <x-slot name="home">Pencatatan</x-slot>
        Pencatatan
    </x-navbar>
    <x-sidebar></x-sidebar>
    <div class="xl:ml-80 mt-4">
        <main class="flex-1 p-10">
            <form class="bg-white p-8 rounded-lg shadow-md space-y-6 border border-black">
              <div>
                <label class="block gap-2 text-sm font-semibold text-gray-700">Nama Anggota</label>
                <input type="text" placeholder="Masukkan nama lengkap..." class=" mt-1 w-full h-10 px-3 border border-gray-400 rounded-md shadow-sm text-base-space-2 focus:border-indigo-500 focus:ring-indigo-500">
              </div>
          
              <div>
                <label class="block text-sm font-semibold text-gray-700">Jenis Kelamin</label>
                <select class="mt-1 w-full h-10 border border-gray-400 rounded-md shadow-sm text-base focus:border-indigo-500 focus:ring-indigo-500">
                  <option>Pilih jenis kelamin...</option>
                  <option>Laki-laki</option>
                  <option>Perempuan</option>
                </select>
              </div>
          
              <div>
                <label class="block text-sm font-semibold text-gray-700">No HP</label>
                <input type="text"  placeholder="Masukkan No.Hp..."  class="mt-1 w-full h-10 px-2 border border-gray-400 rounded-md shadow-sm text-base focus:border-indigo-500 focus:ring-indigo-500">
              </div>
          
              <div>
                <label class="block text-sm font-semibold text-gray-700">Jenis Beladiri</label>
                <select class="mt-1 w-full h-10 border border-gray-400 rounded-md shadow-sm text-base focus:border-indigo-500 focus:ring-indigo-500">
                  <option>Pilih jenis beladiri....</option>
                  <option>Brazilian Jiujitsu</option>
                  <option>MMA</option>
                  <option>Muay Thai</option>
                  <option>Kick Boxing</option>
                  <option>Kids Warrior</option>
                  <option>Private Class</option>
                </select>
              </div>
          
              <div>
                <label class="block text-sm font-semibold text-gray-700">Sabuk</label>
                <select class="mt-1 w-full h-10 border border-gray-400 rounded-md shadow-sm text-base focus:border-indigo-500 focus:ring-indigo-500">
                  <option>Pilih sabuk...</option>
                  <option>Putih</option>
                  <option>Kuning</option>
                  <option>Hijau</option>
                  <option>Biru</option>
                  <option>Hitam</option>
                </select>
              </div>
          
              <div>
                <label class="block text-sm font-semibold text-gray-700">Membership</label>
                <select class="mt-1 w-full h-10 border border-gray-400 rounded-md shadow-sm text-base focus:border-indigo-500 focus:ring-indigo-500">
                  <option class="text-grey-800">Pilih membership...</option>
                  <option>Regular</option>
                  <option>VIP</option>
                  <option>Kids Warrior</option>
                </select>
              </div>
          
              <div>
                <label class="block text-sm font-medium text-gray-700">Coach</label>
                <select class="mt-1 w-full h-10 border border-gray-400 rounded-md shadow-sm text-base focus:border-indigo-500 focus:ring-indigo-500">
                  <option>Pilih coach</option>
                  <option>Jhon</option>
                  <option>Sbleng</option>
                  <option>Pragos</option>
                  <option>Maikel</option>
                </select>
              </div>
              <div class="justify-items-center">
                <button type="submit" class=" justify-center bg-red-500 hover:bg-red-600 text-white py-2 px-4 rounded-md">
                    Simpan
                </button>
              </div>
            </form>
          </main>
    </div>
</body>
</html>