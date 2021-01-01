@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <form method="POST" action="/">
            <div class="col s5"></div>
            <div class="col s1 ">
                <p>{!! Form::selectYear('year', 1957, now()->year) !!}</p>
            </div>
            <div class="col s1">
                <p>{!! Form::selectMonth('month') !!}</p>
            </div>
            <div class="col s2">
                <p><button class="waves-effect waves-light btn-small" type="submit" name="action">
                  Submit<i class="material-icons right">send</i>
                </button></p>
            </div>
        </form>
    </div>
</div>
@endsection
