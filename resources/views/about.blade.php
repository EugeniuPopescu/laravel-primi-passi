@extends("layouts.app")

@section("title","about-us")

@section("content")
<div class="">
    <h1>{{ $titolo }}</h1>
</div>

<!-- prendo i dati che ho dato in pasto in web.php -->
<div>
    <h2>{{ $descrizione }}</h2>
</div>

<div>
    <h3>Studenti</h3>
    <ul>
        @foreach ($students as $student)
        <li>{{ $student }}</li>
        @endforeach
    </ul>
</div>

<div>
    <h3>Docenti</h3>
    @if (count($teachers) > 0)
    <ul>
        @foreach ($teachers as $teacher)
        <li>{{ $teacher }}</li>
        @endforeach
    </ul>
    @else
    <p>Non ci sono ancora Docenti</p>
    @endif
</div>

<div>
    <h3>Docenti</h3>
    <ul>
        @forelse ($teachers as $teacher)
        <li>{{ $teacher }}</li>
        @empty
        <li>Non ci sono ancora Docenti</li>
        @endforelse
    </ul>
</div>
@endsection