@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row border-bottom page-header">
            <div class="panel panel-default">
                <div class="panel-body"><h2>Editar Prospecto</h2></div>
            </div>
        </div>
        <form method="POST" action="{{ route('prospects.update',$prospect->id) }}">
            @include('prospects.partials._form')
        </form>
    </div>
@endsection