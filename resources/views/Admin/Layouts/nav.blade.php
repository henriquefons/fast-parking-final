<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{$title}}</title>
    <!-- CSS only -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    {{-- <link rel="stylesheet" href="{{ asset('css/app.css') }}" type="text/css"> --}}

</head>
<body>

    <nav class="navbar navbar-dark navbar-expand-lg fixed-top bg-dark" >
        <div class="container"><a class="navbar-brand" href="{{route('home')}}">Home</a><button data-toggle="collapse" data-target="#navbarResponsive" class="navbar-toggler navbar-toggler-right" type="button" data-toogle="collapse" aria-controls="navbarResponsive" aria-expanded="false"
                aria-label="Toggle navigation"><i class="fa fa-bars"></i></button>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav ml-auto text-uppercase">
                    <li class="nav-item"><a class="nav-link" href="{{route('clients.index')}}">Clientes</a></li>
                    <li class="nav-item"><a class="nav-link" href="{{route('vagas.index')}}">Vagas</a></li>
                   <li class="nav-item"><a class="nav-link" href="{{route('historico.index')}}">Historico</a></li>
                </ul>
            </div>
        </div>
    </nav>
