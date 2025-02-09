<x-layouts.dashboard>

    <div class="w-4/6 my-5 mx-auto">
        <h3 class="text-center text-3xl my-4 font-sans text-gray-900">Halaman Dashboard</h3>
        <div class="grid grid-cols-1 text-center mb-4">
            <div class="border-2 border-gray-300 bg-gray-200 rounded-md p-5 shadow-lg">
                <div class="text-5xl text-gray-700">
                    {{ $number['total'] }}
                </div>
                <div class="text text-gray-500">
                    Total Users
                </div>
            </div>
        </div>
        <div class="grid grid-cols-1 md:grid-cols-3 gap-4 text-center">
            @foreach ($divisi as $item)
                <div class="border-2 border-gray-300 bg-gray-200 rounded-md p-5 shadow-lg">
                    <div class="text-5xl text-gray-700">
                        {{ $number[$item] }}
                    </div>
                    <div class="text text-gray-500">
                        {{ $item }}
                    </div>
                </div>
            @endforeach
            
            {{-- <div class="border-2 border-gray-300 bg-gray-200 rounded-md p-5 shadow-lg">
                <div class="text-5xl text-gray-700">
                    12
                </div>
                <div class="text text-gray-500">
                    Total Users
                </div>
            </div>
            <div class="border-2 border-gray-300 bg-gray-200 rounded-md p-5 shadow-lg">
                <div class="text-5xl text-gray-700">
                    12
                </div>
                <div class="text text-gray-500">
                    Total Users
                </div>
            </div> --}}
        </div>
    </div>
</x-layouts.dashboard>