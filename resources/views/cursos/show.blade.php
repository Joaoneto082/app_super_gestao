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
                        
                        <h1>Ver um curso</h1>
                        
                      
                       
                            <label for="exampleInputEmail1">Nome:</label>
                            <input type="text" name='name' class="form-control" value="{{ $curso->name }}" >
                        
                        
                            <label for="exampleInputPassword1">Duração do Curso</label>
                            <input type="text" name='duracao' class="form-control" value="{{ $curso->duracao }}">
                        
                        
                         
                        
                </div>
            </div>
        </div>
    </div>
</div>
@endsection