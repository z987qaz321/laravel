<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Account;
use App\Model\Team;
use App\Model\Teacher;
use App\Model\Retest;

class RetestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $retests = Retest::get()->all();
        $teams = Team::get()->all();
        $teachers = Teacher::get()->all();
        return view('demo.admin.designate.retest.index',compact('retests','teams','teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demo.admin.designate.retest.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accounts_team = Account::where('account',$request->account_team)->first();
        $accounts_teacher = Account::where('account',$request->account_teacher)->first();

        if(!$accounts_team){
            return redirect()->back()->withErrors(['msgTeam' => '帳號輸入錯誤或此專題組別帳號不存在']);
        }elseif(!$accounts_teacher){
            return redirect()->back()->withErrors(['msgTeacher' => '帳號輸入錯誤或此教師帳號不存在']);
        }else{
            $teacher = Teacher::where('accounts_id', $accounts_teacher->accounts_id)->first();
            $team = Team::where('accounts_id', $accounts_team->accounts_id)->first();
            $retests = new Retest;
            $retests->teams_id = $team->teams_id;
            $retests->teachers_id = $teacher->teachers_id;
            $retests->save();
            return redirect()->route('retest.index');
        }
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
        $teacher = Teacher::where('teachers_id',$retest->teachers_id)->first();
        $account_team = Account::where('accounts_id',$team->accounts_id)->first();
        $account_teacher = Account::where('accounts_id',$teacher->accounts_id)->first();
        return view('demo.admin.designate.retest.edit',compact('account_team','account_teacher','retest'));
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
        $accounts_team = Account::where('account',$request->account_team)->first();
        $accounts_teacher = Account::where('account',$request->account_teacher)->first();

        if(!$accounts_team){
            return redirect()->back()->withErrors(['msgTeam' => '帳號輸入錯誤或此專題組別帳號不存在']);
        }elseif(!$accounts_teacher){
            return redirect()->back()->withErrors(['msgTeacher' => '帳號輸入錯誤或此教師帳號不存在']);
        }else{
            $teacher = Teacher::where('accounts_id',$accounts_teacher->accounts_id)->first();
            $team = Team::where('accounts_id',$accounts_team->accounts_id)->first();
            $retests = Retest::find($id);
            $retests->teams_id = $team->teams_id;
            $retests->teachers_id = $teacher->teachers_id;
            $retests->save();
            return redirect()->route('retest.index');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $retests = Retest::find($id);
        $retests->delete();
        return redirect()->route('retest.index');
    }
}
