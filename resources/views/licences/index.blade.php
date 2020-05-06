@extends('layouts.dashboard.index')

@section('title', '| Licenças')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Licenças</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <index-licence-component></index-licence-component>
                <modal-licence-component></modal-licence-component>
            </div>
        </div>
    </div>
</div>
@endsection
