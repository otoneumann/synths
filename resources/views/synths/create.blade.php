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

    <h1>Add Synth</h1>

    <form action="{{ route('synths.store') }}" method="POST">
        @csrf

        <label>Name</label>
        <input type="text" name="name">

        <label>Description</label>
        <textarea name="description"></textarea>

        <label>Price (€)</label>
        <input type="number" step="0.01" name="price">

        <label>Brand</label>
        <input type="text" name="brand">

        <button type="submit">Save</button>
    </form>
</x-app-layout>

<a href="{{ route('synths.index') }}">Back to list</a>
