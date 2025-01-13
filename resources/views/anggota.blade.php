    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        @vite('resources/css/app.css')
        @vite('resources/js/app.js')
        <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap" rel="stylesheet">
        <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


    </head>

    <body class="bg-[#F4F5FF]">
        <x-navbar>
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
                            <input type="text" placeholder="Search"
                                class="border border-gray-300 p-2 pl-10 rounded w-64 shadow-sm">
                            <!-- Search Icon -->
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-5 w-5 absolute top-1/2 left-3 transform -translate-y-1/2 text-gray-400"
                                fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M21 21l-4.35-4.35m1.41-6.25a7.25 7.25 0 11-14.5 0 7.25 7.25 0 0114.5 0z" />
                            </svg>
                        </div>
                    </div>
                    <button onclick="openModal()" class="py-2 px-4 bg-blackButton text-white rounded transition">
                        +<i class="fa-regular fa-user"></i>
                        Tambah Anggota
                    </button>
                    <!-- Tombol Hapus -->
                </div>

                <!-- Tabel -->
                <table class="w-full text-left border-collapse border border-gray-300">
                    <thead class="bg-gray-100">
                        <tr>
                            <th class="border px-4 py-2">No</th>
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
                        @foreach ($anggota as $index => $item)
                            <tr class="hover:bg-gray-50">
                                <td class="border px-4 py-2">{{ $index + 1 }}</td>
                                <td class="border px-4 py-2">{{ $item->name }}</td>
                                <td class="border px-4 py-2">{{ $item->phone }}</td>
                                <td class="border px-4 py-2">{{ $item->gender }}</td>
                                <td class="border px-4 py-2">{{ $item->beladiri }}</td>
                                <td class="border px-4 py-2">{{ $item->membership }}</td>
                                <td class="border px-4 py-2">{{ $item->coach ? $item->coach->nama : '' }}</td>
                                <td class="border px-4 py-2 flex gap-1">
                                    <!-- Button Edit -->
                                    <button onclick="editModal({{ json_encode($item) }})"
                                        class="text-blue-500 hover:underline">
                                        <i class="fa-regular fa-pen-to-square"></i>
                                    </button>

                                    <!-- Button Hapus -->
                                    <form method="POST" action="{{ route('anggota.destroy', $item->id) }}"
                                        onsubmit="return confirmDelete(event);">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="text-red-500 hover:underline"><i
                                                class="fa-solid fa-trash"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div id="modalForm"
                    class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden">
                    <div class="bg-white rounded-lg shadow-lg w-1/3">
                        <!-- Header Modal -->
                        <div class="px-4 py-2 bg-primary text-white flex justify-between items-center">
                            <h2 class="text-lg font-semibold">Tambah Anggota</h2>
                            <button onclick="closeModal()" class="text-white">&times;</button>
                        </div>
                        <!-- Form Modal -->
                        <form method="POST" action="{{ route('anggota.store') }}" class="p-4">
                            @csrf
                            @if ($errors->any())
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                                    <ul>
                                        @foreach ($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif
                            
                            @if(session('error'))
                                <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded mb-4">
                                    {{ session('error') }}
                                </div>
                            @endif
                            <div class="mb-4">
                                <label for="name" class="block text-sm font-medium text-gray-700">Nama</label>
                                <input type="text" id="name" name="name" required
                                       class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                            </div>
                            <div class="mb-4">
                                <label for="phone" class="block text-sm font-medium text-gray-700">No Telp</label>
                                <input type="text" id="phone" name="phone" required
                                    class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                            </div>
                            <div class="mb-4">
                                <label for="gender" class="block text-sm font-medium text-gray-700">Jenis
                                    Kelamin</label>
                                <select id="gender" name="gender" required
                                    class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                                    <option value="" disabled selected>Pilih jenis kelamin</option>
                                    <option value="Laki-Laki">Laki-Laki</option>
                                    <option value="Perempuan">Perempuan</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="beladiri" class="block text-sm font-medium text-gray-700">Beladiri</label>
                                <select id="beladiri" name="beladiri" required
                                    class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none"
                                    onchange="loadCoaches(this.value)">
                                    <option value="" disabled selected>Pilih Beladiri</option>
                                    @foreach ($kelas as $k)
                                        <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="membership"
                                    class="block text-sm font-medium text-gray-700">Membership</label>
                                <select id="membership" name="membership" required
                                    class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                                    <option value="" disabled selected>Pilih Tipe Membership</option>
                                    <option value="Regular">Regular</option>
                                    <option value="Elite">Elite</option>
                                    <option value="VIP">VIP</option>
                                </select>
                            </div>
                            <div class="mb-4">
                                <label for="coach" class="block text-sm font-medium text-gray-700">Coach</label>
                                <div class="mb-4">
                                    <select id="coach" name="coach" required
                                        class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                                        <option value="" disabled selected>Select a Coach</option>
                                    </select>
                                </div>
                            </div>
                            <div class="flex justify-end space-x-2">
                                <button type="button" onclick="closeModal()"
                                    class="px-4 py-2 bg-gray-500 text-white rounded">Cancel</button>
                                <button type="submit" class="px-4 py-2 bg-primary text-white rounded">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </section>
            </main>
        </div>

        <div id="editModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 flex justify-center items-center hidden">
            <div class="bg-white rounded-lg shadow-lg w-1/3">
                <!-- Header Modal -->
                <div class="px-4 py-2 bg-primary text-white flex justify-between items-center">
                    <h2 class="text-lg font-semibold">Edit Anggota</h2>
                    <button onclick="closeEditModal()" class="text-white">&times;</button>
                </div>
                <!-- Form Modal -->
                <form method="POST" id="editForm" class="p-4">
                    @csrf
                    @method('PUT') <!-- Tambahkan ini untuk override method -->
                    <input type="hidden" id="editId" name="id">
                    <div class="mb-4">
                        <label for="editName" class="block text-sm font-medium text-gray-700">Nama</label>
                        <input type="text" id="editName" name="name" required
                            class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label for="editPhone" class="block text-sm font-medium text-gray-700">No Telp</label>
                        <input type="number" id="editPhone" name="phone" required
                            class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                    </div>
                    <div class="mb-4">
                        <label for="editGender" class="block text-sm font-medium text-gray-700">Jenis Kelamin</label>
                        <select id="editGender" name="gender" required
                            class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                            <option value="Laki-Laki">Laki-Laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="editBeladiri" class="block text-sm font-medium text-gray-700">Beladiri</label>
                        <select id="editBeladiri" name="beladiri" required
                            class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none"
                            onchange="loadCoachesEdit(this.value)">
                            <option value="" disabled selected>Pilih Beladiri</option>
                            @foreach ($kelas as $k)
                                <option value="{{ $k->id }}">{{ $k->nama_kelas }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="editMembership" class="block text-sm font-medium text-gray-700">Membership</label>
                        <select id="editMembership" name="membership" required
                            class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                            <option value="Regular">Regular</option>
                            <option value="Elite">Elite</option>
                            <option value="VIP">VIP</option>
                        </select>
                    </div>
                    <div class="mb-4">
                        <label for="editCoach" class="block text-sm font-medium text-gray-700">Coach</label>
                        <select id="editCoach" name="coach" required
                            class="mt-1 block w-full px-3 py-2 border rounded-lg focus:ring focus:ring-red-300 focus:outline-none">
                            <option value="Abe">Abe</option>
                            <option value="Jonathan">Jonathan</option>
                            <option value="Alex">Alex</option>
                            <option value="Samuel">Samuel</option>
                        </select>
                    </div>
                    <div class="flex justify-end space-x-2">
                        <button type="button" onclick="closeEditModal()"
                            class="px-4 py-2 bg-gray-500 text-white rounded">Cancel</button>
                        <button type="submit" class="px-4 py-2 bg-primary text-white rounded">Update</button>
                    </div>
                </form>
            </div>
        </div>

        <script>
        document.querySelector('form[action="{{ route("anggota.store") }}"]').addEventListener('submit', function(e) {
            console.log('Form submitted');
            const formData = new FormData(this);
            for (let [key, value] of formData.entries()) {
                console.log(key + ': ' + value);
            }
        });
        </script>
        <script>
            function openModal() {
                // Reset form
                document.getElementById('name').value = '';
                document.getElementById('phone').value = '';
                document.getElementById('gender').selectedIndex = 0;
                document.getElementById('beladiri').selectedIndex = 0;
                document.getElementById('membership').selectedIndex = 0;
                document.getElementById('coach').innerHTML = ''; // Clear coach options

                // Show modal
                document.getElementById('modalForm').classList.remove('hidden');
            }

            function closeModal() {
                document.getElementById('modalForm').classList.add('hidden');
            }

            function confirmDelete(event) {
                if (!confirm('Apakah Anda yakin ingin menghapus data ini?')) {
                    event.preventDefault(); // Mencegah form dikirim jika pengguna memilih "Cancel"
                    return false;
                }
                return true;
            }

            function loadCoaches(kelasId) {
    if (kelasId) {
        const coachSelect = document.getElementById('coach');
        coachSelect.innerHTML = '<option value="" disabled>Loading...</option>';

        console.log('Fetching coaches for kelas ID:', kelasId);

        fetch(`/get-coaches/${kelasId}`)
            .then(response => response.json())
            .then(data => {
                console.log('Received coach data:', data);
                coachSelect.innerHTML = '';
                if (Array.isArray(data) && data.length > 0) {
                    data.forEach(coach => {
                        // Use the full coach ID as the value
                        const option = `<option value="${coach.id}">${coach.nama}</option>`;
                        console.log('Adding coach option:', option);
                        coachSelect.innerHTML += option;
                    });
                    coachSelect.selectedIndex = 0;
                    console.log('Final coach select HTML:', coachSelect.innerHTML);
                } else {
                    console.log('No coaches found for kelas:', kelasId);
                    coachSelect.innerHTML = '<option value="" disabled>No coaches available</option>';
                }
            })
            .catch(error => {
                console.error('Error loading coaches:', error);
                coachSelect.innerHTML = '<option value="" disabled>Error loading coaches</option>';
            });
    }
}



        </script>
        <script>


function editModal(item) {
    console.log('Edit modal data:', item);
    
    // Set form ID dan action
    const form = document.getElementById('editForm');
    form.action = `/anggota/${item.id}`; // Perhatikan path-nya berubah
    document.getElementById('editId').value = item.id;
    
    // Set basic fields
    document.getElementById('editName').value = item.name;
    document.getElementById('editPhone').value = item.phone;
    document.getElementById('editGender').value = item.gender;
    document.getElementById('editMembership').value = item.membership;

    // Handle beladiri selection
    const beladiriSelect = document.getElementById('editBeladiri');
    for (let option of beladiriSelect.options) {
        if (option.text === item.beladiri) { // Gunakan text bukan dataset.nama
            option.selected = true;
            loadCoachesEdit(option.value);
            break;
        }
    }

    // Store the coach ID for later selection
    window.selectedCoachId = item.coach_id;

    // Show modal
    document.getElementById('editModal').classList.remove('hidden');
}

function loadCoachesEdit(kelasId) {
    if (kelasId) {
        const coachSelect = document.getElementById('editCoach');
        coachSelect.innerHTML = '<option value="" disabled>Loading...</option>';

        fetch(`/get-coaches/${kelasId}`)
            .then(response => response.json())
            .then(data => {
                console.log('Received coach data:', data);
                coachSelect.innerHTML = '';
                if (Array.isArray(data) && data.length > 0) {
                    data.forEach(coach => {
                        const selected = coach.id === window.selectedCoachId ? 'selected' : '';
                        coachSelect.innerHTML += `<option value="${coach.id}" ${selected}>${coach.nama}</option>`;
                    });
                } else {
                    coachSelect.innerHTML = '<option value="" disabled>No coaches available</option>';
                }
            })
            .catch(error => {
                console.error('Error:', error);
                coachSelect.innerHTML = '<option value="" disabled>Error loading coaches</option>';
            });
    }
}
function closeEditModal() {
                document.getElementById('editModal').classList.add('hidden');
            }
            @if (session('success'))
                Swal.fire({
                    title: 'Selamat!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });
            @endif

            document.getElementById('editForm').addEventListener('submit', function(e) {
    console.log('Edit form submission started');
    const formData = new FormData(this);
    
    console.log('Form data being submitted:', {
        action: this.action,
        method: this.method
    });
    
    for (let [key, value] of formData.entries()) {
        console.log(`${key}: ${value}`);
    }
});



            document.querySelector('form[action="{{ route("anggota.store") }}"]').addEventListener('submit', function(e) {
    // Debug form submission
    console.log('Form submission started');
    
    const formData = new FormData(this);
    
    // Log all form data
    console.log('Form data being submitted:');
    for (let [key, value] of formData.entries()) {
        console.log(`${key}: ${value}`);
    }
    
    // Log form validity
    console.log('Form validity:', this.checkValidity());
    
    // Log selected values of dropdowns
    const beladiriSelect = document.getElementById('beladiri');
    const coachSelect = document.getElementById('coach');
    console.log('Selected beladiri:', {
        value: beladiriSelect.value,
        text: beladiriSelect.options[beladiriSelect.selectedIndex]?.text,
        index: beladiriSelect.selectedIndex
    });
    console.log('Selected coach:', {
        value: coachSelect.value,
        text: coachSelect.options[coachSelect.selectedIndex]?.text,
        index: coachSelect.selectedIndex
    });
});
        </script>
    </body>

    </html>
