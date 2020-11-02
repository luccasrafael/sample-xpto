@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    Aplicações
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <div class="list-group">
                        @forelse($urls as $item)
                            <a href="/externalApplications/{{ $item->id }}" class="list-group-item list-group-item-action">{{ $item->url}}</a>     
                        @empty
                            <p>No Links to show</p>
                        @endforelse
                    </div>
                    <div style="padding:20px;">
                        <a class="btn btn-danger" href="/home">Voltar</a>
                        <a class="btn btn-primary" href="/externalApplications/create" role="button">Adicionar aplicações</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection