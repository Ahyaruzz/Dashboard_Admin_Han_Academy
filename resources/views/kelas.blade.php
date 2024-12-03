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
    <div class="ml-80 mt-4">
        <p>adira</p>
    </div>
</body>
</html>