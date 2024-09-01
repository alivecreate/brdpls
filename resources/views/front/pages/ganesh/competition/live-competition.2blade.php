
@extends('front.layout.ganesh-festival-layout')


@section('custom-script')
  @if (session('error'))
  
      <script>
          toastr.error('{{ session('error') }}');
        </script>
  @endif

  @if (session('success'))
      <script>
          toastr.success('{{ session('success') }}');
        </script>
  @endif
@endsection


@section('content')
<!-- main contents -->
    <main id="site__main" class="2xl:ml-[--w-side]  xl:ml-[--w-side-sm] 2xl:ml-[--w-side]  xl:ml-[--w-side-sm] h-[calc(100vh-var(--m-top))] mt-[--m-top] p-6">

            
<div class="2xl:max-w-[1220px] max-w-[1065px] mx-auto lg:mt-2 mt-6">


    <div class="page-heading">
        
        <h1 class="page-title"> ગણેશ સ્પર્ધા </h1>
        <nav class="nav__underline">
            <ul class="group" uk-switcher="connect: #group-tabs ; animation: uk-animation-slide-right-medium, uk-animation-slide-left-medium"> 
                <li> <a href="#" >શ્રેષ્ઠ મૂર્તિ  ({{getTotalCategoryGroup('1-2')}})</a> </li>
                <li> <a href="#" >શ્રેષ્ઠ ડેકોરેશન ({{getTotalCategoryGroup('1-2')}})</a> </li>
                <li> <a href="#"> ઘરની બેસ્ટ મૂર્તિ</a> </li>
            </ul> 
        </nav>
    </div>

    <div class="uk-switcher" id="group-tabs">
        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 p-1 gap-4">

        @foreach($GaneshCompetitions as $GaneshCompetition)

                <div class="card mb-2">
                    <a href="{{route('ganeshFestivalGroup.show', $GaneshCompetition->participant->slug)}}">
                        <div class="card-media h-40">

                        <img 
                            src="{{ optional($GaneshCompetition->participant)->cover 
                                ? 'https://imagedelivery.net/zfs38w7w3E1dJVvB3mVs9g/' . $GaneshCompetition->participant->cover . '/sm' 
                                : asset('front/images/product/product-1.jpg') }}" 
                            alt="">

                            <div class="card-overly"></div>
                        </div>
                    </a> 
                    

                    <div class="card-body">
                        <a href="{{route('ganeshFestivalGroup.show', $GaneshCompetition->participant->slug)}}"> <h4 class="card-title"> {{$GaneshCompetition->participant->name}} </h4></a> 
                        <div class='flex'>
                                        <ion-icon class='text-md live-d-icon' name="location-outline"></ion-icon>
                        <p class="text-sm"> {{$GaneshCompetition->participant->address}}</p>
                                    </div>
                        <div class="card-text"> 
                            <div class="card-list-info font-normal mt-1 bg-voting">

                                <div class='font-bold text-danger text-xl'>Total Votes: </div>
                                    <a class='font-bold text-danger text-xl' href="#">{{$GaneshCompetition->countVote($GaneshCompetition->id, 1)}} </a> 
                                </div>

                        </div>

                            <form method="post" action="{{route('FestivalCompetitionVoting.store')}}">
                                @csrf
                                <input type="hidden" name="participant_id" value="{{$GaneshCompetition->id}}"/>
                                <input type="hidden" name="category_id" value="1" />
                                <input type="hidden" name="votable_id" value="{{$GaneshCompetition->participant->id}}" />


                                <div class="flex gap-2">
                                    
                                    @if(isVoted($GaneshCompetition->id, 1) && isVoted($GaneshCompetition->id, 1)->votable_id == $GaneshCompetition->participant->id)
                                        <p class="button text-lg bg-success text-white flex-1 btn-not-allowed"><ion-icon name="thumbs-up-outline"></ion-icon> Voted</p>
                                    @elseif(isVoted($GaneshCompetition->id, 1))
                                        <button class="button text-lg bg-primary text-white flex-1 btn-voting-disable btn-not-allowed" ><ion-icon name="thumbs-up-outline"></ion-icon> Vote Now</button>
                                    @else
                                        <p class="button text-lg bg-primary text-white flex-1 btn-voting-disable" disabled><ion-icon name="thumbs-up-outline"></ion-icon> Vote Now</p>
                                    @endif

                                    <a href="{{route('ganeshFestivalGroup.show', $GaneshCompetition->participant->slug)}}" class="button text-lg bg-secondery !w-auto"><ion-icon name="eye-outline"></ion-icon> View</a> 
                                </div>
                            </form>
                    </div>
                </div>
            @endforeach
            

        </div>

        

        <div class="grid lg:grid-cols-4 md:grid-cols-2 sm:grid-cols-2 grid-cols-1 p-1 gap-4">
            <div class="card mb-2">
                <a href="{{route('ganeshFestivalGroup.show', 1)}}">
                    <div class="card-media h-40">
                        <img src="{{asset('front')}}/images/product/product-1.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a> 
                <div class="card-body">
                    <a href="{{route('ganeshFestivalGroup.show', 1)}}"> <h4 class="card-title">  Graphic Design </h4></a> 
                    <div class="card-text"> 
                        <div class="card-list-info font-normal mt-1">
                           <div>232k members </div>
                            <div class="md:block hidden">·</div>
                            <a href="#">  Education </a> 
                        </div> 
                        <div class="flex items-center gap-3 mt-3">
                            <div class="flex -space-x-2">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                            </div>
                            <p class="card-text"> 6 friend are members </p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">Follow</button>
                        <a href="{{route('ganeshFestivalGroup.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <a href="{{route('ganeshFestivalGroup.show', 1)}}">
                    <div class="card-media h-40">
                        <img src="{{asset('front')}}/images/product/product-2.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a> 
                <div class="card-body">
                    <a href="{{route('ganeshFestivalGroup.show', 1)}}"> <h4 class="card-title"> Delicious Foods  </h4></a> 
                    <div class="card-text"> 
                        <div class="card-list-info font-normal mt-1">
                           <div>232k members </div>
                            <div class="md:block hidden">·</div>
                            <a href="#">  Education </a> 
                        </div> 
                        <div class="flex items-center gap-3 mt-3">
                            <div class="flex -space-x-2">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                            </div>
                            <p class="card-text"> 8 friend are members </p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">Follow</button>
                        <a href="{{route('ganeshFestivalGroup.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <a href="{{route('ganeshFestivalGroup.show', 1)}}">
                    <div class="card-media h-40">
                        <img src="{{asset('front')}}/images/product/product-4.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a> 
                <div class="card-body">
                    <a href="{{route('ganeshFestivalGroup.show', 1)}}"> <h4 class="card-title"> Delicious Foods  </h4></a> 
                    <div class="card-text"> 
                        <div class="card-list-info font-normal mt-1">
                           <div>232k members </div>
                            <div class="md:block hidden">·</div>
                            <a href="#">  Education </a> 
                        </div> 
                        <div class="flex items-center gap-3 mt-3">
                            <div class="flex -space-x-2">
                                <img src="{{asset('front')}}/images/avatars/avatar-4.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                            </div>
                            <p class="card-text"> 12 friend are members </p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">Follow</button>
                        <a href="{{route('ganeshFestivalGroup.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                    </div>
                </div>
            </div>
            <div class="card mb-2">
                <a href="{{route('ganeshFestivalGroup.show', 1)}}">
                    <div class="card-media h-40">
                        <img src="{{asset('front')}}/images/product/product-3.jpg" alt="">
                        <div class="card-overly"></div>
                    </div>
                </a> 
                <div class="card-body">
                    <a href="{{route('ganeshFestivalGroup.show', 1)}}"> <h4 class="card-title"> Abstract minimal </h4></a> 
                    <div class="card-text"> 
                        <div class="card-list-info font-normal mt-1">
                           <div>Total Votes: </div>
                            <div class="md:block hidden">·</div>
                            <a href="#">  500 </a> 
                        </div> 
                        <div class="flex items-center gap-3 mt-3">
                            <div class="flex -space-x-2">
                                <img src="{{asset('front')}}/images/avatars/avatar-2.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-3.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                                <img src="{{asset('front')}}/images/avatars/avatar-7.jpg" alt="" class="w-6 rounded-full border-2 border-white dark:border-slate-800">
                            </div>
                            <p class="card-text"> 3 friend are members </p>
                        </div>
                    </div>
                    <div class="flex gap-2">
                        <button type="button" class="button bg-primary text-white flex-1">Follow</button>
                        <a href="{{route('ganeshFestivalGroup.show', 1)}}" class="button bg-secondery !w-auto"> View</a> 
                    </div>
                </div>
            </div>

        </div>


    </div>

    
</div>


</main>

</div>

@endsection