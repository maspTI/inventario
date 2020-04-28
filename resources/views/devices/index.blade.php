@extends('layouts.dashboard.index')

@section('title', '| Dispositivos')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Dispositivos</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <index-device-component></index-device-component>
                <modal-device-component></modal-device-component>
            </div>
        </div>
    </div>
</div>
@endsection
