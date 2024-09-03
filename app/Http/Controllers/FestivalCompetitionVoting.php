<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Group;
use App\Models\GaneshCompetitionCategory;
use App\Models\GaneshCompetition;
use App\Models\User;
use App\Models\CompetitionVote;


use Auth;



class FestivalCompetitionVoting extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $GaneshCompetitions = GaneshCompetition::where('ganesh_competition', '1')->with('participant')->get();
        return view('front.pages.ganesh.competition.live-competition', compact('GaneshCompetitions'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request->all());

        // $user = User::findOwhererFail($request->user_id);
        $user = User::find(Auth::id());
        
        // dd($user);
        if(!$user){
            return redirect()->back()->with('error', 'User Registration is Required for Voting.');
        }

        // Find the competition category
        // $competitionCategory = GaneshCompetitionCategory::findOrFail($request->category_id);
        // return '1';
        
        $participant = GaneshCompetition::findOrFail($request->participant_id);
        // dd($participant);

        $existingVote = CompetitionVote::where('user_id', Auth::id())
        ->where('competition_category_id', $request->category_id)
        ->first();

        // dd($existingVote);

    if ($existingVote) {
        return redirect()->back()->with('error', 'You have already voted for this category.');
    }


        // Create a new vote
        $vote = new CompetitionVote();
        $vote->user()->associate($user);
        // $vote->ganeshCompetitionCategory()->associate($competitionCategory->id);
        $vote->competition_id = $request->competitionId;
        $vote->competition_category_id = $request->category_id;
        $vote->competition_id = $request->participant_id;
        

        $vote->votable_id = $request->votable_id;

        $vote->votable_type = Group::class;

    
        // Save the vote
        $vote->save();
        return redirect()->back()->with('success', 'Voted Successfully.');
    
        return $vote;

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
