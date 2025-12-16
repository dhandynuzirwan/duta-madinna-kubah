<x-auth-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Portofolio
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg p-6 flex flex-col gap-4">
                <x-primary-button class="self-end" x-data x-on:click.prevent="$dispatch('open-modal', 'add-portfolio')">
                    Tambah Portofolio
                </x-primary-button>
                <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                    <table class="w-full text-sm text-left text-gray-500">
                        <thead class="text-xs text-gray-700 uppercase bg-gray-50">
                            <tr>
                                <th scope="col" class="px-6 py-3">
                                    Gambar
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Judul
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Deskripsi
                                </th>
                                <th scope="col" class="px-6 py-3">
                                    Aksi
                                </th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($portfolios as $portfolio)
                                <tr class="bg-white border-b border-gray-200 hover:bg-gray-50">
                                    <td class="p-4">
                                        <img src="{{ asset('storage/' . $portfolio->image_path) }}" style="max-width: 200px;">
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $portfolio->title }}
                                    </td>
                                    <td class="px-6 py-4 font-semibold text-gray-900">
                                        {{ $portfolio->description }}
                                    </td>
                                    <td class="px-6 py-4 flex flex-col">
                                        <p class="font-medium text-yellow-600 hover:underline cursor-pointer" x-data
                                            x-on:click.prevent="$dispatch('open-modal', 'edit-portfolio-{{ $portfolio->id }}')">
                                            Sunting</p>
                                        <p class="font-medium text-red-600 hover:underline cursor-pointer" x-data
                                            x-on:click.prevent="$dispatch('open-modal', 'delete-portfolio-{{ $portfolio->id }}')">
                                            Hapus</p>
                                    </td> 
                                    <x-modal name="edit-portfolio-{{ $portfolio->id }}">
                                        <form action="{{ route('portfolio.update', $portfolio) }}" method="POST"
                                            enctype="multipart/form-data" class="block w-full max-w-4xl">
                                            @csrf
                                            @method('PUT')

                                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                <div class="flex flex-col gap-3">
                                                    <h3 class="text-base font-semibold text-gray-900">
                                                        Sunting Portofolio
                                                    </h3>
                                                    <div>
                                                        <x-input-label for="title" value="Judul" />
                                                        <x-text-input id="title" name="title" placeholder="Judul"
                                                            class="w-full" :value="$portfolio->title" />
                                                    </div>
                                                    <div>
                                                        <x-input-label for="description" value="Description" />
                                                        <x-text-input id="description" name="description"
                                                            placeholder="Description" class="w-full"
                                                            :value="$portfolio->description" />
                                                    </div>
                                                    <div>
                                                        <x-input-label for="image" value="File Gambar" />
                                                        <img src="{{ asset("storage/$portfolio->image_path") }}"
                                                            style="max-width: 200px;">
                                                        <x-text-input id="image" name="image" type="file"
                                                            class="mt-1 file:border-0 file:rounded-sm file:mr-2 file:bg-gray-900 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-gray-100" />
                                                    </div>
                                                </div>
                                            </div>
                                            <div
                                                class="bg-gray-50 px-4 py-3 flex flex-col sm:flex sm:flex-row-reverse sm:px-6 gap-3">
                                                <x-primary-button class="justify-center">Sunting</x-primary-button>
                                                <x-light-button type="button" class="justify-center"
                                                    x-on:click="$dispatch('close')">Batal</x-light-button>
                                            </div>
                                        </form>
                                    </x-modal>
                                    <x-modal name="delete-portfolio-{{ $portfolio->id }}">
                                        <form action="{{ route('portfolio.destroy', $portfolio) }}" method="POST">
                                            @csrf
                                            @method('DELETE')

                                            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                <div class="flex flex-col gap-3">
                                                    <h3 class="text-base font-semibold text-gray-900">
                                                        Hapus Portofolio
                                                    </h3>
                                                    <p class="text-sm text-gray-500">Yakin ingin menghapus data?</p>
                                                </div>
                                            </div>

                                            <div class="bg-gray-50 px-4 py-3 sm:flex sm:flex-row-reverse sm:px-6 gap-3">
                                                <x-primary-button>Hapus</x-primary-button>
                                                <x-light-button type="button"
                                                    x-on:click="$dispatch('close')">Batal</x-light-button>
                                            </div>
                                        </form>
                                    </x-modal>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <x-modal name="add-portfolio">
        <form action="{{ route('portfolio.store') }}" method="POST" enctype="multipart/form-data"
            class="block w-full max-w-4xl">
            @csrf
            @method('POST')

            <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                <div class="flex flex-col gap-3">
                    <h3 class="text-base font-semibold text-gray-900" id="modal-title">Tambah Portofolio</h3>
                    <div>
                        <x-input-label for="title" value="Judul" />
                        <x-text-input id="title" name="title" placeholder="Judul" class="w-full" />
                    </div>
                    <div>
                        <x-input-label for="description" value="Deskripsi" />
                        <x-text-input id="description" name="description" placeholder="Deskripsi" class="w-full" />
                    </div>
                    <div>
                        <x-input-label for="image" value="File Gambar" />
                        <x-text-input id="image" name="image" type="file"
                            class="file:border-0 file:rounded-sm file:mr-2 file:bg-gray-900 file:px-4 file:py-2 file:text-sm file:font-semibold file:text-gray-100" />
                    </div>
                </div>
            </div>
            <div class="bg-gray-50 px-4 py-3 flex flex-col sm:flex sm:flex-row-reverse sm:px-6 gap-3">
                <x-primary-button class="justify-center">Tambah</x-primary-button>
                <x-light-button type="button" class="justify-center"
                    x-on:click="$dispatch('close')">Batal</x-light-button>
            </div>
        </form>
    </x-modal>
</x-auth-layout>
