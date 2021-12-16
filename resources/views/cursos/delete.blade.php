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
                        
                        <h1>Excluir um Curso</h1>
                        
                        <form action="{{ route('excluir_curso', ['id' => $curso->id])}}" method="post">
                            @csrf
                            <label for="">Tem certeza que deseja excluir este Produto?</label>
                            <input type="text" name='name' value="{{ $curso->name }}" >
                            <button>Sim</button>
                        </form>
                         
                </div>
            </div>
        </div>
    </div>
</div>
@endsection