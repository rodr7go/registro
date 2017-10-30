@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row border-bottom page-header">
            <div class="panel panel-default">
                <div class="panel-body"><h2>Crear Prospecto</h2></div>
            </div>
        </div>
        <form method="post" action="{{ route('prospects.store') }}">
            @include('prospects.partials._form')
        </form>
    </div>
@endsection