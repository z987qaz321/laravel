<?php

namespace App\Http\Controllers\Teacher;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Teacher;
use App\Model\Team;
use App\Model\Retest;
use Auth;

class TeacherRetestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts_id = Auth::user()->accounts_id;
        $teacher = Teacher::where('accounts_id',$accounts_id)->first();
        $retests = Retest::where('teachers_id',$teacher->teachers_id)->get()->all();
        $teams = Team::get()->all();
        return view('demo.teacher.retest.index',compact('retests','teams'));
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
        $retest = Retest::find($id);
        $team = Team::where('teams_id',$retest->teams_id)->first();
        return view('demo.teacher.retest.edit',compact('retest','team'));
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
        $score = Retest::find($id);
        $score->score_creative = $request->score_creative;
        $score->score_present = $request->score_present;
        $score->score_clothing = $request->score_clothing;
        $score->comment = $request->comment;
        $score->suggest = $request->suggest;
        $score->save();
        return redirect()->route('teacher_retest.index');
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
