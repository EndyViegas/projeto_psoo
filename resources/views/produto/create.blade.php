@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Cadastro produto</h1>

                @if($errors->all())
                    <div class ="alert alert-danger">
                        @foreach($errors->all() as $error)
                            <li>{{$error}}</li>
                        @endforeach
                    </div>
                @endif
                <form action="{{route('produto.store')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="codigo">Código</label>
                        <input type="text" name="codigo" id="codigo" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="descricao">Descrição</label>
                        <input type="text" name="descricao" id="descricao" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <label for="quantidade">Quantidade</label>
                        <input type="text" name="quantidade" id="quantidade" class="form-control"/>
                    </div>
                    <div class="form-group">
                        <input type="submit" value ="Cadastrar" class="btn btn-success"/>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
