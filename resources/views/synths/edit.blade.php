<x-app-layout>
    @if ($errors->any())
        <div style="color:red;">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @if (session('success'))
        <div style="color:green;">{{ session('success') }}</div>
    @endif

    <h1>Edit Synth</h1>

    <form action="{{ route('synths.update', $synth) }}" method="POST">
        @csrf
        @method('PUT')

        <label>Name</label>
        <input type="text" name="name" value="{{ $synth->name }}">

        <label>Description</label>
        <textarea name="description">{{ $synth->description }}</textarea>

        <label>Price (€)</label>
        <input type="number" step="0.01" name="price" value="{{ $synth->price }}">

        <label>Brand</label>
        <input type="text" name="brand" value="{{ $synth->brand }}">

        <button type="submit">Update</button>
    </form>
</x-app-layout>

<a href="{{ route('synths.index') }}">Back to list</a>
