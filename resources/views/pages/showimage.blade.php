<x-layouts.dashboard>
    @foreach ($data as $value)
        <img src="{{ 'storage/'.$value->path }}" alt="haidar">
    @endforeach
</x-layouts.dashboard>