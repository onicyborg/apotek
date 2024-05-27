@extends('layouts.main')

@section('content')
    <div class="px-5 space-y-10">
        <div class="flex justify-between py-5">
            <div class="flex gap-2 bg-gray-200 p-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="M2.25 12.75V12A2.25 2.25 0 014.5 9.75h15A2.25 2.25 0 0121.75 12v.75m-8.69-6.44l-2.12-2.12a1.5 1.5 0 00-1.061-.44H4.5A2.25 2.25 0 002.25 6v12a2.25 2.25 0 002.25 2.25h15A2.25 2.25 0 0021.75 18V9a2.25 2.25 0 00-2.25-2.25h-5.379a1.5 1.5 0 01-1.06-.44z" />
                </svg>

                <p class="text-lg">Data Obat</p>
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
                    <th>Nama Obat</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Type Obat</th>
                    <th>Stok</th>
                    <th>Gambar</th> <!-- Tambahkan kolom untuk gambar -->
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $no => $item)
                    <tr>
                        <td>{{ $no + 1 }}</td>
                        <td>{{ $item->nama_obat }}</td>
                        <td>Rp. {{ number_format($item->harga_beli) }}</td>
                        <td>Rp. {{ number_format($item->harga_jual) }}</td>
                        <td>{{ $item->type }}</td>
                        <td>{{ $item->quantity }}</td>
                        <td>
                            <img src="{{ asset('storage/images/' . $item->img) }}" alt="Gambar Obat" width="100">
                            <!-- Tampilkan gambar -->
                        </td>
                        <td class="flex gap-2">
                            <button class="p-2 bg-blue-600"
                                onclick="openEditModal('{{ $item->id }}', '{{ $item->nama_obat }}', '{{ $item->harga_jual }}', '{{ $item->harga_beli }}', '{{ $item->type }}', '{{ $item->deskripsi }}', '{{ $item->quantity }}')">
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
                    <th>Nama Obat</th>
                    <th>Harga Beli</th>
                    <th>Harga Jual</th>
                    <th>Type Obat</th>
                    <th>Stok</th>
                    <th>Gambar</th>
                    <th>Aksi</th>
                </tr>
            </tfoot>
        </table>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed top-0 left-0 w-full h-full bg-gray-900 bg-opacity-50 hidden">
        <div
            class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-lg w-96 md:w-120">
            <h2 class="text-lg font-bold mb-4">Tambah Data Obat</h2>
            <form action="/add-data-obat" method="POST" class="space-y-4" enctype="multipart/form-data">
                @csrf
                <div>
                    <label for="nama_obat" class="block text-sm font-medium text-gray-700">Nama Obat</label>
                    <input type="text" name="nama_obat" id="nama_obat"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    @error('nama_obat')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="harga_jual" class="block text-sm font-medium text-gray-700">Harga Jual</label>
                    <input type="number" name="harga_jual" id="harga_jual"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    @error('harga_jual')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="harga_beli" class="block text-sm font-medium text-gray-700">Harga Beli</label>
                    <input type="number" name="harga_beli" id="harga_beli"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    @error('harga_beli')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="type" class="block text-sm font-medium text-gray-700">Type</label>
                    <select name="type" id="type"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                        <option value="Tablet">Tablet</option>
                        <option value="Kapsul">Kapsul</option>
                        <option value="Sirup">Sirup</option>
                        <option value="Suspensi">Suspensi</option>
                        <option value="Pil">Pil</option>
                        <option value="Krim">Krim</option>
                        <option value="Salep">Salep</option>
                        <option value="Gel">Gel</option>
                        <option value="Oil">Oil</option>
                        <option value="Plester">Plester</option>
                        <option value="Inhaler">Inhaler</option>
                        <option value="Nebulizer">Nebulizer</option>
                        <option value="Injeksi">Injeksi</option>
                        <option value="Oftalmik">Oftalmik</option>
                        <option value="Otik">Otik</option>
                        <option value="Nasal">Nasal</option>
                    </select>
                    @error('type')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi" id="deskripsi" rows="3"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600"></textarea>
                    @error('deskripsi')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                    <input type="number" name="quantity" id="quantity"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    @error('quantity')
                        <p class="text-red-500 text-sm">{{ $message }}</p>
                    @enderror
                </div>
                <div>
                    <label for="image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" name="image" id="image" accept="image/*"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    @error('image')
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
        <div class="absolute top-1/2 left-1/2 transform -translate-x-1/2 -translate-y-1/2 bg-white p-6 rounded-lg">
            <h2 class="text-lg font-bold mb-4">Update Data Obat</h2>
            <form id="editForm" class="space-y-4" enctype="multipart/form-data" method="POST">
                @csrf
                @method('PUT')
                <input type="hidden" name="product_id" id="edit_product_id">
                <div>
                    <label for="edit_nama_obat" class="block text-sm font-medium text-gray-700">Nama Obat</label>
                    <input type="text" name="nama_obat" id="edit_nama_obat"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    <span class="text-red-500 text-sm" id="edit_nama_obat_error"></span>
                </div>
                <div>
                    <label for="edit_harga_jual" class="block text-sm font-medium text-gray-700">Harga Jual</label>
                    <input type="number" name="harga_jual" id="edit_harga_jual"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    <span class="text-red-500 text-sm" id="edit_harga_jual_error"></span>
                </div>
                <div>
                    <label for="edit_harga_beli" class="block text-sm font-medium text-gray-700">Harga Beli</label>
                    <input type="number" name="harga_beli" id="edit_harga_beli"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    <span class="text-red-500 text-sm" id="edit_harga_beli_error"></span>
                </div>
                <div>
                    <label for="edit_type" class="block text-sm font-medium text-gray-700">Type</label>
                    <select name="type" id="edit_type"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                        <option value="Tablet">Tablet</option>
                        <option value="Kapsul">Kapsul</option>
                        <option value="Sirup">Sirup</option>
                        <option value="Suspensi">Suspensi</option>
                        <option value="Pil">Pil</option>
                        <option value="Krim">Krim</option>
                        <option value="Salep">Salep</option>
                        <option value="Gel">Gel</option>
                        <option value="Oil">Oil</option>
                        <option value="Plester">Plester</option>
                        <option value="Inhaler">Inhaler</option>
                        <option value="Nebulizer">Nebulizer</option>
                        <option value="Injeksi">Injeksi</option>
                        <option value="Oftalmik">Oftalmik</option>
                        <option value="Otik">Otik</option>
                        <option value="Nasal">Nasal</option>
                    </select>
                    <span class="text-red-500 text-sm" id="edit_type_error"></span>
                </div>
                <div>
                    <label for="edit_deskripsi" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                    <textarea name="deskripsi" id="edit_deskripsi" rows="3"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600"></textarea>
                    <span class="text-red-500 text-sm" id="edit_deskripsi_error"></span>
                </div>
                <div>
                    <label for="edit_quantity" class="block text-sm font-medium text-gray-700">Quantity</label>
                    <input type="number" name="quantity" id="edit_quantity"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    <span class="text-red-500 text-sm" id="edit_quantity_error"></span>
                </div>
                <div>
                    <label for="edit_image" class="block text-sm font-medium text-gray-700">Image</label>
                    <input type="file" name="image" id="edit_image" accept="image/*"
                        class="w-full py-2 px-4 rounded-md bg-gray-100 focus:outline-none focus:bg-white focus:ring-2 focus:ring-cyan-600">
                    <span class="text-red-500 text-sm" id="edit_image_error"></span>
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

        function openEditModal(id, nama_obat, harga_jual, harga_beli, type, deskripsi, quantity) {
            // Mengisi nilai-nilai dalam modal dengan data yang sesuai
            document.getElementById('editForm').action = "/update-data-obat/" + id;
            document.getElementById('edit_nama_obat').value = nama_obat;
            document.getElementById('edit_harga_jual').value = harga_jual;
            document.getElementById('edit_harga_beli').value = harga_beli;
            document.getElementById('edit_type').value = type;
            document.getElementById('edit_deskripsi').value = deskripsi;
            document.getElementById('edit_quantity').value = quantity;

            // Menampilkan modal edit
            document.getElementById('editModal').classList.remove('hidden');
        }

        function closeEditModal() {
            // Menyembunyikan modal edit
            document.getElementById('editModal').classList.add('hidden');
        }

        function openDeleteModal(id) {
            // Mengisi nilai id dalam modal hapus
            document.getElementById('deleteForm').action = "/delete-data-obat/" + id;

            // Menampilkan modal hapus
            document.getElementById('deleteModal').classList.remove('hidden');
        }

        function closeDeleteModal() {
            // Menyembunyikan modal hapus
            document.getElementById('deleteModal').classList.add('hidden');
        }
    </script>
@endpush
