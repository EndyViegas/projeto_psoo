@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Produtos cadastrados</h1>
                 @if(isset($_GET['success'])))
                    @if(is_numeric($_GET['success']))
                    <div style="float:left;" class ="alert alert-success">
                        Produto cadastrado com sucesso!
                    </div>
                    @else
                    <div style="float:left;" class ="alert alert-alert">
                       Houve um erro ao cadastrar o produto!
                    </div>
                    @endif
                @endif
                <div style="float:right;">
                    <a class="btn btn-primary" href="{{route('produto.create')}}">Cadastrar produto</a>
                </div>
                <div style="clear:both;"></div>
                <br>
                <table class="table">
                    <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Descrição</th>
                        <th scope="col">Quantidade</th>
                    </tr>
                    @foreach($produtos as $produto)
                        <tr>
                            <td>{{$produto->codigo}}</td>
                            <td>{{$produto->descricao}}</td>
                            <td>{{$produto->quantidade}}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
@endsection
