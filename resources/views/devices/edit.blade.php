@extends('layouts.dashboard.index')

@section('title', '| Editar Dispositivo')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Editar Dispositivo</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <create-update-device-component
                    :categories_db="{{ $categories }}"
                    :users_db="{{ $users }}"
                    :brands_db="{{ $brands }}"
                    :patterns_db="{{ $patterns }}"
                    :sellers_db="{{ $sellers }}"
                    http_verb="put"
                    url="/devices/{{ $device->id }}"
                    message="Dispositivo atualizado com sucesso!"
                    :device="{{ $device }}"
                ></create-update-device-component>
                <modal-create-category-component></modal-create-category-component>
                <modal-create-brand-component></modal-create-brand-component>
                <modal-create-pattern-component
                    :brands_db="{{ $brands }}"
                ></modal-create-pattern-component>
                <modal-create-seller-component></modal-create-seller-component>
            </div>
        </div>
    </div>
</div>
@endsection
