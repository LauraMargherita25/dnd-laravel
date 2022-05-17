@extends('templates.base')
@section('css', './css/app.css')
@section('pageMain')
<div class="container">
        <div class="row m-auto">
            <div class="col-8 m-auto">
                <div class="card m-auto d-flex flex-column justify-center w-100 p-5 mt-5">
                    <div class="row">
                    <div class="col-12">
                    <h2 class="mb-3">{{ $monster->name }}</h2>
                    </div>
</div>
                    <div class="row">
                    <div class="col-6">
                        <div><b>Ignoranza:</b> {{ $monster->alignment }}</div>
                        <div><b>Armatura:</b> {{ $monster->armor_class }}</div>
                        <div><b>Punti colpi:</b> {{ $monster->hit_points }}</div>
                        <div><b>Taglia:</b> {{ $monster->size }}</div>
                        <div><b>Forza:</b> {{ $monster->strength }}</div>
                        <div><b>Destrezza:</b> {{ $monster->dexterity }}</div>
                        <div><b>Challenge:</b> {{ $monster->challenge_rating }}</div>
                        <div><b>Distanza colpo:</b> {{ $monster->hit_dice }}</div>
                        <div><b>Lingua:</b> {{ $monster->languages }}</div>
                    </div>
                    <div class="col-6">
                    <div><b>Costituzione:</b> {{ $monster->constitution }}</div>
                        <div><b>Intelligenza:</b> {{ $monster->intelligence }}</div>
                        <div><b>Sagezza:</b> {{ $monster->wisdom }}</div>
                        <div><b>Carisma:</b>{{ $monster->charisma }}</div>
                        <div><b>Vita:</b> {{ $monster->xp }}</div>
                    </div>
</div>
                </div>
            </div>
        </div>
        <a href="{{ url()->previous() }}">Back</a>
    </div>
@endsection
