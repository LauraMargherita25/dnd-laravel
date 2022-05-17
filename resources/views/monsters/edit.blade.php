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



        <form action="{{ route('monsters.update' , compact('monster')) }}" method="post">
            @method('PUT')
            @csrf
            <div class="form-floating">
                <textarea value="{{ old('index', $monster->index) }}" class="form-control" placeholder="index" id="floatingTextarea" name="index"></textarea>
                <label for="floatingTextarea">INDEX</label>
            </div>
            <div class="form-floating">
                <textarea value="{{ old('name',$monster->name) }}" class="form-control" placeholder="Nome" id="floatingTextarea" name="name"></textarea>
                <label for="floatingTextarea">ARMATURA</label>
            </div>
            <div class="form-outline">
                <input value="{{ old('type', $monster->type) }}" type="text" id="typeURL" name="type" placeholder="type" class="form-control" />
            </div>
            <div class="form-outline">
                <textarea class="form-control" placeholder="Descrizione" id="floatingTextarea2" name="alignment">value="{{ old('type', $monster->type) }}"</textarea>
            </div>
            <div class="form-floating">
                <input type="text" placeholder="Prezzo" name="size" id="size">
            </div>
            <div class="form-floating">
                <input type="text" placeholder="Series" name="hit_dice" id="hit_dice">
            </div>
            <div class="form-floating">
                <input type="text" placeholder="language" name="languages" id="languages">
            </div>
            <div class="form-floating">
                <input type="text" placeholder="Type" name="type" id="type">
            </div>
            <div class="form-floating">
                <input type="number" placeholder="armor_class" name="armor_class" id="armor_class">
            </div>
            <div class="form-floating">
                <input type="number" placeholder="hit_points" name="hit_points" id="hit_points">
            </div>
            <div class="form-floating">
                <input type="number" placeholder="strength" name="strength" id="strength">
            </div>
            <div class="form-floating">
                <input type="number" placeholder="dexterity" name="dexterity" id="dexterity">
            </div>
            <div class="form-floating">
                <input type="number" placeholder="constitution" name="constitution" id="constitution">
            </div>
            <div class="form-floating">
                <input type="number" placeholder="intelligence" name="intelligence" id="intelligence">
            </div>
            <div class="form-floating">
                <input type="number" placeholder="wisdom" name="wisdom" id="wisdom">
            </div>
            <div class="form-floating">
                <input type="number" placeholder="charisma" name="charisma" id="charisma">
            </div>
            <div class="form-floating">
                <input type="number" placeholder="xp" name="xp" id="xp">
            </div>
            <div class="form-floating">
                <input type="number" placeholder="Challenge Rating" name="challenge_rating" id="challenge_rating">
            </div>


            <button type="submit">Add monster</button>
        </form>
    </div>
@endsection
