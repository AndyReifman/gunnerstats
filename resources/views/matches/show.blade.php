@extends('layout')


@section('content')
<div class="container">
    <div class="row">
        <div class="col s6 offset-s3">
            <h3>{{ $match->{'home/away'} == "Home" ? 'Arsenal' : $match->opposition }} -
                {{ $match->{'home/away'} == "Home" ? $match->opposition : 'Arsenal' }}</h3>
        </div>
        <div class="col s3 offset-s5"> <b>Venue:</b> {{ $match->venue }} </div>
        <div class="row">
            <table class="col s6">
                <thead>
                    <tr>
                        <th>{{ $match->{'home/away'} == "Home" ? 'Arsenal' : $match->opposition }}</th>
                        <th>Goal</th>
                        <th>Card</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($match->homeTeam as $player)
                    <tr>
                        <td> {{ $player->playerName }} </td>
                        <td></td>
                        <td></td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <table class="col s6">
                <thead>
                    <tr>
                        <th>Goal</th>
                        <th>Card</th>
                        <th style="text-align: right;">
                            {{ $match->{'home/away'} == "Home" ? $match->opposition : 'Arsenal' }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($match->homeTeam as $player)
                    <tr>
                        <td></td>
                        <td></td>
                        <td style="text-align: right;"> {{ $player->playerName }} </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection('content')
