@extends('layouts.layout')
@section('content')
    <h2 style="color:white">Partidas</h2>
    <div>
        @foreach ($nivels as $nivel)
            <div class="card" style="width: 500px; margin: 5px">
                <label for="">{{ $nivel->nivel }}</label>
            </div>
    </div>
    @endforeach
@endsection
