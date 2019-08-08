<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Account;
use App\Model\Team;
use App\Model\Judge;
use App\Model\FirstTest;

class FirstTestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $first_tests = FirstTest::get()->all();
        $teams = Team::get()->all();
        $judges = Judge::get()->all();
        return view('demo.admin.designate.first_test.index',compact('first_tests','teams','judges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demo.admin.designate.first_test.create');
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
        $accounts_judge = Account::where('account',$request->account_judge)->first();

        if(!$accounts_team){
            return redirect()->back()->withErrors(['msgTeam' => '帳號輸入錯誤或此專題組別帳號不存在']);
        }elseif(!$accounts_judge){
            return redirect()->back()->withErrors(['msgJudge' => '帳號輸入錯誤或此評委帳號不存在']);
        }else{
            $judge = Judge::where('accounts_id',$accounts_judge->accounts_id)->first();
            $team = Team::where('accounts_id',$accounts_team->accounts_id)->first();
            $first_tests = new FirstTest;
            $first_tests->teams_id = $team->teams_id;
            $first_tests->judges_id = $judge->judges_id;
            $first_tests->save();
            return redirect()->route('first_test.index');
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
        $judge = Judge::where('judges_id',$first_test->judges_id)->first();
        $account_team = Account::where('accounts_id',$team->accounts_id)->first();
        $account_judge = Account::where('accounts_id',$judge->accounts_id)->first();
        return view('demo.admin.designate.first_test.edit',compact('account_team','account_judge','first_test'));
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
        $accounts_judge = Account::where('account',$request->account_judge)->first();

        if(!$accounts_team){
            return redirect()->back()->withErrors(['msgTeam' => '帳號輸入錯誤或此專題組別帳號不存在']);
        }elseif(!$accounts_judge){
            return redirect()->back()->withErrors(['msgJudge' => '帳號輸入錯誤或此評委帳號不存在']);
        }else{
            $judge = Judge::where('accounts_id',$accounts_judge->accounts_id)->first();
            $team = Team::where('accounts_id',$accounts_team->accounts_id)->first();
            $first_tests = FirstTest::find($id);
            $first_tests->teams_id = $team->teams_id;
            $first_tests->judges_id = $judge->judges_id;
            $first_tests->save();
            return redirect()->route('first_test.index');
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
        $first_tests = FirstTest::find($id);
        $first_tests->delete();
        return redirect()->route('first_test.index');
    }
}
