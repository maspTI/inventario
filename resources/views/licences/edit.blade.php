@extends('layouts.dashboard.index')

@section('title', '| Editar Licença')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Editar Licença</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <create-update-licence-component
                    :sellers_db="{{ $sellers }}"
                    http_verb="put"
                    url="/licences/{{ $licence->id }}"
                    message="Licença atualizada com sucesso!"
                    :licence="{{ $licence }}"
                ></create-update-licence-component>
                <modal-create-seller-component></modal-create-seller-component>
            </div>
        </div>
    </div>
</div>
@endsection
