@extends('Admin/Layouts/principal')

@section('main-menu')

<section>

    <form action="{{$action}}" method="POST">

        @csrf

        <div class="row">

            <div class="form-group col-6">
                <label for="my-select">Selecione o cliente</label>
                <select id="my-client_id" class="custom-select" name="client_id">
                    <option value="" disabled selected>Selecione o cliente</option>
                    @foreach ($clients as $client)
                        @if ($client->occupation == 0)
                            <option value="{{$client->id}}">{{$client->board}}</option>
                        @endif
                    @endforeach
                </select>
            </div>

            <div class="form-group col-6">
                <label for="parking_id">Selecione o local do estacionamento</label>
                <select id="parking_id" class="custom-select" name="parking_id">
                    <option value="" disabled selected>Selecione o cliente</option>
                    @foreach ($parkings as $parking)
                        <option value="{{$parking->id}}">{{$parking->name}}</option>
                    @endforeach
                </select>
            </div>

        </div>

        <div class="row">
            <div class="form-group col-8 ">
                <label for="entry_time">Horario de entrada</label>
            <input type="text" class="form-control" name="entry_time" id="entry_time" value="{{$hoursTime}}" placeholder="Tempo">
            </div>
            <div class="form-group col-2 text-right">
                <button type="reset" class="btn btn-warning rounded-pill">
                    <a class="text-decoration-none text-white" href="{{url()->previous()}}">Cancelar</a></button>
            </div>

            <div class="form-group col-2 text-right">
                <button type="submit" class="btn btn-success rounded-pill">
                    <a class="text-decoration-none text-white">Adicionar</a></button>
            </div>
    </form>

</section>

@endsection
