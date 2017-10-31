@extends('layouts.app')
@section('page-header') Prospectos @endsection
@section('content')
    <section class="">
        <div>
            <div class="row">
                @include('prospects.table')
            </div>
        </div>
    </section>

{{--        <a href="{{ route('prospects.create') }}" class="btn btn-success"><strong>+</strong>Nuevo prospecto</a>--}}

@endsection
@section('custom_scripts')
    @include('prospects.partials._scripts')
@endsection