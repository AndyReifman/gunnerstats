@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <p>Hello</p>
    </div>
    <div class="row">
        <p>{!! Form::selectRange('year', 1957, now()->year) !!}</p>
    </div>
</div>
@endsection
