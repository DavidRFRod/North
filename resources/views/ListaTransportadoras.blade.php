
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<table class="table ">
    <thead class="thead-dark">
      <tr>
        <th scope="col">ID</th>
        <th scope="col">Companhia</th>
        <th scope="col">Contato</th>
        <th scope="col">Ações</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $trans)
      <tr>
        <th scope="row">{{$trans -> IDTransportadora }}</th>
        <td>{{$trans -> NomeConpanhia }}</td>
        <td>{{$trans -> Telefone }}</td>
        <td>
            <a class="btn btn-outline-primary btn-sm">Alterar</a>
            <a class="btn btn-outline-danger btn-sm">Excluir</a>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>


