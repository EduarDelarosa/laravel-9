{{-- @extends('layouts.app')

@section('title', 'Inicio')

@section('meta-description', 'Inicio meta description')

@section('content')

<h1>Inicio</h1>

@endsection --}}

{{-- Utilizando componentes --}}

{{-- Primera opcion para utilizar componentes --}}
{{-- @component('components.layout')
    <h1>Inicio</h1>
@endcomponent --}}

{{-- Segunda opcion para utilizar componentes --}}
<x-layouts.app title="Inicio" meta-description="Inicio meta description">
    <h1 class="my-4 font-serif text-3xl text-center text-sky-600 dark:text-sky-500">
        Home
    </h1>

    @auth
        <div class="text-white">{{ Auth::user()->name }}</div>
    @endauth

</x-layouts.app>



