<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Team;
use App\Model\Teacher;
use App\Model\Retest;
use Auth;

class TeamScoreRetestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts_id = Auth::user()->accounts_id;
        $team = Team::where('accounts_id', $accounts_id)->first();
        $retests = Retest::where('teams_id', $team->teams_id)->get()->all();
        $teachers = Teacher::get()->all();

        return view('demo.team.score.retest.index',compact('retests','teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $retest = Retest::find($id);
        $team = Team::where('teams_id',$retest->teams_id)->first();
        $teacher = Teacher::where('teachers_id',$retest->teachers_id)->first();

        return view('demo.team.score.retest.show',compact('retest','team','teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
