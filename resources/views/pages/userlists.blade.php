<x-layouts.dashboard>
    <div class="w-3/4 h-100 border-2 border-gray-200 mx-auto my-5 py-5 rounded-md shadow-lg">
        <h3 class="text-center text-3xl mb-4 font-sans text-gray-900">Halaman User Lists</h3>
            <table class="table-auto border-collapse border border-slate-400 mx-auto">
                <thead>
                  <tr>
                    <th class="border border-slate-400 p-2">No.</th>
                    <th class="border border-slate-400 p-2">Nama</th>
                    <th class="border border-slate-400 p-2">NIM</th>
                    <th class="border border-slate-400 p-2">Biro/Departemen</th>
                    <th class="border border-slate-400 p-2">Aksi</th>
                  </tr>
                </thead>
                <tbody>
                    @foreach ($data as $item)    
                        <tr>
                        <td class="border border-slate-400 p-2 text-center">{{ $loop->iteration + $data->firstItem() - 1 }}</td>
                        <td class="border border-slate-400 p-2">{{ $item->nama }}</td>
                        <td class="border border-slate-400 p-2 text-center">{{ $item->nim }}</td>
                        <td class="border border-slate-400 p-2 text-center">{{ $item->div }}</td>
                        <td class="border border-slate-400 p-2 text-center">
                            <form action="{{ route('delete', $item->id) }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="focus:outline-none text-white bg-red-700 hover:bg-red-800 focus:ring-4 focus:ring-red-300 font-medium rounded-lg text-sm px-3 py-2 me-2 mb-2 dark:bg-red-600 dark:hover:bg-red-700 dark:focus:ring-red-900">Delete</button>
                            </form>
                        </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            <div class="w-4/6 mx-auto my-5">
                {{ $data->links() }}
            </div>
    </div>
</x-layouts.dashboard>