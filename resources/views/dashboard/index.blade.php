@extends('layouts.dashboard.index')

@section('title', '| Dashboard')

@section('content')
<div class="card">
    <div class="card-header card-header-primary">
        <h4 class="card-title ">Dashboard</h4>
    </div>
    <div class="card-body">
        <div class="row">
            <div class="col-md-6 mt-3">
                <chart-bar
                    id="{{ Str::random(20) }}"
                    url="/charts/computers"
                    title="Quantidade por Tipo de Equipamento"
                ></chart-bar>
            </div>
            <div class="col-md-6 mt-3">
                <chart-pie
                    id="{{ Str::random(20) }}"
                    url="/charts/computers-by-brand"
                    title="Quantidade de computadores por Marca"
                ></chart-pie>
            </div>
            <div class="col-md-6 mt-3">
                <chart-bar
                    id="{{ Str::random(20) }}"
                    url="/charts/computers/reservation"
                    title="Quantidade por Tipo de Equipamento em Reserva"
                ></chart-bar>
            </div>
            {{-- <div class="col-md-12 mt-2">
                <chart-pie
                    id="{{ Str::random(20) }}"
                    url="/charts/patterns"
                    title="Modelos de Computadores"
                ></chart-pie>
            </div> --}}
        </div>
    </div>
</div>
@endsection
