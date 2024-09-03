<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\Group;
use App\Models\GaneshCompetitionCategory;
use App\Models\GaneshCompetition;
use App\Models\CompetitionVote;
use App\Models\User;

use Illuminate\Support\Facades\Auth;
use DB;


class GaneshCompetitionApi extends Controller
{

    

    public function getGaneshCompetition($cid, $userId = null){

        // $userId = Auth::id(); // Example: Get currently authenticated user ID
        // return $userId;

    if($cid == null || $cid == 1){
        
        $GaneshCompetitions = GaneshCompetition::with(['participant', 'votes'])
    ->withCount('votes')
    ->withCount(['votes as is_voted' => function ($query) use ($userId) {
        $query->where('user_id', $userId);
    }])
    ->where('competition_type', '1-2')
    ->whereHas('participant')
    ->get();
    

    
    
    $userVoted = CompetitionVote::where(['competition_category_id' => $cid, 'user_id' => $userId]) ->first();

    return response()->json([
        'competitions' => $GaneshCompetitions,
        'user_voted' => $userVoted
    ]);

    }

    elseif ($cid == 2) {
        $GaneshCompetitions = GaneshCompetition::where('competition_type', $cid)
        ->whereHas('participant')  // Only include records where 'participant' relationship is not null
        ->with('participant')
        ->get();
        return response()->json($GaneshCompetitions);
    }
}

public function storeCompetitionVote(Request $request){
    $user = User::find($request->userId);
    // dd($request->participantId);

    if(!$user){
        return response()->json([
            'status' => false,
            'message' => 'Something went wrong. please try again.'
        ]);
    }

    // Find the competition category
    // $competitionCategory = GaneshCompetitionCategory::findOrFail($request->category_id);
    // return '1';

    $participant = GaneshCompetition::where('participant_id', $request->participantId)->firstOrFail();
    // dd($participant);
    if(!$participant){
        return response()->json([
            'status' => false,
            'message' => 'Something went wrong. please try again.'
        ]);
    }



    $existingVote = CompetitionVote::where('user_id', $request->userId)
    ->where('competition_category_id', $request->categoryId)
    ->first();

    // dd($existingVote);

if ($existingVote) {
    return response()->json([
        'status' => false,
        'message' => 'You have already voted for this category.'
    ]);
}

    // Create a new vote
    $vote = new CompetitionVote();
    $vote->user()->associate($user);
    // $vote->ganeshCompetitionCategory()->associate($competitionCategory->id);
    $vote->competition_category_id = $request->categoryId;
    $vote->competition_id = $request->competitionId;

    $vote->votable_id = $request->participantId;
    $vote->votable_type = Group::class;

    // Save the vote
    $vote->save();
     
    return response()->json([
        'status' => true,
        'message' => 'Voted Successfully.'
    ]);
    

    return $vote;
}

}