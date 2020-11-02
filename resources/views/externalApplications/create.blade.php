@extends('layouts.app')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    Adicione nova URL da aplicação
                </div>

                <div class="card-body">
                    <form action="/externalApplications" method="post">
                        <div class="form-group">
                            <label for="url">URL</label>
                            <input type="text" name="url" class="form-control" autocomplete="off" placeholder="Enter URL">
                            @error('url') <p>{{ $message }}</p> @enderror
                        </div>
                        @csrf
                        <a class="btn btn-danger" href="/externalApplications">Voltar</a>
                        <button type="submit" class="btn btn-primary">Adicionar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection