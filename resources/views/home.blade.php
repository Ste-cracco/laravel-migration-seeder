@extends('layout.app')

@section('headText', 'Homepage Trains')

@section('content')
    <h1>trains</h1>

    @forelse ($trains as $train)
    <div class="container_card">
        <h3> Nome azienda: {{ $train->azienda }} </h3>
        <p> Stazione di partenza:  {{ $train->stazione_di_partenza }} </p>
        <p>  Stazione di arrivo: {{ $train->stazione_di_arrivo }} </p>
        <span>  Orario di partenza: {{ $train->orario_di_partenza }}, Orario di arrivo: {{ $train->orario_di_arrivo }} </span>
        <p> Codice Treno:  {{ $train->codice_treno }} </p>
        <p> Numero Carrozze:  {{ $train->numero_carrozze}} </p>
        <p> In orario: {{ $train->in_orario}} </p>
        <p> Cancellato: {{ $train->cancellato}} </p>
        <hr>
    </div>

    @empty
        
    @endforelse

@endsection