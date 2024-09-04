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

    private function getCompetitions($userId, $cid, $status, $message)
    {
        // Initialize the query
        $query = GaneshCompetition::with(['participant', 'votes'])
            ->withCount('votes')
            ->withCount(['votes as is_voted' => function ($query) use ($userId, $cid) {
                $query->where('user_id', $userId);

                // Add condition for competition_category_id if $cid is 2
                if ($cid == 1) {
                    $query->where('competition_category_id', 1);
                }
                
                if ($cid == 2) {
                    $query->where('competition_category_id', 2);
                }
                
                if ($cid == 3) {
                    $query->where('competition_category_id', 3);
                }
            }])
            ->where('competition_type', '1-2')
            ->whereHas('participant');

        // Execute the query and get results
        $GaneshCompetitions = $query->get();

        // Fetch the user's vote information
        $userVoted = CompetitionVote::where([
            'competition_category_id' => $cid,
             'user_id' => $userId
             ])->first();

        
        return [
            'competitions' => $GaneshCompetitions,
            'user_voted' => $userVoted,
            'status' => $status,
            'message' => $message
        ];
        
    }

    public function getGaneshCompetition($cid, $userId = null){

        // $userId = Auth::id(); // Example: Get currently authenticated user ID
        // return $cid;

    if($cid == null || $cid == 1){
        
        $GaneshCompetitions = GaneshCompetition::with(['participant', 'votes'])
    ->withCount('voteCategory1 as votes_count')
    ->withCount(['votes as is_voted' => function ($query) use ($userId) {
        $query->where('user_id', $userId);
        $query->where('competition_category_id', 1);
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

    $GaneshCompetitions = GaneshCompetition::with(['participant', 'votes'])
    // ->withCount('votes')
    // ->withCount('voteCategory2 as votes')
    ->withCount('voteCategory2 as votes_count')

    ->withCount(['votes as is_voted' => function ($query) use ($userId) {
        $query->where('user_id', $userId)
              ->where('competition_category_id', 2);
    }])
    
    ->where('competition_type', '1-2')
    ->whereHas('participant')
    ->get();



        // $GaneshCompetitions = GaneshCompetition::where('competition_type', '1-2')
        // ->whereHas('participant')  // Only include records where 'participant' relationship is not null
        // ->with('participant')
        // ->get();
        
    
    $userVoted = CompetitionVote::where(['competition_category_id' => $cid, 'user_id' => $userId]) ->first();

    return response()->json([
        'competitions' => $GaneshCompetitions,
        'user_voted' => $userVoted
    ]);

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


    $result = $this->getCompetitions($user->id, $request->categoryId, true, 'Voted Successfully.');

    return response()->json($result);

     
    return response()->json([
        'status' => true,
        'message' => 'Voted Successfully.'
    ]);
    

    return $vote;
}

}