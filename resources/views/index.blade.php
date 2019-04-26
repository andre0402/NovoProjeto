@extends('layout.app', ["current"=>"home"])

@section('body')
    <div class="jumbotron bg-light border-secondary">
        <div class="row">
            <div class="card-deck">
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Administração do Sistema</h5>
                        <p class="card-text">
                            Aqui você faz todo o processo de Administração Sistema
                        </p>
                        <a href="/admsistema" class="btn btn-primary"> Administração do Sistema </a>
                    </div>
                </div>
                <div class="card border border-primary">
                    <div class="card-body">
                        <h5 class="card-title">Cadastro</h5>
                        <p class="card-text">
                            Aqui você faz todo o processo de Cadastros Sistema
                        </p>
                        <a href="/cadastro" class="btn btn-primary"> Cadastro do Sistema </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
