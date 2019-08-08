<?php

namespace App\Http\Controllers\Team;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Http\UploadedFile;
use App\Model\Team;
use App\Model\Teacher;
use Auth;

class TeamDisplayController extends Controller
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
        $teacher = Teacher::where('teachers_id', $team->teachers_id)->first();
        return view('demo.team.display.index', compact('team', 'teacher'));
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
        $team = Team::find($id);
        return view('demo.team.display.edit', compact('team'));
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
        $team = Team::find($id);

        if ($request->hasFile('poster')) {
            $filename = $request->file('poster')->getClientOriginalName();
            $request->file('poster')->storeAs('', $filename);
            $team->poster = $filename;
            $team->save();
            return redirect()->route('team_display.index');
        } elseif ($request->hasFile('ppt')) {
            $filename = $request->file('ppt')->getClientOriginalName();
            $request->file('ppt')->storeAs('', $filename);
            $team->ppt = $filename;
            $team->save();
            return redirect()->route('team_display.index');
        } elseif ($request->hasFile('word')) {
            $filename = $request->file('word')->getClientOriginalName();
            $request->file('word')->storeAs('', $filename);
            $team->word = $filename;
            $team->save();
            return redirect()->route('team_display.index');
        } elseif ($request->hasFile('video')) {
            $filename = $request->file('video')->getClientOriginalName();
            $request->file('video')->storeAs('', $filename);
            $team->video = $filename;
            $team->save();
            return redirect()->route('team_display.index');
        } elseif ($request->has('website')) {
            $team->website = $request->website;
            $team->save();
            return redirect()->route('team_display.index');
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
        //
    }
}
