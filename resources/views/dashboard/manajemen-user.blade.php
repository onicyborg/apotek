@extends('layouts.main')

@section('content')
    <div class="px-5 space-y-10">
        <div class="flex justify-between py-5">
            <div class="flex gap-2 bg-gray-200 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                    <path fill-rule="evenodd"
                        d="M7.5 6a4.5 4.5 0 119 0 4.5 4.5 0 01-9 0zM3.751 20.105a8.25 8.25 0 0116.498 0 .75.75 0 01-.437.695A18.683 18.683 0 0112 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 01-.437-.695z"
                        clip-rule="evenodd" />
                </svg>

                <p class="text-lg">Manajemen User</p>
            </div>
            <button id="openModal" class="flex gap-2 bg-blue-600 items-center px-2 text-white focus:outline-none">
                <div class="py-2">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 stroke-white">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                    </svg>
                </div>
                <p class="text-lg">Tambah</p>
            </button>
        </div>
        <table id="example" class="display" style="width:100%">
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Waktu Registrasi</th>
                    <th>Terakhir Diupdate</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $no => $item)
                    <tr>
                        <td>{{ $no + 1 }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->created_at }}</td>
                        <td>{{ $item->updated_at }}</td>
                        <td class="flex gap-2">
                            <button class="p-2 bg-blue-600"
                                onclick="openEditModal('{{ $item->id }}', '{{ $item->name }}', '{{ $item->email }}')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 stroke-white">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                </svg>
                            </button>
                            <button class="p-2 bg-red-600" onclick="openDeleteModal('{{ $item->id }}')">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                </svg>
                            </button>
                        </td>
                    </tr>
                @endforeach
            </tbody>
            <tfoot>
                <tr>
                    <th>No.</th>
                    <th>Nama User</th>
                    <th>Email</th>
                    <th>Waktu Registrasi</th>
                    <th>Terakhir Diupdate</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 hidden">
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-lg w-96 md:w-120">
            <h2 class="text-lg font-bold mb-4">Tambah User</h2>
            <form action="/add-user" method="POST" class="space-y-4">
                @csrf
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama User</label>
                    <input type="text" name="name" id="name"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="email"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <button type="submit"
                    class="block w-full bg-blue-600 text-white py-2 px-4 rounded-md transition duration-300 ease-in-out hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">Tambah</button>
            </form>
            <button id="closeModal"
                class="bg-gray-400 text-white px-4 py-2 rounded-lg focus:outline-none mt-4">Tutup</button>
        </div>
    </div>

    <div id="editModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 hidden">
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-lg w-96 md:w-120">
            <h2 class="text-lg font-bold mb-4">Update Data User</h2>
            <form id="editForm" class="space-y-4" method="POST">
                @csrf
                @method('PUT')
                <div>
                    <label for="name" class="block text-sm font-medium text-gray-700">Nama User</label>
                    <input type="text" name="name" id="edit_name"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    @error('name')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                    <input type="email" name="email" id="edit_email"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    @error('email')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
                    <input type="password" name="password" id="edit_password"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    @error('password')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                    <p class="text-gray-500 text-sm mt-1">* Kosongkan jika tidak ingin mengubah password</p>
                </div>
                <button type="submit"
                    class="block w-full bg-blue-600 text-white py-2 px-4 rounded-md transition duration-300 ease-in-out hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-blue-600">Update</button>
            </form>
            <button onclick="closeEditModal()"
                class="bg-gray-400 text-white px-4 py-2 rounded-lg focus:outline-none mt-4">Tutup</button>
        </div>
    </div>


    <div id="deleteModal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 hidden">
        <form method="post" id="deleteForm">
            @csrf
            @method('delete')
            <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-lg">
                <h2 class="text-lg font-bold mb-4">Konfirmasi Penghapusan Data</h2>
                <p class="text-gray-700 mb-4">Apakah Anda yakin ingin menghapus data ini?</p>
                <div class="flex justify-end">
                    <button onclick="closeDeleteModal()"
                        class="bg-gray-400 text-white px-4 py-2 rounded-lg mr-2 focus:outline-none">Batal</button>
                    <button type="submit"
                        class="bg-red-600 text-white px-4 py-2 rounded-lg focus:outline-none">Hapus</button>
                </div>
            </div>
        </form>
    </div>
@endsection

@push('scripts')
    <script>
        const openModalButton = document.getElementById('openModal');
        const closeModalButton = document.getElementById('closeModal');
        const modal = document.getElementById('modal');

        openModalButton.addEventListener('click', function() {
            modal.classList.remove('hidden');
        });

        closeModalButton.addEventListener('click', function() {
            modal.classList.add('hidden');
        });

        function openEditModal(id, name, email, password) {
            // Mengisi nilai-nilai dalam modal dengan data yang sesuai
            document.getElementById('editForm').action = "/update-user/" + id;
            document.getElementById('edit_name').value = name;
            document.getElementById('edit_email').value = email;

            // Menampilkan modal edit
            document.getElementById('editModal').classList.remove('hidden');
        }

        function closeEditModal() {
            // Menyembunyikan modal edit
            document.getElementById('editModal').classList.add('hidden');
        }

        function openDeleteModal(id) {
            // Mengisi nilai id dalam modal hapus
            document.getElementById('deleteForm').action = "/delete-user/" + id;

            // Menampilkan modal hapus
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeDeleteModal() {
            // Menyembunyikan modal hapus
            document.getElementById('deleteModal').classList.add('hidden');
        }
    </script>
@endpush
