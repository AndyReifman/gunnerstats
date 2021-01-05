@extends('layout')
<title>{{ $match->{'home/away'} == "Home" ? 'Arsenal' : $match->opposition }} {{$match->score}} {{ $match->{'home/away'} == "Home" ? $match->opposition : 'Arsenal' }}</title>

@section('content')
<div class="container">
    <div class="row">
        <div>
            <h3 style="text-align: center;">{{ $match->{'home/away'} == "Home" ? 'Arsenal' : $match->opposition }} {{$match->score}}
                {{ $match->{'home/away'} == "Home" ? $match->opposition : 'Arsenal' }}</h3>
        </div>
        <div style="text-align: center;"> <b>Venue:</b> {{ $match->venue }} </div>
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
                        <td>{{ $player->playerName }}</td>
                        <td>{{ $player->minute ? $player->minute : '' }}</td>
                        <td>{{ $player->yellow ? $player->yellow : '' }} {{ $player->red ? $player->red : '' }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <table class="col s6">
                <thead>
                    <tr>
                        <th>Card</th>
                        <th>Goal</th>
                        <th style="text-align: right;">
                            {{ $match->{'home/away'} == "Home" ? $match->opposition : 'Arsenal' }}</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($match->awayTeam as $player)
                    <tr>
                        <td>{{ $player->yellow ? $player->yellow : '' }} {{ $player->red ? $player->red : '' }}</td>
                        <td>{{ $player->minute ? $player->minute : '' }}</td>
                        <td style="text-align: right;"> {{ $player->playerName }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection('content')
