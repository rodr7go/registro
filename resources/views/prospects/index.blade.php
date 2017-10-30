@extends('layouts.app')

@section('content')
    <div class="container">
        {{--<h2>Usuarios</h2>--}}
        <div class="row">
            <div class="panel">
                <div class="panel-body"><h2>Prospectos</h2></div>
            </div>
        </div>
        <div class="float-right">
            <a href="{{ route('prospects.create') }}" class="btn btn-success"><strong>+</strong>Nuevo prospecto</a>
        </div>
        <div class="container">
            @include('prospects.table')
        </div>
    </div>

@endsection
@section('custom_scripts')
    @include('prospects.partials._scripts')
@endsection