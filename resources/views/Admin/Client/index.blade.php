@extends('Admin/Layouts/principal')

@section('main-menu')

<section>

    <div class="d-flex flex-row bd-highlight justify-content-end mb-2">
        <div>
            <button type="button" class="btn btn-success rounded-pill" onclick="window.location='{{route('clients.create')}}'">Adicionar</button>
        </div>
    </div>

    <div class="d-flex flex-row bd-highlight">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Motorista</th>
                <th scope="col">Placa</th>
                <th scope="col">CPF</th>
                <th scope="col">Tipo de veiculo</th>
                <th scope="col">Ações</th>
              </tr>
            </thead>
            <tbody>
                @forelse ($clients as $client)
              <tr>
                <td>{{$client->id}}</td>
                <td>{{$client->name}}</td>
                <td>{{$client->board}}</td>
                <td>{{$client->cpf}}</td>
                <td>{{$client->type_vehicle}}</td>
                <td>
                    {{-- Editar --}}
                    <a class="text-decoration-none p-2" href="{{route('clients.edit',$client->id)}}">
                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-square" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                            <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456l-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
                            <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
                          </svg>
                    </a>

                    {{-- Excluir --}}
                    <form style="display: inline;" method="POST" action="{{route('clients.destroy', $client->id)}}">

                        @csrf
                        @method('DELETE')

                        <button type="submit">
                            <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-trash" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
                                <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4L4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
                              </svg>
                        </button>
                    </form>
                </td>
              </tr>
              @empty
                <td>Sem veiculos cadastrados</td>
                @endforelse
            </tbody>
          </table>
    </div>

</section>

@endsection
