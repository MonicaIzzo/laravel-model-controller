@extends('layout.layout')

{{-- Setto il titolo della pagina --}}
@section('title', 'Home')

{{-- Setto il main della pagina (che cambiera in base alla pagina) --}}
@section('main_content')
    <section id='movies'>
        <div class='row row-cols-4'>
            @forelse ($movies as $movie)
                @include('includes.movie')
            @empty
                <h3>Non ci sono movie</h3>
            @endforelse
        </div>
    </section>
@endsection
