@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    Editar URL da aplicação
                </div>

                <div class="card-body">
                    <form action="/externalApplications/{{ $externalApplication->id }}" method="post">
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" name="url" class="form-control" autocomplete="off" value="{{ $externalApplication->url }}">
                            @error('url') <p>{{ $message }}</p> @enderror
                        </div>
                        @csrf
                        <a class="btn btn-danger" href="/externalApplications">Voltar</a>
                        <button type="submit" class="btn btn-primary">Salvar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection