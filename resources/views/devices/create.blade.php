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
                    :categories="{{ $categories }}"
                    :users="{{ $users }}"
                    :brands="{{ $brands }}"
                    :patterns="{{ $patterns }}"
                    :sellers="{{ $sellers }}"></create-update-device-component>
                <modal-create-category-component></modal-create-category-component>
            </div>
        </div>
    </div>
</div>
@endsection
