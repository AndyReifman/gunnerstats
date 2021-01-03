<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Match;
use DB;

class MatchController extends Controller
{
    public function show(Match $match) {
        dd($match);
    } 

    public function index(){
        $year = request()->year;
        $month = sprintf("%02d",request()->month);

        $matches = DB::table('games')
            ->join('clubs', 'games.opposition','=','clubs.id')
            ->join('stadiums', 'games.stadium','=','stadiums.id')
            ->select('date','clubs.name AS opposition','games.home/away','stadiums.name')
            ->whereYear('date',$year)
            ->whereMonth('date',$month)
            ->get();
        foreach ($matches as $match){
            $match = getScore($match)
        }
        return view('welcome', ['matches' => $matches]);
    }

    protected function getScore($match) {
        $goals = DB::table('appearances')
        ->join('games','games.id','=','appearances.game')
        ->join('goals','appearances.id','=','goals.appearance')
        ->select('goals.club','Count(*) as goals')
        ->whereDate('games.date',$match->date)
        -groupBy('goals.club')
        ->toSql();

        dd($scorers);

    }
}
