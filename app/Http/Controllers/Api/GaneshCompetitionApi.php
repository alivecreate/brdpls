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
        // dd($cid);
       
        $query = GaneshCompetition::with(['participant', 'votes'])
        ->withCount('voteCategory1 as votes_count')
        ->withCount(['votes as is_voted' => function ($query) use ($userId, $cid) {
            $query->where('user_id', $userId);
            $query->where('competition_category_id', $cid);
        }])
        ->where('competition_type', '1-2')
        ->whereHas('participant');
       
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


    public function getGaneshCompetition($userId = null){
        
    $GaneshCompetitions = GaneshCompetition::with(['participant', 'votes'])
    ->withCount('votes as votes_count')

    ->withCount(['votes as is_voted' => function ($query) use ($userId) {
        $query->where('user_id', $userId)
              ->where('competition_category_id', 1);
    }])
    ->where('competition_type', '1-2')
    ->where('status', 'active')
    ->whereHas('participant')
    ->with('participant')
    ->get();

    $userVoted = CompetitionVote::where(['competition_category_id' => 1, 'user_id' => $userId]) ->first();
    $user = User::find($userId);

    return response()->json([
        'competitions' => $GaneshCompetitions,
        'user_voted' => $userVoted,
        'user' => $user
    ]);

    
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

    // dd($request->categoryId);

    $result = $this->getCompetitions($user->id, $request->categoryId, true, 'Voted Successfully.');

    // dd($result);
    
    return response()->json($result);

     
    return response()->json([
        'status' => true,
        'message' => 'Voted Successfully.'
    ]);
    

    return $vote;
}



// competition 2



public function getGaneshCompetition2($userId = null){

    // $GaneshCompetitions = GaneshCompetition::with(['participant', 'votes'])
    // ->withCount('voteCategory2 as votes_count')

    // ->withCount(['votes as is_voted' => function ($query) use ($userId) {
    //     $query->where('user_id', $userId)
    //           ->where('competition_category_id', 2);
    // }])
    
    // ->whereHas('participant')
    // ->where('competition_type', '1-2')
    // ->get();

    $GaneshCompetitions = Group::join('group_competitions', 'groups.id', '=', 'group_competitions.group_id')
    ->where('group_competitions.status', 'active')
    ->select('groups.*') // Select the fields you need from groups
    ->get();

    
    $userVoted = CompetitionVote::where(['competition_category_id' => 2, 'user_id' => $userId]) ->first();

    return response()->json([
        'competitions' => $GaneshCompetitions,
        'user_voted' => $userVoted
    ]);
    }

    
public function storeCompetitionVote2(Request $request){
    $user = User::find($request->userId);

    if(!$user){
        return response()->json([
            'status' => false,
            'message' => 'Something went wrong. please try again.'
        ]);
    }

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
    $vote->competition_category_id = 2;
    $vote->competition_id = $request->competitionId;

    $vote->votable_id = $request->participantId;
    $vote->votable_type = Group::class;

    // Save the vote
    $vote->save();

    $result = $this->getGaneshCompetition2($user->id);

    // dd($result);
    
    
$resultData = $result->getData(true);

// Merge the status and message with the result array
$mergedResult = array_merge($resultData, [
    'status' => true,
    'message' => 'Voted Successfully.'
]);

return response()->json($mergedResult);

}

}
