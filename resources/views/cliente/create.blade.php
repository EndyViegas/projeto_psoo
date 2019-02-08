@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Cadastro cliente</h1>

                @if($errors->all())
                <div class ="alert alert-danger">
                    @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                    @endforeach
                </div>
                @endif
                <form action="{{route('cliente.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="nome">Nome</label>
                        <input type="text" name="nome" id="nome" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="endereco">Endereço</label>
                        <input type="text" name="endereco" id="endereco" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="text" name="email" id="email" class="form-control"/>
                    </div> <div class="form-group">
                        <label for="Celular">Celular</label>
                        <input type="text" name="celular" id="celular" class="form-control"/>
                    </div>
                     <div class="form-group">
                        <input type="submit" value ="Cadastrar" class="btn btn-success"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
