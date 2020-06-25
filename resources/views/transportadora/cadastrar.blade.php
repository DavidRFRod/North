@extends('transportadora.layout')

@section('conteudo')
<br><br><br>
<div class="container">
    <div class="col-lg-12 margin-tb">
        <div class="float-right">
        <a class="btn btn-primary" href="{{route ('transportadora.index')}}">Voltar</a>
        </div>
    <div class="pull-left">
        <h2>Cadastrar Transportadora</h2>
    </div>
</div>
<hr>
<br><br>
<form action="{{route('transportadora.registrar')}}" method="POST">
    @csrf

     <div class="row">
         <div class="col-xs-3 col-sm-3 col-md-3">
            <div class="form-group">
                <strong>ID:</strong>
                <input type="text" name="id" class="form-control" placeholder="Numero sequencial da empresa">
            </div>
         </div>
         <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Transportadora:</strong>
                <input type="text" name="nome" class="form-control" placeholder="Nome da Trasportadora">
            </div>
         </div>
         <div class="col-xs-4 col-sm-4 col-md-4">
            <div class="form-group">
                <strong>Telefone:</strong>
                <input type="text" name="telefone" class="form-control" placeholder="Telefone">
            </div>
         </div>
         <div class="col-xs-6 col-sm-6 col-md-6">
           <button type="submit" class="btn btn-primary">Cadastrar</button>
         </div>
     </div>
</form>


</div>


@endsection
