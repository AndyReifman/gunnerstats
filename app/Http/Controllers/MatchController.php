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
            $match = $this->getScore($match);
        }
        return view('welcome', ['matches' => $matches]);
    }

    protected function getScore($match) {
        $goals = DB::table('appearances')
        ->join('games','games.id','=','appearances.game')
        ->join('goals','appearances.id','=','goals.appearance')
        ->select('goals.club',DB::raw('Count(*) as goals'),'games.home/away')
        ->where('games.date','=',$match->date)
        ->groupBy('goals.club')
        ->get();

        if(count($goals) == 2){
            $match->score = $goals[0]->goals.'-'.$goals[1]->goals;
        } elseif (count($goals) == 0){
            $match->score = '0-0';
        } else {
            //Thanks Nexxai for the Switch statement suggestion.
            switch($goals[0]->{'home/away'}){
            case "Home":
                if($goals[0]->club == 1){
                    $match->score = $goals[0]->goals .'-0';
                }else {
                    $match->score = '0-'.$goals[0]->goals;
                }
            case "Away":
                if($goals[0]->club == 1){
                    $match->score = '0-'.$goals[0]->goals;
                }
                else {
                    $match->score  = $goals[0]->goals.'-0';
                }
            }
        }
        return $match;
    }
}
