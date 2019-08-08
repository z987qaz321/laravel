<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Team;
use App\Model\Judge;
use App\Model\FirstTest;
use Auth;

class TeamScoreFirstTestController extends Controller
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
        $first_tests = FirstTest::where('teams_id', $team->teams_id)->get()->all();
        $judges = Judge::get()->all();

        return view('demo.team.score.first_test.index',compact('first_tests','judges'));
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
        $first_test = FirstTest::find($id);
        $team = Team::where('teams_id',$first_test->teams_id)->first();
        $judge = Judge::where('judges_id',$first_test->judges_id)->first();

        return view('demo.team.score.first_test.show',compact('first_test','team','judge'));
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
