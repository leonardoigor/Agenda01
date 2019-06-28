@extends('template.app')

@section('content')
<div class="col-md-12">
    <h3>Novo contato</h3>
</div>

<div class="container">
    <form class="col-md-12" action="{{ url('/pessoas/store') }} " method="POST">
        {{ csrf_field() }}
        <div class="form-group col-md-12">
            <input type="text" class="form-control" name="nome" placeholder="nome">
        </div>
        <div class="form-group col-md-2">
            <input type="text" placeholder="DDD" class="form-control" name="ddd">
        </div>
        <div class="form-group col-md-5">
            <input type="text" placeholder="Telefone" class="form-control" name="telefone">
        </div>

        <input type="submit" class="btn btn-primary float-right">
    </form>
</div>
@endsection