<?php

namespace App\Http\Controllers\Admin;

use App\Model\Account;
use App\Model\Teacher;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class TeacherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $accounts = Account::get()->all();
        $teachers = Teacher::get()->all();
        return view('demo.admin.info.teacher.index', compact('accounts', 'teachers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('demo.admin.info.teacher.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $accounts = Account::where('account', $request->account)->first();

        if (!$accounts) {
            return redirect()->back()->withErrors(['msg' => '教師帳號輸入錯誤或此教師帳號不存在']);
        } else {
            $teachers = new Teacher;
            $teachers->accounts_id = $accounts->accounts_id;
            $teachers->name = $request->name;
            $teachers->email = $request->email;
            $teachers->phone = $request->phone;
            $teachers->save();
            return redirect()->route('teacher.index');
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
        $teacher = Teacher::find($id);
        $account = Account::where('accounts_id', $teacher->accounts_id)->first();
        return view('demo.admin.info.teacher.show', compact('teacher', 'account'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $teacher = Teacher::find($id);
        $account = Account::where('accounts_id', $teacher->accounts_id)->first();
        return view('demo.admin.info.teacher.edit', compact('teacher', 'account'));
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
        $accounts = Account::where('account', $request->account)->first();

        if (!$accounts) {
            return redirect()->back()->withErrors(['msg' => '教師帳號輸入錯誤或此教師帳號不存在']);
        } else {
            $teacher = Teacher::find($id);
            $teacher->name = $request->name;
            $teacher->accounts_id = $accounts->accounts_id;
            $teacher->email = $request->email;
            $teacher->phone = $request->phone;
            $teacher->save();
            return redirect()->route('teacher.index');
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
        $teachers = Teacher::find($id);
        $teachers->delete();
        return redirect()->route('teacher.index');
    }
}
