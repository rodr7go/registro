@extends('layouts.app')

@section('content')
    <div class="container">
        {{--<h2>Usuarios</h2>--}}
        <div class="row border-bottom page-header">
            <div class="panel panel-default">
                <div class="panel-body"><h2>Usuarios</h2></div>
            </div>
            @include('users.table')
        </div>
    </div>
@endsection