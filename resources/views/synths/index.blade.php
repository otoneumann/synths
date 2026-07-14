<x-app-layout>
    @if (session('success'))
        <div style="color:green;">{{ session('success') }}</div>
    @endif

    <h1>Synths</h1>

    <a href="{{ route('synths.create') }}">Add Synth</a>

    <ul>
        @foreach ($synths as $synth)
            <li>
                <a href="{{ route('synths.show', $synth) }}">
                    {{ $synth->name }} — €{{ $synth->price }}
                </a>
            </li>
        @endforeach
    </ul>
</x-app-layout>

<a href="{{ route('synths.index') }}">Back to list</a>
