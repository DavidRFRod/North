@extends('transportadora.layout')

@section('conteudo')
<br><br><br>
<div class="container">
    <div class="col-lg-12 margin-tb">
        <div class="float-right">
        <a class="btn btn-success" href="{{route ('cadastrar.transportadora')}}">Cadastrar</a>
        </div>
    <div class="pull-left">
        <h2>Lista de Transportadoras</h2>
    </div>
</div>

@if($massage = Session::get('success'))
    <div class="alert alert-heading alert-success" role="alert">
        <h4>{{$massage}}</h4>
    </div>
@endif

<table class="table ">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Companhia</th>
        <th scope="col">Contato</th>
        <th scope="col" width="150px">Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $trans)
      <tr>
        <th scope="row">{{$trans -> IDTransportadora }}</th>
        <td>{{$trans -> NomeConpanhia }}</td>
        <td>{{$trans -> Telefone }}</td>
        <td>
        <a class="btn btn-outline-primary btn-sm" href="{{ URL::to('alterar/transportadora/'.$trans->IDTransportadora)}}">Alterar</a>
        <a class="btn btn-outline-danger btn-sm" href="{{URL::to('delete/transportadora/'.$trans->IDTransportadora)}}" onClick="return confirm ('Você tem certeza que quer exluir esse registro?')">Excluir</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

@endsection
