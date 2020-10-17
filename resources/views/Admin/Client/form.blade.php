@extends('Admin/Layouts/principal')

@section('main-menu')

<section>

    <form action="{{$action}}" method="POST">

        @csrf

        @isset($client)
            @method('PUT')
        @endisset

        <div class="row">

            <div class="form-group col-6">
                <label for="board">Placa</label>
                <input type="text" name="board" class="form-control" id="board" placeholder="Placa" value="{{old('board', $client->board ?? '')}}">
                @error('board')
                    <span class="text-muted text-danger font-weight-lighter"> {{$message}} </span>
                @enderror
            </div>

            <div class="form-group col-6">
                <label for="name">Nome</label>
                <input type="text" class="form-control" name="name" placeholder="Nome" value="{{old('name', $client->name ?? '')}}">

                @error('name')
                    <span class="text-muted text-danger font-weight-lighter"> {{$message}} </span>
                @enderror
            </div>
        </div>

        <div class="row">
            <div class="form-group col-4">
                <label for="cpf">CPF</label>
            <input type="text" class="form-control" name="cpf" id="cpf" placeholder="CPF" value="{{old('cpf', $client->cpf ?? '')}}">

            @error('cpf')
                <span class="text-muted text-danger font-weight-lighter"> {{$message}} </span>
            @enderror
            </div>

            <div class="form-group col-4">
                <label for="type_vehicle">Tipo de veiculo</label>
                <select class="form-control" id="inputGroupSelect01" name="type_vehicle" value="">
                    <option selected disabled value="">Selecione o tipo de veiculo</option>
                    <option value="Moto">Moto</option>
                    <option value="Carro">Carro</option>
                </select>

            @error('type_vehicle')
                <span class="text-muted text-danger font-weight-lighter"> {{$message}} </span>
            @enderror
            </div>

            <div class="form-group col-2 text-right">
                <button type="reset" class="btn btn-warning rounded-pill">
                    <a class="text-decoration-none text-white" href="{{route('clients.index')}}">Cancelar</a></button>
            </div>

            <div class="form-group col-2 text-right">
                <button type="submit" class="btn btn-success rounded-pill">
                    <a class="text-decoration-none text-white">Adicionar</a></button>
            </div>

        </div>
    </form>

</section>

@endsection
