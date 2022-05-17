@extends('templates.base')
@section('css', './css/app.css')
@section('pageMain')
    <div class="container">
        <h1>Add a Monster</h1>
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif



        <form action="{{ route('monsters.store') }}" method="post">
            @csrf
            <div class="form-floating">
                <textarea value="{{ old('index') }}" class="form-control" placeholder="index" id="floatingTextarea" name="index"></textarea>
                <label for="floatingTextarea">INDEX</label>
            </div>
            <div class="form-floating">
                <textarea value="{{ old('name') }}" class="form-control" placeholder="Nome" id="floatingTextarea" name="name"></textarea>
                <label for="floatingTextarea">ARMATURA</label>
            </div>
            <div class="form-outline">
                <input value="{{ old('type') }}" type="text" id="typeURL" name="type" placeholder="type" class="form-control" />
            </div>
            <div class="form-outline">
                <textarea value="{{ old('alignment') }}" class="form-control" placeholder="Descrizione" id="floatingTextarea2" name="alignment"></textarea>
            </div>
            <div class="form-floating">
                <input value="{{ old('size') }}" type="text" placeholder="size" name="size" id="size">
            </div>
            <div class="form-floating">
                <input value="{{ old('hit_dice') }}" type="text" placeholder="Series" name="hit_dice" id="hit_dice">
            </div>
            <div class="form-floating">
                <input value="{{ old('languages') }}" type="text" placeholder="language" name="languages" id="languages">
            </div>
            <div class="form-floating">
                <input value="{{ old('type') }}" type="text" placeholder="Type" name="type" id="type">
            </div>
            <div class="form-floating">
                <input value="{{ old('armor_class') }}" type="number" placeholder="armor_class" name="armor_class" id="armor_class">
            </div>
            <div class="form-floating">
                <input value="{{ old('hit_points') }}" type="number" placeholder="hit_points" name="hit_points" id="hit_points">
            </div>  
            <div class="form-floating">
                <input value="{{ old('strenght') }}" type="number" placeholder="strength" name="strength" id="strength">
            </div>
            <div class="form-floating">
                <input value="{{ old('dexterity') }}" type="number" placeholder="dexterity" name="dexterity" id="dexterity">
            </div>
            <div class="form-floating">
                <input value="{{ old('constitution') }}" type="number" placeholder="constitution" name="constitution" id="constitution">
            </div>
            <div class="form-floating">
                <input  value="{{ old('intelligence') }}" type="number" placeholder="intelligence" name="intelligence" id="intelligence">
            </div>
            <div class="form-floating">
                <input value="{{ old('wisdom') }}" type="number" placeholder="wisdom" name="wisdom" id="wisdom">
            </div>
            <div class="form-floating">
                <input value="{{ old('charisma') }}" type="number" placeholder="charisma" name="charisma" id="charisma">
            </div>
            <div class="form-floating">
                <input value="{{ old('xp') }}" type="number" placeholder="xp" name="xp" id="xp">
            </div>
            <div class="form-floating">
                <input value="{{ old('challenge_rating') }}"  type="number" placeholder="Challenge Rating" name="challenge_rating" id="challenge_rating">
            </div>


            <button type="submit">Add monster</button>
        </form>
    </div>
@endsection
