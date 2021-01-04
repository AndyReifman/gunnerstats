@extends('layout')

@section('content')
<div class="container">
    <div class="row">
        <form method="POST" action="{{ action('MatchController@index')}}">
            @csrf
            <div class="col s4"></div>
            <div class="col s1 ">
                <p>{!! Form::selectYear('year', 1957, now()->year, request()->all() ? request()->year : 1957) !!}</p>
            </div>
            <div class="col s2">
                <p>{!! Form::selectMonth('month', request()->all() ? request()->month : null, ['placeholder' => 'Pick a
                    month']) !!}</p>
            </div>
            <div class="col s2">
                <p><button class="waves-effect waves-light btn-small" type="submit" name="action">
                        Submit<i class="material-icons right">send</i>
                    </button></p>
            </div>
        </form>
    </div>
    @if(!empty($matches))
    <table class="striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Opposition</th>
                <th>Location</th>
                <th>Score</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($matches as $match)
            <tr>
                <td>{{ $match->date }} </td>
                <td>{{ $match->opposition }} </td>
                <td>{{ $match->name }} ({{ $match->{'home/away'} == 'Home' ? 'H' : 'A' }}) </td>
                <td><a class="waves-effect waves-light btn"
                        href="/match/{{ str_replace('-','',$match->date)}}">{{ $match->score }} </a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif

</div>
@endsection