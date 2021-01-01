@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <form method="POST" action="/">
            <div class="col s4 offset-s2">
                <p>{!! Form::selectYear('year', 1957, now()->year) !!}</p>
            </div>
            <div class="col s4">
                <p>{!! Form::selectMonth('month') !!}</p>
            </div>
            <div class="col s4">
                <button class="btn waves-effect waves-light" type="submit" name="action">Submit<i
                        class="material-icons right">send</i></button>
        </form>
    </div>
</div>
@endsection