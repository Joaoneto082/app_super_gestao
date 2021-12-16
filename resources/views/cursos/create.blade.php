@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
                
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        
                        <h1>Cadastrar Novo Curso</h1>
                        
                        <form action="{{route('registrar_curso')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" name='name' class="form-control" >
                        </div>
                        <div class="form-group">
                            <label for="exampleInputPassword1">Duração do Curso</label>
                            <input type="text" name='duracao' class="form-control">
                        </div>
                        <button type="submit" class="btn btn-primary">Cadastrar</button>
                        </form>
                         
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection