<?php

namespace App\Http\Controllers\Admin;

use App\Model\Account;
use App\Model\Judge;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class JudgeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::where('identity','3')->get();
        $judges = Judge::get()->all();
        return view('demo.admin.info.judge.index',compact('accounts','judges'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demo.admin.info.judge.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accounts = Account::where('account',$request->account)->first();

        if(!$accounts){
            return redirect()->back()->withErrors(['msg' => '帳號輸入錯誤或此評委帳號不存在']);
        }else{
            $judges = new Judge;
            $judges->accounts_id = $accounts->accounts_id;
            $judges->name = $request->name;
            $judges->email = $request->email;
            $judges->phone = $request->phone;
            $judges->save();
            return redirect()->route('judge.index');
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
        $judge = Judge::find($id);
        $account = Account::where('accounts_id',$judge->accounts_id)->first();
        return view('demo.admin.info.judge.show',compact('judge','account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $judge = Judge::find($id);
        $account = Account::where('accounts_id',$judge->accounts_id)->first();
        return view('demo.admin.info.judge.edit',compact('judge','account'));
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
        $accounts = Account::where('account',$request->account)->first();

        if(!$accounts){
            return redirect()->back()->withErrors(['msg' => '評委帳號輸入錯誤或此評委帳號不存在']);
        }else{
            $judge = Judge::find($id);
            $judge->name = $request->name;
            $judge->accounts_id = $accounts->accounts_id;
            $judge->email = $request->email;
            $judge->phone = $request->phone;
            $judge->save();
            return redirect()->route('judge.index');
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
        $judges = Judge::find($id);
        $judges->delete();
        return redirect()->route('judge.index');
    }
}
