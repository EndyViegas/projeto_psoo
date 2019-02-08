@extends('layouts.app')

@section('content')

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Clientes cadastrados</h1>
                @if(isset($_GET['success'])))
                    @if(is_numeric($_GET['success']))
                    <div style="float:left;" class ="alert alert-success">
                        Cliente cadastrado com sucesso!
                    </div>
                    @else
                    <div style="float:left;" class ="alert alert-alert">
                       Houve um erro ao cadastrar o cliente!
                    </div>
                    @endif
                @endif
                <div style="float:right;">
                    <a class="btn btn-primary" href="{{route('cliente.create')}}">Cadastrar cliente</a>
                </div>
                <div style="clear:both;"></div>
                <br>
                <table class="table">
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">E-mail</th>
                        <th scope="col">Celular</th>
                    </tr>
                @foreach($clientes as $cliente)
                    <tr>
                        <td>{{$cliente->nome}}</td>
                        <td>{{$cliente->email}}</td>
                        <td>{{$cliente->celular}}</td>
                    </tr>
                @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
