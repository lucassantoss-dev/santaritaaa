<!doctype html>
<html lang="pt-Br">
  <head>
    <title>Relatório de clientes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <style>
        table {
            font-size: 12px;
        }
    </style>
</head>
  <body>
      <div class="container py-5">
          <div class="card mt-4">
              <div class="card-header">
                    <h2 class="card-title font-weight-bold">Relatório de clientes</h2>
              </div>
              <div class="card-body">
                    <table class="table table-bordered mt-5">
                        <thead>
                            <tr>
                                <th>Nome</th>
                                <th>Quadra</th>
                                <th>Numero</th>
                                <th>Endereço</th>
                                <th>Contato</th>
                                <th>Situação</th>
                            </tr>
                        </thead>

                        <tbody>
                            @forelse ($clientes as $cliente)
                                <tr>
                                    <td>{{ $cliente->nome }}</td>
                                    <td>{{ $cliente->quadra }}</td>
                                    <td>{{ $cliente->numero }}</td>
                                    <td>{{ $cliente->endereco }}</td>
                                    <td>{{ $cliente->contato }}</td>
                                    <td>{{ $cliente->situacao }}</td>
                                    {{-- <td>{{ \Carbon\Carbon::parse($user->created_at)->diffForHumans() }}</td> --}}
                                </tr>
                            @empty

                            @endforelse
                        </tbody>
                    </table>
              </div>
          </div>
      </div>
  </body>
</html>