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
        <x-slot name="home">Kelas</x-slot>
        Kelas
    </x-navbar>
    <x-sidebar></x-sidebar>
    <div class=" mt-5 xl:ml-80 xl:mt-10 xl:grid xl:grid-cols-2">
        {{-- card 3 --}}
        <div class="rounded-lg mt-4 ml-6 mr-6 xl:ml-0  w-auto h-auto bg-white xl:h-36 xl:rounded-2xl">
            <div class="flex py-4 pl-4">
                <img class="" src="{{ asset('img/kelas.png') }}" alt="Logo"/> 
                <div class="ml-4">
                    <p class="font-bold text-sm">Muay Thai</p>
                    <p class="text-xs text-secondary mt-2">Coach Abe</p>
                </div>
            </div>
            <hr class="border-gray-200">
            <div class="ml-4 my-4 pb-4 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svg>
                <p class="text-xs font-semibold">{{ $totalMuay }} Member</p>
            </div>
        </div>
        {{-- card 4 --}}
        <div class="rounded-lg mt-4 ml-6 mr-6 xl:ml-0  w-auto h-auto bg-white xl:h-36 xl:rounded-2xl">
            <div class="flex py-4 pl-4">
                <img class="" src="{{ asset('img/kelas.png') }}" alt="Logo"/> 
                <div class="ml-4">
                    <p class="font-bold text-sm">Kids Warrior</p>
                    <p class="text-xs text-secondary mt-2">Coach Alex</p>
                </div>
            </div>
            <hr class="border-gray-200">
            <div class="ml-4 my-4 pb-4 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svg>
                <p class="text-xs font-semibold"> {{ $totalKids }} Member</p>
            </div>
        </div>
        {{-- card 5 --}}
        <div class="rounded-lg mt-4 ml-6 mr-6 xl:ml-0  w-auto h-auto bg-white xl:h-36 xl:rounded-2xl">
            <div class="flex py-4 pl-4">
                <img class="" src="{{ asset('img/kelas.png') }}" alt="Logo"/> 
                <div class="ml-4">
                    <p class="font-bold text-sm">MMA</p>
                    <p class="text-xs text-secondary mt-2">Coach Jonathan</p>
                </div>
            </div>
            <hr class="border-gray-200">
            <div class="ml-4 my-4 pb-4 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svg>
                <p class="text-xs font-semibold">{{ $totalMMA }} Member</p>
            </div>
        </div> 
        {{-- card 6 --}}
        <div class="rounded-lg mt-4 ml-6 mr-6 xl:ml-0  w-auto h-auto bg-white xl:h-36 xl:rounded-2xl">
            <div class="flex py-4 pl-4">
                <img class="" src="{{ asset('img/kelas.png') }}" alt="Logo"/> 
                <div class="ml-4">
                    <p class="font-bold text-sm">VIP Class</p>
                    <p class="text-xs text-secondary mt-2">Coach Samuel</p>
                </div>
            </div>
            <hr class="border-gray-200">
            <div class="ml-4 my-4 pb-4 flex items-center gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="16" height="16" fill="currentColor"><path d="M4 22C4 17.5817 7.58172 14 12 14C16.4183 14 20 17.5817 20 22H4ZM12 13C8.685 13 6 10.315 6 7C6 3.685 8.685 1 12 1C15.315 1 18 3.685 18 7C18 10.315 15.315 13 12 13Z"></path></svg>
                <p class="text-xs font-semibold">{{ $totalVIPClass }} Member</p>
            </div>
        </div>                               
    </div>
</body>
</html>