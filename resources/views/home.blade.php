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
        <x-slot name="home">Home</x-slot>
        Home
    </x-navbar>
    <x-sidebar></x-sidebar>
    <div class="xl:ml-80 mt-4 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-2 gap-4 px-8 pt-6">
        <!-- Total Member -->
        <div class="bg-white shadow-md rounded-lg p-6 flex items-center justify-between">
            <div class="bg-blackButton size-12 rounded-md flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                    <path strokeLinecap="round" strokeLinejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                </svg>
            </div>
            <div>
                <div class="text-sm text-black">Total Member</div>
                <div class="text-2xl text-right font-bold text-black">458</div>
            </div>
        </div>
        <!-- Total Kelas -->
        <div class="bg-white shadow-md rounded-lg p-6 flex items-center justify-between">
            <div class="bg-blackButton size-12 rounded-md flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 3.75V16.5L12 14.25 7.5 16.5V3.75m9 0H18A2.25 2.25 0 0 1 20.25 6v12A2.25 2.25 0 0 1 18 20.25H6A2.25 2.25 0 0 1 3.75 18V6A2.25 2.25 0 0 1 6 3.75h1.5m9 0h-9" />
                </svg>

            </div>
            <div>
                <div class="text-sm text-black">Total Kelas</div>
                <div class="text-2xl text-right font-bold text-black">12</div>
            </div>
        </div>
        <!-- Total Sabuk Hitam -->
        <div class="bg-white shadow-md rounded-lg p-6 flex items-center justify-between">
            <div class="bg-blackButton size-12 rounded-md flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                </svg>
            </div>
            <div>
                <div class="text-sm text-black">Total Sabuk Hitam</div>
                <div class="text-2xl text-right font-bold text-black">37</div>
            </div>
        </div>
        <!-- Total Coach -->
        <div class="bg-white shadow-md rounded-lg p-6 flex items-center justify-between">
            <div class="bg-blackButton size-12 rounded-md flex items-center justify-center">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="white" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>

            </div>
            <div>
                <div class="text-sm text-black">Total Coach</div>
                <div class="text-2xl text-right font-bold text-black">5</div>
            </div>
        </div>
    </div>
    </div>
</body>

</html>