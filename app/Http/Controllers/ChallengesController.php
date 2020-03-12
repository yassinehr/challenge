<?php

namespace App\Http\Controllers;

use App\Challenge;
use App\Events\NewChallengeHasRegister;
use Illuminate\Support\Facades\Log;
use Illuminate\Http\Request;
use Spatie\QueryBuilder\QueryBuilder;



class ChallengesController extends Controller
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
        //  $challenges = Challenge::paginate(10);
        $challenges = QueryBuilder::for(Challenge::class)
            ->allowedFilters(['title', 'start'])
            ->paginate(10);

        //print_r($challenges);


        return view('challenges.index', compact('challenges'));
    }

    public function filter(Request $request)
    {

        $titleChallenge = $request->input('title');
        $startChallenge = $request->input('start');
        $txtTitle = null;
        $txtStart = null;
        if (!empty($titleChallenge)) {
            $txtTitle = '&filter[title]=' . $titleChallenge;
        }

        if (!empty($startChallenge)) {
            $txtStart = '&filter[start]=' . $startChallenge;
        }





        return redirect('challenges?' . $txtTitle . $txtStart);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        $challenge = new Challenge();
        return view('challenges.create', compact('challenge'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {

        Log::info('Showing user profile for user: ');

        $challenge = Challenge::create($this->validateRequest());
        // dd($challenge);
        event(new NewChallengeHasRegister($challenge));

        return redirect('challenges');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Challenge $challenge)
    {
        //
        return view('challenges.show', compact('challenge'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Challenge $challenge)
    {
        //

        return view('challenges.edit', compact('challenge'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Challenge $challenge)
    {
        //

        $challenge->update($this->validateRequest());
        return redirect('challenges/' . $challenge->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Challenge $challenge)
    {
        //

        $challenge->delete();

        return redirect('challenges');
    }

    private function validateRequest()
    {
        return request()->validate([
            'title' => 'required|min:3',
            'description' => 'required',
            'start' => 'required',
            'status' => 'required',
            'deadline' => 'required',
        ]);
    }
}
