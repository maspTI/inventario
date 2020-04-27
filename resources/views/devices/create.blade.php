@extends('layouts.dashboard.index')

@section('title', '| Adicionar Dispositivo')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Adicionar Dispositivo</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <create-update-device-component
                    :categories_db="{{ $categories }}"
                    :users_db="{{ $users }}"
                    :brands_db="{{ $brands }}"
                    :sellers_db="{{ $sellers }}"></create-update-device-component>
                <modal-create-category-component></modal-create-category-component>
                <modal-create-brand-component></modal-create-brand-component>
                <modal-create-pattern-component
                    :brands_db="{{ $brands }}"></modal-create-pattern-component>
                <modal-create-seller-component></modal-create-seller-component>
            </div>
        </div>
    </div>
</div>
@endsection
