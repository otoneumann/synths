<x-app-layout>
    @if (session('success'))
        <div style="color:green;">{{ session('success') }}</div>
    @endif

    <h1>{{ $synth->name }}</h1>

    <p>{{ $synth->description }}</p>
    <p>Price: €{{ $synth->price }}</p>
    <p>Brand: {{ $synth->brand }}</p>

    <a href="{{ route('synths.edit', $synth) }}">Edit</a>

    <form action="{{ route('synths.destroy', $synth) }}" method="POST" style="margin-top:20px;">
        @csrf
        @method('DELETE')
        <button type="submit">Delete</button>
    </form>
</x-app-layout>

<a href="{{ route('synths.index') }}">Back to list</a>
