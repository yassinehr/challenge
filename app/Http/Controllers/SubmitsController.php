<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\ChallengeUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\DB;

class SubmitsController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {


        //
        Log::info('This is some useful information.');

        //challenge for connected user
        $idUser = Auth::id();;
        $userToFind = User::find($idUser);
        //dd($userToFind->authority);
        if($userToFind->authority=='participant'){
            $challenges = $userToFind->challenges;

        }
        else{
            $challenges = DB::table('challenge_user')->get();
            //dd($challenges);
        }


        //$challenges = Challenge::all();

        //dd($challenges);
        return view('submits.index', compact('challenges'));
    }



    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //

        $challenges = Challenge::all();
        $code = null;
        return view('submits.create', compact('challenges', 'code'));
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
        $idChallenge = $request->input('challenge_id');
        $code = $request->input('code');
        $userToFind = new User();
        $idUser = Auth::id();;
        $userToFind = User::find($idUser);
        $challenge = Challenge::find($idChallenge);
        $userToFind->challenges()->attach($challenge->id, ['code' => $code]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        return view('submits.show', compact('code'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($idChallenge, $code)
    {
        //

        return view('submits.edit', compact('idChallenge', 'code'));
    }

    public function userInformation($id)
    {
        return User::findOrFail($id);
    }

    public function challengeInformation($id)
    {
        return Challenge::findOrFail($id);
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
