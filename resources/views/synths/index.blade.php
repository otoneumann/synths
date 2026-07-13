<x-app-layout>
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
