@extends('Admin/Layouts/principal')

@section('main-menu')

<section>

    <div class="d-flex flex-row bd-highlight">
        <table class="table table-striped table-hover">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Estacionamento</th>
                <th scope="col">Placa</th>
                <th scope="col">Motorista</th>
                <th scope="col">Horario Entrada</th>
                <th scope="col">Horario Saida</th>
                <th scope="col">Preço Final</th>
              </tr>
            </thead>
            <tbody>

                @forelse ($vacancies as $vacancy)
                <tr>
                    @if ($vacancy->exit_time != null)
                        <tr>
                            <td>{{$vacancy->id}}</td>
                            <td>{{$vacancy->parking->name}}</td>
                            <td>{{$vacancy->client->board}}</td>
                            <td>{{$vacancy->client->name}}</td>
                            <td>{{$vacancy->entry_time}}</td>
                            <td>{{$vacancy->exit_time}}</td>
                            <td>R$ {{$vacancy->price_total}}</td>
                        </tr>
                    @endif

                @empty
                <td><p>Sem entrada de clientes</p></td>

                @endforelse
            </tbody>
          </table>
    </div>

</section>

@endsection
