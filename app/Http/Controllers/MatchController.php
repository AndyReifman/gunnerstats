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
            ->select('date','clubs.name','games.home/away')
            ->whereYear('date',$year)
            ->whereMonth('date',$month)
            ->get();
        return view('welcome', ['matches' => $matches]);
    }
}
