@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    <!-- Detalhes da aplicação -->
                    {{ $externalApplication->url }}
                </div>

                <div class="card-body flex-container">
                    <a class="btn btn-primary" href="/externalApplications/{{ $externalApplication->id }}/edit" role="button">Editar</a>
                    <form action="/externalApplications/{{ $externalApplication->id }}" method="post">
                        @method('DELETE')
                        @csrf
                        <button type="submit" class="btn btn-danger">Excluir</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection

<style>
    .flex-container {
        display: flex;
        flex-direction: row;
        align-items: baseline;
        justify-content: space-around;
        flex-wrap: wrap;
        align-content: center;
        padding: 40px;
    }
</style>
