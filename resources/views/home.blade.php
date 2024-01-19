@extends("layouts.app")

@section("title","home")

@section("content")
<div class="">
    <h1>Hello Laravel's World</h1>
    <h2>{{ $msg }}</h2>
    <h3>Classe #{{ $classe }}</h3>
</div>

<div class="flex justify-center mt-16 px-0 sm:items-center sm:justify-between">
    <div class="ml-4 text-center text-sm text-gray-500 dark:text-gray-400 sm:text-right sm:ml-0">
        Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
    </div>
</div>
@endsection