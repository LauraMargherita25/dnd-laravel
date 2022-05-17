
@extends('templates.base')
@section('pageTitle')
    Monster
@endsection

@section('pageMain')

    <div class="container">
            <div class="row">
                @foreach ($monsters as $monster)
                    <div class="card col-5 m-5 py-4 text-center">   
                        <div class="witdh-100 text-center"> 
                            <div class="card-title text-center">
                                    <h3>Nome: {{ $monster->name }}</h3>                                
                                    <p>Tipo: {{ $monster->type }}</p>
                            </div>
                            <div class="d-flex flex-column">
                                <div>
                                    <a class="btn btn-outline-primary mb-1" href="{{ route('monsters.show', $monster) }}">Visualizza Mostro</a>
                                </div>
                                <div>
                                    <a class="btn  btn-primary mb-1" href="{{ route('monsters.edit', $monster) }}">Modifica Mostro</a>
                                </div>
                                <div>
                                    <form action='{{ route("monsters.destroy", $monster) }}' method="POST">
                                        @method('DELETE')
                                        @csrf
                                        <button  data-id="{{ $monster->id }}"
                                        class="btn btn-danger mb-1">Elimina mostro
                                    </button>
                                    </form>
                                </div>
                            </div>
                        </div>    
                    </div>
                @endforeach

            </div>
    </div>
        <div class="text-center d-flex justify-content-center">
            {{ $monsters->links() }}
        </div>
@endsection
                