@extends('layouts.dashboard.index')

@section('title', '| Adicionar Licença')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Adicionar Licença</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <create-update-licence-component
                    :sellers_db="{{ $sellers }}"
                    http_verb="post"
                    url="/licences"
                    message="Licença cadastrada com sucesso!"
                ></create-update-licence-component>
                <modal-create-seller-component></modal-create-seller-component>
            </div>
        </div>
    </div>
</div>
@endsection
