@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card text-center">
                <div class="card-header">
                    Bem-Vindo
                </div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <a class="btn btn-primary" href="/externalApplications" role="button">Cadastrar aplicações</a>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="flex-container">

@forelse($urls as $item)

    <iframe src="{{ $item->url}}" style="border:0px #ffffff hidden;" name="myiFrame" scrolling="no" frameborder="1" marginheight="0px" marginwidth="0px" height="400px" width="600px" allowfullscreen></iframe>
    
    @empty
    <p>Sem Links cadastrados</p>
@endforelse

</div>
@endsection

<style>
    .flex-container {
        display: flex;
        flex-direction: row;
        align-items: center;
        justify-content: space-around;
        flex-wrap: wrap;
        align-content: center;
        padding: 40px;
    }
</style>
