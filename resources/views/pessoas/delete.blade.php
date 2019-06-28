@extends('template.app')

@section('content')
<div class="col-md-6">
    <div class="col-md-12">
        <div class="card shadow-lg anima">
            <h3>Deseja Realmente excluir esse contato?</h3>
        </div>
    </div>
</div>
<div class="col-md-3">
    <div class="card-body">
        <h1 class="card-title">{{$pessoas->nome}} </h1>
        @foreach ($pessoas->telefone as $item)
        <p class="card-text"> {{$item->telefone}} </p>
        @endforeach

    </div>
</div>
<style>
    .anima {
        animation: delete 2s ease-out
    }

    .h2 {

        animation: h2 5s ease-out
    }

    @keyframes delete {
        from {
            transform: rotate(360deg)
        }

        to {
            transform: rotate(0deg)
        }
    }

    @keyframes h2 {
        from {
            opacity: 0;
        }

        to {
            opacity: 1;
        }
    }
</style>
@endsection