@extends('Admin/Layouts/principal')

@section('main-menu')

<section>


    <form action="{{$action}}" method="POST">

        @csrf
        @method('PUT')


        <div class="row">

            <div class="form-group col-5">
                <label for="parking_id">Estacionamento</label>
                <input disabled type="text" name="parking_id" class="form-control" placeholder="Placa" value="{{$vacancy->parking->name}}">
            </div>

            <div class="form-group col-3">
                <label for="board">Placa</label>
                <input disabled type="text" name="board" class="form-control" placeholder="Placa" value="{{$vacancy->client->board}}">
            </div>

            <div class="form-group col-4">
                <label for="name">Nome</label>
                <input disabled type="text" class="form-control" name="name" placeholder="Nome" value="{{$vacancy->client->name}}">
            </div>

        </div>

        <div class="row">
            <div class="form-group col-4">
                <label for="entry_time">Horario de entrada</label>
                <input disabled type="text" class="form-control" name="entry_time" placeholder="Horario de entrada" value="{{$vacancy->entry_time}}">
            </div>

            <div class="form-group col-4">
                <label for="exit_time">Horario de saida</label>
                <input type="text" class="form-control" name="exit_time" placeholder="Horario de saida" value="{{$hoursTime}}">
            </div>

            <div class="form-group col-2 text-right">
                <button type="reset" class="btn btn-warning rounded-pill">
                    <a class="text-decoration-none text-white" href="{{route('vagas.index')}}">Cancelar</a></button>
            </div>

            <div class="form-group col-2 text-right">
                <button type="button" class="btn btn-success rounded-pill" data-toggle="modal" data-target="#modalFormExit">
                    <a class="text-decoration-none text-white">Adicionar</a></button>
            </div>

        </div>

        <div class="modal fade" id="modalFormExit" tabindex="-1" role="dialog">
            <div class="modal-dialog" role="document">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title">Saida de veiculo</h5>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                </div>
                <div class="modal-body">
                    <strong><p>Deseja confirmar a saida do cliente?</p></strong>
                    <p name="price_total">Valor total: R${{number_format($priceFinal, 2, '.', ',')}}</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Não</button>
                  <button type="submit" class="btn btn-primary">Sim</button>
                </div>
              </div>
            </div>
          </div>

    </form>



</section>

@endsection
