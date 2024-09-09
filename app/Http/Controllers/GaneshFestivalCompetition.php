<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Group;
use App\Models\GaneshCompetitionCategory;
use App\Models\GaneshCompetition;

use Illuminate\Support\Str;
use App\Models\User;
use App\Models\Post;

use Auth;

class GaneshFestivalCompetition extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('test');
        
        if(checkCompetitionSchedule()['status'] == 'scheduled'){
            return redirect()->route('ganeshFestivalGroup.index')->with('success', 'Voting is not started now.');
        }

        $groups = Group::orderBy('name', 'asc')->get();
        // dd($groups);
        return view('front.pages.ganesh.competition.list', compact('groups'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        // dd($request->all());

        if(!Auth::check()){
            return redirect('registration')->with('error', 'Please Create User Account First.');
        }

        $type = request()->query('type');
        // dd($type);

        

        $groups = Group::orderBy('name', 'asc')->get();
        $group = Group::where('user_id', Auth::id())->first();
        // dd($group);
        
        $ganeshCompetitionCategories = GaneshCompetitionCategory::get();
        if($group){
            // dd('grp available');

            $competition = GaneshCompetition::where(['participant_id' => $group->id])->first();
            return redirect()->route('ganeshCompetitionPaymentCreate', ['type' => 'group']);
            if($competition){
                return view('front.pages.ganesh.competition.create', compact('groups', 'group', 'type', 'ganeshCompetitionCategories', 'competition'));
            }
        }
        else{
            
        $homeCompetition = GaneshCompetition::where(['participant_id' => Auth::id()])->first();

        if($homeCompetition){
            
        // dd($homeCompetition);
        
            return redirect()->route('ganeshCompetitionPaymentCreate', ['type' => 'home'])->with('success', 'Ganesh Competition Registeration Successfully.');
        }
            
        // return redirect('')

        }
        
        $competition = null;

// dd('create');
        
        return view('front.pages.ganesh.competition.create', compact('groups', 'group', 'type', 'ganeshCompetitionCategories', 'competition'));
        
        // dd($competition);
        

        return view('front.pages.ganesh.competition.create', compact('groups', 'group', 'type', 'ganeshCompetitionCategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
// dd( $request->all());



$competition = GaneshCompetition::where('participant_id', $request->participant_id)
->where('competition_type', $request->competition_type)
->first();

$participant = Group::where(['id' => $request->participant_id, 'user_id' => Auth::id()])->first(); // Replace with actual group ID

if($participant && !$competition)
{
    GaneshCompetition::create([
        'competition_type' => $request->competition_type,
        'name' =>  null,
        'status' => 'pending',
        'participant_id' => $participant->id,
        'participant_type' => Group::class,
    ]);

    return redirect()->route('ganeshCompetitionPaymentCreate', ['type'=>'group'])->with('success', 'Ganesh Competition Registered Successfully');
}

return redirect()->back()->with('error', 'Something went wrong, please try again.');



$participantId = $request->participant_id;
$participantType = $request->participant_type; // Should be 'user' or 'group'

// Validate participant_type to ensure it is either 'user' or 'group'
if (!in_array($participantType, ['1-2', '3'])) {
    return response()->json(['message' => 'Invalid participant type.'], 400);
}

// Check if a participant is already assigned to this competition
if ($competition->participant_id && $competition->participant_type) {
    return response()->json(['message' => 'This competition already has a participant.'], 400);
}

// Validate the participant ID based on the type
if ($participantType === '1-2') {
    $exists = Group::find($participantId);
} elseif ($participantType === '3') {
    $exists = User::find($participantId);
}

if (!$exists) {
    return response()->json(['message' => 'Participant does not exist.'], 404);
}

// Assign participant to the competition
$competition->participant_id = $participantId;
$competition->participant_type = $participantType;
$competition->save();

return response()->json(['message' => 'Participant added to competition successfully!']);




// $competition = GaneshCompetition::findOrFail($request->group_id);

    // dd($competition);

        if($request->competition_type == '1-2'){
            $participant = Group::where(['id' => $request->group_id, 'user_id' => Auth::id()])->first(); // Replace with actual group ID
           

            if($participant){
                // $checkIfParticipated = GaneshCompetition::find

                GaneshCompetition::create([
                    'competition_type' => $request->competition_type,
                    'name' =>  null,
                    'status' => 'pending',
                    'participant_id' => $participant->id,
                    'participant_type' => Group::class,
                ]);
            }
            else{        
                return redirect()->back()->with('error', 'Something went wrong, please try again.');
            }
        }
        // dd($request->all());
    }

    public function storeHomeGaneshCompetition(Request $request){
        

$competition = GaneshCompetition::where('participant_id', $request->participant_id)
->where('competition_type', $request->competition_type)
->first();

// dd($request->all());

if(!$competition){
   $ganeshCompetition =  GaneshCompetition::create([
        'competition_type' => $request->competition_type,
        'name' =>  $request->name,
        'status' => 'pending',
        'participant_id' => $request->participant_id,
        'participant_type' => User::class,
    ]);
    
    return redirect()->route('ganeshCompetitionPaymentCreate', ['type' => 'home'])->with('success', 'Ganesh Competition Registeration Successfully.');

}

return redirect()->back()->with('error', 'Something went wrong, please try again.');

    }
    
    public function live(Request $request)
    {

        // dd($request->all());
        $cid = $request->cid;
        
        // dd(checkCompetitionSchedule()['status'] == 'scheduled');
        if(checkCompetitionSchedule()['status'] == 'scheduled'){
            return redirect()->route('ganeshFestivalGroup.index')->with('success', 'Voting is not started now.');

        }
        $cid = $request->query('cid');

        if($cid == null || $cid == 1){
            

            $GaneshCompetitions = GaneshCompetition::where(
                [
                    'status' => 'active',
                    'competition_type' => '1-2'
                ])->orderBy('id', 'desc')
            ->get();

            // dd($GaneshCompetitions);

        $user = User::find(Auth::id());
            
            return view('front.pages.ganesh.competition.live-competition', compact('GaneshCompetitions', 'user'));
        }

        elseif ($cid == 2) {
            // dd($cid);

            $GaneshCompetitions = GaneshCompetition::where(
                [
                    'status' => 'active',
                    'competition_type' => '1-2'
                ])
                ->whereHas('participant')
                ->orderBy('id', 'desc')
            ->get();
            

        $user = User::find(Auth::id());
                        return view('front.pages.ganesh.competition.live-competition2', compact('GaneshCompetitions', 'user'));
                    }

                    elseif ($cid == 3) {
            // dd($cid);
            

            $GaneshCompetitions = GaneshCompetition::where(
                [
                    'status' => 'active',
                    'competition_type' => '3',
                ])
                ->orderBy('id', 'desc')
            ->get();
            
                        
        $user = User::find(Auth::id());
                        return view('front.pages.ganesh.competition.live-competition3', compact('GaneshCompetitions', 'user'));
                    }

        // dd($cid);

        
        // dd($cid);
        return redirect()->route('GaneshFestivalCompetitionLive');
        
    }

    
    public function rules()
    {
        return view('front.pages.ganesh.competition.rules');
    }

    public function payment()
    {
        return view('front.pages.ganesh.competition.payment');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    
    public function showHome(string $id)
    {

        // dd($id);
        $homeGanesh = GaneshCompetition::where('id', $id)->first();
        if(!$homeGanesh){
            return redirect()->route('index');
        }

        // $userAccount = User::find('')
        $posts = Post::where('user_id', $homeGanesh->participant_id)->orderBy('id', 'desc')->get();
        // dd($posts);
        $user = User::find(Auth::id());
        
        if($homeGanesh){
            return view('front.pages.ganesh.group.home-ganesh-show', compact('homeGanesh', 'user', 'posts'));
        }
        return redirect('ganesh-festival');
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