@extends('template.app')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($pessoas as $item)
        <div class="card m-1">
            <div class="card-header" style="background: rgba(1,1,255,.2);max-height: 52px;">
                <h5 class="card-title d-flex justify-content-between
                ">{{ $item->nome }}
                    <div>
                        <a href="{{ url("/pessoas/$item->id/editar") }}" class="btn pr-0" title="editar">
                            <i class="fas fa-pencil-alt "></i>
                        </a>
                        <a href="{{ url("/pessoas/$item->id/excluir") }}" class="btn pr-0" title="excluir">
                            <i class="fas fa-trash-alt"></i>
                        </a>
                    </div>
                </h5>
            </div>
            <div class="card-body" style="box-shadow: inset 0px -3px 3px 0px;">
                @foreach ($item->telefone as $item2)
                <p class="card-text">
                    <p>
                        <strong>Telefone:</strong>
                        ({{$item2->ddd}})
                        {{$item2->telefone}}
                    </p>
                </p>
                @endforeach
            </div>
        </div>
        @endforeach
    </div>
</div>
@endsection