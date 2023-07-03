@extends('navbars/navbarum')
@section('navbarwelcome')
    <!--cards -->
    <div class='container'>
        <div class='row justify-content-center'>
            @foreach ($lutadores as $lutador)
                <div class="card" style="width: 20rem;">
                    <img src='{{ asset("img/lutadores/{$lutador->arquivo}") }}' class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $lutador->apelido }}</h5>
                        <p class="card-text">{{ $lutador->descricao }}</p>

                        <a href="apaga/{{ $lutador->id }}"> <button type="button"
                                class="btn btn-danger">Excluir</button></a>
                        <a href="edita/{{$lutador->id}}"> <button type="button" class="btn btn-success">Editar</button>
                        </a>

                    </div>
                </div>
            @endforeach

        </div>

    </div>
    {!! $lutadores->links() !!}







    <!-- Bootstrap JavaScript Libraries -->
@endsection
