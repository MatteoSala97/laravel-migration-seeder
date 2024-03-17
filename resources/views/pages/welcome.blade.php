@extends('layouts.app')

@section('title', "Trains | Home")

@section('main')

<main>
    <h1 class="text-center">
       Trains
    </h1>

   <div class="container">
        <div class="row">
            @foreach ($train as $trenino )

            <div class="card col-4 ">
                <div class="card-body">
                    <h4 class="card-title">Nome azienda:  {{$trenino['azienda']}}</h4>
                    <p class="card-text">Stazione di partenza: {{$trenino['stazione_partenza']}}</p>
                    <p class="card-text">Stazione di arrivo: {{$trenino['stazione_arrivo']}}</p>
                    <p class="card-text">Codice Treno: {{$trenino['codice-treno']}}</p>
                    <p class="card-text">Numero Carozze: {{$trenino['numero_carrozze']}}</p>
                    <p class="card-text">È in orario? {{$trenino['in_orario']}}</p>
                </div>
            </div>

            @endforeach
       </div>
   </div>

</main>

@endsection


{{-- $table->string('stazione_partenza');
            $table->string('stazione_arrivo');
            $table->time('orario_partenza');
            $table->time('orario_arrivo');
            $table->string('codice_treno');
            $table->integer('numero_carrozze');
            $table->boolean('in_orario')->default(true);
            $table->boolean('cancellato')->default(false); --}}
