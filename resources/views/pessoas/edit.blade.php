@extends('template.app')

@section('content')
<div class="col-md-12">
    <h3>Editar</h3>
</div>
<div class="container">
    <form class="col-md-12" action="{{ url('/pessoas/update') }} " method="POST">
        {{ csrf_field() }}
        <div class="form-group col-md-12">
            <input type="text" class="form-control" name="nome" placeholder="nome" value="{{ $pessoa->nome }}">
        </div>
        <input type="hidden" name="id" value="{{ $pessoa->id }}">
        <input type="submit" class="btn btn-primary float-right" value="Salvar">
    </form>
</div>
@endsection