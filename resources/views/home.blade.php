@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="my-5">Treni in partenza 25/05/2023</h1>
        <div class="d-flex gap-5">
            @foreach ($trains as $train)
                <div class="card border-info mb-3" style="max-width: 20rem;">
                    <div class="card-header">
                        <h3> Treno: {{ $train->Azienda}}</h3>
                    </div>
                    <div class="card-body">
                        <h4> Codice treno: {{ $train->Codice_treno}}</h4>
                        <h4> Partenza: {{ $train->Stazione_di_partenza}}</h4>
                        <h4> Arrivo: {{ $train->Stazione_di_arrivo}}</h4>
                        <h5> Orario di partenza: {{ $train->Orario_di_partenza}}</h5>
                        <h5> Orario di arrivo: {{ $train->Orario_di_arrivo}}</h5>
                        <h5>Data: {{ $train->Data_del_viaggio}}</h5>
                    </div>
                </div>  
            @endforeach
        </div>
    </div>
@endsection