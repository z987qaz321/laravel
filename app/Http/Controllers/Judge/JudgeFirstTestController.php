<?php

namespace App\Http\Controllers\Judge;

use App\Model\Judge;
use App\Model\Team;
use App\Model\FirstTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class JudgeFirstTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts_id = Auth::user()->accounts_id;
        $judge = Judge::where('accounts_id',$accounts_id)->first();
        $first_tests = FirstTest::where('judges_id',$judge->judges_id)->get()->all();
        $teams = Team::get()->all();

        return view('demo.judge.first_test_score.index',compact('first_tests','teams'));
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
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $first_test = FirstTest::find($id);
        $team = Team::where('teams_id',$first_test->teams_id)->first();
        return view('demo.judge.first_test_score.edit',compact('first_test','team'));
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
        $score = FirstTest::find($id);
        $score->score_system = $request->score_system;
        $score->score_ppt = $request->score_ppt;
        $score->comment = $request->comment;
        $score->suggest = $request->suggest;
        $score->save();
        return redirect()->route('judge_first_test.index');
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
