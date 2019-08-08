<?php

namespace App\Http\Controllers\Admin;

use App\Model\Account;
use App\Model\Team;
use App\Model\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeamController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::where('identity', '1')->get();
        $teams = Team::get()->all();
        return view('demo.admin.info.team.index', compact('accounts', 'teams'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demo.admin.info.team.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accounts_team = Account::where('account', $request->account_team)->first();
        $accounts_teacher = Account::where('account', $request->account_teacher)->first();


        if (!$accounts_team) {
            return redirect()->back()->withErrors(['msgTeam' => '帳號輸入錯誤或此專題組別帳號不存在']);
        } elseif (!$accounts_teacher) {
            return redirect()->back()->withErrors(['msgTeacher' => '帳號輸入錯誤或此教師帳號不存在']);
        } else {
            $teachers = Teacher::where('accounts_id', $accounts_teacher->accounts_id)->first();
            $teams = new Team;
            $teams->accounts_id = $accounts_team->accounts_id;
            $teams->teachers_id = $teachers->teachers_id;
            $teams->team_number = $request->team_number;
            $teams->team_name = $request->team_name;
            $teams->team_field = $request->team_field;
            $teams->team_category = $request->team_category;
            $teams->education = $request->education;
            $teams->class = $request->class;
            $teams->member = $request->member;
            $teams->save();
            return redirect()->route('team.index');
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
        $team = Team::find($id);
        $account = Account::where('accounts_id', $team->accounts_id)->first();
        $teacher = Teacher::where('teachers_id', $team->teachers_id)->first();
        return view('demo.admin.info.team.show', compact('team', 'account', 'teacher'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $team = Team::find($id);
        $account = Account::where('accounts_id', $team->accounts_id)->first();
        $teacher = Teacher::where('teachers_id', $team->teachers_id)->first();
        $account_teacher = Account::where('accounts_id', $teacher->accounts_id)->first();

        return view('demo.admin.info.team.edit', compact('team', 'account', 'account_teacher'));
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
        $accounts_team = Account::where('account', $request->account_team)->first();
        $accounts_teacher = Account::where('account', $request->account_teacher)->first();


        if (!$accounts_team) {
            return redirect()->back()->withErrors(['msgTeam' => '帳號輸入錯誤或此專題組別帳號不存在']);
        } elseif (!$accounts_teacher) {
            return redirect()->back()->withErrors(['msgTeacher' => '帳號輸入錯誤或此教師帳號不存在']);
        } else {
            $teachers = Teacher::where('accounts_id', $accounts_teacher->accounts_id)->first();
            $teams = Team::find($id);
            $teams->accounts_id = $accounts_team->accounts_id;
            $teams->teachers_id = $teachers->teachers_id;
            $teams->team_number = $request->team_number;
            $teams->team_name = $request->team_name;
            $teams->team_field = $request->team_field;
            $teams->team_category = $request->team_category;
            $teams->education = $request->education;
            $teams->class = $request->class;
            $teams->member = $request->member;
            $teams->save();
            return redirect()->route('team.index');
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
        $teams = Team::find($id);
        $teams->delete();
        return redirect()->route('team.index');
    }
}
