@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <p>Hello</p>
    </div>
    <div class="row">
        <div class="col s6">
            <p>{!! Form::selectYear('year', 1957, now()->year) !!}</p>
        </div>
        <div class="col s6">
            <p>{!! Form::selectMonth('month') !!}</p>
        </div>
    </div>
</div>
@endsection