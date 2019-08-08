<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Model\Account;
use Auth;
use Redirect;

class AccountController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::Paginate(15);
        return view('demo.admin.account.index',compact('accounts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demo.admin.account.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->password !== $request->password2){
            return redirect()->back()->withErrors(['msg' => '兩次輸入的密碼不相同'])->withInput([$request->except('password')]);
        }else{
            $account = new Account;
            $account->account = $request->account;
            $account->password = bcrypt($request->account);
            $account->identity = $request->identity;
            $account->save();
            return redirect()->route('account.index');
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

        $accounts = Account::find($id);
        return view('demo.admin.account.edit',compact('accounts'));
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
        if($request->password !== $request->password2){
            return redirect()->back()->withErrors(['msg' => '兩次輸入的新密碼不相同']);
        }else{
            $accounts = Account::find($id);
            $accounts->password = bcrypt($request->password);
            $accounts->save();
            return redirect()->route('account.index');
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
        $account = Account::find($id);
        $account->delete();
        return redirect()->route('account.index');
    }
}
