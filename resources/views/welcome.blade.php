@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <p>Hello</p>
    </div>
    <div class="row">
        <p>{!! Form::selectYear('year', 1957, now()->year) !!}</p>
        <p>{!! Form::selectMonth('month') !!}</p>
    </div>
</div>
@endsection
