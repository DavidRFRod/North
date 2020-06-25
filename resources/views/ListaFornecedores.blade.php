@section('table')
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<table class="table ">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Companhia</th>
        <th scope="col">Contato</th>
        <th scope="col">Status</th>
        <th scope="col">Endereço</th>
        <th scope="col">Cidade</th>
        <th scope="col">Região</th>
        <th scope="col">CEP</th>
        <th scope="col">Pais</th>
        <th scope="col">Telefone</th>
        <th scope="col">Fax</th>
        <th scope="col">Site</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        @foreach ($fornecedor as $for)
        <th scope="row">{{$for -> NomeCompanhia }}</th>
        <td>{{$for -> NomeContato }}</td>
        <td>{{$for -> TItuloContato }}</td>
        <td>{{$for -> Endereco }}</td>
        <td>{{$for -> Cidade }}</td>
        <td>{{$for -> Cidade }}</td>
        <td>{{$for -> Regiao }}</td>
        <td>{{$for -> cep }}</td>
        <td>{{$for -> Pais }}</td>
        <td>{{$for -> Telefone }}</td>
        <td>{{$for -> Fax }}</td>
        <td>{{$for -> Website }}</td>
        <td>
            <a class="btn btn-outline-primary btn-sm">Alterar</a>
            <a class="btn btn-outline-danger btn-sm">Excluir</a>
        </td>
        @endforeach
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>
            <a class="btn btn-outline-primary btn-sm">Alterar</a>
            <a class="btn btn-outline-danger btn-sm">Excluir</a>
        </td>
      </tr>
      <tr>
        <th scope="row">1</th>
        <td>Mark</td>
        <td>Otto</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>@mdo</td>
        <td>
            <a class="btn btn-outline-primary btn-sm">Alterar</a>
            <a class="btn btn-outline-danger btn-sm">Excluir</a>
        </td>
      </tr>

    </tbody>
  </table>

@endsection
